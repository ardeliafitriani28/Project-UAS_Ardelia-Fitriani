<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel - Admin Panel</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen flex flex-col">

    <!-- Navigasi Sederhana -->
    <nav class="bg-slate-900 text-white shadow-md p-4">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <span class="text-lg font-bold">Admin<span class="text-blue-400">Panel</span></span>
            <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-300 hover:text-white flex items-center gap-2 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Kembali ke Dashboard
            </a>
        </div>
    </nav>

    <!-- Konten Form -->
    <main class="flex-grow flex items-center justify-center p-6 py-12">
        <div class="max-w-2xl w-full bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <div class="bg-indigo-600 p-8 text-white">
                <h1 class="text-2xl font-bold">Edit Artikel</h1>
                <p class="text-indigo-100 text-sm mt-1">Perbarui informasi artikel Anda dengan teliti.</p>
            </div>

            <form action="{{ route('articles.update', $article->id) }}" method="POST" class="p-8 space-y-6">
                <!-- Token Keamanan Laravel -->
                @csrf
                <!-- Method Spoofing untuk Update -->
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Input Judul -->
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-gray-700">Judul Artikel</label>
                        <input type="text" name="judul" value="{{ old('judul', $article->judul) }}" 
                            class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition" 
                            placeholder="Masukkan judul artikel" required>
                        @error('judul') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                    </div>

                    <!-- Input Penulis -->
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-gray-700">Nama Penulis</label>
                        <input type="text" name="penulis" value="{{ old('penulis', $article->penulis) }}" 
                            class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition" 
                            placeholder="Nama penulis" required>
                        @error('penulis') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Input Tanggal -->
                <div class="space-y-2">
                    <label class="block text-sm font-bold text-gray-700">Tanggal Publikasi</label>
                    <input type="date" name="tanggal_publikasi" value="{{ old('tanggal_publikasi', $article->tanggal_publikasi) }}" 
                        class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition" 
                        required>
                    @error('tanggal_publikasi') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Input Isi Konten -->
                <div class="space-y-2">
                    <label class="block text-sm font-bold text-gray-700">Isi Konten Artikel</label>
                    <textarea name="isi" rows="6" 
                        class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition resize-none" 
                        placeholder="Tuliskan isi artikel di sini..." required>{{ old('isi', $article->isi) }}</textarea>
                    @error('isi') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Tombol Aksi -->
                <div class="flex items-center justify-end gap-4 pt-6 border-t border-gray-50">
                    <a href="{{ route('admin.dashboard') }}" class="text-sm font-semibold text-gray-400 hover:text-gray-600 transition">Batal</a>
                    <button type="submit" class="bg-indigo-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-indigo-700 shadow-lg shadow-indigo-200 active:scale-95 transition-all">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </main>

    <footer class="py-6 text-center text-gray-400 text-xs">
        &copy; 2026 Ardelia Blog Project. All Rights Reserved.
    </footer>

</body>
</html>