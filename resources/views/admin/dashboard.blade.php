<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - UAS Ardelia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">

    <div class="min-h-screen flex flex-col">
        <!-- Header / Navigasi Admin -->
        <nav class="bg-slate-900 text-white shadow-md sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <!-- Brand -->
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-blue-500 rounded flex items-center justify-center font-bold text-white text-sm">A</div>
                        <span class="text-xl font-bold">Admin<span class="text-blue-400">Panel</span></span>
                    </div>

                    <!-- Right Menu -->
                    <div class="flex items-center gap-6">
                        <a href="/" class="text-sm text-gray-300 hover:text-white transition hidden md:block">Lihat Blog</a>
                        <div class="h-5 w-px bg-gray-700 hidden md:block"></div>
                        
                        <div class="flex items-center gap-4">
                            <div class="text-right hidden sm:block">
                                <p class="text-xs text-gray-400 leading-none caps">Administrator</p>
                                <p class="text-sm font-bold text-white">{{ Auth::user()->name }}</p>
                            </div>

                            <!-- FORM LOGOUT -->
                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" 
                                        onclick="return confirm('Yakin ingin keluar?')"
                                        class="bg-rose-500 hover:bg-rose-600 text-white px-4 py-2 rounded-lg text-xs font-bold transition shadow-lg shadow-rose-900/20">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Konten Utama -->
        <main class="flex-grow max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-10">
            
            <!-- Judul & Tombol Tambah -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8 gap-4 border-b border-gray-200 pb-8">
                <div>
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Manajemen Artikel</h2>
                    <p class="text-gray-500 mt-1">Halo Ardelia, kelola konten blog Anda di sini.</p>
                </div>
                <a href="{{ route('articles.create') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 shadow-md transition-all active:scale-95">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Tulis Artikel Baru
                </a>
            </div>

            <!-- Notifikasi Pesan Sukses -->
            @if(session('success'))
            <div id="alert-success" class="mb-6 p-4 bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 rounded-r-lg shadow-sm flex items-center justify-between animate-bounce-short">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="font-bold">{{ session('success') }}</span>
                </div>
                <button onclick="document.getElementById('alert-success').remove()" class="text-emerald-500 hover:text-emerald-700">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            @endif

            <!-- Tabel Data Artikel -->
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-400 uppercase tracking-wider">Info Konten</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-400 uppercase tracking-wider">Penulis</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-400 uppercase tracking-wider">Tanggal Rilis</th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-400 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @forelse($articles as $a)
                            <tr class="hover:bg-gray-50/50 transition duration-150">
                                <td class="px-6 py-5">
                                    <div class="text-sm font-bold text-gray-900 leading-snug">{{ $a->judul }}</div>
                                    <div class="text-xs text-gray-400 mt-1 italic">{{ Str::limit($a->isi, 70) }}</div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <div class="w-7 h-7 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-[10px] font-bold">
                                            {{ strtoupper(substr($a->penulis, 0, 1)) }}
                                        </div>
                                        <span class="text-sm font-medium text-gray-700">{{ $a->penulis }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap text-sm text-gray-500 font-medium">
                                    {{ \Carbon\Carbon::parse($a->tanggal_publikasi)->translatedFormat('d M Y') }}
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap text-center">
                                    <div class="flex items-center justify-center gap-3">
                                        <a href="{{ route('articles.edit', $a->id) }}" class="bg-indigo-50 text-indigo-600 hover:bg-indigo-100 px-3 py-1.5 rounded-lg font-bold text-xs flex items-center gap-1 transition">
                                            Edit
                                        </a>
                                        <form action="{{ route('articles.destroy', $a->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')" class="bg-rose-50 text-rose-600 hover:bg-rose-100 px-3 py-1.5 rounded-lg font-bold text-xs flex items-center gap-1 transition">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-20 text-center">
                                    <p class="text-gray-400 italic text-sm">Belum ada data artikel tersimpan.</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

        <a href="{{ route('about') }}">Tentang Penulis</a>
        
        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200 py-6 mt-10">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <p class="text-gray-400 text-xs font-medium uppercase tracking-widest">© 2024 Project UAS Blog - Ardelia</p>
            </div>
        </footer>
    </div>

</body>
</html>