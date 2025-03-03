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

                <!-- Tabel Data Kegiatan -->
                <div class="table-responsive">
                    <table id="kegiatanTable" class="table table-striped">
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
            </div>
        </div>
    </div>
  </div>
</section>

<!-- Script DataTables -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#kegiatanTable').DataTable({
            "paging": true, // Aktifkan pagination
            "pageLength": 5, // Batas data per halaman
            "lengthChange": false, // Hilangkan opsi untuk mengubah jumlah entri
            "searching": true, // Aktifkan pencarian
            "scrollY": "200px", // Gulir vertikal
            "scrollCollapse": true, // Gulir hanya muncul jika data melebihi tinggi
            "info": true, // Tampilkan informasi tabel
            "ordering": true // Aktifkan pengurutan kolom
        });
    });
</script>
@endsection
