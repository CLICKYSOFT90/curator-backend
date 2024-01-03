<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsCompleted
{
    public function handle(Request $request, Closure $next): Response
    {
        if (empty(Auth::user()->is_completed)){
            return redirect()->route('account.setting');
        }

        return $next($request);
    }
}
