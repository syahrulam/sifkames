@extends('layoutfrontend.master')

@section('content')
<div class="container-fluid px-0">
    <!-- Header dengan gambar background -->
    <div class="position-relative" style="height: 350px; background: url('{{ asset($aktivitas->image) }}') center/cover;">
        <div class="overlay position-absolute w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>
        <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
            <h1 class="fw-bold">{{ $aktivitas->title }}</h1>
            <p class="mt-2"><i class="bi bi-person"></i> Admin &nbsp; | &nbsp; <i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($aktivitas->date)->format('d M Y') }}</p>
        </div>
    </div>

    <!-- Bagian Konten -->
    <div class="container mt-4">
        <!-- Bagikan ke Sosial Media -->
        <div class="d-flex justify-content-center mb-3">
            <a href="#" class="btn btn-primary mx-1"><i class="bi bi-facebook"></i></a>
            <a href="#" class="btn btn-info mx-1"><i class="bi bi-twitter"></i></a>
            <a href="#" class="btn btn-dark mx-1"><i class="bi bi-instagram"></i></a>
            <a href="#" class="btn btn-success mx-1"><i class="bi bi-whatsapp"></i></a>
            <a href="#" class="btn btn-secondary mx-1"><i class="bi bi-share"></i></a>
        </div>

        <!-- Jumlah Dilihat -->
        <p class="text-center text-muted"><i class="bi bi-bar-chart"></i> 14 total dilihat</p>

        <!-- Gambar Setelah Statistik -->
        <div class="text-center my-4">
            <img src="{{ asset($aktivitas->image) }}" class="img-fluid rounded shadow-lg" alt="{{ $aktivitas->title }}">
        </div>

        <!-- Konten Detail -->
        <div class="mx-auto" style="max-width: 800px;">
            <p class="lead text-justify" style="line-height: 1.8;">
                {{ $aktivitas->content }}
            </p>
        </div>

        <!-- Tombol Kembali -->
         <div class="text-center mt-5 mb-5">
            <a href="{{ route('gebermas') }}" class="btn btn-primary px-4 py-2 rounded-pill shadow">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</div>
@endsection
