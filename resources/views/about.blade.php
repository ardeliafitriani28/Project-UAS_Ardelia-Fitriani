<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Penulis | AdminBlog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .profile-gradient {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        }
    </style>
</head>
<body class="bg-[#F8FAFC] text-slate-900 min-h-screen">

    <nav class="sticky top-0 z-40 w-full bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                    <a href="{{ url('/') }}" class="p-2 hover:bg-slate-100 rounded-lg transition-colors text-slate-500" title="Kembali ke Beranda">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </a>
                    <span class="text-lg font-extrabold tracking-tight text-slate-800 uppercase">Profil <span class="text-indigo-600">Penulis</span></span>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-4 py-12">
        <div class="bg-white rounded-[2rem] shadow-xl shadow-slate-200/60 overflow-hidden border border-slate-100">
            <div class="h-48 profile-gradient w-full relative">
                <div class="absolute -bottom-16 left-1/2 -translate-x-1/2 md:left-12 md:translate-x-0">
                    <div class="p-1.5 bg-white rounded-full shadow-lg">
                        <img src="{{ asset('images/Ardelia.jpeg') }}" 
                             alt="Foto Profil" 
                             class="w-32 h-32 md:w-40 md:h-40 rounded-full object-cover bg-slate-100"
                             onerror="this.src='https://ui-avatars.com/api/?name=Ardelia&background=6366f1&color=fff&size=256'">
                    </div>
                </div>
            </div>

            <div class="pt-20 pb-12 px-8 md:px-12 text-center md:text-left">
                <div class="flex flex-col md:flex-row justify-between items-start gap-6">
                    <div>
                        <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Ardelia</h2>
                        <p class="text-indigo-600 font-bold mt-1 tracking-wide">Web Developer & Content Writer</p>
                        
                        <div class="flex flex-wrap justify-center md:justify-start gap-3 mt-4">
                            <span class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-bold rounded-full uppercase tracking-wider">Mahasiswa PTI</span>
                            <span class="px-3 py-1 bg-indigo-50 text-indigo-600 text-xs font-bold rounded-full uppercase tracking-wider">UI Design</span>
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-600 text-xs font-bold rounded-full uppercase tracking-wider">Laravel</span>
                        </div>
                    </div>
                    
                    <a href="mailto:ardelia@example.com" class="w-full md:w-auto px-6 py-3 bg-slate-900 text-white font-bold rounded-xl hover:bg-slate-800 transition-all text-center">
                        Hubungi Saya
                    </a>
                </div>

                <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div>
                        <h3 class="text-sm font-extrabold text-slate-400 uppercase tracking-[0.2em] mb-4">Tentang Saya</h3>
                        <p class="text-slate-600 leading-relaxed italic">
                            "Halo! Saya adalah pengembang web yang bersemangat dalam membangun aplikasi yang bermakna. Blog ini adalah proyek UAS mata kuliah PTI saya yang berfokus pada manajemen konten yang sederhana namun fungsional."
                        </p>
                    </div>

                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                        <h3 class="text-sm font-extrabold text-slate-400 uppercase tracking-[0.2em] mb-4">Informasi Project</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center shadow-sm">
                                    <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1"/></svg>
                                </div>
                                <span class="text-sm font-semibold text-slate-700">Project: UAS PTI 2024</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center shadow-sm">
                                    <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <span class="text-sm font-semibold text-slate-700">Status: Stable Version 1.0</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ url('/') }}" class="text-sm font-bold text-slate-400 hover:text-indigo-600 transition-colors uppercase tracking-widest">
                ← Kembali ke Beranda
            </a>
        </div>
    </main>

    <script type="text/javascript">
        (function (global) {
            if(typeof (global) === "undefined") return;

            // Menambahkan state baru agar tombol 'Back' tidak langsung keluar
            global.history.pushState(null, null, global.location.href);
            
            global.onpopstate = function () {
                // Saat user menekan 'Back', kita arahkan secara paksa ke Beranda
                // Ini mencegah mereka masuk kembali ke halaman login yang sudah expired
                global.location.replace("{{ url('/') }}");
            };
        })(window);
    </script>

</body>
</html>