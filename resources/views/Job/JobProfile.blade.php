@extends('layouts.app')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="ApplyJobs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="staticBackdropLabel" style="font-size:1.6rem;">Personal Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @if ($JobseekerInfo)
                    <form action="{{ url('ApplyJob/' . $Jid->id) }}" method="post" id="Applyform">
                        <div class="modal-body">
                            <div style="padding:0.5rem 2rem">
                                @csrf
                                {{-- <div class="cv_section">
                                    <h1>RESUME</h1>
                                    <div class="file_img">
                                        @if ($data->Resume == 'null')
                                        <img src="" alt="NOfile has been uploaded" style="height:50px">
                                        @else
                                            <img src="{{ asset('storage/default/pdf.png') }}" alt="" style="height:50px">
                                        @endif
                                    </div>
                                    <input type="file" value="$JobseekerInfo->Resume">
                                </div> --}}
                                <div>
                                    <h5 style="font-size: 2.375rem;">Add Your Personal Details</h5>
                                    @if($JobseekerInfo->Resume == null) <span style="font-size: 1.2rem">{{'(Please Upload your resume in your profile to apply for this job.)'}}</span> @endif
                                </div>
                                <div class="sub_form shadow-sm p-4 mb-5 bg-white rounded">
                                    <div class="mb-3 ">
                                        <input type="hidden" name="id" value="{{ $JobseekerInfo->id }}">
                                        <label for="name">Full Name:</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror "
                                            name="name" value="{{ $JobseekerInfo->name }}">
                                        @error('name')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 d-flex w-100 ">
                                        <div class="mb-3 " style="width: 30%;">
                                            <label for="District">District</label>
                                            <select class="form-select @error('District') is-invalid @enderror" name="District">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($data->District == 'Kathmandu') selected @endif value="Kathmandu">
                                                    Kathmandu</option>
                                                <option @if ($data->District == 'Bhaktapur') selected @endif value="Bhaktapur">
                                                    Bhaktapur</option>
                                                <option @if ($data->District == 'Lalitpur') selected @endif value="Lalitpur">
                                                    Lalitpur</option>
                                                <option @if ($data->District == 'Pokhara') selected @endif value="Pokhara">
                                                    Pokhara</option>
                                                <option @if ($data->District == 'Biratnagar') selected @endif value="Biratnagar">
                                                    Biratnagar</option>
                                                <option @if ($data->District == 'Birgunj') selected @endif value="Birgunj">
                                                    Birgunj</option>
                                                <option @if ($data->District == 'Chitwan') selected @endif value="Chitwan">
                                                    Chitwan</option>
                                                <option @if ($data->District == 'Dharan') selected @endif value="Dharan">
                                                    Dharan</option>
                                                <option @if ($data->District == 'Nepalgunj') selected @endif value="Nepalgunj">
                                                    Nepalgunj</option>
                                                <option @if ($data->District == 'Outside Nepal') selected @endif
                                                    value="Outside
                                                Nepal">
                                                    Outside Nepal</option>
                                            </select>
                                            @error('District')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 mx-auto" style="width: 30%;">
                                            <label for="Municipality">Municipality</label>
                                            <select class="form-select @error('Municipality') is-invalid @enderror "
                                                name="Municipality">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($data->Municipality == 'Kathmandu') selected @endif value="Kathmandu">
                                                    Kathmandu</option>
                                                <option @if ($data->Municipality == 'Bhaktapur') selected @endif value="Bhaktapur">
                                                    Bhaktapur</option>
                                                <option @if ($data->Municipality == 'Lalitpur') selected @endif value="Lalitpur">
                                                    Lalitpur</option>
                                                <option @if ($data->Municipality == 'Pokhara') selected @endif value="Pokhara">
                                                    Pokhara</option>
                                                <option @if ($data->Municipality == 'Biratnagar') selected @endif value="Biratnagar">
                                                    Biratnagar</option>
                                                <option @if ($data->Municipality == 'Birgunj') selected @endif value="Birgunj">
                                                    Birgunj</option>
                                                <option @if ($data->Municipality == 'Chitwan') selected @endif value="Chitwan">
                                                    Chitwan</option>
                                                <option @if ($data->Municipality == 'Dharan') selected @endif value="Dharan">
                                                    Dharan</option>
                                                <option @if ($data->Municipality == 'Nepalgunj') selected @endif value="Nepalgunj">
                                                    Nepalgunj</option>
                                                <option @if ($data->Municipality == 'Outside Nepal') selected @endif
                                                    value="Outside
                                                Nepal">
                                                    Outside Nepal</option>
                                            </select>
                                            @error('Municipality')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 " style="width: 30%;">
                                            <label for="city">City</label>
                                            <select class="form-select @error('city') is-invalid @enderror " name="city">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($data->city == 'Kathmandu') selected @endif value="Kathmandu">
                                                    Kathmandu</option>
                                                <option @if ($data->city == 'Bhaktapur') selected @endif value="Bhaktapur">
                                                    Bhaktapur</option>
                                                <option @if ($data->city == 'Lalitpur') selected @endif value="Lalitpur">
                                                    Lalitpur</option>
                                                <option @if ($data->city == 'Pokhara') selected @endif value="Pokhara">
                                                    Pokhara</option>
                                                <option @if ($data->city == 'Biratnagar') selected @endif value="Biratnagar">
                                                    Biratnagar</option>
                                                <option @if ($data->city == 'Birgunj') selected @endif value="Birgunj">
                                                    Birgunj</option>
                                                <option @if ($data->city == 'Chitwan') selected @endif value="Chitwan">
                                                    Chitwan</option>
                                                <option @if ($data->city == 'Dharan') selected @endif value="Dharan">
                                                    Dharan</option>
                                                <option @if ($data->city == 'Nepalgunj') selected @endif value="Nepalgunj">
                                                    Nepalgunj</option>
                                            </select>
                                            @error('city')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex ">
                                        <div class="mb-3" style="width: 30%;">
                                            <label for="DateofBirth">Date Of Birth:</label>
                                            <input type="date" class="form-control @error('DateofBirth') is-invalid @enderror "
                                                name="DateofBirth" value="{{ $data->DateofBirth }}">
                                            @error('DateofBirth')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 mx-auto" style="width: 30%;">
                                            <label for="Gender">Gender:</label>
                                            <select class="form-select   @error('Gender') is-invalid @enderror " name="Gender">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($data->Gender == 'Male') selected @endif value="Male">
                                                    Male</option>
                                                <option @if ($data->Gender == 'Female') selected @endif value="Female">
                                                    Female</option>
                                                <option @if ($data->Gender == 'Others') selected @endif value="Others">
                                                    Others</option>
                                            </select>
                                            @error('Gender')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 " style="width: 30%;">
                                            <label for="phoneno">Mobile Number:</label>
                                            <input type="text" class="form-control @error('phoneno') is-invalid @enderror"
                                                name="phoneno" value="{{ $data->phoneno }}">
                                            @error('phoneno')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="JobTime">Job Time:</label>
                                        <select class="category form-select @error('JobTime') is-invalid @enderror"
                                            name="JobTime">
                                            <option @if ($JobseekerInfo->JobTime == 'Full Time') selected @endif value="Full Time">
                                                Full
                                                Time
                                            </option>
                                            <option @if ($JobseekerInfo->JobTime == 'Part Time') selected @endif value="Part Time">
                                                Part
                                                Time
                                            </option>
                                            <option @if ($JobseekerInfo->JobTime == 'Freelance') selected @endif value="Freelance">
                                                Freelance
                                            </option>
                                        </select>
                                        @error('JobTime')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Objective">Your Career Objective:</label>
                                        <textarea class=" form-control editor @error('Objective') is-invalid @enderror" name="Objective">{{ $data->Objective }}</textarea>
                                        @error('Objective')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <h5 style="margin-top: 50px; font-size: 2.375rem;">Add Education</h5>
                                <div class="sub_form shadow-sm p-4 mb-5 bg-white rounded ">
                                    <div class="mb-3 d-flex w-100 ">
                                        <div class="mb-3 " style="width: 30%;">
                                            <label for="Degree">Degree:</label>
                                            <select class="form-select @error('Degree') is-invalid @enderror" name="Degree">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($data->Degree == 'SLC/SEE') selected @endif value="SLC/SEE">SLC/SEE
                                                </option>
                                                <option @if ($data->Degree == 'Intermediate') selected @endif value="Intermediate">
                                                    Intermediate</option>
                                                <option @if ($data->Degree == 'Bachelor') selected @endif value="Bachelor">
                                                    Bachelor</option>
                                                <option @if ($data->Degree == 'Diploma') selected @endif value="Diploma">Diploma
                                                </option>
                                            </select>
                                            @error('Degree')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 mx-auto" style="width: 30%;">
                                            <label for="Institution">Institution:</label>
                                            <input type="text" class="form-control @error('Institution') is-invalid @enderror"
                                                name="Institution" value="{{ $data->Institution }}">
                                            @error('Institution')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3" style="width: 30%;">
                                            <label for="University">University:</label>
                                            <input type="text" class="form-control @error('University') is-invalid @enderror"
                                                name="University" value="{{ $data->University }}">
                                            @error('University')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex w-100 ">

                                        <div class="mb-3 " style="width: 50%;">
                                            <label for="Joined_year">Joined Year:</label>
                                            <input type="number"
                                                class="form-control @error('Joined_year') is-invalid @enderror"
                                                placeholder="YYYY" min="1999" max="2020" name="Joined_year"
                                                value="{{ $JobseekerInfo->Joined_year }}">
                                            @error('Joined_year')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 " style="width: 50%;margin-left: 46px;">
                                            <label for="Passed_year">Passed Year:</label>
                                            <input type="number"
                                                class="form-control @error('Passed_year') is-invalid @enderror"
                                                placeholder="YYYY" min="1999" max="2020" name="Passed_year"
                                                value="{{ $JobseekerInfo->Passed_year }}">
                                            @error('Passed_year')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label for="Skills">Your Skills:</label>
                                        <textarea class="form-control editor @error('Skills') is-invalid @enderror" name="Skills">{{ $data->Skills }}</textarea>
                                        @error('Skills')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <h5 style="font-size: 2.375rem;">Add Experience</h5>
                                <div class="form-check" style="padding-left: 2.5em;">
                                    <input class="form-check-input" name="Fresher" type="checkbox" value="true"
                                        @if ($JobseekerInfo->Checked == 1) checked @endif id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Mark, If you are a Fresher.
                                    </label>
                                </div>
                                <div class="sub_form shadow-sm p-4 mb-5 bg-white rounded ">
                                    <div class="mb-3 d-flex w-100 ">
                                        <div class="mb-3 " style="width: 50%;">
                                            <label for="Position">Position:</label>
                                            <input type="text"
                                                class="form-control Exp @error('Position') is-invalid @enderror"
                                                name="Position" value="{{ $JobseekerInfo->Position }}">
                                            @error('Position')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror

                                        </div>
                                        <div class="mb-3 " style="width: 50%;margin-left: 46px;">
                                            <label for="Organization">Organization:</label>
                                            <input type="text"
                                                class="Exp form-control @error('Organization') is-invalid @enderror"
                                                name="Organization" value="{{ $JobseekerInfo->Organization }}">
                                            @error('Organization')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex w-100 ">
                                        <div class="mb-3 " style="width: 50%;">
                                            <label for="Industry">Industry</label>
                                            <select
                                                class=" Exp category form-select @error('Industry') is-invalid @enderror"
                                                name="Industry">
                                                <option @if ($JobseekerInfo->Industry == 'Accounting & Consulting') selected @endif
                                                    value="Accounting & Consulting">
                                                    Accounting and Consulting</option>
                                                <option @if ($JobseekerInfo->Industry == 'Admin Support') selected @endif
                                                    value="Admin
                                                Support">
                                                    Admin
                                                    Support</option>
                                                <option @if ($JobseekerInfo->Industry == 'Data Science & Analysis') selected @endif
                                                    value="Data Science & Analysis">
                                                    Data Science and Analysis</option>
                                                <option @if ($JobseekerInfo->Industry == 'Design & Creative') selected @endif
                                                    value="Design & Creative">Design
                                                    and Creative</option>
                                                <option @if ($JobseekerInfo->Industry == 'Engineering & Architecture') selected @endif
                                                    value="Engineering & Architecture">Engineering and Architecture
                                                </option>
                                                <option @if ($JobseekerInfo->Industry == 'IT & Networking') selected @endif
                                                    value="IT & Networking">IT &
                                                    Networking</option>
                                                <option @if ($JobseekerInfo->Industry == 'Legal') selected @endif value="Legal">
                                                    Legal
                                                </option>
                                                <option @if ($JobseekerInfo->Industry == 'Sales & Marketing') selected @endif
                                                    value="Sales & Marketing">Sales
                                                    and Marketing</option>
                                                <option @if ($JobseekerInfo->Industry == 'Web, Mobile, & Software Development') selected @endif
                                                    value="Web, Mobile, & Software Development">Web, Mobile, & Software
                                                    Development
                                                </option>
                                            </select>
                                            @error('jobCategory')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 " style="width: 50%;margin-left: 46px;">
                                            <label for="Level">Job Level:</label>
                                            <select class="form-select Exp @error('Level') is-invalid @enderror"
                                                name="Level">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($JobseekerInfo->Level == 'Entry Level') selected @endif
                                                    value="Entry Level">
                                                    Entry Level</option>
                                                <option @if ($JobseekerInfo->Level == 'Junior Level') selected @endif
                                                    value="Junior Level">
                                                    Junior Level</option>
                                                <option @if ($JobseekerInfo->Level == 'Senior Level') selected @endif
                                                    value="Senior Level">
                                                    Senior Level</option>
                                                <option @if ($JobseekerInfo->Level == 'Top Level') selected @endif
                                                    value="Top Level">Top
                                                    Level</option>
                                                <option @if ($JobseekerInfo->Level == 'Top Level') selected @endif
                                                    value="Top Level">Top
                                                    Level</option>
                                            </select>
                                            @error('Level')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="Roles">Roles And Responsibility:</label>
                                        <textarea class="form-control @error('Roles') is-invalid @enderror" id="Exp-js" name="Roles">{{ $JobseekerInfo->Roles }}</textarea>

                                        @error('Roles')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    @if(Session::has('NoResume'))
                                        <p style="color:red;font-size:1.3rem;width:fit-content;margin:auto;">{{Session::get('NoResume')}}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                style="font-size:1.4rem;">Close</button>
                            <button type="submit" class="btn btn-primary" style="font-size:1.4rem;">Submit</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
    @if ($errors->any() || Session::has('NoResume'))
        <script>
            jQuery.noConflict();
            jQuery(document).ready(function($) {
                $('#ApplyJobs').modal('show');
            });
        </script>
    @endif
    <section class="job">
        <div class="job-text">
            <h2>Jobs</h2>
            <ul>
                <li><a href="{{ route('home') }}">Home</a> </li>
                <li>Job Details</li>
            </ul>
        </div>
    </section>
    <div class="container" style="padding:0 8rem;margin-bottom:8rem;">
        <div class="row bg-white shadow p-5">
            <div class="col-md-12 justify-content-between">
                <div class="row">
                    <div class="col-md-6 JobCompanyProfile">
                        <div class="JobCompanyProfilelogo rounded-50">
                            @if ($Jid->company->ProfileImg == 'defaultImg.png')
                                <img src="../img/job-icon1.png" alt="404 image not found">
                            @else
                                <img src="{{ asset('storage/Company Logo/' . $Jid->company->ProfileImg) }}"
                                    alt="404 image not found">
                            @endif
                        </div>
                        <div class="JobCompanyProfilecontent">
                            <h2 class="header2">{{ ucfirst($Jid->Title) }}</h2>
                            <div class="JobCompanyProfilecontentinside">
                                <p class="paragraph">{{ $Jid->company->name }}</p>
                                <div class="JobProfilelocation">
                                    <i class="uil uil-location-pin-alt"></i>
                                    <p class="paragraph">{{ $Jid->company->city . ', ' . $Jid->company->location }}</p>
                                </div>
                                <p class="paragraph">{{ 'Rs. ' . $Jid->Salary }}</p>
                            </div>
                            <div>
                                <p>{{ $Jid->Skills }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex flex-column align-items-end">
                        <div style="display: inline-block">
                            <div class="JobProfilePhone">
                                <i class="uil uil-phone"></i>
                                <p>{{ $Jid->company->phoneno }}</p>
                            </div>
                            <div class="JobProfilelocation1">
                                <i class="uil uil-map-marker-alt"></i>
                                <p>{{ $Jid->company->city . ', ' . $Jid->company->location }}</p>
                            </div>
                            <div class="JobProfileCompanyProfile">
                                <i class="uil uil-globe" style="color: #3c2064"></i>
                                <a href="{{ url('UserCompanyProfile/' . $Jid->company->id) }}"
                                    style="text-decoration: none;color:#3c2064;">View Company Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between" style="margin-top:5rem">
            <div class="col-md-4 bg-white shadow " style="height:fit-content">
                <div class="border border-top-0 border-start-0 border-end-0"
                    style="background: rgba(0,0,0,.03);padding:2rem 1rem;margin: 0 -1rem">
                    <h2 class="header2" style="margin-left:3rem;margin-bottom: 0">Related Jobs</h2>
                </div>
                @if (count($relatedjobs) <= 0)
                    <div class="row border border-top-0 border-start-0 border-end-0"
                        style="margin:1rem 0 0 0; padding:1rem 0">
                        <div class="col-md-12 RelatedJobs d-flex justify-content-center">
                            <p>Currently no related jobs available.</p>
                        </div>
                    </div>
                @else
                    @foreach ($relatedjobs as $jobs)
                        <div class="row border border-top-0 border-start-0 border-end-0"
                            style="margin:1rem 0 0 0; padding:1rem 0">
                            <div class="col-md-4 RelatedJobs d-flex justify-content-center">
                                <div style="height:70px;width:70px">
                                    @if ($jobs->company->ProfileImg == 'defaultImg.png')
                                        <img src="../img/job-icon1.png" alt="">
                                    @else
                                        <img src="{{ asset('storage/Company Logo/' . $jobs->company->ProfileImg) }}"
                                            alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8">
                                <a href="{{ url('JobProfile/' . $jobs->id) }}"
                                    style="letter-spacing: 2px;font-weight:500;text-decoration:none;color:#3c2064;font-size:1.8rem">{{ ucfirst($jobs->Title) }}</a>
                                <p style="letter-spacing: 0.9px">{{ ucfirst($jobs->company->name) }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="col-md-7 bg-white shadow p-5" style="overflow: hidden">
                <div
                    style="background: rgba(0,0,0,.03);margin:-3rem;padding:2rem 1rem;display:flex;justify-content:space-between">
                    <h2 class="header2" style="margin-left:3rem;margin-bottom: 0">{{ ucfirst($Jid->Title) }}</h2>
                    <div class="d-flex gap-2 justify-content-center align-items-center">
                        <i class="uis uis-history" style="font-size:1.6rem;color:red;"></i>
                        <h3 style="margin:0;height:fit-content;color:red">{{ $difindays . ' days remaining' }}</h3>
                    </div>
                </div>
                <hr style="height: 3px;width:110%;color: black !important;margin: 3rem -3rem 1rem -3rem">
                <div class="JobHeader" style="margin-top: 4rem">
                    <h2 style="margin-bottom: 0">Basic Information</h2>
                </div>

                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Job Category</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->Category }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Required Skills</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->Skills }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Type</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->Type }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Experience</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->experience }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Offered Salary</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->Salary }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Apply Before(Deadline)</p>
                        </div>
                        <div class="col-md-7 d-flex justify-content-between">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->ExpiryDate }}</p>
                            <div class="d-flex gap-2 justify-content-center align-items-center">
                                <i class="uis uis-history" style="font-size:1.6rem;color:red;"></i>
                                <h3 style="margin:0;height:fit-content;color:red">{{ $difindays . ' days remaining' }}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="JobHeader" style="margin-top: 4rem">
                    <h2 style="margin-bottom: 0">Job Specification</h2>
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Education Degree</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->EducationDegree }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Education</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->Education }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Location</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp;
                                {{ $Jid->company->city . ', ' . $Jid->company->location }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="JobHeader" style="margin-top: 4rem">
                    <h2 style="margin-bottom: 0">Job Description</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="paragraph mt-5" style="text-align:justify;white-space:normal;word-break:break-word;">
                            {{ $Jid->Description }}</p>
                    </div>
                </div>
                @if (Session::has('UloginId'))
                    @if ($applied == 1)
                        <div class="d-flex justify-content-center"
                            style="background: rgba(0,0,0,.03);margin:3rem -3rem -3rem -3rem;padding:2rem 1rem;">
                            <p style="margin: 1rem 0 0 0;color:green;">You have already applied for this job.</p>
                        </div>
                    @else
                        <div class="d-flex justify-content-end"
                            style="background: rgba(0,0,0,.03);margin:3rem -3rem -3rem -3rem;padding:2rem 1rem;">
                            <div class="d-flex">
                                <button class="JobApplyNowBtn" type="button"><i class="uil uil-plus-circle"
                                        style="color:white;font-size: 1.8rem;margin-right:0.6rem;margin-top:0.2rem"></i>Apply
                                    Now</button>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="d-flex justify-content-center"
                        style="background: rgba(0,0,0,.03);margin:3rem -3rem -3rem -3rem;padding:2rem 1rem;">
                        <p style="margin: 1rem 0 0 0;color:black;">Login as Jobseeker to apply to this job.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        jQuery.noConflict();
        jQuery(document).ready(function($) {
            if ($('#flexCheckIndeterminate').is(":checked")) {

                $('.Exp').prop('disabled', true);
                $('#Exp-js').prop('disabled', true);
            } else {
                $('.Exp').prop('disabled', false);
                $('#Exp-js').prop('disabled', false);
            }

            $('#flexCheckIndeterminate').click(function() {
                if ($(this).is(':checked')) {
                    $('.Exp').prop('disabled', true);
                    $('#Exp-js').prop('disabled', true);
                } else {
                    $('.Exp').prop('disabled', false);
                    $('#Exp-js').prop('disabled', false);
                }
            });
        });
    </script>
@endsection
