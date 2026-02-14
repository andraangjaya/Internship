<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeChecker
{
    public function handle(Request $request, Closure $next)
    {
        if($request->age < 18){
            return redirect('home');
        }
        return $next($request);
    }
}
