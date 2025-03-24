@extends('layoutfrontend.master')
@section('title', 'MuslimMedical')
@section('content')
<div class="container mt-4">
    <h1 class="text-center fw-bold position-relative pb-2"
        style="border-bottom: 4px solid #007bff; display: inline-block; padding-bottom: 10px;">
        Muslim Medical
    </h1>

    <div class="row mt-4">
        <!-- Kolom Kiri: Card Kegiatan (Lebar 8 kolom) -->
        <div class="col-md-8">
            <div class="row">
                @foreach ($kegiatan as $item)
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-lg border-0" style="transition: transform 0.2s, box-shadow 0.2s;">  
                        <a href="{{ route('muslim_medical.detail', ['id' => $item->id]) }}" class="text-decoration-none text-dark">
                                <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                                <div class="card-body">
                                    <span class="text-primary fw-bold">Muslim Medical</span>
                                    <h5 class="card-title mt-2">{{ $item->title }}</h5>
                                    <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                                    <hr>
                                    <div class="d-flex justify-content-between text-muted small">
                                        <span><i class="bi bi-person"></i> Admin</span>
                                        <span><i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Kolom Kanan: Sidebar (Lebar 4 kolom) -->
        <div class="col-md-4">
            <!-- Card Pencarian -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">Cari</div>
                <div class="card-body">
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            </div>

            <!-- Card Tentang Muslim Medical -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">Tentang Muslim Medical</div>
                <div class="card-body">
                    <p>Muslim Medical adalah program kesehatan berbasis komunitas yang berfokus pada pelayanan medis dan edukasi kesehatan bagi masyarakat.</p>
                </div>
            </div>

            <!-- Card Kontak Kami -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">Kontak Kami</div>
                <div class="card-body">
                    <p><strong>Alamat:</strong> <br>
                        Jl. Taman Siswa, Klp. Sawit, Padasugih, Kec. Brebes, Kabupaten Brebes, Jawa Tengah 52214</p>
                    <p><strong>Jam Buka:</strong> <br>
                        Senin—Sabtu: 08:00–16:00</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
