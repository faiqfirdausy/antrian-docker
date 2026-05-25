# 🏥 Docker Setup — Website Antrian
> PHP 7.4 + Apache + MySQL 5.7 + phpMyAdmin

---

## 📁 Struktur Folder

```
antrian/
├── docker-compose.yml
├── php/
│   ├── Dockerfile
│   └── php.ini
├── apache/
│   └── sites-available/
│       └── antrian.conf
├── mysql/
│   ├── conf.d/
│   │   └── custom.cnf
│   └── init/               ← letakkan file .sql dump Hostinger di sini
├── www/                    ← letakkan source code PHP di sini
└── logs/
    └── apache/
```

---

## 🚀 Langkah Migrasi dari Hostinger

### 1. Export dari Hostinger

**File website:**
- Login Hostinger → File Manager → pilih semua file → Download as .zip
- Ekstrak ke folder `www/`

**Database:**
- Login Hostinger → phpMyAdmin → pilih database → Export → Format: SQL
- Simpan file `.sql` ke folder `mysql/init/`
- File di folder `init/` akan otomatis diimport saat container pertama kali dibuat

### 2. Sesuaikan konfigurasi database di kode PHP

Cari file koneksi database (biasanya `config.php`, `koneksi.php`, atau `db.php`):

```php
// SEBELUM (Hostinger)
$host = "localhost";
$user = "u123456_user";
$pass = "passwordlama";
$db   = "u123456_antrian";

// SESUDAH (Docker)
$host = "db";              // nama service di docker-compose
$user = "antrian_user";
$pass = "antrian_pass";
$db   = "antrian_db";
```

### 3. Jalankan Docker

```bash
# Pertama kali — build & start
docker compose up -d --build

# Cek status container
docker compose ps

# Lihat log jika ada error
docker compose logs -f web
docker compose logs -f db
```

### 4. Akses

| Service     | URL                          |
|-------------|------------------------------|
| Website     | http://localhost             |
| phpMyAdmin  | http://localhost:8080        |

Login phpMyAdmin:
- Server: `db`
- User: `root`
- Password: `rootpassword`

---

## 🔧 Perintah Berguna

```bash
# Masuk ke container PHP
docker compose exec web bash

# Masuk ke MySQL CLI
docker compose exec db mysql -u root -prootpassword antrian_db

# Restart service tertentu
docker compose restart web

# Stop semua
docker compose down

# Stop + hapus volume database (HATI-HATI: data hilang)
docker compose down -v

# Lihat log real-time
docker compose logs -f

# Import SQL manual (jika tidak lewat folder init)
docker compose exec -T db mysql -u root -prootpassword antrian_db < backup.sql
```

---

## ⚙️ Kustomisasi

### Ubah password database
Edit `docker-compose.yml`, bagian environment service `db`:
```yaml
MYSQL_ROOT_PASSWORD: passwordbaru
MYSQL_PASSWORD: passwordbaru
```
Lalu update juga di file koneksi PHP di `www/`.

### Aktifkan ekstensi PHP tambahan
Tambahkan di `php/Dockerfile` bagian `docker-php-ext-install`:
```dockerfile
# Contoh: tambah intl dan soap
RUN docker-php-ext-install intl soap
```
Lalu rebuild: `docker compose up -d --build`

---

## 🔒 Untuk Production / VPS

1. Ganti semua password di `docker-compose.yml`
2. Set `display_errors = Off` di `php/php.ini`
3. Batasi akses phpMyAdmin — hapus atau pasang autentikasi tambahan
4. Pasang SSL dengan Certbot + Nginx sebagai reverse proxy

---

## ❓ Troubleshooting Umum

| Masalah | Solusi |
|---|---|
| `Connection refused` ke DB | Tunggu 10-20 detik, MySQL butuh waktu init |
| `.htaccess` tidak berjalan | Pastikan `AllowOverride All` di apache conf |
| Upload file gagal | Cek `upload_max_filesize` di `php/php.ini` |
| Karakter aneh (encoding) | Pastikan charset koneksi PHP pakai `utf8mb4` |
| Port 80 sudah terpakai | Ganti `"80:80"` menjadi `"8000:80"` di compose |
