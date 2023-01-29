<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{
    //
    //admin panel ko add ra show garna lai
    public function Add_Job_list(Request $req){
        $obj = new job();
        $obj->Title = $req->job_title;
        $obj->Posted_Date = $req->Posted_Date;
        $obj->Expiry_Date = $req->Expiry_Date;
        $obj->Company_industry = $req->Company_industry;
        $obj->Salary = $req->Salary;
        $obj->Job_description = $req->Job_description;
        $obj-> save();
      
        return redirect()->route('job_control');

    }
    public function show_jobs(){
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        $List = job::all();
        $user = User::all();
        return view('Job', compact('data','List','user'));
    }
}
