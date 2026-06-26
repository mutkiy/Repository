<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita & Kegiatan - Kantin Anak Babeh</title>
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

        /* HERO HEADER (Garis & Tipografi Bersih) */
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

        /* CARD BERITA MODERN */
        .blog-card {
            background: #fffdfa;
            border: 1px solid #e8e2d5;
            border-radius: 16px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
        }
        .blog-card:hover {
            transform: translateY(-4px);
            border-color: #c07d53;
            box-shadow: 0 12px 24px rgba(62, 56, 50, 0.04);
        }
        
        /* AREA UNTUK MEMASANG FOTO BERITA */
        .blog-img-box {
            height: 200px;
            overflow: hidden;
            background-color: #f2ede4;
            border-bottom: 1px solid #e8e2d5;
            position: relative;
        }
        .blog-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Jika foto belum ada, box ini menjadi placeholder estetik bertuliskan nama kategori */
        .blog-img-placeholder {
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
        }

        .blog-body {
            padding: 1.75rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        
        /* METADATA (Kategori & Tanggal) */
        .blog-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        .badge-category {
            font-size: 0.75rem;
            font-weight: 600;
            color: #c07d53;
            background-color: #fcf3ed;
            padding: 0.3rem 0.7rem;
            border-radius: 6px;
        }
        .blog-date {
            font-size: 0.8rem;
            color: #a3968a;
            font-weight: 500;
        }

        .blog-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #2d2621;
            line-height: 1.4;
            letter-spacing: -0.02em;
            margin-bottom: 0.8rem;
        }
        .blog-text {
            color: #61564d;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* FOOTER DENGAN PEMBATAS TEGAS */
        footer {
            background-color: #fffdfa;
            border-top: 1px solid #dcd3c4; /* Garis abu-babeh pembatas tegas rapi */
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
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/berita') }}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/galeri') }}">Galeri</a></li>
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
            <h1 class="hero-title">Berita & Kegiatan Kantin</h1>
            <p class="hero-subtitle">Ikuti kabar terbaru, inovasi menu, dan aktivitas seru seputar Kantin Anak Babeh</p>
        </div>
    </header>

    <main class="container py-5 my-2">
        <div class="row g-4">
            
            <div class="col-md-6">
                <div class="blog-card">
                    <div class="blog-img-box">
                        <img src="{{ asset('images/es_segar.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Es Minuman Segar">
                        <div class="blog-img-placeholder" style="display:none;">Foto Pengumuman Menu</div>
                    </div>
                    <div class="blog-body">
                        <div class="blog-meta">
                            <span class="badge-category">Pengumuman Menu</span>
                            <span class="blog-date">26 Juni 2026</span>
                        </div>
                        <h4 class="blog-title">Peluncuran Varian Es Minuman Segar Baru Musim Kemarau</h4>
                        <p class="blog-text">
                            Menyambut cuaca terik tengah tahun, Kantin Anak Babeh resmi merilis 3 varian rasa es buah racikan rumahan baru. Semua produk diolah menggunakan sirup gula asli berkualitas demi menjaga kebugaran dan tenggorokan para pelanggan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="blog-card">
                    <div class="blog-img-box">
                        <img src="{{ asset('images/kasir_digital.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Kasir Digital">
                        <div class="blog-img-placeholder" style="display:none;">Foto Kegiatan Digital</div>
                    </div>
                    <div class="blog-body">
                        <div class="blog-meta">
                            <span class="badge-category">Kegiatan Digital</span>
                            <span class="blog-date">20 Juni 2026</span>
                        </div>
                        <h4 class="blog-title">Implementasi Sistem Kasir Digital Terintegrasi di Kantin</h4>
                        <p class="blog-text">
                            Guna mendukung mata kuliah Sistem Informasi, manajemen Kantin Anak Babeh menguji coba implementasi modul kalkulator kasir otomatis berbasis web guna mempercepat antrean pembayaran dan rekapitulasi nota belanja.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="blog-card">
                    <div class="blog-img-box">
                        <img src="{{ asset('images/bahan_baku.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Bahan Baku Segar">
                        <div class="blog-img-placeholder" style="display:none;">Foto Standar Higienis</div>
                    </div>
                    <div class="blog-body">
                        <div class="blog-meta">
                            <span class="badge-category">Standar Higienis</span>
                            <span class="blog-date">15 Juni 2026</span>
                        </div>
                        <h4 class="blog-title">Komitmen Penggunaan Bahan Baku Segar Tanpa Pengawet</h4>
                        <p class="blog-text">
                            Kami melakukan sterilisasi area masak secara berkala dan memastikan seluruh sayur tahu isi serta adonan bala-bala diproduksi fresh subuh hari. Kesehatan pencernaan konsumen kantin adalah prioritas nomor satu kami.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="blog-card">
                    <div class="blog-img-box">
                        <img src="{{ asset('images/berbagi_jumat.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Berbagi Cemilan">
                        <div class="blog-img-placeholder" style="display:none;">Foto Aksi Sosial</div>
                    </div>
                    <div class="blog-body">
                        <div class="blog-meta">
                            <span class="badge-category">Aksi Sosial</span>
                            <span class="blog-date">05 Juni 2026</span>
                        </div>
                        <h4 class="blog-title">Kegiatan Rutin Berbagi Cemilan Hangat di Hari Jumat</h4>
                        <p class="blog-text">
                            Sebagai bentuk rasa syukur atas kelancaran usaha bersama keluarga, Kantin Anak Babeh mengadakan program berkah mingguan berupa bonus porsi gorengan bagi para pembeli setia yang melakukan transaksi di hari Jumat penuh kebaikan.
                        </p>
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