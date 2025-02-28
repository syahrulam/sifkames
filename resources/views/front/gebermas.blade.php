@extends('layoutfront.master')

@section('content')
<div class="container mt-4">
    <h1 class="text-center fw-bold position-relative pb-2"
        style="border-bottom: 4px solid #007bff; display: inline-block; padding-bottom: 10px;">
        Gebermas (Gerakan Bersih-Bersih Masjid)
    </h1>

    <div class="row mt-4">
        {{-- Card 1 --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('assets/img/masjid1.jpg') }}" class="card-img-top" alt="Bersih-Bersih Masjid">
                <div class="card-body">
                    <span class="text-primary fw-bold">Gebermas</span>
                    <h5 class="card-title mt-2">Kegiatan di Masjid Sabilul Huda</h5>
                    <p class="card-text">Kegiatan membersihkan masjid untuk menjaga kebersihan dan kenyamanan.</p>
                    <hr>
                    <div class="d-flex justify-content-between text-muted small">
                        <span><i class="bi bi-person"></i> Admin</span>
                        <span><i class="bi bi-calendar"></i> Feb 26, 2025</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('assets/img/gebermas.jpg') }}" class="card-img-top" alt="Bersih-Bersih Musholla">
                <div class="card-body">
                    <span class="text-primary fw-bold">Gebermas</span>
                    <h5 class="card-title mt-2">Bersih-Bersih Musholla</h5>
                    <p class="card-text">Kegiatan rutin membersihkan musholla sebagai bagian dari ibadah.</p>
                    <hr>
                    <div class="d-flex justify-content-between text-muted small">
                        <span><i class="bi bi-person"></i> Admin</span>
                        <span><i class="bi bi-calendar"></i> Feb 25, 2025</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('assets/img/masjid1.jpg') }}" class="card-img-top" alt="Upgrading UMKM">
                <div class="card-body">
                    <span class="text-primary fw-bold">Gebermas</span>
                    <h5 class="card-title mt-2">Dukung UMKM Muslim</h5>
                    <p class="card-text">Gebermas juga mendukung kegiatan ekonomi berbasis masjid dan umat.</p>
                    <hr>
                    <div class="d-flex justify-content-between text-muted small">
                        <span><i class="bi bi-person"></i> Admin</span>
                        <span><i class="bi bi-calendar"></i> Feb 24, 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
