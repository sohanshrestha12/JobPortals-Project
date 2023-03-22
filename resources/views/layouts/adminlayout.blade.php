<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal || Company Profile</title>
    <link rel="stylesheet" href="{{ asset('css/adminDashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminhome.css') }}">
    <script src="{{ asset('js/index.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    @vite(['resources/js/app.js'])

</head>

<body>

    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"></span>
                        <span class="title">JobPortal </span>
                    </a>
                </li>
                <li @if(Request::is('admindashboard')) class="adminactive" @endif>
                    <a href="{{ url('/admindashboard') }}" @if(Request::is('admindashboard')) style="color:var(--purple)" @endif>
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li @if(Request::is('Verifycompany')) class="adminactive" @endif>
                    <a href="{{ route('Verifycompany') }}" @if(Request::is('Verifycompany')) style="color:var(--purple)" @endif>
                        <div class="notify">{{ count($Verifycompany) }}</div>
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Verify Company</span>
                    </a>
                </li>
                <li @if(Request::is('Verifiedcompany')) class="adminactive" @endif>
                    <a href="{{ route('Verifiedcompany') }}" @if(Request::is('Verifiedcompany')) style="color:var(--purple)" @endif>
                        <span class="icon"><i class="uil uil-comment-verify" style="font-size: 1.6rem"></i></span>
                        <span class="title">Verified Company</span>
                    </a>
                </li>
                <li @if(Request::is('adminJobs')) class="adminactive" @endif>
                    <a href="{{ url('/adminJobs') }}" @if(Request::is('adminJobs')) style="color:var(--purple)" @endif>
                        <span class="icon">
                            <ion-icon name="medkit-outline"></ion-icon>
                        </span>
                        <span class="title">All Jobs</span>
                    </a>
                </li>
                <li @if(Request::is('adminmail')) class="adminactive" @endif>
                    <a href="{{ url('/adminmail') }}" @if(Request::is('adminmail')) style="color:var(--purple)" @endif>
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>
                <li @if(Request::is('adminChangePassword')) class="adminactive" @endif>
                    <a href="{{ route('adminpw') }}" @if(Request::is('adminChangePassword')) style="color:var(--purple)" @endif>
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Change Password</span>

                    </a>
                </li>
                <li @if(Request::is('adminlogout')) class="adminactive" @endif>
                    <a href="{{ url('/adminlogout') }}" @if(Request::is('adminlogout')) style="color:var(--purple)" @endif>
                        <span class="icon">
                            <ion-icon name="exit-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>

                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        @yield('search')
    </div>


    @yield('content')
    <script src="{{ asset('js/index.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        //Menu toogle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function() {
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        let list = document.querySelectorAll('.list');
        for (let i = 0; i < list.length; i++) {
            list[i].onclick = function() {
                let j = 0;
                while (j < list.length) {
                    list[j++].className = 'list';

                }
                list[i].className = 'list active';
            }
        }
    </script>
</body>
</html>
