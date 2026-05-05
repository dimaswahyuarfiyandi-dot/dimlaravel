<!DOCTYPE html>
<html>
<head>
    <title>Pakaian - ADVS Fashion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-yellow-100 via-pink-200 to-purple-300 min-h-screen flex">

<!-- SIDEBAR -->
<div class="w-40 bg-white p-4 flex flex-col items-center relative z-50">

    <img src="{{ asset('image/logo2.jpg') }}" 
     class="w-32 h-32 rounded-full object-cover mb-4">

    <div class="text-center space-y-2 text-gray-700">
        <a href="/biodata-ahmad" class="block hover:text-purple-600">AHMAD</a>
        <a href="/biodata-dimas" class="block hover:text-purple-600">DIMAS</a>
        <a href="/biodata-vita" class="block hover:text-purple-600">VITA</a>
        <a href="/biodata-suci" class="block hover:text-purple-600">SUCI</a>
    </div>

</div>

<!-- MAIN -->
<div class="flex-1 p-8">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-10">

        <h1 class="text-5xl font-bold tracking-wide bg-gradient-to-r from-purple-600 to-pink-500 text-transparent bg-clip-text"
        style="font-family: 'Playfair Display', serif;">
        PAKAIAN
    </h1>

        <a href="/menu" class="bg-white px-6 py-2 shadow hover:bg-gray-100">
            ← Kembali
        </a>

    </div>

    <!-- PRODUK -->
    <div class="bg-white p-10 rounded shadow">

        <div class="grid grid-cols-4 gap-8">

            <!-- BAJU -->
            <div class="bg-purple-400 p-4 text-white text-center rounded">
                <img src="{{ asset('image/pakaian/kaos.jpg') }}" 
                class="h-24 w-full object-cover mb-2 rounded">

                <p class="font-bold">Kaos Casual</p>
                <p>Rp 120.000</p>
            </div>

            <!-- JAKET -->
            <div class="bg-purple-400 p-4 text-white text-center rounded">
                <img src="{{ asset('image/pakaian/hoodie.jpg') }}" 
                class="h-24 w-full object-cover mb-2 rounded">

                <p class="font-bold">Jaket Hoodie</p>
                <p>Rp 250.000</p>
            </div>

            <!-- KEMEJA -->
            <div class="bg-purple-400 p-4 text-white text-center rounded">
                <img src="{{ asset('image/pakaian/kemejafrml.jpg') }}" 
                class="h-24 w-full object-cover mb-2 rounded">

                <p class="font-bold">Kemeja Formal</p>
                <p>Rp 200.000</p>
            </div>

            <!-- CELANA -->
            <div class="bg-purple-400 p-4 text-white text-center rounded">
                <img src="{{ asset('image/pakaian/celanajns.jpg') }}" 
                class="h-24 w-full object-cover mb-2 rounded">
                
                <p class="font-bold">Celana Jeans</p>
                <p>Rp 180.000</p>
            </div>

            <!-- TAMBAHAN -->
            <div class="bg-purple-400 p-4 text-white text-center rounded">
                <img src="{{ asset('image/pakaian/sweater.jpg') }}" 
                class="h-24 w-full object-cover mb-2 rounded">

                <p class="font-bold">Sweater</p>
                <p>Rp 150.000</p>
            </div>

            <div class="bg-purple-400 p-4 text-white text-center rounded">
                <img src="{{ asset('image/pakaian/kemejabtk.jpg') }}" 
                class="h-24 w-full object-cover mb-2 rounded">

                <p class="font-bold">Kemeja Batik</p>
                <p>Rp 220.000</p>
            </div>

        </div>

    </div>

</div>

</body>
</html>