<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckValidNumber
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo "<h1 class='text-primary'>Now the correct result is here</h1>";

        if (is_numeric($request->num1) && is_numeric($request->num2)) {
            return $next($request);
        }
        return to_route('invalidNumberError');
    }
}
