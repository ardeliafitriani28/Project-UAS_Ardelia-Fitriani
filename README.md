# Project UAS - Admin Blog Laravel

Project ini dikembangkan untuk memenuhi tugas akhir mata kuliah **Pemrograman Teknologi Informasi (PTI)**.

## 📝 Deskripsi Project
Aplikasi blog sederhana yang dibangun menggunakan Laravel. Fokus utama project ini adalah pada implementasi **Logika Navigasi Aman** dan desain antarmuka yang modern menggunakan **Tailwind CSS**.

## ✨ Fitur Utama
- **Autentikasi User**: Login dan Logout admin.
- **Navigasi Anti-Back Loop**: Mencegah user kembali ke form login setelah masuk (Halaman About).
- **Desain UI Modern**: Menggunakan font *Plus Jakarta Sans* dan Tailwind CSS.
- **Profil Penulis**: Halaman khusus yang memuat informasi pengembang.

## 👤 Identitas Pengembang
- **Nama**: Ardelia Fitriani
- **Project**: UAS PTI 2024/2025

## 🚀 Cara Instalasi
1. Clone repositori ini.
2. Jalankan `composer install`.
3. Salin `.env.example` menjadi `.env`.
4. Jalankan `php artisan key:generate`.
5. Jalankan `php artisan migrate`.
6. Jalankan `php artisan serve`.