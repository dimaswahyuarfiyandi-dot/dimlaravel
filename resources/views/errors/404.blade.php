<!DOCTYPE html>
<html>
<head>
    <title>404 - Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative text-white">

    <!-- Video Background -->
    <video autoplay muted loop class="fixed top-0 left-0 w-full h-full object-cover">
        <source src="/videos/bg.mp4" type="video/mp4">
    </video>

    <!-- Overlay (biar teks kebaca) -->
    <div class="fixed inset-0 bg-black bg-opacity-20"></div>

    <!-- Konten -->
    <div class="relative flex items-center justify-center min-h-screen text-center px-4">
        <div>
            <h1 class="text-8xl font-extrabold text-blue-700 mb-4 animate-pulse">
                404
            </h1>

            <p class="text-xl mb-6">
                halaman ini tidak ada 😅
            </p>

            <a href="/" class="bg-blue-600 px-6 py-3 rounded hover:bg-blue-700 transition">
                silahkan Kembali ke Beranda
            </a>
        </div>
    </div>

</body>
</html>