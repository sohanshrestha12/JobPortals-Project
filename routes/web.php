<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobSeekerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/jobs', [HomeController::class, 'jobs'])->name('jobs');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/companyprofile', [HomeController::class, 'companyprofile'])->name('CompanyProfile')->middleware('isLoggedIn');
Route::get('/JobSeekerprofile', [HomeController::class, 'JobSeekerprofile'])->name('JobSeekerprofile')->middleware('isUserLoggedIn');


Route::get('/UpdateJobSeekerInfo',[UserController::class,'UpdateJobSeekerInfo'])->name('UpdateJobSeekerInfo')->middleware('isUserLoggedIn');
Route::post('/UpdateJobSeekerInformation', [UserController::class, 'UpdateJobSeekerInformation'])->name('UpdateJobSeekerInformation');
Route::post('/UpdateCv', [UserController::class, 'UpdateCv'])->name('UpdateCv');


Route::post('/resume_upload',[UserController::class,'resume_upload'])->name('resume_upload');
Route::get('/view/{id}', [HomeController::class, 'viewResume']);
Route::get('/deleteResume/{id}',[UserController::class,'DeleteResume']);


Route::get('/RegisterJobSeeker', [UserController::class, 'JobSeekerSignUp'])->name('JobSeekerSignUp')->middleware('alreadyLoggedIn');
Route::post('/RegisterJobSeeker', [UserController::class, 'RegisterJobSeeker'])->name('RegisterJobSeeker');
Route::get('auth/google', [UserController::class, 'loginWithGoogle'])->name('login_with_google');
Route::get('auth/google/callback', [UserController::class, 'callbackFromGoogle'])->name('callback');
Route::post('/UpdateProfilePicture', [UserController::class, 'UpdateProfilePicture'])->name('UpdateProfilePicture');
Route::get('/AppliedJobs', [UserController::class, 'AppliedJobs'])->name('AppliedJobs')->middleware('isUserLoggedIn');



Route::get('/RegisterCompany', [UserController::class, 'CompanySignUp'])->name('CompanySignUp')->middleware('alreadyLoggedIn');
Route::post('/login', [UserController::class, 'login'])->name('login')->middleware('alreadyLoggedIn');
Route::post('/RegisterCompany', [UserController::class, 'RegisterCompany'])->name('RegisterCompany');
Route::post('/UpdateCompanyInformation', [UserController::class, 'UpdateCompanyInformation'])->name('UpdateCompanyInformation');
Route::post('/UpdateCompanyLogo', [UserController::class, 'UpdateCompanyLogo'])->name('UpdateCompanyLogo');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/ForgotPassword', [UserController::class, 'ForgotPassword'])->name('ForgotPassword');
Route::post('/ForgotPassword', [UserController::class, 'sendResetLink'])->name('ForgotPassword/link');
Route::get('/Cancel', [UserController::class, 'Cancel'])->name('Cancel');
Route::get('/ResetPassword/{token}', [UserController::class, 'resetpasswordform'])->name('UserResetPasswordForm');
Route::post('/ResetPassword', [UserController::class, 'resetpassword'])->name('ForgotResetPassword');
Route::get('/PasswordResetSuccessful', [UserController::class, 'gobackmsg'])->name('ResetGobackPage');
Route::get('/ApplicantsDetails/{userid}', [UserController::class, 'ApplicantsDetails'])->name('ApplicantsDetails');
Route::get('/Jobaccepted/{usid}', [UserController::class, 'Jobaccepted'])->name('Jobaccepted');
Route::get('/Jobrejected/{usid}', [UserController::class, 'Jobrejected'])->name('Jobrejected');
Route::get('/CompanyMessage', [UserController::class,'CompanyMessage'])->name('CompanyMessage')->middleware('isLoggedIn');



