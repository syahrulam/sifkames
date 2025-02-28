@extends('layoutfront.master')

@section('content')
<div class="container mt-4">
    <div class="text-center">
        <h1 class="fw-bold">{{ $activity['title'] }}</h1>
        <p class="text-muted"><i class="bi bi-calendar"></i> {{ $activity['date'] }}</p>
    </div>

    <div class="text-center my-4">
        <img src="{{ asset($activity['image']) }}" class="img-fluid rounded shadow-lg" alt="{{ $activity['title'] }}">
    </div>

    <p class="lead">{{ $activity['content'] }}</p>
</div>
@endsection
