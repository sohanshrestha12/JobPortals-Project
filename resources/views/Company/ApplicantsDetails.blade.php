@extends('layouts.company')
@section('content')
    <style>
        .body_section {
            padding: 0 60px;
        }

        .User_name {
            margin: 88px 15px;
        }

        p {
            margin-top: 18px;
        }

        .header img {
            width: 172px;
            height: 173px;
        }

        li {
            list-style: none;
            font-size: 14px;
        }

        .uil {
            margin-right: 10px;
            font-size: 15px;
        }

        .font_size {
            font-size: 16px;

        }

        .font_size span {
            font-size: 11px;
        }

        .right_part {
            border-left: 2.4px solid #c8c8c8;
        }

        .font span,
        .font h1,
        .font button,
        .font li,
        .font h4,
        .font strong,
        .font p,
        .font label,
        .font a {
            font-family: 'Josefin Sans', sans-serif;

        }

        hr {
            margin: 25px 0px;
            border: 1px solid;
            color: #a39e9e !important;
            height: 1px;
            opacity: 1;
        }

        .right_padding {
            padding: 11px 42px;
        }

        .left_part {
            padding-right: 45px;
        }

        h4,
        h1 {
            font-weight: 600;
        }

        .choose_pic {
            width: 31px;
            position: absolute;
            height: 31px;
            top: 9px;
            left: 10px;
            right: 245px;
            border-radius: 50%;
            background-color: #b3b3b8;
        }

        .choose_pic label .uil {
            margin-right: 10px;
            font-size: 23px;
        }

        .visible {
            display: block;
        }

        .Frame {
            display: none;

        }

        .form_card {
            background: #fff;
            border: 1px solid #b9b9b9;
            box-shadow: 0 4px 8px 2px rgba(65, 65, 65, .12);
            border-radius: 0.5rem;
            padding: 6rem 4.0625rem;
            margin: auto;
            width: 63%;
        }

        .form_card .profile-img {
            text-align: center;
            position: relative;
            width: 19.25rem;
            margin: auto;
        }

        .form_card .profile-img img {
            height: 9.625rem;
            width: 9.625rem;
            border-radius: 50%;
            object-fit: cover;
            margin: auto;
            padding: 0.3125rem;
            background: #e7fafb;
        }

        .title {
            margin-bottom: 0;
            font-weight: 500;
            font-size: 2.375rem;
        }

        .form_card .heading_sec p {
            text-align: center;
            margin-bottom: 2.5rem;
            font-weight: 300;
            font-size: 1.125rem;
        }

        .text-center {
            text-align: center !important;
        }

        .custom_btn {
            background: #f60;
            box-shadow: 0 4px 4px rgba(80, 62, 50, .08), 0 4px 8px rgba(80, 62, 50, .06);
            border-radius: 5px;
            color: #fff;
            font-size: 1rem;
            padding: 1rem 3.75rem;
            text-transform: capitalize;
            font-family: 'Josefin Sans', sans-serif;
            display: inline-block;
            border: 2px solid #f60;
        }

        .custom_btn:hover {
            background-color: #763d18;
            color: #fff;

        }

        .Contact_details ul li {
            display: flex;
            align-items: center;
            font-size: 16px;
        }

        .Contact_details ul i {
            font-size: 20px;
        }

        .imp {
            position: absolute;
            right: 70px;
            top: 335px;
            display: flex;
            gap: 30px;
        }
    </style>
    <div class="profile-right-box">
        <div class="row">
            <div class="col-md-4" style="padding: 0 8rem">
                <h1 style="color:var(--main-color)">Applicant Information</h1>
            </div>
            <hr style="border:1px solid;opacity:0.1;width:90%;color: black !important;margin: 0.7rem 0 3rem 8rem;">
        </div>

        <section class="header_section" style="height: 330px; ">
            <div class="backcover w-100 bg-primary position-relative" style="height: 180px;z-index:-1 ">
            </div>
            <div class="header position-absolute d-flex" style="top: 230px;left: 60px;">
                <div class="profileImg  bg-secondary rounded-circle"
                    style="width: 180px; height: 180px;
    border: 4px solid #dabdbd;
    top: 156px;
    left: 33px;">
                    @if ($userInfo->ProfileImg === 'defaultImg.png')
                        <img style="border-radius: 50%;" src="{{ asset('storage/default/defaultImg.png') }}"
                            alt="404 not found">
                    @else
                        <img style="border-radius: 50%;object-fit:cover;" src="{{ asset('storage/JobSeekerImg/' . $userInfo->ProfileImg) }}"
                            alt="404 not found">
                    @endif

                </div>
                <div class="User_name font font_size">
                    <h1>{{ ucfirst($userInfo->name) }}</h1>
                    <h4>{{ $userInfo->category }}</h4>
                </div>
            </div>
            <div class="imp">
                <a href="{{ url('/view', $userInfo->id) }}"
                    style="padding: 5px 18px;background-color:#0d6efd ;text-decoration:none;color:white;border-radius:5px;font-size:16px;">View
                    Resume</a>

                @if ($user->status == 1)
                    <div
                        style="border:3px solid #2a9634;padding:3px 10px;display:flex;justify-content:center;align-items:center;">
                        <p style="margin:0;color:#2a9634;font-weight:700;letter-spacing:2px;font-size:1.6rem">
                            Accepted</p>
                    </div>
                @elseif($user->status == 0)
                    <div
                        style="border:3px solid #dc143c;padding:3px 10px;display:flex;justify-content:center;align-items:center;">
                        <p style="margin:0;color:#dc143c;font-weight:700;letter-spacing:2px;font-size:1.6rem">
                            Rejected</p>
                    </div>
                @else
                    <div class="col" style="display:flex;gap:10px;">
                        <a href="{{ url('Jobaccepted/' . $userInfo->id) }}"
                            style="padding: 5px 18px;background:#3cb371 ;text-decoration:none;color:white;border-radius:5px;font-size:16px;"><i
                                style="margin:0 5px 0 0" class="uil uil-check"></i>Accept</a>
                        <a href="{{ url('Jobrejected/' . $userInfo->id) }}"
                            style="padding: 5px 18px;background:#ff6347;text-decoration:none;color:white;border-radius:5px;font-size:16px;"><i
                                style="margin:0 5px 0 0" class="uil uil-times"></i>Reject</a>
                    </div>
                @endif
            </div>
        </section>
        <section class="body_section">
            <div class="body_partition row ">
                <div class="left_part col">

                    <div class="Contact_details font font_size ">
                        <ul>
                            <li><i class="uil uil-phone-volume"></i>{{ $userInfo->phoneno }}</li>
                            <li><i class="uil uil-envelope-check"></i>{{ $userInfo->email }}</li>
                            <li><i class="uil uil-location-pin-alt"></i>{{ $userInfo->city }}</li>
                            <li><i class="uil uil-globe"></i>Portfolio</span></li>
                        </ul>
                    </div>
                    <hr>

                    <div class="skills font">
                        <h1>SKILLS</h1>
                        <ul>
                            <li>{!! $userInfo->Skills !!}</li>
                        </ul>
                    </div>
                    <hr>
                    <div class="Language font">
                        <h1>Date of Birth</h1>
                        <p style="margin-left:20px">{{ $userInfo->DateofBirth }}</p>
                    </div>
                    <hr>
                    <div class="Language font">
                        <h1>LANGUAGE</h1>
                        <p style="margin-left:20px">English</p>
                    </div>
                </div>
                <div class="right_part col-8 right_padding">
                    <div class="about_user font ">
                        <h1>OBJECTIVE</h1>
                        <li>
                            <p>{!! $userInfo->Objective !!}</p>
                        </li>
                    </div>
                    <hr>

                    <div class="experience font ">
                        <h1>Degree</h1>
                        <p>{{ $userInfo->Degree }}</p>
                        <p style="margin-top:20px;">
                        </p>

                    </div>
                    <hr>

                    <div class="EDUCATION font ">
                        <h1>EDUCATION</h1>
                        <div style="display: flex; gap: 30px;margin-top:20px">

                            <div>

                                <h4 class="font"><i class="uil uil-university"></i>University:</h4>
                                <p style="margin:  0 0 18px 30px;">{{ $userInfo->University }}</p>

                                <h4 class="font"><i class="uil uil-award"></i>Joined year:</h4>
                                <p style="margin:  0 0 18px 30px;">{{ $userInfo->Joined_year }}</p>

                            </div>
                            <div>

                                <h4 class="font"><i class="uil uil-building"></i>Institution:</h4>
                                <p style="margin:  0 0 18px 30px;">{{ $userInfo->Institution }}</p>

                                <h4 class="font"><i class="uil uil-award"></i>Passed year:</h4>
                                <p style="margin:  0 0 18px 30px;">{{ $userInfo->Passed_year }}</p>

                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="about_user font ">
                    <h1 style="margin-bottom: 20px">Experience</h1>
                    @if ($userInfo->Checked == 0)
                        <div style="display: flex; gap: 30px;margin-top:20px">

                            <div>

                                <h4 class="font"><i class="uil uil-user-check"></i>Position:</h4>
                                <p style="margin:  0 0 18px 30px;">{{ $userInfo->Position }}</p>

                                <h4 class="font"><i class="uil uil-university"></i>Organization:</h4>
                                <p style="margin:  0 0 18px 30px;">{{ $userInfo->Organization }}</p>


                            </div>
                            <div>
                                <h4 class="font"><i class="uil uil-building"></i>Industry:</h4>
                                <p style="margin:  0 0 18px 30px;">{{ $userInfo->Industry }}</p>

                                <h4 class="font"><i class="uil uil-book-open"></i>Job Level:</h4>
                                <p style="margin:  0 0 18px 30px;">{{ $userInfo->Level }}</p>

                            </div>
                            <div style="flex:1">
                                <h4 class="font"><i class="uil uil-award"></i>Roles & Responsibility:</h4>
                                <p style="margin:  0 0 18px 30px;">{{ $userInfo->Roles }}</p>
                            </div>
                        </div>
                    @else
                        <p style="margin:  0 0 18px 20px;">Fresher</p>
                    @endif
                </div>
                <hr>
            </div>
        </section>





















        {{-- <div class="row gap-5" style="padding:0 8rem">
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
        </div> --}}
        {{-- @if ($user->status == 1)
            <p>accepted</p>
        @elseif($user->status == 0)
            <p>rejected</p>
        @else
            <div class="col">
                <a href="{{ url('Jobaccepted/' . $userInfo->id) }}" class="btn btn-success">Accept</a>
                <a href="{{ url('Jobrejected/' . $userInfo->id) }}" class="btn btn-danger">Reject</a>
            </div>
        @endif --}}
    </div>
@endsection
