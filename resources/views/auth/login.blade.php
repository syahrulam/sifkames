@extends('layoutfrontend.master')
@section('title', 'Login - FKAM Brebes')
@section('content')

<div class="container">
    <div class="login-container">
        <h3 class="text-center mb-4">Login ke FKAM Brebes</h3>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <p class="text-center mt-3">
            Belum punya akun? <a href="{{ route('register') }}">Daftar</a>
        </p>
    </div>
</div>

@endsection
