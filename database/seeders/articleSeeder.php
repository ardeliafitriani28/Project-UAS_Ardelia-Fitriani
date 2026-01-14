<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk mengisi konten blog.
     */
    public function run(): void
    {
        // 1. Matikan pengecekan foreign key agar proses truncate (pengosongan tabel) tidak error
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // 2. Gunakan nama tabel 'articles' (huruf kecil semua) sesuai standar Laravel
        DB::table('articles')->truncate();
        
        // 3. Hidupkan kembali pengecekan foreign key setelah tabel kosong
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 4. Masukkan data artikel yang lengkap dengan penutup sintaks yang benar
        DB::table('articles')->insert([
            [
                'judul' => 'Eksplorasi Framework Laravel 11',
                'isi' => 'Laravel 11 menghadirkan struktur aplikasi yang lebih ramping dan minimalis. Dengan penghapusan beberapa file konfigurasi default, pengembang kini dapat fokus pada logika bisnis tanpa terganggu oleh boilerplate yang berlebihan. Ini adalah langkah besar menuju efisiensi pengembangan web PHP.',
                'penulis' => 'Ardelia',
                'tanggal_publikasi' => '2026-01-09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pentingnya Keamanan Data pada Aplikasi Web',
                'isi' => 'Dalam membangun aplikasi blog, keamanan adalah prioritas utama. Laravel menyediakan fitur bawaan seperti perlindungan CSRF, enkripsi password menggunakan Bcrypt, dan proteksi terhadap SQL Injection melalui Eloquent ORM. Memahami fitur ini sangat krusial bagi setiap pengembang web.',
                'penulis' => 'Ardelia',
                'tanggal_publikasi' => '2026-01-08',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Optimasi Database MySQL untuk Pemula',
                'isi' => 'Penggunaan indeks yang tepat dan normalisasi database adalah kunci agar aplikasi tetap cepat meskipun data bertambah banyak. Pastikan setiap tabel memiliki primary key yang jelas dan gunakan foreign key untuk menjaga integritas data antar tabel di dalam database MySQL.',
                'penulis' => 'Ardelia',
                'tanggal_publikasi' => '2026-01-07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Membangun UI Responsif dengan Tailwind CSS',
                'isi' => 'Tailwind CSS memungkinkan kita membangun desain web modern dengan sangat cepat menggunakan utility classes. Dengan pendekatan mobile-first, blog ini dipastikan tampil sempurna baik di layar smartphone maupun desktop tanpa perlu menulis CSS kustom yang rumit.',
                'penulis' => 'Ardelia',
                'tanggal_publikasi' => '2026-01-06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}