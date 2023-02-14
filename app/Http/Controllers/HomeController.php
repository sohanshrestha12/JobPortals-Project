<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {
        $data = null;
        $allJobs = Job::all();
        $latestJobs = Job::where('status', '=', '1')->latest()->take(6)->get();
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        return view('Home', compact('data', 'allJobs', 'latestJobs'));
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
        return view('Company.CompanyProfile', compact('data'));
    }

    public function ShowJobProfile($id)
    {
        $data = null;
        $Jid = Job::find($id);
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        return view('Job.JobProfile', compact('data','Jid'));
    }
    public function ShowCompanyProfile($id)
    {
        $data = null;
        $Cid = User::find($id);
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        return view('Job.UserCompanyProfile', compact('data','Cid'));
    }
}
