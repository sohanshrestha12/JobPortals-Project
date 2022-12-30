<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function CompanySignUp(){
        return view('Auth.RegisterCompany');
    }
    public function RegisterCompany(Request $req){
        $req->validate([
            'email' =>'required',
            'password' =>'required|confirmed',
            'password_confirmation' =>'required',
            'name' =>'required',
            'category' =>'required',
            'city' =>'required',
            'phoneno' =>'required|integer',
            'location' =>'required'
        ],
        [
            'name.required' => 'The company name field is required.',
            'phoneno.required' => 'The phone number field is required.',
            'category.required' => 'Please select company field',
            'city.required' => 'Please select city field'
        ]);
        User::Create([
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'name' => $req->name,
            'category' => $req->category,
            'city' => $req->city,
            'phoneno' => $req->phoneno,
            'location' => $req->location,
            'role' => 'company'
        ]);
        return back()->with('success','Your form has been successfully registered. Please login.');

    }

    public function login(Request $req)
    {
        $req->validate(
            [
                'logemail' => 'required',
                'logpassword' => 'required'
            ],
            [
                'logemail.required' => 'The email field is required.',
                'logpassword.required' => 'The password field is required.'
            ]
        );

        $alluser = User::where('email', '=', $req->logemail)->first();
        if ($alluser) {
            if ($alluser->role == 'admin') {
                if ($req->logpassword == $alluser->password) {
                    session()->put('AloginId', $alluser->id);
                    return redirect('/admin');
                } else {
                    return back()->with('fail', 'Password not matched.');
                }
            } elseif ($alluser->role == 'user') {
                if ($req->logpassword == $alluser->password) {
                    session()->put('UloginId', $alluser->id);
                    return redirect('/user');
                } else {
                    return back()->with('fail', 'Password not matched.');
                }
            } elseif ($alluser->role == 'company') {
                if (Hash::check($req->logpassword, $alluser->password)) {
                    session()->put('CloginId', $alluser->id);
                    return redirect()->route('CompanyProfile');
                } else {
                    return back()->with('fail', 'Password not matched.');
                }
            } else {
                return back()->with('role', 'Ran into some issue pls try again later!!!');
            }
        } else {
            return back()->with('ErrorLogin', 'Email is not registered.');
        }
    }
    public function logout(){
        if(Session::has('CloginId')){
            Session::pull('CloginId');
            return redirect()->route('home');
        }
        else if(Session::has('UloginId')){
            Session::pull('UloginId');
            return redirect()->route('home');
        }
        else if(Session::has('AloginId')){
            Session::pull('AloginId');
            return redirect()->route('home');
        }
    }
}
