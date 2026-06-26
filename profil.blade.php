<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Kantin Anak Babeh</title>
    <!-- Plus Jakarta Sans untuk kesan profesional dan clean -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f7f4ef; /* Warna cream hangat kalem */
            color: #3e3832;
            letter-spacing: -0.02em;
        }

        /* NAVBAR CLEAN & WARM */
        .navbar {
            background-color: rgba(247, 244, 239, 0.85) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid #e8e2d5;
        }
        .navbar-brand {
            font-size: 1.25rem;
            font-weight: 700;
            color: #2d2621 !important;
            letter-spacing: -0.03em;
        }
        .nav-link {
            color: #61564d !important;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.2s ease;
            padding: 0.5rem 1rem !important;
        }
        .nav-link:hover, .nav-link.active {
            color: #c07d53 !important;
        }
        .btn-login-admin {
            background-color: #2d2621;
            color: #f7f4ef !important;
            font-weight: 600;
            font-size: 0.9rem;
            border-radius: 8px;
            padding: 0.5rem 1.2rem !important;
        }

        /* HERO AREA SECTION */
        .hero-section {
            padding: 7rem 1rem 5rem;
            background-color: #fffdfa;
            border-bottom: 1px solid #e8e2d5;
        }
        .hero-title {
            font-size: 3.25rem;
            font-weight: 800;
            color: #2d2621;
            letter-spacing: -0.04em;
            margin-bottom: 1.5rem;
        }
        .hero-subtitle {
            font-size: 1.15rem;
            color: #7a6e65;
            max-width: 680px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* CARD STYLE MINIMALIS */
        .aesthetic-card {
            background: #fffdfa;
            border: 1px solid #e8e2d5;
            border-radius: 16px;
            padding: 2rem;
            transition: border-color 0.2s ease;
        }
        .aesthetic-card:hover {
            border-color: #c07d53;
        }
        .card-title-cute {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2d2621;
            margin-bottom: 1.25rem;
            letter-spacing: -0.03em;
        }
        .step-number {
            font-weight: 700;
            color: #c07d53;
            margin-right: 8px;
        }

        /* TEAM SECTION */
        .section-heading {
            font-size: 1.75rem;
            font-weight: 700;
            color: #2d2621;
            letter-spacing: -0.03em;
        }
        .member-role {
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #7a6e65;
            background-color: #f0eae1;
            border: 1px solid #dcd3c4;
            padding: 0.35rem 0.75rem;
            border-radius: 6px;
            display: inline-block;
            margin-top: 0.5rem;
        }
    </style>
</head>
<body>

    <!-- NAVBAR UTAMA -->
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a class="navbar-brand" href="#">KANTIN ANAK BABEH</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-1 align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/profil') }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/artikel') }}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/galeri') }}">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                    <li class="nav-item ms-lg-2">
                        <a class="nav-link btn-login-admin" href="{{ url('/login') }}">Login Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HEADER PROFIL -->
    <header class="hero-section text-center">
        <div class="container">
            <h1 class="hero-title">Profil Kantin Kita</h1>
            <p class="hero-subtitle">Kenali lebih dekat ruang rasa dan kehangatan hidangan kami</p>
        </div>
    </header>

    <!-- KONTEN UTAMA -->
    <main class="container py-5 my-4">
        <div class="row g-4">
            
            <!-- SEJARAH KANTIN -->
            <div class="col-lg-7">
                <div class="aesthetic-card h-100">
                    <h3 class="card-title-cute">Sejarah Singkat</h3>
                    <p style="line-height: 1.7; text-align: justify;" class="text-muted mb-0">
                        Kantin Anak Babeh berawal dari dedikasi tulus untuk menyajikan masakan rumah yang hangat, higienis, dan terjangkau di lingkungan sekolah serta kampus. Fokus utama kami adalah memastikan setiap pelanggan bisa menikmati aneka minuman segar pelepas dahaga dan cemilan gorengan gurih yang selalu digoreng dadakan setiap harinya. Kami percaya bahwa makanan yang dibuat dengan rasa kekeluargaan mampu memberikan energi positif untuk mendukung aktivitas belajar-mengajar.
                    </p>
                </div>
            </div>

            <!-- VISI & MISI -->
            <div class="col-lg-5">
                <div class="aesthetic-card h-100">
                    <h3 class="card-title-cute">Visi & Misi</h3>
                    <div class="mb-4">
                        <h6 class="fw-bold mb-1" style="color: #2d2621;">Visi:</h6>
                        <p class="small text-muted mb-0">Menjadi pusat kuliner sekolah pilihan utama yang memberikan kebahagiaan lewat rasa masakan otentik dan higienis.</p>
                    </div>
                    <div class="pt-2">
                        <h6 class="fw-bold mb-2" style="color: #2d2621;">Misi:</h6>
                        <div class="d-flex align-items-start mb-2">
                            <span class="step-number">1.</span>
                            <span class="small text-muted">Menyajikan porsi hidangan fresh dan berkualitas tinggi setiap harinya.</span>
                        </div>
                        <div class="d-flex align-items-start">
                            <span class="step-number">2.</span>
                            <span class="small text-muted">Mempertahankan harga ramah kantong yang bersahabat bagi pelajar dan mahasiswa.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- STRUKTUR TIM KANTIN -->
            <div class="col-12 mt-5 pt-3 text-center">
                <h3 class="section-heading mb-4">Tim Hebat di Balik Kantin Babeh</h3>
                <div class="row g-4 justify-content-center text-start">
                    <!-- Anggota 1 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="aesthetic-card text-center">
                            <h5 class="fw-bold mb-1" style="color: #2d2621;">Ulfah Muflihah Nudzakiyyah</h5>
                            <span class="member-role">Manajemen Produk & Gorengan</span>
                        </div>
                    </div>
                    <!-- Anggota 2 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="aesthetic-card text-center">
                            <h5 class="fw-bold mb-1" style="color: #2d2621;">Siti Muthmainnah nurdzakiyyah</h5>
                            <span class="member-role">Manajemen Keuangan</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="text-center py-4 mt-5">
        <div class="container">
            <span>© 2026 Kantin Anak Babeh — Universitas Pamulang</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>