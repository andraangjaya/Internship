<?php

namespace App\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class AgeChecker extends Middleware
{
    public function handle(Request $request, Closure $next)
    {
        if($request->age < 18){
            return redirect('home');
        }
        return next($request);
    }
}
