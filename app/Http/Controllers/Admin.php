<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function adminhome()
    {
        return view('layouts.adminlayout');
    }
    public function admindashboard()
    {
        return view('Admin.adminDashboard');
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
        return view('Admin.adminLogout');
    }
}