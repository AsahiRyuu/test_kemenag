# testkemenag (PHP Starter)


Struktur proyek siap pakai untuk memulai konversi desain/screenshot menjadi halaman web berbasis PHP.


## Cara Menjalankan

**Opsi A — PHP built-in server (mudah):**

1. Buka terminal di folder `testkemenag`.

2. Jalankan: `php -S localhost:8000 -t public`

3. Buka `http://localhost:8000` di browser.


**Opsi B — Apache/Nginx:**

- Arahkan document root ke folder `public/`.

- Jika Apache, aktifkan mod_rewrite dan gunakan `public/.htaccess` (opsional).


## Struktur Folder

- `public/` — root web, berisi `index.php`, aset CSS/JS/IMG.

- `app/views/` — file tampilan (home, profil, dll).

- `app/views/partials/` — header & footer.

- `core/` — config & helper.


## Menambahkan Konten dari Screenshot

- Letakkan ikon/gambar ke `public/assets/img/` lalu ganti sumber gambarnya di view terkait.

- Edit `app/views/home.php` (atau buat file view baru) untuk menyesuaikan layout sesuai screenshot.

- Tambahkan CSS di `public/assets/css/style.css`.


## Koneksi Database (opsional)

- Duplikasi `core/config.php` menjadi `core/config.local.php` (jika ingin simpan kredensial).

- Tambahkan konstanta DB_* dan buat fungsi koneksi di `core/helpers.php` sesuai kebutuhan.


## Routing Sederhana

- Gunakan parameter `?page=`: contoh `?page=profil` akan memuat `app/views/profil.php`.


## Lisensi

Bebas digunakan untuk keperluan internal Kemenag Jombang.

