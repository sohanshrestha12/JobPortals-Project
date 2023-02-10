<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\JobSeeker;
use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    public function JobSeekerSignUp()
    {
        $data = null;
        return view('Auth.RegisterJobSeeker',compact('data'));
    }
    public function RegisterJobSeeker(Request $req)
    {
        $req->validate(
            [
                'email' => 'required|email:rfc,dns|unique:users,email',
                'password' => 'required|confirmed|min:6',
                'password_confirmation' => 'required',
                'name' => 'required',
                'category' => 'required',
                'city' => 'required',
                'phoneno' => 'required|integer',
                'location' => 'required'
            ],
            [
                'name.required' => 'The company name field is required.',
                'phoneno.required' => 'The phone number field is required.',
                'category.required' => 'Please select company field',
                'city.required' => 'Please select city field'
            ]
        );
        User::Create([
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'name' => $req->name,
            'category' => $req->category,
            'city' => $req->city,
            'phoneno' => $req->phoneno,
            'location' => $req->location,
            'role' => 'JobSeeker'
        ]);
        return back()->with('success', 'Your form has been successfully registered.');
    }
}
