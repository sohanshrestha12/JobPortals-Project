@extends('layouts.app')
@section('content')
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
                                <a href="{{url('UserCompanyProfile/' . $Jid->company->id)}}" style="text-decoration: none;color:#3c2064;">View Company Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between" style="margin-top:5rem">
            <div class="col-md-4 bg-white shadow p-5" style="height:fit-content">
                <div style="background: rgba(0,0,0,.03);margin:-3rem;padding:2rem 1rem;">
                    <h2 class="header2" style="margin-left:3rem;margin-bottom: 0">Related Jobs</h2>
                </div>
            </div>
            <div class="col-md-7 bg-white shadow p-5" style="overflow: hidden">
                <div style="background: rgba(0,0,0,.03);margin:-3rem;padding:2rem 1rem;">
                    <h2 class="header2" style="margin-left:3rem;margin-bottom: 0">{{ ucfirst($Jid->Title) }}</h2>
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
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->ExpiryDate }}</p>
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
                <div class="d-flex justify-content-end"
                    style="background: rgba(0,0,0,.03);margin:3rem -3rem -3rem -3rem;padding:2rem 1rem;">
                    <div class="d-flex">
                        <button class="JobApplyNowBtn" type="submit"><i class="uil uil-plus-circle"
                                style="color:white;font-size: 1.8rem;margin-right:0.6rem;margin-top:0.2rem"></i>Apply
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
