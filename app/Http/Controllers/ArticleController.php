<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * --- BAGIAN PUBLIK ---
     */

    // Menampilkan daftar artikel di halaman beranda
    public function index(Request $request)
    {
        $search = $request->query('search');

        // Fitur pencarian sederhana
        if ($search) {
            $articles = Article::where('judul', 'LIKE', "%{$search}%")
                ->orderBy('tanggal_publikasi', 'desc')
                ->get();
        } else {
            $articles = Article::orderBy('tanggal_publikasi', 'desc')->get();
        }

        return view('welcome', compact('articles'));
    }

    // Menampilkan detail artikel untuk dibaca pengunjung
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    /**
     * --- BAGIAN ADMIN (CRUD) ---
     */

    // Menampilkan tabel daftar artikel di Dashboard Admin
    public function adminIndex()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('articles'));
    }

    // Menampilkan form untuk membuat artikel baru
    public function create()
    {
        return view('articles.create');
    }

    // Menyimpan data artikel baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul'             => 'required|max:255',
            'isi'               => 'required',
            'penulis'           => 'required',
            'tanggal_publikasi' => 'required|date',
        ]);

        Article::create([
            'judul'             => $request->judul,
            'isi'               => $request->isi,
            'penulis'           => $request->penulis,
            'tanggal_publikasi' => $request->tanggal_publikasi,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Artikel berhasil diterbitkan!');
    }

    // Menampilkan form edit dengan data artikel yang sudah ada
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    // Memperbarui data artikel di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'             => 'required|max:255',
            'isi'               => 'required',
            'penulis'           => 'required',
            'tanggal_publikasi' => 'required|date',
        ]);

        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'Artikel berhasil diperbarui!');
    }

    // Menghapus artikel dari database
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Artikel telah dihapus.');
    }
}