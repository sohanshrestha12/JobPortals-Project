<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
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
            'expiredDate' => 'required',
            'jobDescription' => 'required',
            'jobType' => 'required',
            'requiredSkills' => 'required',
            'experience' => 'required',
            'salary' => 'required'
        ]);
    }

    public function delete_job($id)
    {
        $data = job::find($id);
        $data->delete();
        return redirect()->route('job_control');
    }

    public function edit_job(Request $req)
    {

        $obj = job::find($req->id);
        $obj->Title = $req->Title_edited;
        $obj->Posted_Date = $req->Posted_Date_edited;
        $obj->Expiry_Date = $req->Expiry_Date_edited;
        $obj->Company_industry = $req->Company_industry_edited;
        $obj->Salary = $req->Salary_edited;
        $obj->Job_description = $req->Job_description_edited;
        $obj->save();

        return redirect()->route('job_control');
    }
}
