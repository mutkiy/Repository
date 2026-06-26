<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kegiatan - Kantin Anak Babeh</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f7f4ef; /* Cream hangat premium */
            color: #3e3832;
            letter-spacing: -0.02em;
        }

        /* NAVBAR PREMIUM */
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
            transition: background-color 0.2s ease;
        }
        .btn-login-admin:hover {
            background-color: #c07d53;
        }

        /* HERO HEADER (Clean Typography) */
        .hero-section {
            padding: 9rem 1rem 5rem;
            background-color: #fffdfa;
            border-bottom: 1px solid #e8e2d5;
        }
        .hero-title {
            font-size: 3rem;
            font-weight: 800;
            color: #2d2621;
            letter-spacing: -0.04em;
            margin-bottom: 1.2rem;
        }
        .hero-subtitle {
            font-size: 1.1rem;
            color: #7a6e65;
            max-width: 680px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* CARD GALERI MODEL BERITA */
        .galeri-card {
            background: #fffdfa;
            border: 1px solid #e8e2d5;
            border-radius: 16px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
        }
        .galeri-card:hover {
            transform: translateY(-4px);
            border-color: #c07d53;
            box-shadow: 0 12px 24px rgba(62, 56, 50, 0.04);
        }
        
        /* AREA UNTUK MEMASANG FOTO */
        .galeri-img-box {
            height: 240px;
            overflow: hidden;
            background-color: #f2ede4;
            border-bottom: 1px solid #e8e2d5;
            position: relative;
        }
        .galeri-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Placeholder estetik jika foto di asset belum dimasukkan */
        .galeri-img-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a3968a;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            text-align: center;
            padding: 1rem;
        }

        .galeri-body {
            padding: 1.5rem;
            text-center: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            background-color: #fffdfa;
        }

        .galeri-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #2d2621;
            line-height: 1.4;
            letter-spacing: -0.01em;
            margin-bottom: 0;
            text-align: center;
        }

        /* FOOTER DENGAN PEMBATAS TEGAS */
        footer {
            background-color: #fffdfa;
            border-top: 1px solid #dcd3c4;
            color: #7a6e65;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a class="navbar-brand" href="#">KANTIN ANAK BABEH</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-1 align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/berita') }}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/galeri') }}">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                    <li class="nav-item ms-lg-2">
                        <a class="nav-link btn-login-admin" href="{{ url('/login') }}">Login Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="hero-title">Galeri Foto Kegiatan</h1>
            <p class="hero-subtitle">Dokumentasi suasana, menu hidangan, dan keceriaan di Kantin Anak Babeh</p>
        </div>
    </header>

    <main class="container py-5 my-2">
        <div class="row g-4">
            
            <div class="col-md-4 col-sm-6">
                <div class="galeri-card">
                    <div class="galeri-img-box">
                        <img src="{{ asset('images/galeri_makan_siang.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Persiapan Menu Makan Siang">
                        <div class="galeri-img-placeholder" style="display:none;">Pratinjau Foto Makan Siang</div>
                    </div>
                    <div class="galeri-body">
                        <h5 class="galeri-title">Persiapan Menu Makan Siang</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="galeri-card">
                    <div class="galeri-img-box">
                        <img src="{{ asset('images/galeri_es_segar.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Varian Es Segar Pelepas Dahaga">
                        <div class="galeri-img-placeholder" style="display:none;">Pratinjau Foto Es Segar</div>
                    </div>
                    <div class="galeri-body">
                        <h5 class="galeri-title">Varian Es Segar Pelepas Dahaga</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="galeri-card">
                    <div class="galeri-img-box">
                        <img src="{{ asset('images/galeri_gorengan.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Gorengan Renyah Dadakan">
                        <div class="galeri-img-placeholder" style="display:none;">Pratinjau Foto Gorengan</div>
                    </div>
                    <div class="galeri-body">
                        <h5 class="galeri-title">Gorengan Renyah Dadakan</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="galeri-card">
                    <div class="galeri-img-box">
                        <img src="{{ asset('images/galeri_kebersihan.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Sterilisasi & Kebersihan Dapur">
                        <div class="galeri-img-placeholder" style="display:none;">Pratinjau Foto Kebersihan Dapur</div>
                    </div>
                    <div class="galeri-body">
                        <h5 class="galeri-title">Sterilisasi & Kebersihan Dapur</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="galeri-card">
                    <div class="galeri-img-box">
                        <img src="{{ asset('images/galeri_kasir.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Pelayanan Ramah Transaksi Kasir">
                        <div class="galeri-img-placeholder" style="display:none;">Pratinjau Foto Transaksi Kasir</div>
                    </div>
                    <div class="galeri-body">
                        <h5 class="galeri-title">Pelayanan Ramah Transaksi Kasir</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="galeri-card">
                    <div class="galeri-img-box">
                        <img src="{{ asset('images/galeri_istirahat.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Suasana Santai Istirahat Siswa">
                        <div class="galeri-img-placeholder" style="display:none;">Pratinjau Foto Istirahat Siswa</div>
                    </div>
                    <div class="galeri-body">
                        <h5 class="galeri-title">Suasana Santai Istirahat Siswa</h5>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer class="text-center py-4 mt-5">
        <div class="container">
            <span>© 2026 Kantin Anak Babeh — Universitas Pamulang</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>