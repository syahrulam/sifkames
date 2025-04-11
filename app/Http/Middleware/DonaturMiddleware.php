<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonaturMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->role !== 'donatur') {
            return redirect('/login')->with('error', 'Anda bukan donatur. Silahkan logout dan login sebagai donatur.');
        }
        return $next($request);
    }
}
