

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/adminpanel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin_jobs.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="Main-box">
        <div class="topbar">
            <div class="logo">
                <h2>Brand.</h2>
            </div>
            <div class="search">
                <input type="text" id="search" placeholder="search here">
                <label for="Search"><i class="fas fa-search"></i></label>
            </div>
            <i class="fas fa-bell"></i>
            <div class="user">
                <img src="img/ij.png" alt="">
            </div>
        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        <div>Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-user-graduate"></i>
                        <div>Jobs</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Teachers</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <div>Settings</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <div>Help</div>
                    </a>
                </li>
            </ul>
        </div>
        </div>
        
    @yield('content')
</body>
</html>