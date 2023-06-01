<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        // penggunaaan authentikasi
        // if(auth()->guest()|| auth()->user()->username !== 'admin') {
        //     abort(403);
        // } atau
        if(!auth()->check() || !auth()->user()->is_admin) {
            abort(403);
        }
        return $next($request);
    }
}
