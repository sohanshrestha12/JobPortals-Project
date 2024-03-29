<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Portal Website || Looking for jobs?</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

    @vite(['resources/js/app.js'])

</head>

<body>
    @php
        use App\Models\User;
        use Illuminate\Support\Facades\Hash;
        
        $admin = User::where('role', 'admin')->first();
    @endphp
    @if ($admin == null)
        @php
            $addAdmin = new User();
            
            $addAdmin->name = 'Admin';
            $addAdmin->email = 'SuperAdmin@gmail.com';
            $addAdmin->password = Hash::make('root123');
            $addAdmin->role = 'admin';
            $addAdmin->save();
        @endphp
    @endif
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
                            @if (Request::is('services')) class="active" @endif>Teams</a></li>
                    <li><a href="{{ route('contact') }}"
                            @if (Request::is('contact')) class="active" @endif>Contact</a>
                    </li>
                </ul>
                @if ($data == null)
                    <div class="butn">
                        <a href="javascript:void(0)" id="login" class="login btn" style="padding:4px 15px">Login</a>
                        <div class="dropdown" id="signup-dropdown">
                            <a class="btn dropdown-toggle" href="javascript:void(0)" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" id="click-signup-dropdown"
                                style="padding:5px 15px">
                                SignUp
                            </a>

                            <ul class="dropdown-menu dropdown" id="drop-menu">
                                <li><i class="uil uil-user"></i><a class="dropdown-item"
                                        href="{{ route('JobSeekerSignUp') }}">Register as
                                        JobSeeker</a></li>
                                <hr class="mb-2">
                                <li> <i class="uil uil-building"></i><a class="dropdown-item"
                                        href="{{ route('CompanySignUp') }}">Register as
                                        Company</a></li>
                            </ul>
                        </div>
                    </div>
                @elseif(session()->has('AloginId') ||
                        session()->has('UloginId') ||
                        session()->has('CloginId') ||
                        session()->has('GUloginId'))
                    <div class="profile">
                        @if (Session::has('UloginId') || Session::has('GUloginId'))
                            @if ($data->ProfileImg === 'defaultImg.png')
                                <img src="{{ asset('storage/default/defaultImg.png') }}" alt="404 not found">
                            @else
                                <img src="{{ asset('storage/JobSeekerImg/' . $data->ProfileImg) }}"
                                    alt="404 not found">
                            @endif
                        @else
                            @if ($data->ProfileImg === 'defaultImg.png')
                                <img src="{{ asset('storage/default/defaultImg.png') }}" alt="404 not found">
                            @else
                                <img src="{{ asset('storage/Company Logo/' . $data->ProfileImg) }}"
                                    alt="404 not found">
                            @endif
                        @endif
                        <div class="dropdown" id="signup-dropdown">
                            <a class="btn dropdown-toggle" href="javascript:void(0)" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" id="click-signup-dropdown"
                                style="background-color:transparent;color:black">
                                {{ ucfirst($data->name) }}
                            </a>
                            @if (Session::has('CloginId'))
                                <ul class="dropdown-menu" id="drop-menu" style="width:12rem">
                                    <li><i style="margin:0;" class="uil uil-user"></i><a class="dropdown-item"
                                            href="{{ route('CompanyProfile') }}">Profile</a></li>
                                    <hr class="mb-2">
                                    <li> <i style="margin:0;" class="uil uil-signout"></i><a class="dropdown-item"
                                            href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            @elseif(Session::has('UloginId') || Session::has('GUloginId'))
                                <ul class="dropdown-menu" id="drop-menu" style="width:12rem">
                                    <li><i style="margin:0;" class="uil uil-user"></i><a class="dropdown-item"
                                            href="{{ route('JobSeekerprofile') }}">Profile</a></li>
                                    <hr class="mb-2">
                                    <li> <i style="margin:0;" class="uil uil-signout"></i><a class="dropdown-item"
                                            href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            @endif
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
                                <li><i class="uil uil-user"></i><a class="dropdown-item"
                                        href="{{ route('JobSeekerSignUp') }}">Register as
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



    <div id="blurz">
        @yield('content')
        <footer>
            <div class="container">
                <div class="box-1">
                    <h1>JobPortals</h1>
                </div>
                <hr>
                <div class="box-2">
                    <div class="box-2-1">
                        <h2 class="header2">Need Help?</h2>
                        <i class="uil uil-phone"></i>
                        <span class="paragraph">Call Us: 9861900236</span>
                    </div>
                    <div class="box-2-2">
                        <h2 class="header2">Email:</h2>
                        <i class="uil uil-message"></i>
                        <span class="paragraph">info@test.com / support@test.com</span>
                    </div>
                    <div class="box-2-3">
                        <h2 class="header2">Follow Us</h2>
                        <a href="#"><i class="uil uil-facebook"></i></a>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-linkedin"></i></a>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                        <a href="#"><i class="uil uil-github"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    {{-- login modal --}}

    <div class="row login-modal-background justify-content-center align-items-center" id="login-modal-background">
        <div class="col-md-4 bg-white shadow" style="margin: 10rem 0 0 0">
            <form class="form-layout" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="close-div">
                    <span class="close-modal" title="Close">&times;</span>
                </div>
                <div class="mb-3">
                    <h1 class="header1 text-center">Login</h1>
                </div>
                @if (session()->has('fail') ||
                        session()->has('ErrorLogin') ||
                        session()->has('role') ||
                        session()->has('loginwithgoogle'))
                    <div class="alert alert-danger mb-5" role="alert"
                        style="display: flex;justify-content:center;font-size:1.6rem;">
                        {{ session()->get('fail') }}
                        {{ session()->get('ErrorLogin') }}
                        {{ session()->get('role') }}
                        {{ session()->get('loginwithgoogle') }}
                    </div>
                @endif
                <div class="form-grp">
                    <div class="form-input">
                        <i class="uil uil-envelope"></i>
                        <input type="email" name="logemail" aria-describedby="emailHelp"
                            placeholder="Enter your email" value="{{ old('logemail') }}">
                    </div>
                    @error('logemail')
                        <div class="show-error">
                            <i class="uil uil-exclamation-octagon"></i>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                    <div class="form-input">
                        <i class="uil uil-lock"></i>
                        <input type="password" name="logpassword" id="register-eye"
                            placeholder="Enter your password">
                        <div id="eyes">
                            <i class="uil uil-eye-slash" id="register-eye-hide"></i>
                            <i class="uil uil-eye" id="register-eye-show"></i>
                        </div>
                    </div>
                    @error('logpassword')
                        <div class="show-error">
                            <i class="uil uil-exclamation-octagon"></i>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                    <div class="forgot-password">
                        <a href="{{ route('ForgotPassword') }}" class="paragraph">Forgot Password?</a>
                    </div>

                    <div class="Google_login shadow-sm">
                        <ul>
                            <li>
                                <img src="{{ asset('img/google-logo.png') }}" alt="404 image not found">
                                <a href="{{ route('login_with_google') }}" class="paragraph">Login With Google</a>
                            </li>
                        </ul>
                    </div>

                    <button type="submit" class="Cbtn">Login</button>
                </div>
            </form>
        </div>
    </div>
    @if (
        $errors->has('logemail') ||
            $errors->has('logpassword') ||
            session()->has('fail') ||
            session()->has('ErrorLogin') ||
            session()->has('role') ||
            session()->has('loginwithgoogle'))
        <script>
            let blur = document.querySelector('#blurz');
            let allmodal = document.querySelector('#login-modal-background');


            allmodal.classList.add("show-modal");
            blur.classList.add('blurz');
        </script>
    @endif



    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script>
        @if (Session::has('appliedsuccess'))
            swal({
                title: '{{ Session::get('appliedsuccess') }}',
                // text: "You clicked the button!",
                icon: "success",
                button: "OK",
            });
        @endif
    </script>
</body>

</html>
