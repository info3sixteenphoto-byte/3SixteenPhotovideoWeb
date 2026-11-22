# 🚀 Quick Start Guide — 3Sixteen Photo Cinema

## ✅ What's Been Created

Your complete Laravel-based photography client portal is ready! All files are created and organized.

### Project Structure
```
e:\3Sixteen\Webside 3sixteen\
├── app\Http\Controllers\
│   └── ClientPortalController.php      (158 lines - All business logic)
├── resources\views\
│   ├── welcome.blade.php               (430 lines - Homepage + Auth)
│   └── client-dashboard.blade.php      (178 lines - Client Dashboard)
├── routes\
│   └── web.php                         (14 lines - Route definitions)
├── README.md                           (Documentation)
└── QUICKSTART.md                       (This file)
```

## 🎯 Next Steps to Run Locally

### 1. **Copy to Laravel Project**
```bash
# If you don't have a Laravel project yet, create one:
composer create-project laravel/laravel 3sixteen-portal
cd 3sixteen-portal

# Then copy these files:
# - Copy app/Http/Controllers/ClientPortalController.php
# - Copy resources/views/welcome.blade.php
# - Copy resources/views/client-dashboard.blade.php
# - Copy routes/web.php (replace the existing one)
```

### 2. **Setup Environment**
```bash
cp .env.example .env

# Edit .env with your settings:
APP_NAME="3Sixteen Photo Cinema"
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
```

### 3. **Install & Run**
```bash
# Install dependencies
composer install

# Install the Backblaze B2 S3-compatible filesystem driver
composer require league/flysystem-aws-s3-v3 "^3.0" --with-all-dependencies

# Generate app key
php artisan key:generate

# Start development server
php artisan serve

# Visit: http://127.0.0.1:8000
```

## 🧪 Testing the Application

### Homepage (`/`)
- View beautiful editorial design
- Scroll through offerings, process, and FAQ sections
- Access authentication portal at bottom

### Try Demo Account
1. Click **"Demo"** tab in portal
2. Click **"Enter Demo"** button
3. You'll see a sample client project in photo selection stage

### Test Registration
1. Click **"Register"** tab
2. Fill in test client details:
   - Name: John Doe
   - WhatsApp: +62812345678
   - Session Type: Wedding
   - Event Date: 2026-12-25
3. Email: test@example.com
4. Click **"Create Account"**
5. You'll be redirected to login with auto-generated password
6. Login and access the dashboard

### Test Login
1. Use the credentials from registration
2. Access your dashboard with:
   - Progress tracking (stages)
   - Event details
   - Photo selection (toggle edit/album)
   - Payment confirmation

## 🎨 Design Highlights

### Typography
- **Headers**: Cormorant Garamond (elegant, editorial)
- **Body**: Montserrat (clean, modern)

### Color Scheme
- Background: `#FAFAF8` (warm white)
- Text: `#2D2D2D` (soft black)
- Accents: Grays & blacks
- Inspiration: Sloane Mae's luxury aesthetic

### Responsive Breakpoints
- Mobile-first design
- Tablets: `md:` classes
- Desktop: Optimal layout

## 🔄 Session Flow

```
Homepage (/)
    ↓
Register/Login/Demo
    ↓
Dashboard (/portal)
    ↓
Select Photos & Confirm Payment
    ↓
Logout
```

## 📋 Available Routes

| Verb | Route | Purpose |
|------|-------|---------|
| GET | `/` | Homepage |
| POST | `/register-client` | Create account |
| POST | `/login-client` | Client login |
| GET | `/portal` | Dashboard (protected) |
| POST | `/portal/select-photo` | Toggle photo selection |
| POST | `/portal/confirm-payment` | Record payment |
| POST | `/logout-client` | Logout |

## 🛠️ Customization Tips

### Change Studio Info
Edit `.env`:
```env
STUDIO_OWNER="Your Name"
STUDIO_WHATSAPP="+62812345678"
STUDIO_BANK_NAME="Your Bank"
STUDIO_BANK_HOLDER="Account Holder"
```

### Modify Session Types
Edit `ClientPortalController.php` → `index()` method:
```php
$sessionTypes = [
    'Wedding',
    'Prewedding',
    // Add or remove types here
];
```

### Add More Demo Photos
Edit `DEMO_PHOTOS` in `ClientPortalController.php`.

### Change Styling
All styles are in `welcome.blade.php` and `client-dashboard.blade.php` using Tailwind CSS classes. Edit class names to customize colors, spacing, fonts, etc.

## ⚠️ Important Notes

### Supabase Database Storage
- Client, photo selection, and payment records are stored in PostgreSQL.
- Laravel session storage only holds the currently logged-in client ID.
- Database migrations run automatically when the Koyeb container starts.

### Database Password
- Set `DB_PASSWORD` from Supabase as a local/Koyeb secret.
- Never commit the database password into `.env.example` or the repository.

### Demo Account
- Email: `klien@3sixteen.id`
- Password: `316DEMO`
- Pre-loaded with sample data
- Reset by logging out/in

## 🚀 Future Enhancements

### Next Features
- Email notifications
- Actual photo uploads
- Invoice generation
- Admin dashboard
- Payment gateway integration
- Photo upload and client delivery through Backblaze B2

## ☁️ Koyeb + Supabase + Backblaze B2

Koyeb runs the Laravel/PHP application, Supabase PostgreSQL stores client data,
and Backblaze B2 stores photos and videos. Create a private bucket and application key in Backblaze, then add
`B2_APPLICATION_KEY_ID`, `B2_APPLICATION_KEY`, `B2_BUCKET`, `B2_REGION`, and
`B2_ENDPOINT` as Koyeb secrets. The region and endpoint must match the
values shown for that bucket.

Keep the bucket private and serve client files with short-lived download URLs.
Set `FILESYSTEM_DISK=b2` only after the application includes upload handling.

## 🆘 Troubleshooting

### "Class not found" Error
Make sure `ClientPortalController.php` is in correct location:
```
app/Http/Controllers/ClientPortalController.php
```

### "Route not found" Error
Verify `routes/web.php` has correct content and routes are defined.

### Session data disappears
Sessions expire by default. Check `.env` for `SESSION_LIFETIME=120` (minutes).

### Styling looks broken
Make sure Tailwind CSS CDN loads. Check browser console for errors.

## 📞 Support

For questions or customizations:
- Review the **README.md** for detailed documentation
- Check Laravel documentation: https://laravel.com/docs
- Studio contact: {{ env('STUDIO_WHATSAPP') }}

---

**Happy coding! Your photography client portal is ready to wow your clients.** 🎥✨

**Created**: November 22, 2026
**Framework**: Laravel 11+
**Styling**: Tailwind CSS
**Design Inspiration**: Sloane Mae Photography
