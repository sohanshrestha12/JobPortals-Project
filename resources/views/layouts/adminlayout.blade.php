<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal || Company Profile</title>
    <link rel="stylesheet" href="{{ asset('css/adminDashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminhome.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
                <li>
                    <a href="{{url('/admindashboard')}}">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Verifycompany')}}">
                        <div class="notify">{{count($Verifycompany)}}</div>
                        <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                        <span class="title">Verify Company</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Verifiedcompany')}}">
                        <span class="icon"><i class="uil uil-comment-verify" style="font-size: 1.6rem"></i></span>
                        <span class="title">Verified Company</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/adminuser')}}">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">User</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/adminmail')}}">
                        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <span class="title">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/adminpw')}}">

                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <span class="title">Change Password</span>
                        
                    </a>
                </li>
                <li>
                    <a href="{{url('/adminlogout')}}">
                        
                        <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
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
            <div class="search">
                <label for="">
                    <input type="text" placeholder="Search Here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>

            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script>
            //Menu toogle
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            
        toggle.onclick = function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }
        
        let list= document.querySelectorAll('.list');
        for(let i=0; i<list.length; i++){
            list[i].onclick=function(){
                let j=0;
                while(j<list.length){
                    list[j++].className='list';
                    
                }
                list[i].className='list active';
            }
        }
        </script>

    @yield('content')
</body>