<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perpustakaan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-800 p-4 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center font-bold">
            <a href="/" class="text-xl">📚 Perpus UNPAR</a>
            <div class="space-x-6">
                <a href="/buku" class="hover:text-yellow-300">Buku</a>
                <a href="/anggota" class="hover:text-yellow-300">Anggota</a>
                <a href="/peminjaman" class="text-yellow-400">Peminjaman</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-6 mt-6 bg-white rounded shadow-lg min-h-screen">
        @yield('content')
    </div>
</body>
</html>