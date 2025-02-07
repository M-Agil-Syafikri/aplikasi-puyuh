# Website Peternakan Burung Puyuh

Proyek ini merupakan sistem informasi berbasis web untuk manajemen peternakan burung puyuh. Website ini dirancang menggunakan Laravel dan mengimplementasikan metode **User Acceptance Testing (UAT)** untuk memastikan kualitas sistem sesuai dengan kebutuhan pengguna.

## Fitur Utama
- **Manajemen Data Peternakan**: Pengelolaan data burung puyuh, pakan, dan kesehatan.
- **Monitoring Produksi Telur**: Pencatatan hasil produksi harian.
- **Laporan Keuangan**: Rekapitulasi transaksi dan keuntungan peternakan.
- **Sistem User Management**: Akses berbeda untuk admin dan pengguna umum.
- **Publikasi Open Source**: Proyek ini bersifat open-source dan dapat dikembangkan lebih lanjut.

## Spesifikasi Teknologi
- **Backend**: Laravel (PHP Framework)
- **Frontend**: Blade Template, Bootstrap
- **Database**: MySQL
- **Server Lokal**: XAMPP
- **Version Control**: GitHub

## Instalasi
1. **Clone Repository**
   ```sh
   git clone https://github.com/username/repo-puyuh.git
   cd repo-puyuh
   ```
2. **Instal Dependensi**
   ```sh
   composer install
   npm install
   ```
3. **Konfigurasi Database**
   - Duplikasi file `.env.example` menjadi `.env`
   - Ubah konfigurasi database sesuai dengan pengaturan lokal
   ```sh
   DB_DATABASE=puyuh_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```
   - Jalankan migrasi database
   ```sh
   php artisan migrate --seed
   ```
4. **Menjalankan Server**
   ```sh
   php artisan serve
   ```
   Akses website melalui `http://127.0.0.1:8000`

## Pengujian User Acceptance Testing (UAT)
Metode **User Acceptance Testing (UAT)** dilakukan untuk mengevaluasi fungsionalitas utama sistem sebelum diterapkan sepenuhnya. Beberapa skenario pengujian meliputi:
- Pendaftaran dan login pengguna
- Pencatatan produksi telur harian
- Pengelolaan data peternakan
- Generasi laporan keuangan

## Kontribusi
Proyek ini bersifat open-source, kamu bisa berkontribusi dengan cara:
1. **Fork Repository**
2. **Buat Branch Baru** (`feature-xyz`)
3. **Commit Perubahan**
4. **Kirim Pull Request**

## Lisensi
Proyek ini dirilis di bawah lisensi MIT. Silakan gunakan dan kembangkan lebih lanjut sesuai kebutuhan.

---
Dikembangkan oleh **M. Agil Syafikri**
