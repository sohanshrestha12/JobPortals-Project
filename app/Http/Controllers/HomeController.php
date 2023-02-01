<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        return view('Home', compact('data'));
    }
    public function services()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        return view('Services', compact('data'));
    }
    public function jobs()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        return view('Jobs', compact('data'));
    }
    public function about()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        return view('About', compact('data'));
    }
    public function contact()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        return view('Contact', compact('data'));
    }
    public function companyprofile()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        return view('CompanyProfile', compact('data'));
    }
    public function job_view()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        return view('Job', compact('data'));
    }
    public function Job_details()
    {
        $data=null;
        if(Session::has('Clogin')){
            $data = User::find(Session::get('CloginId'));
        }
        return view('SpecificJob',compact('data'));
    }
}
