@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Gebermas</h2>
    <div class="row">
        @foreach ($activities as $activity)
            <div class="col-md-4">
                <div class="card">
                    <!-- Bungkus seluruh card dengan <a> supaya bisa diklik -->
                    <a href="{{ route('gebermas.detail', ['slug' => $activity->slug]) }}" class="text-decoration-none text-dark">
                        <img src="{{ asset($activity->image) }}" class="card-img-top" alt="{{ $activity->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $activity->title }}</h5>
                            <p class="card-text">{{ Str::limit($activity->content, 100) }}</p>
                            <small class="text-muted">📅 {{ $activity->date }}</small>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
