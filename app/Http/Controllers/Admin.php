<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as Session;

class Admin extends Controller
{
    public function admindashboard()
    {
        $Jobs = Job::get();
        $Jobseeker = User::where('role','user')->get();
        $Company = User::where('role','company')->get();
        $Verifycompany = User::where(['role'=>'company','Verify'=>'0'])->get();

        return view('Admin.adminDashboard',compact('Jobseeker','Company','Jobs','Verifycompany'));
    }
    public function adminmessage()
    {
        $Verifycompany = User::where(['role'=>'company','Verify'=>'0'])->get();
        return view('Admin.adminMessage',compact('Verifycompany'));
    }
    public function Verifycompany()
    {
        $Verifycompany = User::where(['role'=>'company','Verify'=>'0'])->get();
        return view('Admin.VerifyCompany',compact('Verifycompany'));
    }
    public function Verifiedcompany()
    {
        $Verifycompany = User::where(['role'=>'company','Verify'=>'0'])->get();
        $Verifiedcompany = User::where(['role'=>'company','Verify'=>'1'])->get();
        return view('Admin.VerifiedCompany',compact('Verifiedcompany','Verifycompany'));
    }
    public function adminuser()
    {
        $Verifycompany = User::where(['role'=>'company','Verify'=>'0'])->get();
        return view('Admin.adminUser',compact('Verifycompany'));
    }
    public function adminpw()
    {
        $Verifycompany = User::where(['role'=>'company','Verify'=>'0'])->get();
        return view('Admin.adminPassword',compact('Verifycompany'));
    }
    public function adminlogout()
    {
        Session::pull('AloginId');
        return redirect()->route('home');
    }
    public function verify($comid)
    {
        $companyVerify = User::find($comid);
        if($companyVerify->Verify == 1){
            $companyVerify->Verify = 0;
            $companyVerify->save();
        }
        else{
            $companyVerify->Verify = 1;
            $companyVerify->save();
        }
        return back();
    }
}