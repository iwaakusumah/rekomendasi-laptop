# Sistem Rekomendasi Laptop

Sistem Rekomendasi Laptop adalah sebuah aplikasi berbasis web yang dirancang untuk membantu pengguna dalam memilih laptop yang sesuai dengan kebutuhan mereka. Aplikasi ini dibangun menggunakan framework **Laravel**.

## Fitur

- **Rekomendasi Berdasarkan Kriteria:** Pengguna dapat memilih kriteria seperti harga, spesifikasi, merek, dan kebutuhan penggunaan (gaming, kerja, desain grafis, dll.).
- **Filter dan Sorting:** Fitur filter dan sorting untuk mempermudah pencarian laptop.
- **Responsive Design:** Tampilan yang responsif untuk berbagai perangkat.

## Teknologi yang Digunakan

- **Framework Backend:** Laravel 10
- **Database:** MySQL
- **Frontend:** Blade, Bootstrap
- **Server Requirements:**
  - PHP >= 8.1
  - Composer
  - MySQL >= 5.7 atau MariaDB

## Instalasi

Ikuti langkah-langkah di bawah ini untuk mengatur proyek ini di lokal Anda:

1. Clone repository:
    ```bash
    git clone https://github.com/username/sistem-rekomendasi-laptop.git
    cd sistem-rekomendasi-laptop
    ```

2. Instal dependensi menggunakan Composer:
    ```bash
    composer install
    ```

3. Duplikasi file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```

4. Atur konfigurasi database di file `.env`.

5. Jalankan perintah berikut untuk membuat key aplikasi:
    ```bash
    php artisan key:generate
    ```

6. Migrasi database dan seeder:
    ```bash
    php artisan migrate --seed
    ```

7. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

8. Akses aplikasi di browser:
    ```
    http://localhost:8000
    ```

## Struktur Direktori Penting

- `app/Models`: Model untuk entitas seperti Laptop, User, dll.
- `database/migrations`: File migrasi untuk database.
- `database/seeds`: File seeder untuk database.
- `resources/dataset`: File dataset untuk database.
- `resources/views`: Template Blade untuk tampilan frontend.
- `routes/web.php`: Rute utama aplikasi.

## Kontributor

- **Iwa Kusumah** - [Profil GitHub](https://github.com/iwaakusumah)  

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).