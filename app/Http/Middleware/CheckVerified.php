<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user && $user->isVerified == 0 && $request->route()->getName() !== 'verification') {
            return redirect()->route('verification');
        }
        
        if ($user && $user->isVerified == 1 && $request->route()->getName() !== 'updateprofile') {
            return redirect()->route('updateprofile');
        }

        return $next($request);
    }
}
