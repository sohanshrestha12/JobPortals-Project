<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal || Company Profile</title>
    <link rel="stylesheet" href="{{ asset('css/companydashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


    @vite(['resources/js/app.js'])
</head>

<body>
    <header>
        <div class="container">
            <nav id="navbar">
                <h1 class="header1"><span class="header1" style="color: var(--main-color)">J</span>ob Portals</h1>
                <ul class="links">
                    <li><a href="{{ route('home') }}" @if (Request::is('/')) class="active" @endif>Home</a>
                    </li>
                    <li><a href="{{ route('about') }}" @if (Request::is('about')) class="active" @endif>About</a>
                    </li>
                    <li><a href="{{ route('jobs') }}" @if (Request::is('jobs')) class="active" @endif>Jobs</a>
                    </li>
                    <li><a href="{{ route('services') }}"
                            @if (Request::is('services')) class="active" @endif>Services</a></li>
                    <li><a href="{{ route('contact') }}"
                            @if (Request::is('contact')) class="active" @endif>Contact</a>
                    </li>
                </ul>
                @if (session()->has('AloginId') || session()->has('UloginId') || session()->has('CloginId'))
                    <div class="profile">
                        @if ($data->ProfileImg === 'defaultImg.png')
                            <img src="{{ asset('storage/default/defaultImg.png') }}" alt="404 not found">
                        @else
                            <img src="{{ asset('storage/Company Logo/' . $data->ProfileImg) }}" alt="404 not found">
                        @endif
                        <div class="dropdown" id="signup-dropdown">
                            <a class="btn dropdown-toggle" href="javascript:void(0)" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" id="click-signup-dropdown"
                                style="background-color:transparent;color:black">
                                {{ ucfirst($data->name) }}
                            </a>

                            <ul class="dropdown-menu" id="drop-menu" style="width:12rem">
                                <li><i class="uil uil-user"></i><a class="dropdown-item"
                                        href="{{ route('CompanyProfile') }}">Profile</a></li>
                                <hr class="mb-2">
                                <li> <i class="uil uil-signout"></i><a class="dropdown-item"
                                        href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="butn">
                        <a href="javascript:void(0)" id="login" class="login btn">Login</a>
                        <div class="dropdown" id="signup-dropdown">
                            <a class="btn dropdown-toggle" href="javascript:void(0)" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" id="click-signup-dropdown">
                                SignUp
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end" id="drop-menu">
                                <li><i class="uil uil-user"></i><a class="dropdown-item" href="{{ route('JobSeekerSignUp') }}">Register as
                                        JobSeeker</a></li>
                                <hr class="mb-2">
                                <li> <i class="uil uil-building"></i><a class="dropdown-item"
                                        href="{{ route('CompanySignUp') }}">Register as
                                        Company</a></li>
                            </ul>
                        </div>
                    </div>
                @endif
            </nav>
        </div>
    </header>
    <div class="Company-container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="javascript:void(0)">
                        <span class="icon"><i class="uil uil-estate"></i></span>
                        <span class="title">Company DashBoard</span>
                    </a>
                </li>
                <li @if (Request::is('companyprofile')) class="Company-sidebar-active" @endif>
                    <a href="{{ route('CompanyProfile') }}">
                        <span class="icon"><i class="uil uil-user-circle"></i></span>
                        <span class="title">Company Profile</span>
                    </a>
                </li>
                <li @if (Request::is('PostJobs')) class="Company-sidebar-active" @endif>
                    <a href="{{ route('PostJob') }}">
                        <span class="icon"><i class="uil uil-comment-plus"></i></span>
                        <span class="title">Post Jobs</span>
                    </a>
                </li>
                <li @if (Request::is('ListofAllJobs') || Request::is('editJobs/' . ($id = $id ?? 0)) || Request::is('Applicants/' . ($Jobid = $Jobid ?? 0))) class="Company-sidebar-active" @endif>
                    <a href="{{ route('ListofAllJobs') }}">
                        <span class="icon"><i class="uil uil-list-ul"></i></span>
                        <span class="title">Lists of Jobs</span>
                    </a>
                </li>
                {{-- <li @if(Request::is('ApplicantsView')) class="Company-sidebar-active" @endif>
                    <a href="{{ route('ApplicantsView') }}">
                        <span class="icon"><i class="uil uil-edit"></i></span>
                        <span class="title">Applicants</span>
                    </a>
                </li> --}}
                <li @if(Request::is('ChangeCompanyPassword')) class="Company-sidebar-active" @endif>
                    <a href="{{ route('ChangeCompanyPassword') }}">
                        <span class="icon"><i class="uil uil-edit"></i></span>
                        <span class="title">Change Password</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <i class="uil uil-bars"></i>
            </div>
        </div>
        @yield('content')
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>

</html>
