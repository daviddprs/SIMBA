# SIMBA (Sistem Informasi Manajemen Bakorwil)

SIMBA adalah aplikasi Sistem Informasi Manajemen untuk Bakorwil yang dibangun menggunakan Laravel 12. Aplikasi ini dilengkapi dengan dashboard informatif dan fitur manajemen (Pegawai, Surat Masuk, Surat Keluar, dan Agenda).

## Tech Stack
- **Framework:** Laravel 12 (PHP 8.3)
- **Frontend:** Bootstrap 5, AdminLTE 3
- **Database:** MySQL
- **Icons & Charts:** Font Awesome, Chart.js
- **UI Components:** DataTables, SweetAlert2

## Prasyarat
- PHP 8.3 atau lebih baru
- Composer
- Node.js & NPM
- MySQL Database

## Cara Instalasi

1. Clone repositori ini atau salin folder proyek.
2. Salin file `.env.example` menjadi `.env` (jika belum ada) atau konfigurasikan `.env` yang sudah ada.
   ```bash
   cp .env.example .env
   ```
3. Sesuaikan konfigurasi database di file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=simba
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. Instal dependensi PHP:
   ```bash
   composer install
   ```
5. Instal dependensi Frontend:
   ```bash
   npm install
   ```
6. Generate application key:
   ```bash
   php artisan key:generate
   ```
7. Jalankan migrasi dan seeder untuk membuat tabel dan data dummy (termasuk akun admin):
   ```bash
   php artisan migrate:fresh --seed
   ```
8. Compile aset frontend:
   ```bash
   npm run build
   ```

## Cara Menjalankan Aplikasi

Jalankan local development server Laravel:
```bash
php artisan serve
```
Akses aplikasi melalui browser di `http://localhost:8000` (atau sesuai konfigurasi Laragon Anda, misal: `http://simba.test`).

---

## Akun Login (Default Admin)

Setelah menjalankan *seeder*, Anda dapat login ke dalam sistem menggunakan akun administrator berikut:

- **Email:** `admin@simba.com`
- **Password:** `password`

## Lisensi
Hak Cipta &copy; 2026 SIMBA (Sistem Informasi Manajemen Bakorwil).
