<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi HMIT</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #f2f2f2;">

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-primary px-4">
    <span class="navbar-brand fw-bold">
        FORM PENDAFTARAN & ASPIRASI HMIT
    </span>

    <div>
        <button type="button" class="btn btn-link text-white" onclick="showForm('pendaftaran')">
            Pendaftaran
        </button>
        <button type="button" class="btn btn-link text-white" onclick="showForm('aspirasi')">
            Aspirasi
        </button>
    </div>
</nav>

<!-- KONTEN -->
<div class="d-flex justify-content-center align-items-center" style="height: 90vh;">

    <!-- FORM PENDAFTARAN -->
    <div id="pendaftaran" class="card shadow p-3" style="width: 350px; display: none;">
        <div class="card-header bg-primary text-white text-center mb-3">
            Pendaftaran Mahasiswa
        </div>

        <form method="POST" action="/daftar">
            @csrf

            <input type="text" name="nama" class="form-control mb-3" placeholder="Nama">
            <input type="text" name="nim" class="form-control mb-3" placeholder="NIM">
            <input type="email" name="email" class="form-control mb-3" placeholder="Email">

            <button class="btn btn-primary w-100">Daftar</button>
        </form>
    </div>

    <!-- FORM ASPIRASI -->
    <div id="aspirasi" class="card shadow p-3" style="width: 350px; display: none;">
        <div class="card-header bg-success text-white text-center mb-3">
            Form Aspirasi
        </div>

        <form method="POST" action="/aspirasi">
            @csrf

            <input type="text" name="nama" class="form-control mb-3" placeholder="Nama">
            <textarea name="aspirasi" class="form-control mb-3" placeholder="Tulis aspirasi..."></textarea>

            <button class="btn btn-success w-100">Kirim</button>
        </form>
    </div>

</div>

<!-- SCRIPT -->
<script>
function showForm(type) {
    document.getElementById('pendaftaran').style.display = 'none';
    document.getElementById('aspirasi').style.display = 'none';

    document.getElementById(type).style.display = 'block';
}
</script>

</body>
</html>