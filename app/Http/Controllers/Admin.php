<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as Session;

class Admin extends Controller
{
    public function admindashboard()
    {
        $Jobs = Job::get();
        $Jobseeker = User::where('role', 'user')->get();
        $Company = User::where('role', 'company')->get();
        $Verifycompany = User::where(['role' => 'company', 'Verify' => '0'])->get();

        return view('Admin.adminDashboard', compact('Jobseeker', 'Company', 'Jobs', 'Verifycompany'));
    }
    public function adminmessage()
    {
        $contact = Contact::latest()->paginate(10);
        $Verifycompany = User::where(['role' => 'company', 'Verify' => '0'])->get();
        return view('Admin.adminMessage', compact('Verifycompany', 'contact'));
    }
    public function Verifycompany()
    {
        $Verifycompany = User::where(['role' => 'company', 'Verify' => '0'])->get();
        return view('Admin.VerifyCompany', compact('Verifycompany'));
    }
    public function Verifiedcompany()
    {
        $Verifycompany = User::where(['role' => 'company', 'Verify' => '0'])->get();
        $Verifiedcompany = User::where(['role' => 'company', 'Verify' => '1'])->get();
        return view('Admin.VerifiedCompany', compact('Verifiedcompany', 'Verifycompany'));
    }
    public function adminJobs()
    {
        $Verifycompany = User::where(['role' => 'company', 'Verify' => '0'])->get();
        $AllJobs = Job::where('isdeleted', 0)->latest()->paginate(15, ['*'], 'page_a')->appends(request()->except('page_a'));
        $AllDeletedJobs = Job::where('isdeleted', 1)->paginate(15, ['*'], 'page_b')->appends(request()->except('page_b'));
        return view('Admin.adminJobs', compact('Verifycompany', 'AllJobs', 'AllDeletedJobs'));
    }
    public function adminpw()
    {
        $Verifycompany = User::where(['role' => 'company', 'Verify' => '0'])->get();
        return view('Admin.adminPassword', compact('Verifycompany'));
    }
    public function adminlogout()
    {
        Session::pull('AloginId');
        return redirect()->route('home');
    }
    public function verify($comid)
    {
        $companyVerify = User::find($comid);
        if ($companyVerify->Verify == 1) {
            $companyVerify->Verify = 0;
            $companyVerify->save();
        } else {
            $companyVerify->Verify = 1;
            $companyVerify->save();
        }
        return back();
    }

    public function Admindeletejobs(Request $req)
    {
        $AdminJobid = Job::find($req->AdminJobid);
        $AdminJobid->isdeleted = 1;
        $AdminJobid->message = $req->reason;
        $AdminJobid->save();
        return redirect()->route('adminJobs')->with('AdmindeletejobsSuccess', 'The Job has been successfully deleted.');
    }

    public function AdmindeletejobsPermanently(Request $req)
    {
        Job::find($req->PermanentAdminJobid)->delete();
        return redirect()->route('adminJobs')->with('AdmindeletejobsSuccess', 'The Job has been successfully deleted.');

    }

    public function ContactAdmin(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|integer',
            'comments' => 'required'
        ]);
        $contact = new Contact();
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->phone = $req->phone;
        $contact->description = $req->comments;
        $contact->save();
        return back()->with('Contactsuccess', 'Your Message has been delivered. Please wait admin to reply.');
    }
    public function AdmindeleteContact(Request $req)
    {
        Contact::find($req->AdminMessageid)->delete();
        return back()->with('MessageDelete', '');
    }
    public function AdminChangePassword(Request $req){
        $req->validate([
            'CurrentPassword' => 'required',
            'NewPassword' => 'required|confirmed|min:6',
            'NewPassword_confirmation' => 'required'
        ]);
        $admin = User::find($req->id);
        if(Hash::check($req->CurrentPassword,$admin->password)){
            $admin->password = Hash::make($req->NewPassword);
            $admin->save();
            return back()->with('AdminPasswordsuccess','Password successfully changed.');
        }
        else{
            return back()->with('AdminPasswordfail','Current Password did not matched!!!');
        }
    }

    public function AdminVerifiedsearch(Request $req){
        $search = User::where([['role','company'],['Verify',1],['name','LIKE',"%$req->value%"]])->get();
        return view('Admin.VerifiedSearch',compact('search'));
    }
    public function AdminVerifysearch(Request $req){
        $search = User::where([['role','company'],['Verify',0],['name','LIKE',"%$req->value%"]])->get();
        return view('Admin.VerifySearch',compact('search'));
    }
}
