<?php

namespace App\Middleware;

use Illuminate\Routing\Controllers\Middleware;

class AdminChecker extends Middleware
{
    public function handle($request, \Closure $next)
    {
        if($request->admin == 'admin'){
            return redirect()->route('dashboard.admin');
        }
        return $next($request);
    }
}
