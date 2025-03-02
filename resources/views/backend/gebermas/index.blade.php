@extends('layoutbackend.master')

@section('content')
<div class="container mt-4">
    <h2>Daftar Kegiatan Gebermas</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.gebermas.create') }}" class="btn btn-primary mb-3">Tambah Kegiatan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->date }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" width="100">
                    </td>
                    <td>
                        <a href="{{ route('admin.gebermas.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.gebermas.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
