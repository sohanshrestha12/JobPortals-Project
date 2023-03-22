@extends('layouts.company')
@section('content')
    <div class="profile-right-box">
        <div class="row">
            <div class="col-md-4" style="padding: 0 8rem">
                <h1 style="color:var(--main-color)">Applicant Information</h1>
            </div>
            <hr style="height: 3px;width:90%;color: black !important;margin: 0.7rem 0 3rem 8rem;">
        </div>
        <div class="row gap-5" style="padding:0 8rem">
            <div class="col-md-8">
                <div class="row bg-white shadow-sm rounded">
                    <div class="col-md-4 d-flex justify-content-center Applicants_Information" style="padding: 3rem 0">
                        <div>
                            @if ($userInfo->ProfileImg === 'defaultImg.png')
                                <img style="width:150px" src="{{ asset('storage/default/defaultImg.png') }}"
                                    alt="404 not found">
                            @else
                                <img style="width:150px;object-fit:contain;" src="{{ asset('storage/JobSeekerImg/' . $userInfo->ProfileImg) }}"
                                    alt="404 not found">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4 Applicants_Information" style="padding: 3rem 1rem">
                        <div class="d-flex align-items-center gap-3 flex-wrap text-break ">
                            <h3 style="letter-spacing: 1px">Name : </h3>
                            <p>{{ $userInfo->name }}</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                            <h3 style="letter-spacing: 1px">District : </h3>
                            <p>{{ $userInfo->District }}</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                            <h3 style="letter-spacing: 1px">Municipality : </h3>
                            <p>{{ $userInfo->Skills }}</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                            <h3 style="letter-spacing: 1px">City : </h3>
                            <p>{{ $userInfo->city }}</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                            <h3 style="letter-spacing: 1px">Skills : </h3>
                            <p>{{ $userInfo->Skills }}</p>
                        </div>
                    </div>
                    <div class="col-md-4 Applicants_Information" style="padding: 3rem 1rem">
                        <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                            <h3 style="letter-spacing: 1px">Gender : </h3>
                            <p>{{ $userInfo->Gender }}</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                            <h3 style="letter-spacing: 1px">Gender : </h3>
                            <p>{{ $userInfo->Gender }}</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                            <h3 style="letter-spacing: 1px">Date of birth : </h3>
                            <p>{{ $userInfo->DateofBirth }}</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                            <h3 style="letter-spacing: 1px">Career Objective: </h3>
                            <p>{{ $userInfo->Objective }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 rounded shadow bg-white Applicants_Information" style="padding: 2rem 1rem">
                <h2>Job Description</h2>
                <hr style="height: 3px;width:100%;color: black !important; margin-top:-1px">
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Job Title: </h3>
                    <p>{{ $ApplicantJobid->Title }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Category:</h3>
                    <p>{{ $ApplicantJobid->Category }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Type:</h3>
                    <p>{{ $ApplicantJobid->Type }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Experience:</h3>
                    <p>{{ $ApplicantJobid->experience }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Education:</h3>
                    <p>{{ $ApplicantJobid->Education }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Salary:</h3>
                    <p>{{ $ApplicantJobid->Salary }}</p>
                </div>
            </div>

        </div>
        <div class="row" style="padding:0 8rem">
            <div class="col-md-4 bg-white shadow-sm rounded Applicants_Information" style="padding:1rem 0 2rem 4rem">
                <h2 class="mb-3">Education Background</h2>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Degree: </h3>
                    <p>{{ $userInfo->Degree }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Institution: </h3>
                    <p>{{ $userInfo->Institution }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">University: </h3>
                    <p>{{ $userInfo->University }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Joined Year: </h3>
                    <p>{{ $userInfo->Joined_year }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Passed Year: </h3>
                    <p>{{ $userInfo->Passed_year }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Skills: </h3>
                    <p>{{ $userInfo->Skills }}</p>
                </div>
            </div>
            <div class="col-md-4 bg-white shadow-sm rounded Applicants_Information" style="padding:1rem 0 2rem 4rem;">
                <h2 class="mb-3">Experience</h2>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Position: </h3>
                    <p>{{ $userInfo->Position }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Organization: </h3>
                    <p>{{ $userInfo->Organization }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Industry: </h3>
                    <p>{{ $userInfo->Industry }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Job Level: </h3>
                    <p>{{ $userInfo->Level }}</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap text-break">
                    <h3 style="letter-spacing: 1px">Roles & Responsibility: </h3>
                    <p>{{ $userInfo->Roles }}</p>
                </div>
            </div>
        </div>
        @if ($user->status == 1)
            <p>accepted</p>
        @elseif($user->status == 0)
            <p>rejected</p>
        @else
            <div class="col">
                <a href="{{ url('Jobaccepted/' . $userInfo->id) }}" class="btn btn-success">Accept</a>
                <a href="{{ url('Jobrejected/' . $userInfo->id) }}" class="btn btn-danger">Reject</a>
            </div>
        @endif
    </div>
@endsection
