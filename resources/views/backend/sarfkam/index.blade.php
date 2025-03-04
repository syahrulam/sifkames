@extends('layoutbackend.master')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Kegiatan Gebermas</h4>
                </div>
                <div class="card-body">



                    <!-- Tombol Tambah Kegiatan -->
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('admin.gebermas.create') }}" class="btn btn-primary">Tambah Kegiatan</a>
                    </div>
                    <!-- Notifikasi Sukses -->
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
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
                                    <td>{{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" width="100">
                                    </td>
                                    <td>
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('admin.gebermas.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                        <!-- Form Tombol Delete -->
                                        <form action="{{ route('admin.gebermas.destroy', $item->id) }}" method="POST" style="display:inline-block;" id="delete-form-{{ $item->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $item->id }})">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- End .card-body -->
            </div> <!-- End .card -->
        </div> <!-- End .col-12 -->
    </div> <!-- End .row -->
</section>

<script>
    function confirmDelete(itemId) {
        if (confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')) {
            document.getElementById('delete-form-' + itemId).submit();
        }
    }
</script>
@endsection
