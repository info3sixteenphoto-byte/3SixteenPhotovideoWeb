# Deploy 3Sixteen ke Koyeb

## Yang bisa diselesaikan sebelum akun disetujui

- Siapkan repository GitHub yang berisi folder proyek ini.
- Pastikan branch utama berisi `Dockerfile` dan `docker-entrypoint.sh`.
- Buat bucket privat di Backblaze B2.
- Buat application key B2 yang hanya dapat mengakses bucket tersebut.
- Siapkan domain dan DNS bila ingin memakai domain studio.

## Cara deploy setelah Koyeb aktif

1. Di Koyeb, pilih **Create Service** dan hubungkan repository GitHub.
2. Pilih deployment dengan **Dockerfile**.
3. Atur instance ke **Free**.
4. Pilih region paling dekat dengan pengguna, misalnya Singapore bila tersedia.
5. Gunakan port **8080**.
6. Tambahkan secret dan environment variable berikut.

```env
APP_NAME=3Sixteen Photo Cinema
APP_ENV=production
APP_DEBUG=false
APP_KEY=
APP_URL=https://URL-KOYEB-ANDA

LOG_CHANNEL=stderr
LOG_LEVEL=warning
SESSION_DRIVER=file
FILESYSTEM_DISK=b2

DB_CONNECTION=pgsql
DB_HOST=db.rjgcgebjwivnhgrakomr.supabase.co
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=
DB_SSLMODE=require

B2_APPLICATION_KEY_ID=
B2_APPLICATION_KEY=
B2_BUCKET=
B2_REGION=
B2_ENDPOINT=
B2_USE_PATH_STYLE_ENDPOINT=true
```

Nilai `APP_KEY` harus dibuat oleh Laravel dengan format `base64:...`. Buat
melalui `php artisan key:generate --show`, tetapi jangan simpan hasilnya dalam
repository. Masukkan hasil tersebut sebagai secret Koyeb.

`DB_PASSWORD` adalah password database Supabase. Masukkan nilainya langsung
sebagai secret Koyeb dan jangan kirim atau commit ke repository. Host database
di atas memakai koneksi direct project `rjgcgebjwivnhgrakomr` di region
`ap-south-1`. Konfigurasi ini mewajibkan SSL.

`B2_REGION` dan `B2_ENDPOINT` harus sama persis dengan data endpoint bucket
Backblaze. Bucket sebaiknya tetap privat; akses file klien memakai URL unduhan
sementara, bukan URL publik permanen.

## Tahap validasi setelah deploy

1. Pastikan halaman `/` berhasil dibuka.
2. Uji registrasi dan login demo.
3. Uji portal dan pemilihan foto.
4. Periksa log Koyeb; tidak boleh ada kredensial yang tercetak.
5. Masukkan domain custom dan HTTPS setelah layanan berjalan.

## Penyimpanan data

Akun klien, rincian acara, pilihan foto, dan konfirmasi pembayaran disimpan di
Supabase PostgreSQL. Session hanya menyimpan ID klien yang sedang login, jadi data
tetap aman saat container Koyeb restart atau redeploy. Container menjalankan
migrasi database secara otomatis ketika proses startup berhasil terhubung.
