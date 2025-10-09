<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata & Homestay Desa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2E8B57;
            --primary-light: #3CB371;
            --primary-dark: #1F5E3D;
            --accent: #50C878;
            --light: #F8FFF8;
            --dark: #1A3C27;
            --text: #333333;
            --text-light: #6C757D;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text);
            padding-top: 50px;
            /* Remove padding-top */
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark)) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.8rem;
            display: flex;
            align-items: center;
        }

        .navbar-brand i {
            margin-right: 10px;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            padding: 150px 0 120px;
            /* Adjusted padding */
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
            margin-top: 0;
            /* Ensure no margin */
        }

        .btn-success {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .section-title {
            position: relative;
            margin-bottom: 3rem;
            color: var(--primary-dark);
            font-weight: 700;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--accent);
            border-radius: 2px;
        }

        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            color: var(--primary-dark);
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .card-text {
            color: var(--text-light);
        }

        .section-bg {
            background-color: var(--light);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .feature-box {
            text-align: center;
            padding: 2rem 1rem;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .feature-box:hover {
            background-color: white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .feature-title {
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 1rem;
        }

        footer {
            background: linear-gradient(135deg, var(--primary-dark), var(--dark));
            color: white;
            padding: 3rem 0 1.5rem;
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--accent);
            transform: translateY(-3px);
        }

        .footer-links h5 {
            margin-bottom: 1.2rem;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h5:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--accent);
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.7rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--accent);
            padding-left: 5px;
        }

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            margin-top: 2rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .profil-img {
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .profil-img:hover {
            transform: scale(1.02);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .profil-text {
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .badge-success {
            background-color: var(--primary-light);
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 120px 0 80px;
                /* Adjusted for mobile */
            }

            .hero-section h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-tree"></i>Desa Wisata
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#wisata">Wisata</a></li>
                    <li class="nav-item"><a class="nav-link" href="#homestay">Homestay</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="hero-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Selamat Datang di Desa Wisata</h1>
                    <p class="lead mb-5">Nikmati pesona alam, budaya, dan keramahan masyarakat desa yang menawan</p>
                    <a href="{{ route("login") }}" class="btn btn-success btn-lg me-3">Login untuk Booking</a>
                    <a href="#wisata" class="btn btn-outline-light btn-lg">Jelajahi Wisata</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Fitur Unggulan -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <h3 class="feature-title">Pemandangan Alam</h3>
                        <p>Nikmati keindahan alam pedesaan yang masih asri dan menyejukkan mata.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3 class="feature-title">Kuliner Tradisional</h3>
                        <p>Cicipi kelezatan kuliner khas desa yang dibuat dengan bahan-bahan alami.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="feature-title">Budaya Lokal</h3>
                        <p>Kenali lebih dekat budaya dan tradisi masyarakat desa yang masih terjaga.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil Desa -->
    <section id="profil" class="py-5 section-bg">
        <div class="container">
            <h2 class="section-title text-center">Profil Desa</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1588666309990-d68f08e3d4a6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Desa Wisata" class="img-fluid profil-img">
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <h3 class="mb-4">Desa Wisata yang Menawan</h3>
                        <p class="profil-text mb-4">
                            Desa kami terletak di kawasan pegunungan yang asri dengan udara sejuk dan pemandangan yang memukau.
                            Sejak dahulu, masyarakat desa hidup dengan menjaga kelestarian alam dan budaya leluhur.
                        </p>
                        <p class="profil-text mb-4">
                            Dengan hamparan sawah hijau, aliran sungai jernih, dan keramahan penduduk lokal, desa kami menjadi
                            destinasi ideal untuk melepas penat dari hiruk-pikuk kota.
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge badge-success p-2">Alam Asri</span>
                            <span class="badge badge-success p-2">Budaya Tradisional</span>
                            <span class="badge badge-success p-2">Kuliner Khas</span>
                            <span class="badge badge-success p-2">Homestay Nyaman</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h4 class="mb-3"><i class="fas fa-tree me-2"></i>Desa Wisata</h4>
                    <p class="mb-4">Menjadi destinasi wisata pedesaan yang menawarkan pengalaman autentik dengan alam, budaya, dan keramahan masyarakat lokal.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0 footer-links">
                    <h5>Menu</h5>
                    <ul>
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#profil">Profil Desa</a></li>
                        <li><a href="#wisata">Objek Wisata</a></li>
                        <li><a href="#homestay">Homestay</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 footer-links">
                    <h5>Layanan</h5>
                    <ul>
                        <li><a href="#">Pemandu Wisata</a></li>
                        <li><a href="#">Paket Wisata</a></li>
                        <li><a href="#">Kuliner Desa</a></li>
                        <li><a href="#">Workshop Budaya</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 footer-links">
                    <h5>Kontak</h5>
                    <ul>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Desa Wisata, Kec. Alam Indah</li>
                        <li><i class="fas fa-phone me-2"></i> +62 812 3456 7890</li>
                        <li><i class="fas fa-envelope me-2"></i> info@desawisata.com</li>
                    </ul>
                </div>
            </div>
            <div class="copyright text-center">
                <p class="mb-0">&copy; 2025 Desa Wisata. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>