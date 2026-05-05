<!DOCTYPE html>
<html>
<head>
    <title>ADVS Fashion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-yellow-100 via-pink-200 to-purple-300 min-h-screen flex">

<!-- SIDEBAR -->
<div class="w-40 bg-white p-4 flex flex-col items-center">
    
    <!-- Logo -->
    <img src="{{ asset('image/logo2.jpg') }}" 
     class="w-32 h-32 rounded-full object-cover mb-4">

    <!-- Nama Anggota -->
    <div class="text-center space-y-2 text-gray-700">
        <a href="/biodata-ahmad" class="block hover:text-purple-600">AHMAD</a>
        <a href="/biodata-dimas" class="block hover:text-purple-600">DIMAS</a>
        <a href="/biodata-vita" class="block hover:text-purple-600">VITA</a>
        <a href="/biodata-suci" class="block hover:text-purple-600">SUCI</a>
    </div>

</div>

<!-- MAIN CONTENT -->
<div class="flex-1 p-8">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-10">

    <h1 class="text-5xl font-bold tracking-wide bg-gradient-to-r from-purple-600 to-pink-500 text-transparent bg-clip-text"
        style="font-family: 'Playfair Display', serif;">
        ADVS FASHION
    </h1>

        <!-- MENU -->
        <div class="flex gap-4">
            <a href="/pakaian" class="bg-white px-6 py-3 shadow hover:bg-gray-100">
                Pakaian
            </a>
            <a href="/aksesoris" class="bg-white px-6 py-3 shadow hover:bg-gray-100">
                Aksesoris
            </a>
            <a href="/skincare" class="bg-white px-6 py-3 shadow hover:bg-gray-100">
                Skincare
            </a>
        </div>

    </div>

    <!-- PRODUK GRID -->
    <div class="bg-white p-10 rounded shadow">

        <div class="grid grid-cols-4 gap-8">

            <!-- PRODUK -->
            <a href="/pakaian" class="block">
    <div class="bg-purple-400 p-4 text-white text-center rounded hover:scale-105 transition">
        
        <img src="{{ asset('image/pakaian/sweater.jpg') }}" 
             class="w-full h-32 object-cover rounded mb-2">

    </div>
</a>

            <a href="/aksesoris" class="block">
    <div class="bg-purple-400 p-4 text-white text-center rounded hover:scale-105 transition">
        
        <img src="{{ asset('image/aksesoris/kacamata.jpg') }}" 
             class="w-full h-32 object-cover rounded mb-2">

    </div>
</a>

            <a href="/pakaian" class="block">
    <div class="bg-purple-400 p-4 text-white text-center rounded hover:scale-105 transition">
        
        <img src="{{ asset('image/pakaian/hoodie.jpg') }}" 
             class="w-full h-32 object-cover rounded mb-2">

    </div>
</a>

            <a href="/skincare" class="block">
    <div class="bg-purple-400 p-4 text-white text-center rounded hover:scale-105 transition">
        
        <img src="{{ asset('image/skincare/moisturizer.jpg') }}" 
             class="w-full h-32 object-cover rounded mb-2">

    </div>
</a>

            <a href="/aksesoris" class="block">
    <div class="bg-purple-400 p-4 text-white text-center rounded hover:scale-105 transition">
        
        <img src="{{ asset('image/aksesoris/jam.jpg') }}" 
             class="w-full h-32 object-cover rounded mb-2">

    </div>
</a>

            <a href="/skincare" class="block">
    <div class="bg-purple-400 p-4 text-white text-center rounded hover:scale-105 transition">
        
        <img src="{{ asset('image/skincare/masker.jpg') }}" 
             class="w-full h-32 object-cover rounded mb-2">

    </div>
</a>

            <a href="/aksesoris" class="block">
    <div class="bg-purple-400 p-4 text-white text-center rounded hover:scale-105 transition">
        
        <img src="{{ asset('image/aksesoris/tas.jpg') }}" 
             class="w-full h-32 object-cover rounded mb-2">

    </div>
</a>

            <a href="/pakaian" class="block">
    <div class="bg-purple-400 p-4 text-white text-center rounded hover:scale-105 transition">
        
        <img src="{{ asset('image/pakaian/celanajns.jpg') }}" 
             class="w-full h-32 object-cover rounded mb-2">

    </div>
</a>

        </div>

    </div>

</div>

</body>
</html>