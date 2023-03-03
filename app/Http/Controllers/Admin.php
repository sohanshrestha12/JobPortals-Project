<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as Session;

class Admin extends Controller
{
    public function adminhome()
    {
        return view('layouts.adminlayout');
    }
    public function admindashboard()
    {
        $Jobseeker = User::where('role','user')->get();
        $Company = User::where('role','company')->get();
        return view('Admin.adminDashboard',compact('Jobseeker','Company'));
    }
    public function adminmessage()
    {
        return view('Admin.adminMessage');
    }
    public function admincompany()
    {
        return view('Admin.adminCompany');
    }
    public function adminuser()
    {
        return view('Admin.adminUser');
    }
    public function adminpw()
    {
        return view('Admin.adminPassword');
    }
    public function adminlogout()
    {
        Session::pull('AloginId');
        return redirect()->route('home');
    }
}