<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class LevelAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    

    public function handle(Request $request, Closure $next, string $level): Response
    {   
        $user = Auth::user();
        if ($user && $user->access_level == $level) {
            return $next($request);
        }
        return redirect()->route('login')->with('error', 'Acesso negado.');
    }
}
