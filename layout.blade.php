<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Anak Babeh - Website Resmi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1000') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 60px 0;
        }
        .section-padding { padding: 50px 0; }
        .card-custom { border: none; transition: transform 0.2s; }
        .card-custom:hover { transform: translateY(-5px); }
    </style>
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-success" href="{{ url('/') }}">🏪 KANTIN ANAK BABEH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="{{ url('/profil') }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="{{ url('/artikel') }}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="{{ url('/galeri') }}">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
                <a href="{{ url('/login') }}" class="btn btn-success btn-sm px-3 rounded-pill fw-bold">🔒 Login Admin</a>
            </div>
        </div>
    </nav>

    <!-- BAGIAN KONTEN DINAMIS -->
    <div class="flex-grow-1">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3 border-top border-success border-3 mt-auto">
        <div class="container">
            <p class="mb-0 small">&copy; 2026 <strong>Kantin Anak Babeh</strong>. All Rights Reserved.</p>
            <small class="text-muted" style="font-size: 11px;">Sistem Informasi Berbasis Laravel & Termux Android | Universitas Pamulang</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>