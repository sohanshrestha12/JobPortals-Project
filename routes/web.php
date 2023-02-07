<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
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

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/jobs', [HomeController::class,'jobs'])->name('jobs');
Route::get('/services', [HomeController::class,'services'])->name('services');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/companyprofile', [HomeController::class,'companyprofile'])->name('CompanyProfile')->middleware('isLoggedIn');



Route::get('/RegisterCompany', [UserController::class,'CompanySignUp'])->name('CompanySignUp')->middleware('alreadyLoggedIn');
Route::post('/login',[UserController::class,'login'])->name('login')->middleware('alreadyLoggedIn');
Route::post('/RegisterCompany',[UserController::class,'RegisterCompany'])->name('RegisterCompany');
Route::post('/UpdateCompanyInformation',[UserController::class,'UpdateCompanyInformation'])->name('UpdateCompanyInformation');
Route::post('/UpdateCompanyLogo',[UserController::class,'UpdateCompanyLogo'])->name('UpdateCompanyLogo');
Route::get('/logout', [UserController::class,'logout'])->name('logout');
Route::get('/ForgotPassword',[UserController::class,'ForgotPassword'])->name('ForgotPassword');
Route::post('/ForgotPassword',[UserController::class,'sendResetLink'])->name('ForgotPassword/link');
Route::get('/Cancel',[UserController::class,'Cancel'])->name('Cancel');
Route::get('/ResetPassword/{token}',[UserController::class,'resetpasswordform'])->name('UserResetPasswordForm');
Route::post('/ResetPassword',[UserController::class,'resetpassword'])->name('ForgotResetPassword');
Route::get('/PasswordResetSuccessful',[UserController::class,'gobackmsg'])->name('ResetGobackPage');



Route::get('/PostJobs', [JobController::class,'PostJobs'])->name('PostJob')->middleware('isLoggedIn');
Route::post('/PostJobs',[JobController::class,'PostnewJob'])->name('PostnewJob');
Route::get('/ListofAllJobs', [JobController::class,'ListJobs'])->name('ListofAllJobs');
Route::get('/editJobs/{id}', [JobController::class,'editJob'])->name('editJobs');
Route::post('/editJobs', [JobController::class,'JobEditing'])->name('JobEdit');
// Route::get('/deletejobs/{id}', [JobController::class,'Deletejobs'])->name('deletejobs');
Route::post('/deletejobs', [JobController::class,'Deletejobs'])->name('deletejobs');



Route::get('/job_details', [HomeController::class,'Job_details'])->name('Job_details');



