<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('Home');
    }
    public function services()
    {
        return view('Services');
    }
    public function jobs()
    {
        return view('Jobs');
    }
    public function about()
    {
        return view('About');
    }
    public function contact()
    {
        return view('Contact');
    }
}
