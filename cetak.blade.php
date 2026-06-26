<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Nota - {{ $transaksi->kode_transaksi }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Courier New', Courier, monospace; color: #000; background-color: #fff; }
        .ticket { max-width: 400px; margin: 20px auto; padding: 15px; border: 1px dashed #000; }
        @media print {
            body { background-color: #fff; }
            .ticket { border: none; max-width: 100%; margin: 0; padding: 0; }
            .btn-print { display: none; }
        }
    </style>
</head>
<body>

    <div class="container text-center mt-3 btn-print">
        <button onclick="window.print()" class="btn btn-primary btn-sm shadow-sm">🖨️ Cetak / Simpan PDF</button>
        <a href="{{ url('/admin/transaksi') }}" class="btn btn-secondary btn-sm shadow-sm">Kembali</a>
    </div>

    <div class="ticket">
        <div class="text-center mb-3">
            <h4 class="fw-bold mb-0">KANTIN ANAK BABEH</h4>
            <small class="text-muted">Tangerang, Banten</small>
            <p class="mb-0 small">Sistem Informasi Manajemen Kantin</p>
        </div>

        <div class="small border-bottom border-secondary pb-2 mb-2">
            <div><strong>Nota  :</strong> {{ $transaksi->kode_transaksi }}</div>
            <div><strong>Waktu :</strong> {{ $transaksi->created_at->format('d-M-Y H:i') }} WIB</div>
        </div>

        <table class="table table-borderless table-sm small mb-2">
            <thead>
                <tr class="border-bottom border-secondary">
                    <th>Menu</th>
                    <th class="text-center">Qty</th>
                    <th class="text-end">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaksi->details as $detail)
                    <tr>
                        <td>{{ $detail->produk->nama_produk }}</td>
                        <td class="text-center">{{ $detail->jumlah }}</td>
                        <td class="text-end">Rp {{ number_format($detail->subtotal, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="border-top border-secondary pt-2 small">
            <div class="d-flex justify-content-between">
                <span>Total Belanja:</span>
                <span class="fw-bold">Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</span>
            </div>
            <div class="d-flex justify-content-between">
                <span>Tunai/Bayar:</span>
                <span>Rp {{ number_format($transaksi->bayar, 0, ',', '.') }}</span>
            </div>
            <div class="d-flex justify-content-between border-top border-secondary pt-1 mt-1 fw-bold">
                <span>Kembalian:</span>
                <span>Rp {{ number_format($transaksi->kembali, 0, ',', '.') }}</span>
            </div>
        </div>

        <div class="text-center mt-4 border-top border-secondary pt-3">
            <p class="small mb-0 fw-bold">~ Terima Kasih Atas Kunjungannya ~</p>
            <small class="text-muted text-center" style="font-size: 10px;">Powered by Universitas Pamulang</small>
        </div>
    </div>

    <script>
        window.onload = function() {
            // Uncomment baris di bawah jika ingin otomatis pop-up cetak saat diklik
            // window.print();
        }
    </script>
</body>
</html>