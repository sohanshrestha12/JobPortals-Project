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
    public function jobs(Request $req)
    {
        $data = null;
        $searchdata = $req->all();  
        $Jobsearch = $req->Jobsearch;
        if($req->Jobsearch == "" && empty($req->JobType) && empty($req->jobCategory) && empty($req->minsalary) && empty($req->maxsalary)){
            $joblist = Job::paginate(10);
        } 
        elseif($req->Jobsearch && empty($req->JobType) && empty($req->jobCategory) && empty($req->minsalary) && empty($req->maxsalary)){
            $joblist = Job::where([['Title', 'LIKE', "%$req->Jobsearch%"]])->paginate(10);       
        }
        elseif($req->Jobsearch && $req->JobType && empty($req->jobCategory) && empty($req->minsalary) && empty($req->maxsalary)){
            $joblist = Job::where([['Title', 'LIKE', "%$req->Jobsearch%"],['Type',$req->JobType]])->paginate(10);       
        }
        elseif($req->Jobsearch && $req->JobType && $req->jobCategory && empty($req->minsalary) && empty($req->maxsalary)){
            $joblist = Job::where([['Title', 'LIKE', "%$req->Jobsearch%"],['Type',$req->JobType],['Category', $req->jobCategory]])->paginate(10);       
        }
        elseif($req->Jobsearch && $req->JobType && $req->minsalary && $req->maxsalary && empty($req->jobCategory)){
            $joblist = Job::where([['Title', 'LIKE', "%$req->Jobsearch%"],['Type',$req->JobType],['Salary','>=',$req->minsalary],['Salary','<=',$req->maxsalary]])->paginate(10);       
        }
        elseif($req->Jobsearch && $req->jobCategory && $req->minsalary && $req->maxsalary && empty($req->JobType) ){
            $joblist = Job::where([['Title', 'LIKE', "%$req->Jobsearch%"],['Category', $req->jobCategory],['Salary','>=',$req->minsalary],['Salary','<=',$req->maxsalary]])->paginate(10);       
        }
        elseif($req->Jobsearch && $req->jobCategory && empty($req->JobType) && empty($req->minsalary) && empty($req->maxsalary)){
            $joblist = Job::where([['Title', 'LIKE', "%$req->Jobsearch%"],['Category', $req->jobCategory]])->paginate(10);       
        }
        elseif($req->Jobsearch && $req->minsalary && $req->maxsalary && empty($req->jobCategory) && empty($req->JobType)){
            $joblist = Job::where([['Title', 'LIKE', "%$req->Jobsearch%"],['Salary','>=',$req->minsalary],['Salary','<=',$req->maxsalary]])->paginate(10);       
        }
        elseif($req->Jobsearch && $req->JobType && $req->jobCategory  && $req->minsalary && $req->maxsalary){
            $joblist = Job::where([['Title', 'LIKE', "%$req->Jobsearch%"],['Type',$req->JobType],['Category', $req->jobCategory],['Salary','>=',$req->minsalary],['Salary','<=',$req->maxsalary]])->paginate(10);       
        }
        elseif($req->JobType && empty($req->Jobsearch) && empty($req->jobCategory) && empty($req->minsalary) && empty($req->maxsalary)){
            $joblist = Job::where([['Type',$req->JobType]])->paginate(10);       
        }
        elseif($req->jobCategory && empty($req->Jobsearch) && empty($req->JobType) && empty($req->minsalary) && empty($req->maxsalary)){
            $joblist = Job::where([['Category', $req->jobCategory]])->paginate(10);       
        }
        elseif($req->minsalary && $req->maxsalary && empty($req->Jobsearch) && empty($req->jobCategory) && empty($req->JobType)){
            $joblist = Job::where([['Salary','>=',$req->minsalary],['Salary','<=',$req->maxsalary]])->paginate(10);       
        }
        elseif(empty($req->Jobsearch) && $req->JobType && $req->jobCategory  && $req->minsalary && $req->maxsalary){
            $joblist = Job::where([['Type',$req->JobType],['Category', $req->jobCategory],['Salary','>=',$req->minsalary],['Salary','<=',$req->maxsalary]])->paginate(10);       
        }
        elseif(empty($req->Jobsearch) && $req->JobType && $req->jobCategory && empty($req->minsalary) && empty($req->maxsalary)){
            $joblist = Job::where([['Type',$req->JobType],['Category', $req->jobCategory]])->paginate(10);       
        }
        elseif(empty($req->Jobsearch) && $req->JobType && $req->minsalary && $req->maxsalary && empty($req->jobCategory)){
            $joblist = Job::where([['Type',$req->JobType],['Salary','>=',$req->minsalary],['Salary','<=',$req->maxsalary]])->paginate(10);       
        }
        elseif(empty($req->Jobsearch) && $req->jobCategory && $req->minsalary && $req->maxsalary && empty($req->JobType) ){
            $joblist = Job::where([['Category', $req->jobCategory],['Salary','>=',$req->minsalary],['Salary','<=',$req->maxsalary]])->paginate(10);       
        }
        else{
            $joblist = Job::paginate(10);
        }




        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }

        

        elseif(Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        return view('Jobs', compact('data','joblist','Jobsearch','searchdata'));

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

    public function ShowJobProfile($id)
    {
        $data = null;
        $Jid = Job::find($id);
        $relatedjobs = Job::where([['Category', $Jid->Category], ['id','!=',$Jid->id],['status','1']])->latest()->take(6)->get();
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        return view('Job.JobProfile', compact('data','Jid','relatedjobs'));
    }
    public function ShowCompanyProfile($id)
    {
        $data = null;
        $Cid = User::find($id);
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        elseif(Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        return view('Job.UserCompanyProfile', compact('data','Cid'));
    }


}
