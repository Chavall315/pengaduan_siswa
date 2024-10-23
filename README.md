# Aplikasi Pengaduan Siswa

Aplikasi **Pengaduan Siswa** adalah sebuah platform berbasis web yang dirancang untuk memudahkan siswa dalam menyampaikan laporan atau pengaduan terkait masalah di lingkungan sekolah. Aplikasi ini membantu sekolah untuk menangani pengaduan secara lebih efektif dan efisien, serta memberikan tindak lanjut yang jelas terhadap setiap laporan.

## Fitur Utama

- **Form Pengaduan**: Siswa dapat mengirimkan pengaduan dengan memilih kategori masalah, mengisi deskripsi, dan menambahkan lampiran.
- **Status Pengaduan**: Siswa dapat melacak status pengaduan mereka, seperti "Diterima", "Dalam Proses", atau "Selesai".
- **Anonimitas**: Siswa dapat memilih untuk mengirimkan pengaduan secara anonim.
- **Dashboard Admin**: Admin memiliki akses ke panel untuk memantau semua pengaduan yang masuk, melakukan tindak lanjut, dan memperbarui status pengaduan.
- **Notifikasi**: Siswa dan admin akan menerima notifikasi mengenai status pengaduan.
- **Riwayat Pengaduan**: Admin dan siswa dapat melihat riwayat pengaduan sebelumnya untuk referensi lebih lanjut.

## Teknologi yang Digunakan

- **Backend**: Laravel Framework (PHP)
- **Frontend**: Blade template, HTML, CSS, JavaScript
- **Database**: sqlite atau MySQL
- **Autentikasi**: Laravel built-in authentication atau Laravel Sanctum
- **Deployment**: Server Apache atau Nginx

## Prasyarat

Sebelum menjalankan aplikasi ini, pastikan Anda telah menginstal:

- PHP versi 8.0 atau lebih tinggi
- Composer
- sqlite/MySQL
- Node.js dan npm (jika menggunakan front-end yang memerlukan bundling)

## Instalasi

Ikuti langkah-langkah di bawah ini untuk menginstal dan menjalankan aplikasi **Pengaduan Siswa** secara lokal:

1. **Clone repository ini**:
   ```bash
   git clone https://github.com/username/pengaduan-siswa.git
   ```

2. **Masuk ke direktori proyek**:
   ```bash
   cd pengaduan-siswa
   ```

3. **Install dependencies dengan Composer**:
   ```bash
   composer install
   ```

4. **Copy file .env.example ke .env**:
   ```bash
   cp .env.example .env
   ```

5. **Generate aplikasi key**:
   ```bash
   php artisan key:generate
   ```

6. **Konfigurasi database di file .env**:
   - Isi pengaturan database sesuai konfigurasi server lokal Anda.

7. **Migrasi database:**:
   ```bash
   php artisan migrate
   ```

8. **Jalankan server lokal:**:
   ```bash
   php artisan serve
   ```
## Penggunaan
- **Registrasi**: Daftar sebagai siswa atau guru.
- **Login**: Masuk ke akun Anda.
- **Pengajuan**: Buat, edit, atau hapus pengajuan.
- **Dashboard Guru**: Mengelola semua pengajuan yang masuk.
- **Dashboard Siswa**: Mengelola pengajuan Anda sendiri.
## Kontribusi
Kami sangat menghargai kontribusi dari komunitas. Jika Anda ingin berkontribusi, silakan buka issue atau pull request.
## Lisensi
Aplikasi ini dilisensikan di bawah Lisensi MIT. Lihat file [LICENSE](LICENSE) untuk detailnya.
## Kontak
Jika Anda memiliki pertanyaan atau masalah, silakan hubungi kami melalui [naufal.bagaskara1@smk.belajar.id].
Terima kasih telah menggunakan Aplikasi Pengajuan Siswa!