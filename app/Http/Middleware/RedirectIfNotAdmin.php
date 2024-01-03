<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (
            Auth::check() &&
            (
                Auth::user()->roles()->where('name', 'Admin')->exists() ||
                Auth::user()->roles()->where('name', 'Sub Admin')->exists()
            )
        ) {
            return $next($request);
        }

        return redirect('/');
    }
}
