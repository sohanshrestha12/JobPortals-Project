<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Rules\expireDate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{
    public function PostJobs()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
            return view('Company.PostJobs', compact('data'));
        }
    }
    public function PostnewJob(Request $req)
    {
        $req->validate([
            'jobTitle' => 'required',
            'jobCategory' => 'required',
            'expiredDate' => ['required', 'date', new expireDate],
            'jobDescription' => 'required',
            'jobType' => 'required',
            'requiredSkills' => 'required',
            'experience' => 'required',
            'salary' => 'required|integer'
        ]);
        Job::create([
            'Title' => $req->jobTitle,
            'ExpiryDate' => Carbon::parse($req->expiredDate),
            'Category' => $req->jobCategory,
            'Salary' => $req->salary,
            'Skills' => $req->requiredSkills,
            'Description' => $req->jobDescription,
            'Type' => $req->jobType,
            'experience' => $req->experience,
            'company_id' => $req->companyId,
            'status' => '1'
        ]);
        return back()->with('JobPostedSuccessfully', 'Your Job advertise have been posted successfully');
    }

    public function ListJobs()
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
            $currentdate = Carbon::now()->format('Y-m-d');
            $alluser = Job::where('status', '=', 1)->get();
            foreach ($alluser as $user) {
                if ($currentdate > $user->ExpiryDate) {
                    $user->status = '0';
                    $user->save();
                }
            }

            $Jobinfo = Job::all();
            $Jobactive = Job::where(['company_id' => Session::get('CloginId'),'status' => 1])->get();
            $Jobexpired = Job::where(['company_id' => Session::get('CloginId'),'status' => 0])->get();
            return view('Company.ListofJobs', compact('data', 'Jobinfo','Jobactive','Jobexpired'));
        }
    }


    public function editJob($id)
    {
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
            $value = Job::find($id);
            $check = $value->status == 0?'expired':null;
            return view('Company.EditJob', compact('data','id','value','check'));
        }
    }


    public function JobEditing(Request $req){
        $req->validate([
            'jobTitle' => 'required',
            'jobCategory' => 'required',
            'expiredDate' => ['required', 'date', new expireDate],
            'jobDescription' => 'required',
            'jobType' => 'required',
            'requiredSkills' => 'required',
            'experience' => 'required',
            'salary' => 'required|integer',
            'status' => 'required'
        ]);
        $newData = Job::where('id', '=', $req->Jobid)->first();
        $newData->Title = $req->jobTitle;
        $newData->Category = $req->jobCategory;
        $newData->ExpiryDate = $req->expiredDate;
        $newData->Description = $req->jobDescription;
        $newData->Type = $req->jobType;
        $newData->Skills = $req->requiredSkills;
        $newData->experience = $req->experience;
        $newData->Salary = $req->salary;
        $newData->status = $req->status;
        $newData->save();

        return redirect()->route('ListofAllJobs')->with('sucess','The record has been successfully changed.');
    }


    public function Deletejobs($id){
        Job::find($id)->delete();
        return back();
    }
}
