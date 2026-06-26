<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Anak Babeh - Homemade Kehangatan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f7f4ef; /* Warna cream hangat yang sangat kalem dan tidak bikin silau */
            color: #3e3832; /* Warna teks cokelat gelap pekat, lebih lembut dari hitam murni */
            letter-spacing: -0.02em;
        }

        .navbar {
            background-color: rgba(247, 244, 239, 0.85) !important; /* Senada dengan background body */
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
            color: #c07d53 !important; /* Warna aksen terracotta pudar yang hangat */
        }
        .btn-login-admin {
            background-color: #2d2621; /* Cokelat tua elegan */
            color: #f7f4ef !important;
            font-weight: 600;
            font-size: 0.9rem;
            border-radius: 8px;
            padding: 0.5rem 1.2rem !important;
            transition: opacity 0.2s ease;
        }
        .btn-login-admin:hover {
            opacity: 0.9;
        }

        /* HERO SECTION */
        .hero-section {
            padding: 7rem 1rem 5rem; /* Sedikit mengurangi whitespace vertikal */
            background-color: #fffdfa; /* Putih susu hangat murni untuk kontras lembut */
            border-bottom: 1px solid #e8e2d5;
        }
        .hero-title {
            font-size: 3.25rem;
            font-weight: 800;
            color: #2d2621;
            line-height: 1.15;
            letter-spacing: -0.04em;
            margin-bottom: 1.5rem;
        }
        .hero-subtitle {
            font-size: 1.15rem;
            color: #7a6e65;
            max-width: 680px;
            margin: 0 auto;
            line-height: 1.7;
            font-weight: 400;
        }

        /* MENU SECTION */
        .section-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #2d2621;
            letter-spacing: -0.03em;
            margin-bottom: 2.5rem;
        }
        .menu-card {
            background: #fffdfa;
            border: 1px solid #e8e2d5;
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.2s ease, border-color 0.2s ease;
        }
        .menu-card:hover {
            transform: translateY(-4px);
            border-color: #c07d53;
        }
        .menu-preview-box {
            height: 180px;
            background-color: #fcfbf7;
            border-bottom: 1px solid #e8e2d5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
        }
        .badge-kategori {
            background-color: #f0eae1;
            border: 1px solid #dcd3c4;
            color: #61564d;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 0.35rem 0.75rem;
            border-radius: 6px;
        }
        .harga-tag {
            color: #2d2621;
            font-size: 1.15rem;
            font-weight: 700;
            letter-spacing: -0.02em;
        }
        .card-body {
            padding: 1.75rem;
        }

        footer {
            background-color: #fffdfa;
            border-top: 1px solid #e8e2d5;
            color: #aba096;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                KANTIN ANAK BABEH
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-1 align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
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

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="hero-title">Selamat Datang di Kantin Anak Babeh</h1>
            <p class="hero-subtitle">
                Menyediakan aneka minuman segar pelepas dahaga dan cemilan gorengan hangat buatan rumahan yang lezat! Cocok buat nemenin waktu santai kamu.
            </p>
        </div>
    </header>

<main class="container text-center py-5 my-4">
    <h2 class="section-title">Menu Makanan & Minuman Hari Ini</h2>
    
    <div class="row g-4 justify-content-center text-start">
@foreach($produks as $produk)
<div class="col-md-4 col-sm-6">
    <div class="card menu-card h-100">
        <div class="menu-preview-box">
            @if($produk->foto)
                <img src="{{ asset('produk/'.$produk->foto) }}" alt="{{ $produk->nama_produk }}" class="w-100 h-100" style="object-fit: cover;">
            @else
                <div class="w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #f2ede4; font-size: 2rem;">
                    🍤
                </div>
            @endif
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge-kategori" style="background-color: #fcf3ed; color: #c07d53; font-size: 0.75rem; font-weight: 600; padding: 0.3rem 0.7rem; border-radius: 6px;">
                        {{ $produk->category ?? $produk->kategori ?? 'Menu' }}
                    </span>
                    <span class="harga-tag" style="font-weight: 700; color: #2d2621;">
                        Rp {{ number_format($produk->harga, 0, ',', '.') }}
                    </span>
                </div>
                <h5 class="fw-bold text-dark mb-2" style="letter-spacing: -0.02em;">{{ $produk->nama_produk }}</h5>
                <p class="text-muted small mb-0" style="line-height: 1.6;">{{ $produk->description ?? $produk->deskripsi ?? '' }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
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