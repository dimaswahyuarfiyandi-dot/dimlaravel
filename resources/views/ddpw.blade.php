<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Dimas</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #c47a27, #cab305);">

<div class="container mt-5">
    <div class="card shadow-lg p-4">

        <!-- Header -->
        <div class="text-center">
            <h1 class="mb-3">Biodata Diri</h1>
        </div>

        <!-- Profil -->
        <div class="text-center mb-4">
            <img src="{{ asset('image/profil.jpeg') }}" class="rounded-circle" width="150">
            <h4 class="mt-2">Dimas Wahyu Arfiyandi</h4>
        </div>

        <!-- Data -->
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>Dimas Wahyu Arfiyandi</td>
            </tr>
            <tr>
                <th>TTL</th>
                <td>Sumbawa, 2006</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>Nusa Tenggara Barat</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>dimas@email.com</td>
            </tr>
        </table>

        <!-- Pendidikan -->
        <h3>Pendidikan</h3>
        <ul>
               <li>Kuliah</li>
        </ul>

        <!-- Hobi -->
        <h3>Hobi</h3>
        <ol>
            <li>Main Game</li>
            <li>Nonton</li>
            <li>Belajar Coding</li>
        </ol>

        <!-- Footer -->
        <div class="text-center mt-4">
            <p>&copy; 2026 Dimas</p>
        </div>

    </div>
</div>

</body>
</html>