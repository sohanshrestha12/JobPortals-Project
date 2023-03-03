<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Models\UserJob;
use App\Rules\expireDate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            'salary' => 'required|integer',
            'EducationDegree' => 'required',
            'Education' => 'required'
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
            'Education' => $req->Education,
            'EducationDegree' => $req->EducationDegree,
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
       
            // $user = Job::find(2)->Jobseeker;
            // dd($user);
            $Jobinfo = Job::get();
        
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
            'status' => 'required',
            'Education' => 'required',
            'EducationDegree' =>'required'
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
        $newData->EducationDegree = $req->EducationDegree;
        $newData->Education = $req->Education;
        $newData->save();

        return redirect()->route('ListofAllJobs')->with('sucess','The record has been successfully changed.');
    }


    public function Deletejobs(Request $req){
        Job::find($req->Jobid)->delete();
        return back();
    }
    
    public function ChangeCompanyPassword(){
        $data = null;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
            return view('Company.ChangePassword', compact('data'));
        }
    }
    public function ChangePassword(Request $req){
        $req->validate([
            'CurrentPassword' => 'required',
            'NewPassword' => 'required|confirmed|min:6',
            'NewPassword_confirmation' => 'required'
        ]);
        $currentCompany = User::find(session()->get('CloginId'));
        if($req->email == $currentCompany->email){
            if(Hash::check($req->CurrentPassword, $currentCompany->password)){
                $currentCompany->password = Hash::make($req->NewPassword);
                $currentCompany->Save();
                return back()->with('success','Password Changed Successfully.');
            }
            else{
                return back()->with('fail','Current password is not valid. Please try again!!!');
            }
        }
        else{
            return back()->with('fail','Email not found.');
        }
    } 


    public function ApplyJob(Request $req, $Jobid){
        $req->validate([
            'name' => 'required',
            'city' => 'required',
            'phoneno' => 'required,integer',
            'Skills' => 'required',
            'Gender' => 'required',
            'Roles' => 'required',
            'Objective' => 'required',
            'Degree' => 'required',
            'JobTime' => 'required',
            'Level' => 'required',
            'District' => 'required',
            'Institution' => 'required',
            'Municipality' => 'required',
            'Industry' => 'required',
            'University' => 'required', 
            'Organization' => 'required', 
            'Position' => 'required', 
            'Joined_year' => 'required', 
            'Passed_year' => 'required', 
            'DateofBirth' => 'required'
        ]);


        $Jobseekerinfo = User::find($req->id);
        $Jobseekerinfo->name = $req->name;
        $Jobseekerinfo->city = $req->city;
        $Jobseekerinfo->phoneno = $req->phoneno;
        $Jobseekerinfo->Skills = $req->Skills;
        $Jobseekerinfo->Gender = $req->Gender;
        $Jobseekerinfo->Roles = $req->Roles;
        $Jobseekerinfo->Objective = $req->Objective;
        $Jobseekerinfo->Degree = $req->Degree;
        $Jobseekerinfo->JobTime = $req->JobTime;
        $Jobseekerinfo->Level = $req->Level;
        $Jobseekerinfo->District = $req->District;
        $Jobseekerinfo->Institution = $req->Institution;
        $Jobseekerinfo->Municipality = $req->Municipality;
        $Jobseekerinfo->Industry = $req->Industry;
        $Jobseekerinfo->University = $req->University;
        $Jobseekerinfo->Organization = $req->Organization;
        $Jobseekerinfo->Position = $req->Position;
        $Jobseekerinfo->Joined_year = $req->Joined_year;
        $Jobseekerinfo->Passed_year = $req->Passed_year;
        $Jobseekerinfo->DateofBirth = $req->DateofBirth;
        $Jobseekerinfo->save();

        $Jobseekerinfo->Applyjobs()->attach($Jobid);   
        return back()->with('appliedsuccess','You have successfully applied for this job.');
    }  

    public function Applicants($Jobid){
        $data = null;
        $Jid = Job::find($Jobid);
        Session::put('ApplicantJobid',$Jobid); 
        $Jobuser = Job::find($Jobid)->Jobseeker;
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
            return view('Company.Applicants',compact('data','Jobid','Jid','Jobuser'));
        }
    }

    public function ChangeJobSeekerPassword(){
        $data = null;
        if (Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
            return view('JobSeeker.ChangePassword', compact('data'));
        }
    }
    public function ChangeUserPassword(Request $req){
        $req->validate([
            'CurrentPassword' => 'required',
            'NewPassword' => 'required|confirmed|min:6',
            'NewPassword_confirmation' => 'required'
        ]);
        $currentUser = User::find(session()->get('UloginId'));
        if($req->email == $currentUser->email){
            if(Hash::check($req->CurrentPassword, $currentUser->password)){
                $currentUser->password = Hash::make($req->NewPassword);
                $currentUser->Save();
                return back()->with('success','Password Changed Successfully.');
            }
            else{
                return back()->with('fail','Current password is not valid. Please try again!!!');
            }
        }
        else{
            return back()->with('fail','Email not found.');
        }
    } 

}
