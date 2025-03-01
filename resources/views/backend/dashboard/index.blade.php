@extends('layoutbackend.master')
@section('content')
<section class="section">
  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Dashboard</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <!-- Tombol Tambah Dokter -->
                <div class="d-flex justify-content-end mb-3">
                    <a href="#" class="btn btn-primary">Tambah</a>
                </div>

                <!-- Tabel Data Dokter -->
                <div class="table-responsive">
                    <table id="dokterTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>D</th>
                                <th>E</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                           </tr>    
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
        $('#dokterTable').DataTable({
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
