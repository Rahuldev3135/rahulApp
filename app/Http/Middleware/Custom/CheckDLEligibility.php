<?php

namespace App\Http\Middleware\Custom;

use Closure;
use Illuminate\Http\Request;

class CheckDLEligibility
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
        if ($request->age < 18) {
            return to_route('failed-dl');
        }
        return $next($request);
    }
}
