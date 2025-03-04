@extends('layoutbackend.master')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Kegiatan Gebermas</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.gebermas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" name="image" id="image" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Konten</label>
                            <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div> <!-- End .card-body -->
            </div> <!-- End .card -->
        </div> <!-- End .col-12 -->
    </div> <!-- End .row -->
</section>
@endsection
