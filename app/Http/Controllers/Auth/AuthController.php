<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect berdasarkan role
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin'); // Pastikan rute ini benar
            } elseif (Auth::user()->role == 'donatur') {
                return redirect()->route('donasi'); // Redirect ke halaman donasi
            }

            return redirect('/'); // Redirect default jika tidak ada role yang cocok
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Menampilkan halaman register
    public function showRegister()
    {
        return view('auth.register');
    }

    // Proses register
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|string|in:admin,donatur,relawan', // Pastikan role valid
        ]);

        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // Simpan role pengguna
        ]);

        // Auto login setelah registrasi
        Auth::login($user);

        // Redirect sesuai role
        if ($user->role == 'admin') {
            return redirect()->route('admin');
        } elseif ($user->role == 'donatur') {
            return redirect()->route('donasi'); // Arahkan ke halaman donasi
        } elseif ($user->role == 'relawan') {
            return redirect()->route('relawan');
        }

        return redirect('/'); // Default jika tidak ada role yang cocok
    }

    // Logout user
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); // Redirect ke halaman login
    }
}
