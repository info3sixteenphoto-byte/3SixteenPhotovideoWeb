<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Client Dashboard — 3Sixteen Photo Cinema</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <style>
    body { 
      background-color: #FAFAF8; 
      color: #2D2D2D; 
      font-family: Montserrat, sans-serif;
      letter-spacing: 0.3px;
    }
    .font-serif { font-family: "Cormorant Garamond", serif; font-weight: 300; letter-spacing: 1px; }
    .font-serif-medium { font-family: "Cormorant Garamond", serif; font-weight: 400; }
    .text-sm-caps { font-size: 0.65rem; letter-spacing: 2px; text-transform: uppercase; font-weight: 600; }
  </style>
</head>
<body class="antialiased">

  <!-- HEADER -->
  <header class="border-b border-gray-300 bg-white sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <div>
        <span class="font-serif-medium text-xl tracking-widest">3SIXTEEN</span>
        <p class="text-xs text-gray-600 mt-1">Account: <strong>{{ $client['name'] }}</strong> ({{ $client['session_type'] }})</p>
      </div>
      <form action="{{ route('client.logout') }}" method="POST">
        @csrf
        <button type="submit" class="px-4 py-2 border border-gray-300 text-xs uppercase tracking-wider hover:bg-gray-50 transition">Logout</button>
      </form>
    </div>
  </header>

  <main class="max-w-6xl mx-auto px-6 py-12 space-y-12">

    <!-- 1. PROGRESS TRACKING -->
    <section class="bg-gray-100 border border-gray-300 p-8">
      <h2 class="font-serif text-3xl mb-6">Your Project Progress</h2>
      <div class="grid grid-cols-1 md:grid-cols-5 gap-3">
        @foreach ($stages as $i => $stageName)
          @php $done = $i <= ($client['stage_index'] ?? 1); @endphp
          <div class="p-4 border {{ $done ? 'bg-gray-900 text-white border-gray-900' : 'bg-white text-gray-700 border-gray-300' }} text-center">
            <span class="text-[10px] uppercase tracking-widest block">Stage {{ $i + 1 }}</span>
            <span class="text-xs font-medium mt-1 block">{{ $stageName }}</span>
          </div>
        @endforeach
      </div>
      <p class="text-xs text-gray-600 mt-6">
        <strong>Internal Notes:</strong> {{ $client['internal_rundown'] ?? 'Set by 3Sixteen team.' }}
      </p>
    </section>

    <!-- 2. EVENT DETAILS -->
    <section class="grid md:grid-cols-2 gap-8">
      <div class="bg-gray-50 border border-gray-300 p-6">
        <h3 class="font-serif-medium text-2xl mb-4">Event Details</h3>
        <div class="space-y-3 text-sm">
          <div>
            <p class="text-xs text-gray-600">Session Type</p>
            <p class="font-medium">{{ $client['session_type'] }}</p>
          </div>
          <div>
            <p class="text-xs text-gray-600">Event Date</p>
            <p class="font-medium">{{ $client['event_date'] ?? 'TBD' }}</p>
          </div>
          <div>
            <p class="text-xs text-gray-600">Location</p>
            <p class="font-medium">{{ $client['event_location'] ?? 'To be confirmed' }}</p>
          </div>
        </div>
      </div>

      <div class="bg-gray-50 border border-gray-300 p-6">
        <h3 class="font-serif-medium text-2xl mb-4">Contact Information</h3>
        <div class="space-y-3 text-sm">
          <div>
            <p class="text-xs text-gray-600">Primary Contact</p>
            <p class="font-medium">{{ $client['partner_one_name'] }}</p>
            <p class="text-xs text-gray-500">{{ $client['partner_one_whatsapp'] }}</p>
          </div>
          @if ($client['partner_two_name'])
            <div>
              <p class="text-xs text-gray-600">Partner</p>
              <p class="font-medium">{{ $client['partner_two_name'] }}</p>
              <p class="text-xs text-gray-500">{{ $client['partner_two_whatsapp'] }}</p>
            </div>
          @endif
        </div>
      </div>
    </section>

    <!-- 3. PHOTO SELECTION -->
    <section>
      <div class="flex flex-wrap items-end justify-between gap-4 mb-6">
        <div>
          <h2 class="font-serif text-3xl mb-2">Photo Gallery & Selection</h2>
          <p class="text-xs text-gray-600">Choose which photos to include in editing and your album.</p>
        </div>
        <div class="text-xs bg-gray-50 border border-gray-300 px-4 py-2">
          Selected for Edit: <strong>{{ collect($photos)->where('edit', true)->count() }}</strong> &nbsp;|&nbsp;
          Selected for Album: <strong>{{ collect($photos)->where('album', true)->count() }}</strong>
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        @foreach ($photos as $photo)
          <div class="bg-gray-50 border border-gray-300 p-4 flex flex-col justify-between">
            <div>
              <p class="text-[11px] text-gray-600 mb-1">{{ $photo['code'] }}</p>
              <h3 class="font-serif-medium text-lg">{{ $photo['title'] }}</h3>
            </div>
            <div class="mt-4 pt-3 border-t border-gray-300 flex gap-2">
              <form action="{{ route('client.photo.toggle') }}" method="POST" class="flex-1">
                @csrf
                <input type="hidden" name="photo_id" value="{{ $photo['id'] }}" />
                <input type="hidden" name="type" value="edit" />
                <button type="submit" class="w-full py-2 text-[11px] uppercase tracking-wider border {{ $photo['edit'] ? 'bg-gray-900 text-white border-gray-900' : 'bg-white text-gray-900 border-gray-300' }} hover:bg-gray-100 transition">
                  {{ $photo['edit'] ? '✓ Edit' : '+ Edit' }}
                </button>
              </form>
              <form action="{{ route('client.photo.toggle') }}" method="POST" class="flex-1">
                @csrf
                <input type="hidden" name="photo_id" value="{{ $photo['id'] }}" />
                <input type="hidden" name="type" value="album" />
                <button type="submit" class="w-full py-2 text-[11px] uppercase tracking-wider border {{ $photo['album'] ? 'bg-gray-700 text-white border-gray-700' : 'bg-white text-gray-900 border-gray-300' }} hover:bg-gray-100 transition">
                  {{ $photo['album'] ? '✓ Album' : '+ Album' }}
                </button>
              </form>
            </div>
          </div>
        @endforeach
      </div>
    </section>

    <!-- 4. DOWNLOADS & PAYMENT -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <div class="bg-gray-50 border border-gray-300 p-6">
        <h2 class="font-serif-medium text-2xl mb-3">Download Your Files</h2>
        <p class="text-xs text-gray-600 mb-4">Your download links will be active once your project reaches the "Ready to Download" stage.</p>
        <div class="p-4 bg-white border border-gray-300 text-xs text-gray-600">
          Your edited photos and gallery will be available here after the 3Sixteen team completes the editing and album layout phase.
        </div>
      </div>

      <div class="bg-gray-50 border border-gray-300 p-6">
        <h2 class="font-serif-medium text-2xl mb-3">Payment Status</h2>
        <p class="text-xs text-gray-600 mb-4">
          Status: <strong>{{ $client['payment_status'] }}</strong>
        </p>

        <div class="mb-4 p-4 bg-white border border-gray-300 text-xs">
          <p class="font-medium mb-1">Bank Transfer Details:</p>
          <p class="text-gray-600">{{ env('STUDIO_BANK_NAME', 'BCA KCU Bogor') }}</p>
          <p class="text-gray-600">a.n. {{ env('STUDIO_BANK_HOLDER', 'Geraldy Antonius') }}</p>
          <p class="text-gray-500 text-[11px] mt-2">Contact admin for account number</p>
        </div>

        @if (session('payment_notice'))
          <div class="mb-4 p-3 bg-green-50 border border-green-200 text-xs text-green-700">
            ✓ {{ session('payment_notice') }}
          </div>
        @endif

        <form action="{{ route('client.payment.confirm') }}" method="POST" class="flex gap-2">
          @csrf
          <input 
            type="text" 
            name="transfer_note" 
            placeholder="Transfer note / payment date (e.g., BCA 23/11/2026)" 
            required 
            class="flex-1 border border-gray-300 bg-white px-3 py-2 text-xs focus:outline-none focus:ring-2 focus:ring-gray-900"
          />
          <button type="submit" class="px-4 py-2 bg-gray-900 text-white text-xs uppercase tracking-wider hover:bg-gray-800 transition">
            Confirm Payment
          </button>
        </form>
      </div>
    </section>

  </main>

  <!-- FOOTER -->
  <footer class="bg-gray-900 text-gray-300 py-12 border-t border-gray-800 mt-16">
    <div class="max-w-7xl mx-auto px-6 text-center text-xs text-gray-500">
      <p>3Sixteen Photo Cinema © 2026 — Questions? Contact us on {{ env('STUDIO_WHATSAPP', '+6287770860661') }}</p>
    </div>
  </footer>

</body>
</html>
