@extends('layoutfrontend.master')
@section('title', 'Donasi')
@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Form Donasi</h2>
        <form action="{{ route('donasi.proses') }}" method="POST">
            @csrf
            <!-- Informasi Pendonasi -->
            <div class="mb-3">
                <label for="nama_pemdonasi" class="form-label">Nama Pemdonasi</label>
                <input type="text" class="form-control" id="nama_pemdonasi" name="nama_pemdonasi" required>
            </div>
            <div class="mb-3">
                <label for="email_pemdonasi" class="form-label">Email</label>
                <input type="email" class="form-control" id="email_pemdonasi" name="email_pemdonasi" required>
            </div>
            <div class="mb-3">
                <label for="telepon_pemdonasi" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="telepon_pemdonasi" name="telepon_pemdonasi" required>
            </div>

            <!-- Detail Donasi -->
            <div class="mb-3">
                <label for="jumlah_donasi" class="form-label">Jumlah Donasi (Rp)</label>
                <input type="number" class="form-control" id="jumlah_donasi" name="jumlah_donasi" required>
            </div>
            <div class="mb-3">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
                    <option value="" disabled selected>Pilih Metode Pembayaran</option>
                    <option value="transfer_bank">Transfer Bank</option>
                    <option value="ewallet">E-Wallet</option>
                    <option value="kartu_kredit">Kartu Kredit</option>
                    <option value="qris">QRIS</option>
                </select>
            </div>

            <!-- Opsi Anonimitas -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="anonim" name="anonim">
                <label class="form-check-label" for="anonim">Donasi sebagai anonim</label>
            </div>

            <button type="submit" class="btn btn-success w-100">Kirim Donasi</button>
        </form>
    </div>
</div>
@endsection
