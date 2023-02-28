@extends('layouts.user')
@section('content')
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600&display=swap" rel="stylesheet"><title>Document</title>

<style>
    .body_section{
        padding: 0 60px;
    }
    .User_name{
        margin: 88px 15px;
    }
    p{
        margin-top:18px;
    }
    .header img{
        width: 172px;
        height: 173px;
    }
    li{
        list-style: none;
        font-size:14px;
    }
    .uil{
        margin-right: 10px;
        font-size:15px;
    }
    .font_size{
        font-size:16px;

    }

    .right_part{
        border-left: 1px solid #a39e9e;
    }
    .font span,.font h1,.font li,.font h4 , .font strong ,.font p {
        font-family: 'Josefin Sans', sans-serif;
        
    }
    hr{
        margin: 25px 0px;
    }
</style>
<section class="header_section" style="height: 330px; ">
    <div class="backcover w-100 bg-primary position-relative" style="height: 180px; ">
        <img style="height: 180px;width:100%; " src="{{ asset('storage/JobSeekerImg/pexels-aleksandar-pasaric-3629227.jpg') }}" alt="NOt found">
    </div>
    <div class="header position-absolute d-flex" style="top: 174px;left: 33px;">
        <div class="profileImg  bg-secondary rounded-circle"  style="width: 180px; height: 180px;
        border: 4px solid #dabdbd;
        top: 156px;
        left: 33px;">
                @if ($data->ProfileImg === 'defaultImg.png')
                        <img src="{{ asset('storage/default/defaultImg.png') }}" alt="404 not found">
                @else
                        <img src="{{ asset('storage/JobSeekerImg/' . $data->ProfileImg) }}" alt="404 not found">
                @endif
        </div>
        <div class="User_name font font_size">
            <h1>{{ $data->name }}</h1>
            <h4>{{ $data->category }}</h4>
        </div>
    </div>
</section>
<section class="body_section">

    <div class="body_partition row ">
        <div class="left_part col">
        
            <div class="Contact_details font ">
                <ul >
                    <li><span><i class="uil uil-phone-volume"></i>{{ $data->phoneno }}</span></li>
                    <li><span><i class="uil uil-envelope-check"></i>{{ $data->email }}</span></li>
                    <li><span><i class="uil uil-location-pin-alt"></i>{{ $data->city }}</span></li>
                    <li><span><i class="uil uil-globe"></i>Portfolio</span></li>
                </ul>
            </div>
            <hr style="color: #a39e9e !important;height:2px;opacity:1;">

            <div class="skills font">
                <h1>SKILLS</h1>
                <li>{{ $data->category }}</li>
            </div>
            <hr style="color: #a39e9e !important;height:2px;opacity:1;">

            <div class="EDUCATION font">
                <h4>Institution:</h4>
                <strong>{{ $data->Institution }}</strong>
                
                <h4 class="mt-2 font">University</h4>
                <strong>{{ $data->University }}</strong>
            </div>
            <hr style="color: #a39e9e !important;height:2px;opacity:1;">

        </div>
        <div class="right_part col-8">
            <div class="about_user font">
                <h1>PROFILE</h1>
                <p>{{$data->AboutMe}}</p>
            </div>
            <hr style="color: #a39e9e !important;height:2px;opacity:1;">

            <div class="experience font">
                <h1>EXPERIENCE</h1>
                <p style="margin-top:20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ipsam ipsum rerum itaque laboriosam cupiditate, maxime recusandae, fugiat hic beatae in officiis quam sit reiciendis soluta temporibus nemo. Possimus, voluptatem. maxime recusandae, fugiat hic ..</p>
                <p style="margin-top:17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ipsam ipsum rerum itaque laboriosam cupiditate, maxime recusandae, fugiat hic beatae in officiis quam sit reiciendis soluta temporibus nemo. Possimus, voluptatem.Lorem ipsum do .</p>
                <p style="margin-top:15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ipsam ipsum rerum itaque laboriosam cupiditate, maxime recusandae, fugiat hic beatae in officiis quam sit reiciendis soluta temporibus nemo. Possimus, voluptatem.</p>
            
            </div>
        </div>
    </div>
</section>
       
  
@endsection
