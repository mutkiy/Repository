<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Kantin Anak Babeh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-menu {
            transition: transform 0.2s, box-shadow 0.2s;
            border: none;
            border-radius: 15px;
        }
        .card-menu:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        body {
            background-color: #f4f6f9;
        }
    </style>
</head>
<body>

    <!-- NAVBAR DASHBOARD -->
    <nav class="navbar navbar-dark bg-dark shadow-sm mb-4">
        <div class="container">
            <span class="navbar-brand fw-bold text-success">🏪 KANTIN ANAK BABEH (ADMIN)</span>
            <form action="{{ url('/logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm px-3 rounded-pill fw-bold shadow-sm">
                    🚪 Logout
                </button>
            </form>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <main class="container">
        <!-- Selamat Datang Banner -->
        <div class="bg-white p-4 rounded-4 shadow-sm mb-4 border-start border-success border-5">
            <h2 class="fw-bold text-dark mb-1">Selamat Datang di Dashboard Admin Kantin!</h2>
            <p class="text-muted mb-0 small">Sistem autentikasi & kontrol middleware manual berhasil berjalan dengan aman.</p>
        </div>

        <h5 class="fw-bold text-secondary mb-3">🛠️ Menu Manajemen Sistem</h5>

        <!-- KARTU NAVIGASI UTAMA -->
        <div class="row g-4">
            <!-- 1. Kelola Menu CRUD Produk -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm card-menu bg-white">
                    <div class="card-body d-flex flex-column justify-content-between p-4">
                        <div>
                            <div class="fs-1 mb-2">🍔</div>
                            <h4 class="fw-bold text-dark">1. Kelola Menu CRUD Produk</h4>
                            <p class="text-muted small">Tambah menu makanan baru, unggah foto masakan, edit harga, atau hapus item menu kantin secara real-time.</p>
                        </div>
                        <div class="mt-3">
                            <a href="{{ url('/admin/produk') }}" class="btn btn-primary w-100 py-2 fw-bold rounded-3">
                                Buka Manajemen Produk →
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Menu Transaksi Kasir & Riwayat -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm card-menu bg-white">
                    <div class="card-body d-flex flex-column justify-content-between p-4">
                        <div>
                            <div class="fs-1 mb-2">💰</div>
                            <h4 class="fw-bold text-success">2. Menu Transaksi Kasir & Riwayat</h4>
                            <p class="text-muted small">Catat pesanan pembeli, hitung kalkulasi kembalian otomatis, simpan transaksi, dan cetak nota struk PDF.</p>
                        </div>
                        <div class="mt-3">
                            <a href="{{ url('/admin/transaksi') }}" class="btn btn-success w-100 py-2 fw-bold rounded-3">
                                Buka Aplikasi Kasir →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- INFO FOOTER ALUMNI / MAHASISWA -->
        <div class="text-center mt-5 pt-4 border-top text-muted">
            <small style="font-size: 11px;">Sistem Informasi Manajemen Kantin — Universitas Pamulang</small>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>