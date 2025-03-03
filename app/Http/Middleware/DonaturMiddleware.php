<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DonaturMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role !== 'donatur') {
            return redirect('/'); // Redirect if user is not a donatur
        }
        return $next($request);
    }
}