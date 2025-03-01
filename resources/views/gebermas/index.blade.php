@extends('layoutfront.master')

@section('content')
<div class="container mt-4">
    <h1 class="text-center fw-bold position-relative pb-2"
        style="border-bottom: 4px solid #007bff; display: inline-block; padding-bottom: 10px;">
        Gebermas (Gerakan Bersih-Bersih Masjid)
    </h1>

    <div class="row mt-4">
        <!-- Kolom Kiri: Card Kegiatan (Lebar 8 kolom) -->
        <div class="col-md-8">
            <div class="row">
                @foreach ($activities as $activity)
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-lg border-0" style="transition: transform 0.2s, box-shadow 0.2s;">
                            <a href="{{ route('gebermas.detail', ['slug' => $activity->slug]) }}" class="text-decoration-none text-dark">
                                <img src="{{ asset($activity->image) }}" class="card-img-top" alt="{{ $activity->title }}">
                                <div class="card-body">
                                    <span class="text-primary fw-bold">Gebermas</span>
                                    <h5 class="card-title mt-2">{{ $activity->title }}</h5>
                                    <p class="card-text">{{ Str::limit($activity->content, 100) }}</p>
                                    <hr>
                                    <div class="d-flex justify-content-between text-muted small">
                                        <span><i class="bi bi-person"></i> Admin</span>
                                        <span><i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($activity->date)->format('d M Y') }}</span>
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

            <!-- Card Tentang Situs Ini -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">Tentang Situs Ini</div>
                <div class="card-body">
                    <p>Ini bisa jadi ruang yang tepat untuk memperkenalkan diri dan situs Anda, atau menuliskan daftar penghargaan.</p>
                </div>
            </div>

            <!-- Card Temukan Kami -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">Temukan Kami</div>
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