Route::get('/PostJobs', [JobController::class,'PostJobs'])->name('PostJob')->middleware('isLoggedIn');
Route::post('/PostJobs',[JobController::class,'PostnewJob'])->name('PostnewJob');
Route::get('/ListofAllJobs', [JobController::class,'ListJobs'])->name('ListofAllJobs')->middleware('isLoggedIn');
Route::get('/editJobs/{id}', [JobController::class,'editJob'])->name('editJobs');
Route::post('/editJobs', [JobController::class,'JobEditing'])->name('JobEdit');
// Route::get('/deletejobs/{id}', [JobController::class,'Deletejobs'])->name('deletejobs');
Route::post('/deletejobs', [JobController::class,'Deletejobs'])->name('deletejobs');
Route::get('/ChangeCompanyPassword', [JobController::class,'ChangeCompanyPassword'])->name('ChangeCompanyPassword')->middleware('isLoggedIn');
Route::get('/ChangeJobSeekerPassword', [JobController::class,'ChangeJobSeekerPassword'])->name('ChangeJobSeekerPassword')->middleware('isUserLoggedIn');
Route::post('/ChangePassword', [JobController::class,'ChangePassword'])->name('ChangePassword');
Route::post('/ChangeUserPassword', [JobController::class,'ChangeUserPassword'])->name('ChangeUserPassword');




Route::get('/JobProfile/{id}',[HomeController::class,'ShowJobProfile'])->name('JobProfile');
Route::get('/UserCompanyProfile/{id}',[HomeController::class,'ShowCompanyProfile'])->name('ShowCompanyProfile');
Route::get('/AdminCompanyProfile/{id}',[HomeController::class,'ShowAdminCompanyProfile'])->name('AdminCompanyProfile')->middleware('isAdminLoggedIn');
Route::get('/VerifyAdminCompanyProfile/{id}',[HomeController::class,'VerifyShowAdminCompanyProfile'])->name('VerifyShowAdminCompanyProfile')->middleware('isAdminLoggedIn');

Route::post('/ApplyJob/{Jobid}',[JobController::class,'ApplyJob'])->name('ApplyJob');
Route::get('/Applicants/{Jobid}',[JobController::class,'Applicants'])->name('Applicants');


//admin login
Route::get('/admindashboard', [Admin::class, 'admindashboard'])->name('admindashboard')->middleware('isAdminLoggedIn');
Route::get('/adminmail', [Admin::class, 'adminmessage'])->name('adminmessage');
Route::get('/Verifycompany', [Admin::class, 'Verifycompany'])->name('Verifycompany')->middleware('isAdminLoggedIn');
Route::get('/Verifiedcompany', [Admin::class, 'Verifiedcompany'])->name('Verifiedcompany')->middleware('isAdminLoggedIn');
Route::get('/adminJobs', [Admin::class, 'adminJobs'])->name('adminJobs')->middleware('isAdminLoggedIn');
Route::post('/Admindeletejobs', [Admin::class, 'Admindeletejobs'])->name('Admindeletejobs')->middleware('isAdminLoggedIn');
Route::post('/AdmindeletejobsPermanently', [Admin::class, 'AdmindeletejobsPermanently'])->name('AdmindeletejobsPermanently')->middleware('isAdminLoggedIn');
Route::get('/adminChangePassword', [Admin::class, 'adminpw'])->name('adminpw')->middleware('isAdminLoggedIn');
Route::get('/adminlogout', [Admin::class, 'adminlogout'])->middleware('isAdminLoggedIn')->middleware('isAdminLoggedIn');
Route::post('/ContactAdmin', [Admin::class, 'ContactAdmin'])->name('ContactAdmin');
Route::post('/AdmindeleteContact', [Admin::class, 'AdmindeleteContact'])->name('AdmindeleteContact')->middleware('isAdminLoggedIn'); 
Route::post('/AdminChangePassword', [Admin::class, 'AdminChangePassword'])->name('AdminChangePassword')->middleware('isAdminLoggedIn'); 

Route::get('/AdminVerifiedsearch', [Admin::class,'AdminVerifiedsearch'])->name('AdminVerifiedsearch');
Route::get('/AdminVerifysearch', [Admin::class,'AdminVerifysearch'])->name('AdminVerifysearch');
Route::get('/AdminDeleteCompany/{id}', [Admin::class,'AdminDeleteCompany'])->name('AdminDeleteCompany');

Route::get('/verify/{comid}', [Admin::class,'verify'])->name('VerifyComapany');
?>