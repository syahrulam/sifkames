@extends('layoutbackend.master')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Edit Kegiatan Gebermas</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.gebermas.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                   id="title" name="title" value="{{ old('title', $data->title) }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" 
                   id="date" name="date" value="{{ old('date', $data->date) }}" required>
            @error('date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Deskripsi</label>
            <textarea class="form-control @error('content') is-invalid @enderror" 
                      id="content" name="content" rows="4" required>{{ old('content', $data->content) }}</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            @if ($data->image)
                <div class="mt-2">
                    <p>Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/' . $data->image) }}" alt="Gambar Saat Ini" class="img-thumbnail" width="150">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.gebermas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
