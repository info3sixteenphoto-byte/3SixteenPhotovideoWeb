# 3Sixteen Photo Cinema — Client Portal

A sophisticated Laravel-based client management portal for a professional photography studio. Features elegant editorial design inspired by high-end photographer websites with client account management, session tracking, photo selection, and payment confirmation.

## 🎨 Design Inspiration

The website aesthetic is inspired by **Sloane Mae's photography portal** — elegant, luxury, editorial-focused with:
- Minimal, sophisticated typography (Cormorant Garamond + Montserrat)
- Clean whitespace and subtle color palette
- Storytelling-focused content
- Editorial precision in layout and design

## 📁 Project Structure

```
3Sixteen/
├── app/
│   └── Http/
│       └── Controllers/
│           └── ClientPortalController.php    # Handles all client-side logic
├── routes/
│   └── web.php                               # Route definitions
├── resources/
│   └── views/
│       ├── welcome.blade.php                 # Homepage + unified auth/portal
│       └── client-dashboard.blade.php        # Client session management
├── config/
│   └── filesystems.php                       # Backblaze B2 S3-compatible disk
└── .env.example                              # Environment variables template
```

## 🚀 Features

### Homepage (`welcome.blade.php`)
- **Hero Section** — Elegant introduction with editorial messaging
- **About Section** — Studio philosophy & artistic approach
- **Offerings** — Weddings, Elopements, Portraits with detailed descriptions
- **Booking Process** — 6-step journey from inquiry to gallery delivery
- **FAQ** — Expandable answers to common questions
- **Client Portal Access** — Unified login/register/demo interface

### Client Portal Features
- **Progress Tracking** — 5-stage workflow visualization
- **Photo Selection** — Toggle photos for editing and album inclusion
- **Payment Management** — Confirm transfers with notes
- **Dashboard** — Personalized client workspace
- **Session Management** — Track event details and rundown notes

## 🔐 Authentication

### Login Options
1. **Register** — New clients create accounts with event details
2. **Login** — Existing clients access their portal
3. **Demo Account** — Test drive without registration
   - Email: `klien@3sixteen.id`
   - Password: `316DEMO`

### Supabase PostgreSQL Storage
Client and project records are stored in Supabase PostgreSQL. Data includes:
- Client personal information
- Event details & dates
- Photo selections
- Payment status
- Internal notes

## 🎯 Routes

| Method | Route | Action |
|--------|-------|--------|
| GET | `/` | Homepage with hero + login/register forms |
| POST | `/register-client` | Create new client account |
| POST | `/login-client` | Client login |
| GET | `/portal` | Client dashboard (requires auth) |
| POST | `/portal/select-photo` | Toggle photo selection |
| POST | `/portal/confirm-payment` | Record payment confirmation |
| POST | `/logout-client` | Client logout |

## 🎨 Styling

- **Framework**: Tailwind CSS (CDN)
- **Typography**: 
  - Cormorant Garamond (serif, editorial headings)
  - Montserrat (sans-serif, body & UI)
- **Color Palette**:
  - White/Off-white: `#FAFAF8`
  - Dark: `#2D2D2D`
  - Gray: `#F2EFE9`, `#E7E2D8`
  - Accents: Subtle grays & blacks

## 📝 Environment Setup

Create `.env` file from `.env.example`:

```env
APP_NAME="3Sixteen Photo Cinema"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=pgsql
DB_HOST=db.rjgcgebjwivnhgrakomr.supabase.co
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=
DB_SSLMODE=require

STUDIO_OWNER="Geraldy Antonius"
STUDIO_WHATSAPP="+6287770860661"
STUDIO_BANK_NAME="BCA KCU Bogor"
STUDIO_BANK_HOLDER="Geraldy Antonius"

# Koyeb hosts the PHP application; Supabase stores data; Backblaze B2 stores media.
FILESYSTEM_DISK=local
B2_APPLICATION_KEY_ID=
B2_APPLICATION_KEY=
B2_BUCKET=
B2_REGION=us-west-004
B2_ENDPOINT=https://s3.us-west-004.backblazeb2.com
B2_USE_PATH_STYLE_ENDPOINT=true
```

## ☁️ Koyeb, Supabase & Backblaze B2

Koyeb runs the Laravel application. Supabase PostgreSQL stores client records,
photo selections, and payments. Backblaze B2 is connected as an S3-compatible
media disk.

1. Create a private Backblaze B2 bucket.
2. Create an application key with access limited to that bucket.
3. Install the Laravel S3 filesystem driver:
   ```bash
   composer require league/flysystem-aws-s3-v3 "^3.0" --with-all-dependencies
   ```
4. Add these secret values in Koyeb, using the exact region and endpoint
   shown by Backblaze for the bucket:
   - `B2_APPLICATION_KEY_ID`
   - `B2_APPLICATION_KEY`
   - `B2_BUCKET`
   - `B2_REGION`
   - `B2_ENDPOINT`
5. Set `FILESYSTEM_DISK=b2` in Koyeb when the upload feature is ready.

Add `DB_PASSWORD` as a Koyeb secret. The project host is
`db.rjgcgebjwivnhgrakomr.supabase.co`, region `ap-south-1`, with SSL required.

Never put an application key into source control. Use the `b2` disk explicitly
while testing (`Storage::disk('b2')`) and keep client galleries private. Download
links should be short-lived temporary URLs rather than public file URLs.

## 📱 Responsive Design

The website is fully responsive with breakpoints:
- Mobile: Default styles
- Tablet: `md:` breakpoints
- Desktop: Full layout optimization

## 🏃 Getting Started (Local Development)

```bash
# 1. Install Laravel
composer install

# 2. Setup environment
cp .env.example .env

# 3. Generate app key
php artisan key:generate

# 4. Start development server
php artisan serve

# 5. Visit http://127.0.0.1:8000
```

## 🚀 Koyeb Deployment

Container deployment untuk Koyeb tersedia di `Dockerfile`. Ikuti
`DEPLOY_KOYEB.md` setelah akun Koyeb disetujui. Docker build membuat skeleton
Laravel dan menerapkan kode portal secara otomatis, sehingga repository ini
dapat dideploy walaupun mesin lokal belum memiliki PHP atau Composer.

---

**Last Updated**: November 22, 2026
