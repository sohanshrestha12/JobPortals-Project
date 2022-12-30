<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function CompanySignUp()
    {
        $data = null;
        return view('Auth.RegisterCompany', compact('data'));
    }
    public function RegisterCompany(Request $req)
    {
        $req->validate(
            [
                'email' => 'required',
                'password' => 'required|confirmed',
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
            'role' => 'company'
        ]);
        return back()->with('success', 'Your form has been successfully registered. Please login.');
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
    public function UpdateCompanyInformation(Request $req)
    {
        $req->validate(
            [
                'name' => 'required',
                'location' => 'required',
                'phoneno' => 'required|integer'
            ],
            [
                'name.required' => 'The company name field is required.',
                'phoneno.required' => 'The phone number field is required.'
            ]
        );
        $update = User::find($req->id);
        $update->name = $req->name;
        $update->location = $req->location;
        $update->city = $req->city;
        $update->phoneno = $req->phoneno;
        $update->description = $req->description;
        $update->save();
        return redirect()->route('CompanyProfile');
    }
    public function UpdateCompanyLogo(Request $req)
    {
        $req->validate(
            [
                'logo' => 'required'
            ],
            [
                'logo.required' => 'Please select a logo'
            ]
        );
        $image = $req->file('logo');
        $logoname = $req->id . $image->getClientOriginalName();
        // dd($logoname);
        // uniqid() to name uniquely
        // $logopath = $image->storeAs('public/Company Logo', $logoname . $req->id);
        $logopath = $image->storeAs('public/Company Logo', $logoname);
        $Savelogo = User::find($req->id);
        $Savelogo->ProfileImg = $logoname;
        $Savelogo->ProfileImgPath = $logopath;
        //delete old image
        $thisone=User::find($req->id);
        $oldpath = $thisone->ProfileImgPath;
        if($oldpath === 'public/default/defaultImg.jpg'){
            $Savelogo->save();
        }
        else{
            Storage::disk('local')->delete($oldpath);
            $Savelogo->save();
        }
        return redirect()->route('CompanyProfile');
    }




    public function logout()
    {
        if (Session::has('CloginId')) {
            Session::pull('CloginId');
            return redirect()->route('home');
        } else if (Session::has('UloginId')) {
            Session::pull('UloginId');
            return redirect()->route('home');
        } else if (Session::has('AloginId')) {
            Session::pull('AloginId');
            return redirect()->route('home');
        } else {
            Session::flush();
            return redirect()->route('home');
        }
    }
}
