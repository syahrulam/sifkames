@extends('layoutbackend.master')

@section('title', 'Data Donasi')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header">
            <h4>Data Donasi</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pendonasi</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Jumlah Donasi</th>
                        <th>Metode</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($donasis as $index => $donasi)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $donasi->nama_pemdonasi }}</td>
                        <td>{{ $donasi->email_pemdonasi }}</td>
                        <td>{{ $donasi->telepon_pemdonasi }}</td>
                        <td>Rp {{ number_format($donasi->jumlah_donasi, 0, ',', '.') }}</td>
                        <td>{{ ucfirst($donasi->metode_pembayaran) }}</td>
                        <td>{{ ucfirst($donasi->status) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
