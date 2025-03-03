@extends('layoutbackend.master')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Daftar Kegiatan Gebermas</h2>

    <!-- Notifikasi Sukses -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.gebermas.create') }}" class="btn btn-primary mb-3">Tambah Kegiatan</a>

    <table class="table table-striped table-bordered">
        <thead class="table-primary text-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="img-thumbnail" width="100">
                    </td>
                    <td>
                        <div class="btn-group">
                            <!-- Tombol Edit -->
                            <a href="{{ route('admin.gebermas.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <!-- Tombol Hapus -->
                            <form action="{{ route('admin.gebermas.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus kegiatan ini?')" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
