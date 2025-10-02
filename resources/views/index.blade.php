<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata & Homestay Desa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Desa Wisata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#wisata">Wisata</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-dark text-white text-center py-5" style="margin-top: 56px;">
        <div class="container">
            <h1 class="display-4 fw-bold">Selamat Datang di Desa Wisata</h1>
            <p class="lead">Nikmati pesona alam, budaya, dan keramahan masyarakat desa</p>
            <a href="#homestay" class="btn btn-success btn-lg">Booking Homestay</a>
        </div>
    </header>

    <!-- Profil Desa -->
    <section id="profil" class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Profil Desa</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>{{ $profilDesa['deskripsi'] }}</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('resource/img/' . $profilDesa['gambar']) }}" alt="" width="300px">
                </div>
            </div>
        </div>
    </section>

    <!-- Wisata -->
    <section id="wisata" class="bg-light py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Objek Wisata</h2>
            <div class="row g-4">
                @foreach ($objekWisata as $o)
                <div class="col-md-4">
                    <div class="card">
                        <h2>{{ $o['nama'] }}</h2>
                        <p>{{ $o['deskripsi'] }}</p>
                        <img src="{{ asset('resource/img/'.$o['gambar']) }}" alt="" width="200px">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-success text-white text-center py-3">
        <p class="mb-0">&copy; 2025 Desa Wisata. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>