<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->judul }} - Ardelia Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900 font-['Inter']">

    <nav class="bg-white border-b sticky top-0 z-50">
        <div class="max-w-3xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="/" class="text-xl font-bold text-blue-600">Ardelia<span class="text-gray-400">Blog.</span></a>
            <a href="/" class="text-sm font-medium text-gray-500 hover:text-blue-600 transition">← Kembali</a>
        </div>
    </nav>

    <main class="max-w-3xl mx-auto px-4 py-12">
        <article>
            <header class="mb-10">
                <div class="flex items-center gap-2 mb-4 text-xs font-bold uppercase tracking-wider text-blue-500">
                    <span>Teknologi</span>
                    <span class="text-gray-300">•</span>
                    <span>{{ \Carbon\Carbon::parse($article->tanggal_publikasi)->translatedFormat('d F Y') }}</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">{{ $article->judul }}</h1>
                
                <div class="flex items-center gap-4 py-6 border-y border-gray-100">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        {{ substr($article->penulis, 0, 1) }}
                    </div>
                    <div>
                        <p class="font-bold text-gray-900">{{ $article->penulis }}</p>
                        <p class="text-sm text-gray-500">Penulis Konten</p>
                    </div>
                </div>
            </header>

            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                {!! nl2br(e($article->isi)) !!}
            </div>
            
            <footer class="mt-16 pt-8 border-t border-gray-100">
                <div class="bg-gray-100 p-8 rounded-2xl text-center">
                    <h3 class="font-bold mb-2">Terima kasih telah membaca!</h3>
                    <p class="text-gray-500 text-sm mb-6">Artikel ini ditulis sebagai bagian dari tugas UAS Pemrograman Web.</p>
                    <a href="/" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-blue-700 transition">Lihat Artikel Lainnya</a>
                </div>
            </footer>
        </article>
    </main>

</body>
</html>