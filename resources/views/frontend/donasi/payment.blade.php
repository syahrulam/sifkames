@extends('layoutfrontend.master')
@section('title', 'Payment')
@section('content')

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <div class="card-header">
            <h2 class="text-center">Konfirmasi Donasi Anda</h2>
        </div>
        <div class="card-body">
            <!-- Konfirmasi Data Donasi yang diisi -->
            <div class="transaction-info">
                <p><strong>Nama Pemdonasi: </strong> {{ $donasi->nama_pemdonasi }}</p>
                <p><strong>Email: </strong> {{ $donasi->email_pemdonasi }}</p>
                <p><strong>Nomor Telepon: </strong> {{ $donasi->telepon_pemdonasi }}</p>
                <p><strong>Jumlah Donasi: </strong> Rp {{ number_format($donasi->jumlah_donasi, 0, ',', '.') }}</p>
                <p><strong>Metode Pembayaran: </strong> {{ ucfirst($donasi->metode_pembayaran) }}</p>
                <p><strong>Donasi sebagai anonim: </strong> {{ $donasi->anonim ? 'Ya' : 'Tidak' }}</p>
            </div>

            <div class="mt-4">
                <button id="pay-button" class="btn btn-success w-100 py-2">Bayar Sekarang</button>
            </div>

            <!-- Script untuk menggunakan Snap Midtrans -->
            <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

            <!-- Status Transaksi -->
            <div id="transaction-status" class="alert mt-3" style="display:none;"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.getElementById('pay-button').onclick = function () {
        snap.pay('{{ $snapToken }}', {
            onSuccess: function (result) {
                document.getElementById('transaction-status').style.display = 'block';
                document.getElementById('transaction-status').classList.add('alert-success');
                document.getElementById('transaction-status').innerHTML = "Transaksi berhasil!";  // Hanya menampilkan pesan berhasil
            },
            onPending: function (result) {
                document.getElementById('transaction-status').style.display = 'block';
                document.getElementById('transaction-status').classList.add('alert-warning');
                document.getElementById('transaction-status').innerHTML = "Transaksi tertunda!";  // Menampilkan hanya pesan "Transaksi tertunda!"
            },
            onError: function (result) {
                document.getElementById('transaction-status').style.display = 'block';
                document.getElementById('transaction-status').classList.add('alert-danger');
                document.getElementById('transaction-status').innerHTML = "Transaksi gagal!";  // Menampilkan hanya pesan gagal
            }
        });
    }
</script>

@endsection
