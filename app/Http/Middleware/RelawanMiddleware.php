<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RelawanMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role !== 'relawan') {
            return redirect('/'); // Redirect if user is not a relawan
        }
        return $next($request);
    }
}
