<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsVerified
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!empty(Auth::user()->verification_code)){
            return redirect()->route('user-verification');
        }

        return $next($request);
    }
}
