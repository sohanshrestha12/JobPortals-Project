<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function adminhome()
    {
        return view('Admin.adminDashboard');
    }
}
