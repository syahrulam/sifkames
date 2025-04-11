@extends('layoutfrontend.master')
@section('title', 'Register - FKAM Brebes')
@section('content')

<div class="container">
    <div class="register-container">
        <h3 class="text-center mb-4">Register FKAM Brebes</h3>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" name="password_confirmation" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-control" name="role" required>
                    <option value="relawan">Relawan</option>
                    <option value="donatur">Donatur</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>

        <p class="text-center mt-3">
            Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
        </p>
    </div>
</div>

@endsection
