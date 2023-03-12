@extends('layouts.User')
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
    .font_size span{
        font-size: 11px;
    }

    .right_part{
        border-left:2.4px solid #c8c8c8;
    }
    .font span,.font h1,.font button,.font li,.font h4 , .font strong ,.font p ,.font label ,.font a{
        font-family: 'Josefin Sans', sans-serif;
        
    }
    hr{
        margin: 25px 0px;
        border: 1px solid;
        color: #a39e9e !important;
        height: 1px;
        opacity: 1;
    }
    .right_padding{
        padding: 11px 42px;
    }
    .left_part{
        padding-right: 45px;
    }
    h4 , h1{
        font-weight: 600;
    }
    
    .choose_pic {
        width: 31px;
        position: absolute;
        height: 31px;
        top: 9px;
        right: 245px;
        border-radius: 50%;
        background-color: #b3b3b8;
    }
    .choose_pic label .uil{
        margin-right: 10px;
        font-size: 23px;
    }
    .visible{
        display: block;
    }
    .Frame{
        display: none;

    }
</style>
<body>
    
<section class="header_section" style="height: 330px; ">
    <div class="backcover w-100 bg-primary position-relative" style="height: 180px; ">
        <img style="height: 180px;width:100%; " src="{{ asset('storage/JobSeekerImg/pexels-aleksandar-pasaric-3629227.jpg') }}" alt="NOt found">
    </div>
    <div class="header position-absolute d-flex" style="top: 174px;left: 33px;">
        <div class="profileImg  bg-secondary rounded-circle" style="width: 180px; height: 180px;
        border: 4px solid #dabdbd;
        top: 156px;
        left: 33px;">
            @if ($data->ProfileImg === 'defaultImg.png')
            <img src="{{ asset('storage/default/defaultImg.png') }}" alt="404 not found">
            @else
            <img style="border-radius: 50%;"src="{{ asset('storage/JobSeekerImg/' . $data->ProfileImg) }}" alt="404 not found">
            @endif
            <form action="{{route('UpdateProfilePicture')}}" enctype="multipart/form-data" method="post" id="form">
                <div class="choose_pic">
                     @csrf
                     <input type="hidden" name="id" value="{{ $data->id }}">
                     <label for="change" style="position: absolute;top:-2px;right:-6px;"><i class="uil uil-camera"></i></label>
                    <input type="file" accept="image/x-png,image/gif,image/jpeg" style="width: 13px;height: 13px;border-radius: 50%; display:none" id="change" name="logo">
                    <input type="submit" value="submit" hidden>
                </div>
            </form>

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
        
            <div class="Contact_details font font_size ">
                <ul >
                    <li><span><i class="uil uil-phone-volume"></i>{{ $data->phoneno }}</span></li>
                    <li><span><i class="uil uil-envelope-check"></i>{{ $data->email }}</span></li>
                    <li><span><i class="uil uil-location-pin-alt"></i>{{ $data->city }}</span></li>
                    <li><span><i class="uil uil-globe"></i>Portfolio</span></li>
                </ul>
            </div>
            <hr>

            <div class="skills font">
                <h1>SKILLS</h1>
                <ul>
                    <li>{{ $data->Skills }}</li>
                </ul>
            </div>
            <hr>
            <div class="Language font">
                <h1>LANGUAGE</h1>
            </div>
            <!-- <hr>

            <div class="resume_part font">
           
                <form action="{{route('resume_upload')}}" method="post" enctype="multipart/form-data" >
                    <div class="mb-3 font">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}"  >
                    <label for="formFileLg" class="form-label font ">Upload Your Resume:</label>
                    <input class="form-control form-control-lg" type="file" id="file-upload"  name="Resume" value="{{$data->Resume}}" >
                    <div id="file-upload-filename"></div>
                    <button class="btn btn-danger"> <a href="{{url('/view',$data->id)}}"class="font" style="text-decoration: none; color:white" >view</a></button>
                    <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                </form>

               
            </div> -->
            

         

        </div>
        <div class="right_part col-8 right_padding">
            <div class="about_user font ">
                <h1>OBJECTIVE</h1>
                <li><p>{{$data->Objective}}</p></li>
            </div>
            <hr >

            <div class="experience font ">
                <h1>EXPERIENCE</h1>
                <p style="margin-top:20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ipsam ipsum rerum itaque laboriosam cupiditate, maxime recusandae, fugiat hic beatae in officiis quam sit reiciendis soluta temporibus nemo. Possimus, voluptatem. maxime recusandae, fugiat hic ..</p>
            
            </div>
            <hr >

            <div class="EDUCATION font ">
                <h1>EDUCATION</h1>
                <h4 class="mt-2 font"><i class="uil uil-university"></i>University</h4>
                <p>{{ $data->University }}</p>
                <h4 >Institution:</h4>
                <p >{{ $data->Institution }}</p>
            </div>
        </div>
    </div>
</section>
</body>

<script>
    var fileInput=document.querySelector("#change");
    fileInput.addEventListener("change",function(){
        var form = document.querySelector("#form");
        form.submit();
    });

    
  
</script>

@endsection
