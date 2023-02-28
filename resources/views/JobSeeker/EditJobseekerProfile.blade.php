@extends('layouts.User')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<title>Document</title>
<style>
    .main1 {
        padding: 0 30px;
    }

    form {
        width: 100%;
        padding: 69px;
        border: 1px solid #7a7a7a4d;
        border-radius: 26px;
    }

    .sub_form {
        border: 1px solid #7a7a7a4d;
        border-radius: 26px;
    }

    .font_family h1,
    .font_family span,
    .font_family p,
    .font_family h5 {
        color: rgb(72, 72, 71);
        font-family: 'Josefin Sans', sans-serif;
    }

    .step_btn {
        font-family: 'Josefin Sans', sans-serif;
        background-color: #ff6813;
        font-size: 18px;
        color: aliceblue;
        padding: 13px 31px;
    }

    .font_size input,
    .font_size label,
    .font_size select,
    .font_size option {
        font-size: 1.4rem !important;
        color: rgb(72, 72, 71);
        font-family: 'Josefin Sans', sans-serif;
    }

    textarea {
        resize: none;
        height: 100px;
    }
</style>

<body>
    <div class="main1  font_family">
        <div class="right col ">
            <div class="head_part text-center">
                <h1 style="font-weight: 600;font-size: 3.375rem;">Welcome to JobPortal</h1>
                <span style="font-size: 1.375rem;">Apply your dream job with Us.</span>
            </div>

            <div class="form_box font_size" style="padding: 0 65px;">

                <form class="shadow-sm p-4 mb-5 bg-white rounded" action="UpdateJobSeekerInformation" method="post">
                    @csrf
                    <h5 style="font-size: 2.375rem;">Add Your Personal Details</h5>
                    <div class="sub_form shadow-sm p-4 mb-5 bg-white rounded ">
                        <div class="mb-3 ">
                            <input type="hidden" name="id" value="{{$data->id}}" >
                            <label for="name">Full Name:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" value="{{ $data->name }}">
                            @error('name')
                                <span class="invalid-feedback" style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex w-100 ">

                            <div class="mb-3 " style="width: 30%;">
                                <label for="District">District</label>
                                <select class="form-select @error('District') is-invalid @enderror " name="District">
                                    <option hidden disabled selected value> Select</option>
                                    <option @if ($data->District == 'Kathmandu') selected @endif value="Kathmandu">
                                        Kathmandu</option>
                                    <option @if ($data->District == 'Bhaktapur') selected @endif value="Bhaktapur">
                                        Bhaktapur</option>
                                    <option @if ($data->District == 'Lalitpur') selected @endif value="Lalitpur">
                                        Lalitpur</option>
                                    <option @if ($data->District == 'Pokhara') selected @endif value="Pokhara">
                                        Pokhara</option>
                                    <option @if ($data->District == 'Biratnagar') selected @endif value="Biratnagar">
                                        Biratnagar</option>
                                    <option @if ($data->District == 'Birgunj') selected @endif value="Birgunj">
                                        Birgunj</option>
                                    <option @if ($data->District == 'Chitwan') selected @endif value="Chitwan">
                                        Chitwan</option>
                                    <option @if ($data->District == 'Dharan') selected @endif value="Dharan">
                                        Dharan</option>
                                    <option @if ($data->District == 'Nepalgunj') selected @endif value="Nepalgunj">
                                        Nepalgunj</option>
                                    <option @if ($data->District == 'Outside Nepal') selected @endif value="Outside Nepal">
                                        Outside Nepal</option>
                                </select>
                            </div>
                            <div class="mb-3 mx-auto" style="width: 30%;">
                                <label for="Municipality">Municipality</label>
                                <select class="form-select @error('Municipality') is-invalid @enderror " name="Municipality">
                                    <option hidden disabled selected value> Select</option>
                                    <option @if ($data->Municipality == 'Kathmandu') selected @endif value="Kathmandu">
                                        Kathmandu</option>
                                    <option @if ($data->Municipality == 'Bhaktapur') selected @endif value="Bhaktapur">
                                        Bhaktapur</option>
                                    <option @if ($data->Municipality == 'Lalitpur') selected @endif value="Lalitpur">
                                        Lalitpur</option>
                                    <option @if ($data->Municipality == 'Pokhara') selected @endif value="Pokhara">
                                        Pokhara</option>
                                    <option @if ($data->Municipality == 'Biratnagar') selected @endif value="Biratnagar">
                                        Biratnagar</option>
                                    <option @if ($data->Municipality == 'Birgunj') selected @endif value="Birgunj">
                                        Birgunj</option>
                                    <option @if ($data->Municipality == 'Chitwan') selected @endif value="Chitwan">
                                        Chitwan</option>
                                    <option @if ($data->Municipality == 'Dharan') selected @endif value="Dharan">
                                        Dharan</option>
                                    <option @if ($data->Municipality == 'Nepalgunj') selected @endif value="Nepalgunj">
                                        Nepalgunj</option>
                                    <option @if ($data->Municipality == 'Outside Nepal') selected @endif value="Outside Nepal">
                                        Outside Nepal</option>
                                </select>
                            </div>
                            <div class="mb-3 " style="width: 30%;">
                                <label for="city">City</label>
                                <select class="form-select @error('city') is-invalid @enderror " name="city">
                                    <option hidden disabled selected value> Select</option>
                                    <option @if ($data->city == 'Kathmandu') selected @endif value="Kathmandu">
                                        Kathmandu</option>
                                    <option @if ($data->city == 'Bhaktapur') selected @endif value="Bhaktapur">
                                        Bhaktapur</option>
                                    <option @if ($data->city == 'Lalitpur') selected @endif value="Lalitpur">
                                        Lalitpur</option>
                                    <option @if ($data->city == 'Pokhara') selected @endif value="Pokhara">
                                        Pokhara</option>
                                    <option @if ($data->city == 'Biratnagar') selected @endif value="Biratnagar">
                                        Biratnagar</option>
                                    <option @if ($data->city == 'Birgunj') selected @endif value="Birgunj">
                                        Birgunj</option>
                                    <option @if ($data->city == 'Chitwan') selected @endif value="Chitwan">
                                        Chitwan</option>
                                    <option @if ($data->city == 'Dharan') selected @endif value="Dharan">
                                        Dharan</option>
                                    <option @if ($data->city == 'Nepalgunj') selected @endif value="Nepalgunj">
                                        Nepalgunj</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 d-flex ">
                            <div class="mb-3" style="width: 30%;">
                                <label for="DateofBirth">Date Of Birth:</label>
                                <input type="date" class="form-control" name="DateofBirth" value="DateofBirth">
                                @error('DateofBirth')
                                <span class="invalid-feedback" style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 mx-auto" style="width: 30%;">
                                <label for="Gender">Gender:</label>
                                <select class="form-select   @error('Gender') is-invalid @enderror " name="Gender">
                                    <option hidden disabled selected value> Select</option>
                                    <option @if ($data->Gender == 'Male') selected @endif value="Male">
                                        Male</option>
                                    <option @if ($data->Gender == 'Female') selected @endif value="Female">
                                        Female</option>
                                    <option @if ($data->Gender == 'Others') selected @endif value="Others">
                                        Others</option>
                                </select>
                            </div>
                            <div class="mb-3 " style="width: 30%;">
                                <label for="phoneno">Mobile Number:</label>
                                <input type="text" class="form-control" name="phoneno" value="{{$data->phoneno}}">
                                @error('phoneno')
                                <span class="invalid-feedback" style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="JobTime">Job Time:</label>
                            <select class="category form-select @error('JobTime') is-invalid @enderror" name="JobTime">
                                <option @if ($data->JobTime == 'Full Time') selected @endif value="Full Time">Full Time
                                </option>
                                <option @if ($data->JobTime == 'Part Time') selected @endif value="Part Time">Part Time
                                </option>
                                <option @if ($data->JobTime == 'Freelance') selected @endif value="Freelance">Freelance</option>
                            </select>
                            @error('JobTime')
                            <span class="invalid-feedback" style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Objective">Your Career Objective:</label>
                            <textarea class="form-control" name="Objective">{{ $data->Objective }}</textarea>
                            @error('Objective')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                             @enderror
                        </div>
                    </div>

                    <h5 style="margin-top: 50px; font-size: 2.375rem;">Add Education</h5>
                    <div class="sub_form shadow-sm p-4 mb-5 bg-white rounded ">
                        <div class="mb-3 d-flex w-100 ">
                            <div class="mb-3 " style="width: 30%;">
                                <label for="usr">Degree:</label>
                                <select class="form-select " name="Degree">
                                    <option hidden disabled selected value> Select</option>
                                    <option @if ($data->Degree == 'SLC/SEE') selected @endif value="SLC/SEE"
                                        >SLC/SEE</option>
                                    <option @if ($data->Degree == 'Intermediate') selected @endif value="Intermediate">Intermediate</option>
                                    <option @if ($data->Degree == 'Bachelor') selected @endif value="Bachelor">Bachelor</option>
                                    <option @if ($data->Degree == 'Diploma') selected @endif value="Diploma">Diploma</option>
                                </select>
                            </div>
                            <div class="mb-3 mx-auto" style="width: 30%;">
                                <label for="Institution">Institution:</label>
                                <input type="text" class="form-control" name="Institution" value="{{ $data->Institution }}">
                            </div>
                            <div class="mb-3" style="width: 30%;">
                                <label for="University">University:</label>
                                <input type="text" class="form-control" name="University" value="{{ $data->University }}" >
                                @error('University')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                             @enderror
                            </div>
                        </div>
                        <div class="mb-3 d-flex w-100 ">

                            <div class="mb-3 " style="width: 50%;">
                                <label for="Joined_year">Joined Year:</label>
                                <select class="form-select " name="Joined_year">
                                    <option hidden disabled selected value> Select</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>
                            <div class="mb-3 " style="width: 50%;margin-left: 46px;">
                                <label for="Passed_year">Passed Year:</label>
                                <select class="form-select " name="Passed_year">
                                    <option hidden disabled selected value> Select</option>
                                    <option value="Currently Reading">Currently Reading</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="Skills">Your Skills:</label>
                            <textarea class="form-control" name="Skills">{{ $data->Skills }}</textarea>
                            @error('Skills')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                             @enderror
                        </div>
                    </div>
                    <h5 style="font-size: 2.375rem;">Add Experience</h5>
                    <div class="form-check" style="padding-left: 2.5em;">
                    <input class="form-check-input" type="checkbox"  value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Mark, If you are a Fresher.
                    </label>
                    </div>
                    <div class="sub_form shadow-sm p-4 mb-5 bg-white rounded ">
                        <div class="mb-3 d-flex w-100 ">
                            <div class="mb-3 " style="width: 50%;">
                                <label for="Position">Position:</label>
                                <input type="text" class="form-control Exp"  name="Position" value="{{ $data->Position }}" >
                                @error('Position')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                @enderror
                                
                            </div>
                            <div class="mb-3 " style="width: 50%;margin-left: 46px;">
                                <label for="Organization">Organization:</label>
                                <input type="text"   class="Exp form-control" name="Organization"  value="{{ $data->Organization }}">
                                @error('Organization')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                @enderror
                                
                            </div>
                        </div>
                        <div class="mb-3 d-flex w-100 ">
                            <div class="mb-3 " style="width: 50%;">
                                <label for="Industry">Industry</label>
                                <select   class=" Exp category form-select @error('Industry') is-invalid @enderror"
                                name="Industry">
                                    <option @if ($data->Industry == 'Accounting & Consulting') selected @endif value="Accounting & Consulting">
                                        Accounting and Consulting</option>
                                    <option @if ($data->Industry == 'Admin Support') selected @endif value="Admin Support">Admin
                                        Support</option>
                                    <option @if ($data->Industry == 'Data Science & Analysis') selected @endif value="Data Science & Analysis">
                                        Data Science and Analysis</option>
                                    <option @if ($data->Industry == 'Design & Creative') selected @endif value="Design & Creative">Design
                                        and Creative</option>
                                    <option @if ($data->Industry == 'Engineering & Architecture') selected @endif
                                        value="Engineering & Architecture">Engineering and Architecture</option>
                                    <option @if ($data->Industry == 'IT & Networking') selected @endif value="IT & Networking">IT &
                                        Networking</option>
                                    <option @if ($data->Industry == 'Legal') selected @endif value="Legal">Legal</option>
                                    <option @if ($data->Industry == 'Sales & Marketing') selected @endif value="Sales & Marketing">Sales
                                        and Marketing</option>
                                    <option @if ($data->Industry == 'Web, Mobile, & Software Development') selected @endif
                                        value="Web, Mobile, & Software Development">Web, Mobile, & Software Development
                                    </option>
                            </select>
                            @error('jobCategory')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="mb-3 " style="width: 50%;margin-left: 46px;">
                                <label for="Level">Job Level:</label>
                                <select  class="form-select Exp" name="Level">
                                    <option hidden disabled selected value> Select</option>
                                    <option @if ($data->Level == 'Entry Level') selected @endif value="Entry Level">Entry Level</option>
                                    <option @if ($data->Level == 'Junior Level') selected @endif value="Junior Level">Junior Level</option>
                                    <option @if ($data->Level == 'Senior Level') selected @endif value="Senior Level">Senior Level</option>
                                    <option @if ($data->Level == 'Top Level') selected @endif value="Top Level">Top Level</option>
                                    <option @if ($data->Level == 'Top Level') selected @endif value="Top Level">Top Level</option>
                                </select>
                                @error('Level')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="Roles">Roles And Responsibility:</label>
                            <textarea   class="form-control Exp" name="Roles">{{ $data->Roles }}</textarea>
                            @error('Roles')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
            </div>
            <div class="botton text-center">
                <button type="submit" style="margin-bottom:60px" class="btn btn-warning btn-lg step_btn">Submit</button>
            </div>
            </form>


        </div>
</body>
<script >
    $(function() {
        $('#flexCheckIndeterminate').click(function() {
            if ($(this).is(':checked')) {
            $('.Exp').prop('disabled', true);
    } else {
            $('.Exp').prop('disabled', false);
    }
  });
});
</script>

@endsection