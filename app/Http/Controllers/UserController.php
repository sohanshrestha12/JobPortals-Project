<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $req)
    {
        $req->validate([
            'logemail' => 'required',
            'logpassword' => 'required'
        ]);

        $alluser = User::where('email', '=', $req->logemail)->first();
        if ($alluser) {
            if ($alluser->role == 'admin') {
                if ($req->logpassword == $alluser->password) {
                    session()->put('loginId', $alluser->id);
                    return redirect('/admin');
                } else {
                    return back()->with('fail', 'Password not matched.');
                }
            } elseif ($alluser->role == 'user') {
                if ($req->logpassword == $alluser->password) {
                    session()->put('loginId', $alluser->id);
                    return redirect('/user');
                } else {
                    return back()->with('fail', 'Password not matched.');
                }
            } elseif ($alluser->role == 'company') {
                if ($req->logpassword == $alluser->password) {
                    session()->put('loginId', $alluser->id);
                    return redirect('/company');
                } else {
                    return back()->with('fail', 'Password not matched.');
                }
            }else{
                return back()->with('role', 'Ran into some issue pls try again later!!!');
            }
        } else {
            return back()->with('ErrorLogin', 'Email is not registered.');
        }
    }
}
