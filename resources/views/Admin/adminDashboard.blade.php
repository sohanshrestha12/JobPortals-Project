<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/adminDashboard.css">
     <link rel="stylesheet" href="{{ asset('css/adminDashboard.css') }}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
     <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@300;400;900&family=Fira+Sans&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
     {{-- @vite(['resources/js/app.js']) --}}
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
     <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@300;400;900&family=Fira+Sans&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="logo-ionic"></ion-icon></span>
                        <span class="title">JobPortal </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                        <span class="title">Company</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">User</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <span class="title">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="#">

                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <span class="title">Change Password</span>
                        
                    </a>
                </li>
                <li>
                    <a href="#">

                        <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
                        <span class="title">Log Out</span>
                        
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- main -->
    <div class="main">
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
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <div class="card-name">Total Jobs</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <div class="card-name">Total Users</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <div class="card-name">Total Company</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
            </div>
                <div class="charts">
                    <div class="chart">
                        <h2>Earnings (past 12 months</h2>
                        <canvas id="linechart"></canvas>
                    </div>
                    <div class="chart" id="doughnut-chart">
                        <h2>Employees</h2>
                        <canvas id="doughnut"></canvas>
                    </div>
                </div>
        </div>
                
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
        <script src="chart1.js"></script>    
        <script src="chart2.js"></script>

    <script>
        //Menu toogle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        //add hovered class in selected list item
        // let list = document.querySelectorAll('.navigation li');
        // function activelink(){
        //     list.forEach((item)=>
        //     item.classList.remove('hovered'));
        //     this.classList.add('hovered');
        // }
        // list.forEach((item)=>
        // item.addEventListener('mouseover',activelink));

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
</body>
</html>
</body>
</html>