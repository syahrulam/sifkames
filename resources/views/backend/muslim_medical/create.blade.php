@extends('layoutbackend.master')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Kegiatan Muslim Medical</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.muslim_medical.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Input Judul -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>

                        <!-- Input Tanggal -->
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>

                        <!-- Input Gambar -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" name="image" id="image" class="form-control" required>
                        </div>

                        <!-- Input Konten -->
                        <div class="mb-3">
                            <label for="content" class="form-label">Konten</label>
                            <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
                        </div>

                        <!-- Tombol Simpan -->
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('admin.muslim_medical.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div> <!-- End .card-body -->
            </div> <!-- End .card -->
        </div> <!-- End .col-12 -->
    </div> <!-- End .row -->
</section>
@endsection
