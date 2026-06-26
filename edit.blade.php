<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Form Edit Menu Kantin</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('/admin/produk/'.$produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Menu Makanan / Minuman</label>
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}">
                        @error('nama_produk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga (Rupiah)</label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $produk->harga) }}">
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label class="form-label d-block">Foto Saat Ini:</label>
                        @if($produk->foto)
                            <img src="{{ asset('produk/' . $produk->foto) }}" alt="Foto Lama" class="img-thumbnail mb-2" style="max-height: 120px;">
                        @else
                            <p class="text-muted small">Belum ada foto</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="foto" class="form-label">Ganti Foto Baru (Kosongkan jika tidak diubah)</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ url('/admin/produk') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Perbarui Menu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>