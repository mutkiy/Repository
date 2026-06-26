<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Anak Babeh - Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset("images/bg-login.jpg") }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-login {
            background: rgba(255, 255, 255, 0.85); /* Transparansi kartu utama */
            border: none;
            border-radius: 20px;
            backdrop-filter: blur(8px);
        }
        /* GAYA TRANSPARAN UNTUK KOLOM INPUT EMAIL & PW */
        .form-transparan {
            background: rgba(255, 255, 255, 0.5) !important; /* Latar kolom transparan */
            border: 1px solid rgba(0, 0, 0, 0.1) !important;
            border-radius: 10px;
            color: #333 !important;
            transition: all 0.3s ease;
        }
        /* Efek saat kolom diklik / fokus */
        .form-transparan:focus {
            background: rgba(255, 255, 255, 0.9) !important;
            border-color: #0d6efd !important;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25) !important;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 px-4">
                
                <div class="card card-login shadow-lg p-4">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold text-primary mb-1">Kantin Anak Babeh</h3>
                            <p class="text-muted small">Silahkan login untuk masuk ke halaman admin</p>
                        </div>

                        <!-- Menampilkan pesan error jika login gagal -->
                        @if($errors->any())
                            <div class="alert alert-danger py-2 small">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form action="{{ url('/login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label small fw-bold text-secondary">Alamat Email</label>
                                <input type="email" name="email" class="form-control from-transparan" placeholder="admin@gmail.com" required value="{{ old('email') }}">
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label small fw-bold text-secondary">Password</label>
                                <input type="password" name="password" class="form-control form-transparan" placeholder="••••••••" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold rounded-3 shadow-sm">Masuk</button>
                        </form>
                        
                        <div class="text-center mt-3">
                            <a href="{{ url('/') }}" class="text-decoration-none small text-secondary">← Kembali ke Utama</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>