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
    public function show_jobs(){
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
            $List = job::all();
            return view('Job', compact('data','List'));
        }
    }
    public function Add_Job_list(Request $req){
        $req->validate(
        [
            'Title' => 'required',
            'Posted_Date' => 'required',
            'Expiry_Date' => 'required',
            'Company_industry' => 'required',
            'Salary' => 'required',
            'Job_description' => 'required',
        ]
        );

        $obj = new job();
        $obj->Title = $req->Title;
        $obj->Posted_Date = $req->Posted_Date;
        $obj->Expiry_Date = $req->Expiry_Date;
        $obj->Company_industry = $req->Company_industry;
        $obj->Salary = $req->Salary;
        $obj->Job_description = $req->Job_description;
        $obj-> save();
      
        return redirect()->route('job_control');

    }

    public function delete_job($id){
        $data = job::find($id);
        $data->delete();
        return redirect()->route('job_control');
    }
 
    public function edit_job(Request $req){
        $req->validate(
            [
                'Title' => 'required',
                'Posted_Date' => 'required',
                'Expiry_Date' => 'required',
                'Company_industry' => 'required',
                'Salary' => 'required',
                'Job_description' => 'required',
            ]
            // [
            //     'Title.required' => 'The Title field is required.',
            //     'Posted_Date.required' => 'The Posted_Date field is required.',
            //     'Expiry_Date.required' => 'The Expiry_Date field is required.',
            //     'Company_industry.required' => 'Please select Company_industry ',
            //     'Salary.required' => 'Please add Salary',
            //     'Job_description.required' => 'Please add some Job_description'
            // ]
        );
        $obj = job::find($req->id);
        $obj->Title = $req->Title_edited;
        $obj->Posted_Date = $req->Posted_Date_edited;
        $obj->Expiry_Date = $req->Expiry_Date_edited;
        $obj->Company_industry = $req->Company_industry_edited;
        $obj->Salary = $req->Salary_edited;
        $obj->Job_description = $req->Job_description_edited;
        $obj-> save();
      
        return redirect()->route('job_control');

    }
}
