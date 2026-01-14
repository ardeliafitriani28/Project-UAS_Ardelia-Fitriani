<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-6 md:p-12">
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
        <div class="bg-blue-600 p-6">
            <h1 class="text-xl font-bold text-white">Tambah Artikel Baru</h1>
            <p class="text-blue-100 text-sm">Silakan isi formulir di bawah untuk mempublikasikan artikel.</p>
        </div>

        <form action="{{ route('articles.store') }}" method="POST" class="p-8 space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Judul Artikel</label>
                    <input type="text" name="judul" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Masukkan judul..." required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Penulis</label>
                    <input type="text" name="penulis" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Nama Anda" required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Publikasi</label>
                <input type="date" name="tanggal_publikasi" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none transition" required>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Isi Konten Artikel</label>
                <textarea name="isi" rows="8" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Tuliskan isi artikel di sini..." required></textarea>
            </div>

            <div class="flex items-center justify-end gap-4 pt-4 border-t">
                <a href="{{ route('admin.dashboard') }}" class="text-gray-500 hover:text-gray-700 font-medium">Batal</a>
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 shadow-lg transition">Simpan Artikel</button>
            </div>
        </form>
    </div>
</body>
</html>