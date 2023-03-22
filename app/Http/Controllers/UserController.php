<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Password_reset;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserJob;
use Carbon\Carbon;
use App\Rules\CompanyDate;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{

    public function CompanySignUp()
    {
        $data = null;
        return view('Auth.RegisterCompany', compact('data'));
    }

    public function RegisterCompany(Request $req)
    {
        $req->validate(
            [
                'email' => 'required|email:rfc,dns|unique:users,email',
                'password' => 'required|confirmed|min:6',
                'password_confirmation' => 'required',
                'name' => 'required',
                'category' => 'required',
                'city' => 'required',
                'phoneno' => 'required|integer',
                'location' => 'required'
            ],
            [
                'name.required' => 'The company name field is required.',
                'phoneno.required' => 'The phone number field is required.',
                'category.required' => 'Please select company field',
                'city.required' => 'Please select city field'
            ]
        );
        User::Create([
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'name' => $req->name,
            'category' => $req->category,
            'city' => $req->city,
            'phoneno' => $req->phoneno,
            'location' => $req->location,
            'role' => 'company',
            'Verify' => 0
        ]);
        return back()->with('Registersuccess', 'Your form has been successfully registered.');
    }
    public function JobSeekerSignUp()
    {
        $data = null;
        return view('Auth.RegisterJobSeeker', compact('data'));
    }
    public function UpdateJobSeekerInfo()
    {
        $data = null;
        if (Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        if (Session::has('GUloginId')) {
            $data = User::where('email', Session::get('GUloginId'))->first();
        }
        return view('JobSeeker.EditJobseekerProfile', compact('data'));
    }
    public function RegisterJobSeeker(Request $req)
    {
        $req->validate(
            [
                'email' => 'required|email:rfc,dns|unique:users,email',
                'password' => 'required|confirmed|min:6',
                'password_confirmation' => 'required',

            ],
            [
                'name.required' => 'The company name field is required.',


            ]
        );
        User::Create([
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'name' => $req->name,
            'role' => 'user'
        ]);
        return back()->with('Registersuccess', 'Your form has been successfully registered.');
    }
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callbackFromGoogle()
    {

        $user = Socialite::driver('google')->user();
        $is_user = User::where('email', $user->getEmail())->first();
        if (!$is_user) {
            $SaveUser = User::updateOrCreate(
                [
                    'google_id' => $user->getId()
                ],
                [
                    'name' =>  $user->getName(),
                    'email' =>  $user->getEmail(),
                    //password generate
                    'password' => Hash::make($user->getName() . '@' . $user->getId()),
                    'role' => 'user'
                ],
            );
            Session::put('GUloginId', $user->getEmail());
            return redirect()->route('JobSeekerprofile');
        } else {
            $is_company = User::where([['email', $user->getEmail()], ['role', 'company']])->first();
            if (!$is_company) {
                $SaveUser = User::where('email', $user->getEmail())->update(
                    [
                        'google_id' => $user->getId(),
                    ]
                );
                $SaveUser = User::where('email', $user->getEmail())->first();
                Session::put('GUloginId', $user->getEmail());
                return redirect()->route('JobSeekerprofile');
            } else {
                return redirect()->route('home')->with('loginwithgoogle', 'Company cannot login with google!');
            }
        }
    }

    public function login(Request $req)
    {
        $req->validate(
            [
                'logemail' => 'required|email:rfc,dns',
                'logpassword' => 'required'
            ],
            [
                'logemail.required' => 'The email field is required.',
                'logemail.email' => ' The email must be a valid email address.',
                'logpassword.required' => 'The password field is required.'
            ]
        );

        $alluser = User::where('email', '=', $req->logemail)->first();
        if ($alluser) {
            if ($alluser->role == 'admin') {
                if (Hash::check($req->logpassword, $alluser->password)) {
                    session()->put('AloginId', $alluser->id);
                    return redirect('admindashboard');
                } else {
                    return back()->with('fail', 'Password not matched.');
                }
            } elseif ($alluser->role == 'user') {
                if (Hash::check($req->logpassword, $alluser->password)) {
                    session()->put('UloginId', $alluser->id);
                    return redirect()->route('JobSeekerprofile');
                } else {
                    return back()->with('fail', 'Password not matched.');
                }
            } elseif ($alluser->role == 'company') {
                if (Hash::check($req->logpassword, $alluser->password)) {
                    session()->put('CloginId', $alluser->id);
                    return redirect()->route('CompanyProfile');
                } else {
                    return back()->with('fail', 'Password not matched.');
                }
            } else {
                return back()->with('role', 'Ran into some issue pls try again later!!!');
            }
        } else {
            return back()->with('ErrorLogin', 'Email is not registered.');
        }
    }
    public function UpdateCompanyInformation(Request $req)
    {
        $req->validate(
            [
                'name' => 'required',
                'location' => 'required',
                'phoneno' => 'required|integer',
                'weblink' => 'nullable|url',
                'established' => ['required', new CompanyDate]
            ],
            [
                'name.required' => 'The company name field is required.',
                'phoneno.required' => 'The phone number field is required.',
                'weblink.url' => 'The link should be valid.',
                'established.required' => 'Enter the valid Company Date.'
            ]
        );
        $update = User::find($req->id);
        $update->name = $req->name;
        $update->location = $req->location;
        $update->city = $req->city;
        $update->phoneno = $req->phoneno;
        $update->link = $req->weblink ?? 'Link not available.';
        $update->description = $req->description;
        $update->established = $req->established;
        $update->save();
        return redirect()->route('CompanyProfile');
    }

    public function UpdateJobSeekerInformation(Request $req)
    {
        // $req->validate(
        // [
        //     'name' => 'required',
        //     'city' => 'required',
        //     'phoneno' => 'required|integer',
        //     'AboutMe' => 'required',
        //     'Skills' => 'required',
        //     'Gender' => 'required',
        //     'Roles' => 'required',
        //     'Objective' => 'required',
        //     'Degree' => 'required',
        //     'JobTime' => 'required',
        //     'Level' => 'required',
        //     'District' => 'required',
        //     'Institution' => 'required',
        //     'Municipality' => 'required',
        //     'Industry' => 'required',
        //     'University' => 'required',
        //     'Organization' => 'required',
        //     'Position' => 'required',
        //     'Joined_year' => 'required|integer',
        //     'Passed_year' => 'required|integer',
        //     'DateofBirth' => 'required',

        // ]

        // );



        $update = User::find($req->id);
        $update->name = $req->name;
        $update->city = $req->city;
        $update->category = $req->category;
        $update->phoneno = $req->phoneno;
        $update->AboutMe = $req->AboutMe;

        $update->Skills = Purifier::clean($req->Skills);

        $update->Gender = $req->Gender;
        $update->Roles = $req->Roles;
        $update->Objective = $req->Objective;
        $update->Degree = $req->Degree;
        $update->JobTime = $req->JobTime;
        $update->Level = $req->Level;
        $update->District = $req->District;
        $update->Institution = $req->Institution;
        $update->Municipality = $req->Municipality;
        $update->Industry = $req->Industry;
        $update->University = $req->University;
        $update->Organization = $req->Organization;
        $update->Position = $req->Position;
        $update->Joined_year = $req->Joined_year;
        $update->Passed_year = $req->Passed_year;
        $update->DateofBirth = $req->DateofBirth;
        if ($req->file('Resume')) {
            $add_resume = $req->file('Resume');
            $Resume_name = $req->id . $add_resume->getClientOriginalName();
            $Resume_path = $add_resume->storeAs('public/Resume', $Resume_name);
            $SaveResume = User::find($req->id);
            $SaveResume->Resume = $Resume_name;
            $SaveResume->ResumePath = $Resume_path;
            $SaveResume->save();
        }
        $update->save();
        return redirect()->route('JobSeekerprofile');
    }

    public function UpdateCompanyLogo(Request $req)
    {
        $req->validate(
            [
                'logo' => 'required'
            ],
            [
                'logo.required' => 'Please select a logo'
            ]
        );
        $image = $req->file('logo');
        $logoname = $req->id . $image->getClientOriginalName();
        // dd($logoname);
        // uniqid() to name uniquely
        // $logopath = $image->storeAs('public/Company Logo', $logoname . $req->id);
        $logopath = $image->storeAs('public/Company Logo', $logoname);
        $Savelogo = User::find($req->id);
        $Savelogo->ProfileImg = $logoname;
        $Savelogo->ProfileImgPath = $logopath;
        //delete old image
        $thisone = User::find($req->id);
        $oldpath = $thisone->ProfileImgPath;
        if ($oldpath === 'public/default/defaultImg.jpg') {
            $Savelogo->save();
        } elseif ($logopath == $oldpath) {
            $Savelogo->save();
        } else {
            Storage::disk('local')->delete($oldpath);
            $Savelogo->save();
        }
        return redirect()->route('CompanyProfile');
    }
    public function UpdateProfilePicture(Request $req)
    {
        $req->validate(
            [
                'logo' => 'required'
            ],
            [
                'logo.required' => 'Please select a logo'
            ]
        );
        $image = $req->file('logo');
        $logoname = $req->id . $image->getClientOriginalName();
        // dd($logoname);
        // uniqid() to name uniquely
        // $logopath = $image->storeAs('public/Company Logo', $logoname . $req->id);
        $logopath = $image->storeAs('public/JobSeekerImg', $logoname);
        $Savelogo = User::find($req->id);
        $Savelogo->ProfileImg = $logoname;
        $Savelogo->ProfileImgPath = $logopath;
        //delete old image
        $thisone = User::find($req->id);
        $oldpath = $thisone->ProfileImgPath;
        if ($oldpath === 'public/default/defaultImg.jpg') {
            $Savelogo->save();
        } elseif ($logopath == $oldpath) {
            $Savelogo->save();
        } else {
            Storage::disk('local')->delete($oldpath);
            $Savelogo->save();
        }
        return redirect()->route('JobSeekerprofile');
    }
    public function deleteResume($id)
    {

        $user = User::find($id);


        $resumePath = 'public/Resume/' . $user->Resume;

        if (Storage::disk('local')->exists($resumePath)) {

            Storage::disk('local')->delete($resumePath);
            $user->Resume = null;
            $user->save();

            // Resume file deleted successfully

            return redirect()->route('UpdateJobSeekerInfo');
        }
    }



    //         return response()->json(['success' => true]);
    //     } else {
    //         error_log('Error deleting file: ' . $ResumePath);
    //         return response()->json(['success' => false]);
    //     }
    // } else{
    //     error_log('File not found: ' . $ResumePath);
    //     return response()->json(['success' => false]);
    // }
    public function logout()
    {
        if (Session::has('CloginId')) {
            Session::pull('CloginId');
            return redirect()->route('home');
        } else if (Session::has('UloginId')) {
            Session::pull('UloginId');
            return redirect()->route('home');
        } else if (Session::has('AloginId')) {
            Session::pull('AloginId');
            return redirect()->route('home');
        } else {
            Session::flush();
            return redirect()->route('home');
        }
    }
    public function ForgotPassword()
    {
        return view('Auth.ForgotPassword');
    }
    public function sendResetLink(Request $req)
    {

        $req->validate(
            [
                'ForgotEmail' => 'required|email:rfc,dns|exists:users,email'
            ],
            [
                'ForgotEmail.required' => 'The email field is required.',
                'ForgotEmail.email' => 'The email must be a valid email address.',
                'ForgotEmail.exists' => 'The selected email is invalid.'
            ]
        );
        $token = Str::random(64);
        $pr = new Password_reset();
        $pr->email = $req->ForgotEmail;
        $pr->token = $token;
        $pr->save();

        $action_link = route('UserResetPasswordForm', ['token' => $token, 'email' => $req->ForgotEmail]);
        $body  = "We received a request to reset the password for <b>JobPortal</b> account associated with " . $req->ForgotEmail . " You can reset your password by clicking the link below.";

        Mail::send('Auth.ResetPassword', ['actionlink' => $action_link, 'body' => $body], function ($message) use ($req) {

            $message->from('sohanshrestha40@gmail.com', 'JobPortal');

            $message->to($req->ForgotEmail, 'User');
            $message->subject('JobPortal Reset Password!');
        });
        // Mail::to($req->ForgotEmail)->send(new ForgotPassword());


        return back()->with('Mailsuccess', 'We have e-mailed your password reset link!');
    }
    public function resetpasswordform(Request $req, $token = null)
    {
        // dd($req->all(),$token);
        return view('Auth.FormResetPassword')->with(['token' => $token, 'email' => $req->email]);
    }
    public function resetpassword(Request $req)
    {
        $req->validate([
            'email' => 'required|email:rfc,dns|exists:users,email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);
        $checkToken = Password_reset::where('email', '=', $req->email)->where('token', '=', $req->token)->first();
        if (!$checkToken) {
            return back()->withInput()->with('ResetFail', 'Invalid Token');
        } else {
            $resetuser  = User::where('email', '=', $req->email)->first();
            $resetuser->password = Hash::make($req->password);
            $resetuser->save();

            Password_reset::where('email', '=', $resetuser->email)->delete();
            Session::flush('CloginId');
            return redirect()->route('ResetGobackPage');
        }
    }
    public function gobackmsg()
    {
        return view('Auth.Gobackreset');
    }
    public function Cancel()
    {
        return redirect()->route('home');
    }
    public function ApplicantsDetails($userid)
    {
        $data = null;
        $userInfo = User::find($userid);
        $user = UserJob::where([['job_id',Session::get('ApplicantJobid')],['user_id',$userid]])->first();

        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        if (Session::has('ApplicantJobid')) {
            $ApplicantJobid = Job::find(Session::get('ApplicantJobid'));
        }
        return view('Company.ApplicantsDetails', compact('userInfo', 'data', 'ApplicantJobid','user'));
    }
    public function CompanyMessage()
    {
        $data = null;
        $deletedJobs = Job::where([['isdeleted', 1], ['company_id', Session::get('CloginId')]])->latest()->take(6)->get();
        if (Session::has('CloginId')) {
            $data = User::find(Session::get('CloginId'));
        }
        return view('Company.Message', compact('data', 'deletedJobs'));
    }

    public function AppliedJobs(){
        $data = null;
        if (Session::has('UloginId')) {
            $data = User::find(Session::get('UloginId'));
        }
        $appliedJobs = User::find(Session::get('UloginId'))->Applyjobs;
       
        return view("JobSeeker.MyJobs",compact('data','appliedJobs'));
    }

    public function Jobaccepted($usid){
        $user = UserJob::where([['job_id',Session::get('ApplicantJobid')],['user_id',$usid]])->first();
        $user->status = 1;
        $user->save();
        return back()->with('accepted','Applicants accepted.');
    }
    public function Jobrejected($usid){
        $user = UserJob::where([['job_id',Session::get('ApplicantJobid')],['user_id',$usid]])->first();
        $user->status = 0;
        $user->save();
        return back()->with('accepted','Applicants accepted.');
    }
}
