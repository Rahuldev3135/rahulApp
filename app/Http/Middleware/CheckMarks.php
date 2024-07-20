<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckMarks
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
        if ($request->marks >= "90%") {
            return $next($request);
        } else if ($request->marks < "90%" && $request->marks >= "80%") {
            return to_route('mark3');
        }
        return to_route('mark2');
    }
}
