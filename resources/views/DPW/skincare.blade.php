<!DOCTYPE html>
<html>
<head>
    <title>Skincare - ADVS Fashion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-yellow-100 via-pink-200 to-purple-300 min-h-screen flex">

<!-- SIDEBAR -->
<div class="w-40 bg-white p-4 flex flex-col items-center">
    
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
        SKINCARE
    </h1>

        <a href="/menu" class="bg-white px-6 py-2 shadow hover:bg-gray-100">
            ← Kembali
        </a>

    </div>

    <!-- PRODUK -->
    <div class="bg-white p-10 rounded shadow">

        <div class="grid grid-cols-4 gap-8">

            <!-- FACIAL WASH -->
            <div class="bg-purple-400 p-4 text-white text-center rounded">
                <img src="{{ asset('image/skincare/wash.jpg') }}" 
                class="h-24 w-full object-cover mb-2 rounded">

                <p class="font-bold">Facial Wash</p>
                <p>Rp 80.000</p>
            </div>

            <!-- TONER -->
            <div class="bg-purple-400 p-4 text-white text-center rounded">
                <img src="{{ asset('image/skincare/toner.jpg') }}" 
                class="h-24 w-full object-cover mb-2 rounded">

                <p class="font-bold">Toner</p>
                <p>Rp 90.000</p>
            </div>

            <!-- SERUM -->
            <div class="bg-purple-400 p-4 text-white text-center rounded">
                <img src="{{ asset('image/skincare/serum.jpg') }}" 
                class="h-24 w-full object-cover mb-2 rounded">

                <p class="font-bold">Serum</p>
                <p>Rp 120.000</p>
            </div>

            <!-- MOISTURIZER -->
            <div class="bg-purple-400 p-4 text-white text-center rounded">
                <img src="{{ asset('image/skincare/moisturizer.jpg') }}" 
                class="h-24 w-full object-cover mb-2 rounded">

                <p class="font-bold">Moisturizer</p>
                <p>Rp 110.000</p>
            </div>

            <!-- SUNSCREEN -->
            <div class="bg-purple-400 p-4 text-white text-center rounded">
                <img src="{{ asset('image/skincare/sunscreen.jpg') }}" 
                class="h-24 w-full object-cover mb-2 rounded">

                <p class="font-bold">Sunscreen</p>
                <p>Rp 95.000</p>
            </div>

            <!-- MASKER -->
            <div class="bg-purple-400 p-4 text-white text-center rounded">
                <img src="{{ asset('image/skincare/masker.jpg') }}" 
                class="h-24 w-full object-cover mb-2 rounded">

                <p class="font-bold">Masker Wajah</p>
                <p>Rp 50.000</p>
            </div>

        </div>

    </div>

</div>

</body>
</html>