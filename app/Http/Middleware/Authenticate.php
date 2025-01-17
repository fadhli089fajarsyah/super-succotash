<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        // Cek jika user sudah login
        if (!session()->has('user')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
