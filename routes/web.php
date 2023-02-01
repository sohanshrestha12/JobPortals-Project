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
Route::get('/companyprofile', [HomeController::class,'companyprofile'])->name('CompanyProfile');



Route::get('/RegisterCompany', [UserController::class,'CompanySignUp'])->name('CompanySignUp');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::post('/RegisterCompany',[UserController::class,'RegisterCompany'])->name('RegisterCompany');
Route::post('/UpdateCompanyInformation',[UserController::class,'UpdateCompanyInformation'])->name('UpdateCompanyInformation');
Route::post('/UpdateCompanyLogo',[UserController::class,'UpdateCompanyLogo'])->name('UpdateCompanyLogo');
Route::get('/logout', [UserController::class,'logout'])->name('logout');



Route::get('/job_details', [HomeController::class,'Job_details'])->name('Job_details');
    
Route::post('/save_jobs_List',[JobController::class,'Add_Job_list'])->name('Save_jobs_List');
Route::get('/job', [JobController::class,'show_jobs'])->name('job_control');
Route::get('/delete/{id}', [JobController::class ,'delete_job']);
Route::post('/edit_jobs_List',[JobController::class,'edit_job'])->name('Update_jobs_List');



