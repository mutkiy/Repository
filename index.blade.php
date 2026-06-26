<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Menu Kantin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Daftar Menu Kantin Anak Babeh</h2>
            <div>
                <a href="{{ url('/admin/dashboard') }}" class="btn btn-secondary">Kembali ke Dashboard</a>
                <a href="{{ url('/admin/produk/create') }}" class="btn btn-primary">Tambah Menu Baru</a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th width="5%">No</th>
                            <th width="20%">Foto Menu</th>
                            <th>Nama Menu</th>
                            <th>Harga</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($produks as $index => $produk)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    @if($produk->foto)
                                        <img src="{{ asset('produk/' . $produk->foto) }}" alt="Foto Menu" class="img-thumbnail" style="max-height: 80px;">
                                    @else
                                        <span class="text-muted">Tidak ada foto</span>
                                    @endif
                                </td>
                                <td><strong>{{ $produk->nama_produk }}</strong></td>
                                <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                                <td>
                                    <a href="{{ url('/admin/produk/'.$produk->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                    
                                    <form action="{{ url('/admin/produk/'.$produk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Belum ada data menu makanan/minuman.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>