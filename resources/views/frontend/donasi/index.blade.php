@extends('layoutfrontend.master')
@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Form Donasi</h2>
        <form action="{{ route('donasi.proses') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_pemdonasi" class="form-label">Nama Pemdonasi</label>
                <input type="text" class="form-control" id="nama_pemdonasi" name="nama_pemdonasi" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_donasi" class="form-label">Jumlah Donasi (Rp)</label>
                <input type="number" class="form-control" id="jumlah_donasi" name="jumlah_donasi" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Kirim Donasi</button>
        </form>
    </div>
</div>
@endsection