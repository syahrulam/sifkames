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

                    <!-- Notifikasi Sukses -->
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- Tombol Tambah Kegiatan -->
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('admin.gebermas.create') }}" class="btn btn-primary">Tambah Kegiatan</a>
                    </div>

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

                                        <!-- Tombol untuk memunculkan modal -->
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                            Hapus
                                        </button>

                                        <!-- Modal Konfirmasi Hapus -->
                                        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" 
                                             aria-labelledby="deleteModalLabel{{ $item->id }}" 
                                             aria-hidden="true" 
                                             data-bs-backdrop="static" 
                                             data-bs-keyboard="false">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Konfirmasi Hapus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus kegiatan <strong>{{ $item->title }}</strong>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <form action="{{ route('admin.gebermas.destroy', $item->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal -->
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
@endsection
