<?php

namespace App\Http\Middleware;

class AdminChecker
{
    public function handle($request, \Closure $next)
    {
        if($request->role !== 'admin'){
            return redirect()->route('dashboard.user');
        }
        return $next($request);
    }
}
