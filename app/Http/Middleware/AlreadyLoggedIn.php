<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class AlreadyLoggedIn
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
        if((Session()->has('CloginId') || Session()->has('UloginId') || Session()->has('GUloginId') || Session()->has('AloginId')) && (url('login') == $request->url() || url('RegisterCompany') == $request->url() || url('RegisterJobSeeker') == $request->url())){
            return back();
        }
        return $next($request);
    }
}
