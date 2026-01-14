<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Project UAS Ardelia (Final Clean Version)
|--------------------------------------------------------------------------
*/

// --- 1. RUTE PUBLIK ---
// Halaman utama untuk pengunjung (Daftar Artikel & Pencarian)
Route::get('/', [ArticleController::class, 'index'])->name('home');

// Halaman detail artikel untuk dibaca
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');


// --- 2. RUTE AUTENTIKASI ---
// Mengelompokkan rute auth agar lebih rapi dan eksplisit
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// --- 3. RUTE ADMIN (DIPROTEKSI MIDDLEWARE AUTH) ---
// Middleware 'auth' memastikan hanya pengguna yang sudah login yang bisa akses

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::middleware(['auth'])->group(function () {
    
    // Dashboard Utama Admin
    Route::get('/admin/dashboard', [ArticleController::class, 'adminIndex'])->name('admin.dashboard');

    // Manajemen Artikel (CRUD)
    Route::prefix('admin/articles')->group(function () {
        Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');
        Route::post('/', [ArticleController::class, 'store'])->name('articles.store');
        Route::get('/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
        Route::put('/{id}', [ArticleController::class, 'update'])->name('articles.update');
        Route::delete('/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    });

});