<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Menentukan nama tabel (opsional jika nama tabel sudah 'articles')
    protected $table = 'articles';

    // Kolom yang boleh diisi secara massal (Penting untuk CRUD nanti)
    protected $fillable = [
        'judul',
        'isi',
        'penulis',
        'tanggal_publikasi'
    ];
}