<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AuthCheckUser
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
        $userdb_id = User::find(Session()->get('UloginId'));
        $userGmaildb_id = User::where('email', Session()->get('GUloginId'))->first();
        if(!Session()->has('UloginId') && !$userdb_id && !Session()->has('GUloginId') && !$userGmaildb_id){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
