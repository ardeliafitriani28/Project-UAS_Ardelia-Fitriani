<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardelia Blog - Jelajahi Teknologi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-white text-gray-900">

    <!-- Navigasi -->
     <!-- Link Login di Halaman Depan -->
<nav class="p-4 flex justify-end">
    @if (Auth::check())
        <a href="{{ route('login') }}" class="text-gray-500 hover:text-blue-600 transition text-sm">Login Admin</a>
    @endif
</nav>
    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-200">
                        <span class="text-white font-bold text-xl">A</span>
                    </div>
                    <span class="text-2xl font-extrabold tracking-tight text-gray-900">Ardelia<span class="text-blue-600">Blog.</span></span>
                </div>
                <div class="hidden md:flex items-center gap-8">
                    <a href="/" class="font-semibold text-blue-600">Beranda</a>
                    <a href="/admin/dashboard" class="px-5 py-2.5 bg-gray-900 text-white rounded-xl font-bold hover:bg-gray-800 transition active:scale-95 shadow-lg shadow-gray-200">Admin Panel</a>
                </div>
                <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-600">
    Tentang Penulis
</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section & Pencarian -->
    <section class="relative pt-20 pb-16 bg-gradient-to-b from-blue-50/50 to-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
            <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-700 rounded-full text-xs font-bold uppercase tracking-widest mb-6">Portal Berita Teknologi</span>
            <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 mb-6 tracking-tight">
                Temukan Masa Depan <br> <span class="text-blue-600">Lewat Tulisan.</span>
            </h1>
            <p class="text-lg text-gray-500 max-w-2xl mx-auto leading-relaxed">
                Platform berbagi wawasan tentang tren teknologi terbaru, panduan pemrograman, dan inovasi masa depan yang dikelola secara profesional.
            </p>

            <!-- FORMULIR PENCARIAN -->
            <div class="mt-10 max-w-2xl mx-auto px-4">
                <form action="{{ route('home') }}" method="GET" class="relative group">
                    <input type="text" name="search" value="{{ request('search') }}" 
                        placeholder="Cari judul artikel (contoh: AI, Laravel, Cloud)..." 
                        class="w-full pl-14 pr-32 py-5 bg-white border border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all shadow-xl shadow-blue-100/20 text-lg">
                    
                    <div class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-blue-500 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>

                    <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 bg-blue-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-blue-700 transition active:scale-95 shadow-lg shadow-blue-200">
                        Cari
                    </button>
                </form>

                @if(request('search'))
                    <div class="mt-6 flex items-center justify-center gap-2 py-2 px-4 bg-white border border-gray-100 rounded-full shadow-sm w-fit mx-auto animate-bounce">
                        <span class="text-sm text-gray-500">Hasil untuk: <span class="font-bold text-blue-600">"{{ request('search') }}"</span></span>
                        <a href="{{ route('home') }}" class="ml-2 text-red-500 hover:text-red-700 p-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                @endif
            </div>
        </div>
        
        <!-- Ornamen Dekoratif -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-blue-400/10 blur-[100px] -z-10 translate-x-[-50%]"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-400/10 blur-[120px] -z-10 translate-x-[50%]"></div>
    </section>

    <!-- Daftar Artikel -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="flex items-center justify-between mb-12">
            <h2 class="text-3xl font-bold text-gray-900 tracking-tight">Artikel Terbaru</h2>
            <div class="h-px flex-grow bg-gray-100 ml-8"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse($articles as $a)
            <div class="group bg-white rounded-3xl border border-gray-100 overflow-hidden hover:shadow-2xl hover:shadow-blue-100/50 transition-all duration-500 hover:-translate-y-2">
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center font-bold text-sm">
                            {{ substr($a->penulis, 0, 1) }}
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-900 leading-none">{{ $a->penulis }}</p>
                            <p class="text-xs text-gray-400 mt-1">{{ \Carbon\Carbon::parse($a->tanggal_publikasi)->translatedFormat('d F Y') }}</p>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-4 line-clamp-2 group-hover:text-blue-600 transition-colors">
                        {{ $a->judul }}
                    </h3>
                    
                    <p class="text-gray-500 text-sm leading-relaxed mb-8 line-clamp-3">
                        {{ $a->isi }}
                    </p>

                    <div class="flex items-center justify-between pt-6 border-t border-gray-50">
                        <a href="{{ route('articles.show', $a->id) }}" class="inline-flex items-center gap-2 text-sm font-bold text-blue-600 hover:gap-3 transition-all">
                            Baca Selengkapnya
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center">
                <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l5 5v11a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Artikel Tidak Ditemukan</h3>
                <p class="text-gray-500 mt-2">Maaf, kata kunci yang Anda cari tidak tersedia saat ini.</p>
                <a href="/" class="mt-6 inline-block text-blue-600 font-bold hover:underline">Tampilkan Semua Artikel</a>
            </div>
            @endforelse
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-50 border-t border-gray-100 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm font-bold text-gray-400 tracking-widest uppercase mb-8">UAS Pemrograman Web Framework</p>
            <div class="flex justify-center gap-6 mb-12">
                <div class="w-10 h-10 bg-white border border-gray-200 rounded-xl flex items-center justify-center text-gray-400">FB</div>
                <div class="w-10 h-10 bg-white border border-gray-200 rounded-xl flex items-center justify-center text-gray-400">IG</div>
                <div class="w-10 h-10 bg-white border border-gray-200 rounded-xl flex items-center justify-center text-gray-400">TW</div>
            </div>
            <p class="text-xs text-gray-400">© 2026 Ardelia Blog Project. Dibuat dengan dedikasi untuk tugas akhir.</p>
        </div>
    </footer>

</body>
</html>