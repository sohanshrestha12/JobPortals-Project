<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {
        $data = null;
        $allJobs = Job::all();
        $latestJobs = Job::where('status','=','1')->latest()->take(6)->get();
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        elseif(Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        return view('Home', compact('data','allJobs','latestJobs'));
    }
    public function services()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        elseif(Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        return view('Services', compact('data'));
    }
    public function jobs()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        elseif(Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        return view('Jobs', compact('data'));
    }
    public function about()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        elseif(Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        return view('About', compact('data'));
    }
    public function contact()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        elseif(Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        return view('Contact', compact('data'));
    }
    public function companyprofile()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        elseif(Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        return view('Company.CompanyProfile', compact('data'));
    } 
 
    public function JobSeekerprofile()
    {
        if (Session::has('GUloginId')) {
            $data = User::where('email','=',Session::get('GUloginId'))->first();         
        }
        elseif(Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        elseif(Session::has('CloginId')){
            $data = User::find(Session::get('CloginId'));
        }
        else{
            $data = null;
        }
        return view('JobSeeker.JobSeekerProfile', compact('data'));
    }
    public function job_view()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        elseif(Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        return view('Job', compact('data'));
    }
    public function Job_details()
    {
        $data=null;
        if(Session::has('Clogin')){
            $data = User::find(Session::get('CloginId'));
        }
        elseif(Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        return view('SpecificJob',compact('data'));

    }
}
