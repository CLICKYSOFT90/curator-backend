<?php

namespace App\Http\Middleware;

use App\Models\SongSubmission;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsNotVerified
{
    public function handle(Request $request, Closure $next): Response
    {
        if (empty(Auth::user()->verification_code)){

            $user = Auth::user();

            if(in_array($user->role_id, [User::CURATOR_ID, User::INFLUENCER_ID])){
                return redirect()->route('dashboard');
            }elseif(!empty(SongSubmission::where('user_id', $user->id)->first())){
                return redirect()->route('my.campaigns');
            }

            return redirect()->route('user.welcome');
        }

        return $next($request);
    }
}
