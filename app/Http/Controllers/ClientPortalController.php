<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientPhoto;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ClientPortalController extends Controller
{
    private const DEMO_PHOTOS = [
        ['code' => '316-IMG-001.JPG', 'title' => 'First Look — Morning Light', 'edit' => true, 'album' => true],
        ['code' => '316-IMG-002.JPG', 'title' => 'Vows & Quiet Moment', 'edit' => true, 'album' => false],
        ['code' => '316-IMG-003.JPG', 'title' => 'Editorial Portrait', 'edit' => false, 'album' => true],
        ['code' => '316-IMG-004.JPG', 'title' => 'Golden Hour Walk', 'edit' => false, 'album' => false],
    ];

    public function index(): View
    {
        $sessionTypes = [
            'Wedding',
            'Prewedding',
            'Sangjit / Engagement',
            'Birthday Party',
            'Maternity',
            'Family',
            'Lainnya',
        ];

        return view('welcome', compact('sessionTypes'));
    }

    public function register(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'partner_one_name' => ['required', 'string', 'max:120'],
            'partner_one_whatsapp' => ['required', 'string', 'max:30'],
            'partner_one_birthday' => ['nullable', 'date'],
            'partner_two_name' => ['nullable', 'string', 'max:120'],
            'partner_two_whatsapp' => ['nullable', 'string', 'max:30'],
            'partner_two_birthday' => ['nullable', 'date'],
            'email' => ['required', 'email', 'max:150', 'unique:clients,email'],
            'session_type' => ['required', 'string', 'max:80'],
            'session_other' => ['nullable', 'string', 'max:120', 'required_if:session_type,Lainnya'],
            'event_date' => ['nullable', 'date'],
            'event_location' => ['nullable', 'string', 'max:150'],
        ]);

        $generatedPassword = '316-' . strtoupper(Str::random(5));

        DB::transaction(function () use ($validated, $generatedPassword) {
            $client = Client::create([
                'name' => trim($validated['partner_one_name'] . (!empty($validated['partner_two_name']) ? ' & ' . $validated['partner_two_name'] : '')),
                'partner_one_name' => $validated['partner_one_name'],
                'partner_one_whatsapp' => $validated['partner_one_whatsapp'],
                'partner_one_birthday' => $validated['partner_one_birthday'] ?? null,
                'partner_two_name' => $validated['partner_two_name'] ?? null,
                'partner_two_whatsapp' => $validated['partner_two_whatsapp'] ?? null,
                'partner_two_birthday' => $validated['partner_two_birthday'] ?? null,
                'email' => strtolower($validated['email']),
                'password' => Hash::make($generatedPassword),
                'session_type' => $validated['session_type'] === 'Lainnya'
                    ? $validated['session_other']
                    : $validated['session_type'],
                'event_date' => $validated['event_date'] ?? null,
                'event_location' => $validated['event_location'] ?? 'Akan dikonfirmasi manajemen',
                'internal_rundown' => 'Menunggu pengaturan jadwal oleh tim manajemen 3Sixteen.',
                'stage_index' => 1,
                'payment_status' => 'Menunggu DP / Konfirmasi Transfer BCA KCU Bogor',
            ]);

            $client->photos()->createMany(self::DEMO_PHOTOS);
        });

        session(['registered_credentials' => [
            'email' => strtolower($validated['email']),
            'password' => $generatedPassword,
        ]]);

        return redirect('/#auth-access')->with(
            'status',
            'Registrasi berhasil. Gunakan Email dan Sandi di bawah untuk masuk ke Web Manajemen Klien.'
        );
    }

    public function login(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (
            strtolower($validated['email']) === 'klien@3sixteen.id'
            && $validated['password'] === '316DEMO'
        ) {
            $client = $this->demoClient();
        } else {
            $client = Client::query()
                ->where('email', strtolower($validated['email']))
                ->first();

            if (!$client || !Hash::check($validated['password'], $client->password)) {
                return back()->withErrors([
                    'login_error' => 'Email atau sandi belum sesuai.',
                ]);
            }
        }

        $request->session()->regenerate();
        session(['active_client_id' => $client->id]);

        return redirect()->route('client.dashboard');
    }

    public function dashboard(Request $request): View|RedirectResponse
    {
        $client = $this->authenticatedClient($request);

        if (!$client) {
            return redirect('/#auth-access');
        }

        $stages = [
            'Registrasi & Jadwal',
            'Sesi Foto / Acara',
            'Pemilihan Foto (Edit & Album)',
            'Proses Editing & Layout Album',
            'Siap Diunduh',
        ];
        $photos = $client->photos;

        return view('client-dashboard', compact('client', 'stages', 'photos'));
    }

    public function togglePhotoSelection(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'photo_id' => ['required', 'integer'],
            'type' => ['required', 'in:edit,album'],
        ]);
        $client = $this->authenticatedClient($request);

        if (!$client) {
            return redirect('/#auth-access');
        }

        try {
            $photo = ClientPhoto::query()
                ->where('client_id', $client->id)
                ->findOrFail($validated['photo_id']);
        } catch (ModelNotFoundException) {
            return redirect()->route('client.dashboard')
                ->withErrors(['photo' => 'Foto tidak ditemukan.']);
        }

        $photo->{$validated['type']} = !$photo->{$validated['type']};
        $photo->save();

        return redirect()->route('client.dashboard');
    }

    public function confirmPayment(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'transfer_note' => ['required', 'string', 'max:200'],
        ]);
        $client = $this->authenticatedClient($request);

        if (!$client) {
            return redirect('/#auth-access');
        }

        DB::transaction(function () use ($client, $validated) {
            $client->payments()->create([
                'transfer_note' => $validated['transfer_note'],
                'status' => 'pending_review',
            ]);
            $client->update([
                'payment_status' => 'Konfirmasi Transfer Dikirim (' . $validated['transfer_note'] . ')',
            ]);
        });

        return redirect()->route('client.dashboard')->with(
            'payment_notice',
            'Konfirmasi pembayaran ke BCA KCU Bogor telah dicatat untuk diperiksa tim 3Sixteen Photo Cinema.'
        );
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/#auth-access');
    }

    private function authenticatedClient(Request $request): ?Client
    {
        $clientId = $request->session()->get('active_client_id');

        if (!$clientId) {
            return null;
        }

        return Client::with('photos')->find($clientId);
    }

    private function demoClient(): Client
    {
        $client = Client::query()->firstOrCreate(
            ['email' => 'klien@3sixteen.id'],
            [
                'name' => 'Klien Demo 3Sixteen',
                'partner_one_name' => 'Klien Demo 3Sixteen',
                'partner_one_whatsapp' => '+620000000000',
                'password' => Hash::make('316DEMO'),
                'session_type' => 'Wedding',
                'event_date' => '2026-12-12',
                'event_location' => 'Bogor',
                'internal_rundown' => 'Diisi oleh tim manajemen 3Sixteen.',
                'stage_index' => 2,
                'payment_status' => 'Pengingat Pembayaran Aktif (BCA KCU Bogor)',
            ]
        );

        if (!$client->photos()->exists()) {
            $client->photos()->createMany(self::DEMO_PHOTOS);
        }

        return $client;
    }
}
