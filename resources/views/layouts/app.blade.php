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
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/js/app.js'])

</head>

<body>
    <div class="container">
        <nav id="navbar">
            <h1 class="header1">Job Portals</h1>
            <ul>
                <li><a href="{{route('home')}}" class="active">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('jobs')}}">Jobs</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
            <div class="butn">
                <a href="#" class="btn">Login</a>
                <a href="#" class="btn">SignUp</a>
            </div>
        </nav>
    </div>


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
                    <span class="paragraph">Call Us: 98********</span>
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
</body>

</html>
