@extends('layouts.User')
@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/formatterBox.css') }}">

    <title>Document</title>
    <style>
        .main1 {
            padding: 0 30px;
        }
        body{
            height: 200vh;
        }
        form {
            width: 100%;
            padding: 69px;
            border: 1px solid #7a7a7a4d;
            border-radius: 26px;
        }

        .sub_form,
        .resume_part {
            border: 1px solid #7a7a7a4d;
            border-radius: 26px;
        }

        .font_family h1,
        .font_family span,
        .font_family p,
        .font_family h5,
        .font_family h2 {
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
            font-size: 1.4rem !important;
            font-family: 'Josefin Sans', sans-serif;
            height: 100px;
        }


        .wrapper {
            text-align: center;
        }


        h1 {
            color: #130f40;
            font-family: 'Varela Round', sans-serif;
            letter-spacing: -.5px;
            font-weight: 700;
            padding-bottom: 10px;
        }

        .upload-container {
            border-radius: 6px;
        }

        .border-container {
            border: 5px dashed rgba(198, 198, 198, 0.65);
            padding: 20px;
        }

        .fas {
            font-size: 25px;
        }

        .border-container p {
            color: #130f40;
            font-weight: 600;
            font-size: 2.1em;
            letter-spacing: -1px;
            margin-top: 30px;
            margin-bottom: 0;
            opacity: 0.65;
        }

        #file-browser {
            text-decoration: none;
            color: rgb(22, 42, 255);
            border-bottom: 3px dotted rgba(22, 22, 255, 0.85);
            font-size: 0.9em;
        }

        #file-browser:hover {
            color: rgb(0, 0, 255);
            border-bottom: 3px dotted rgba(0, 0, 255, 0.85);
        }

        .icons {
            color: #95afc0;
            opacity: 0.55;
        }

        .resume_img {
            padding: 38px;
            border: 1px solid #d4c8c8;
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

                    <form class="shadow-sm p-4 mb-5 bg-white rounded" enctype="multipart/form-data"
                        action="{{ route('UpdateJobSeekerInformation') }}" method="post" id="form">
                        @csrf
                        <h5 style="font-size: 2.375rem;">Add Your Personal Details</h5>
                        <div class="sub_form shadow-sm p-4 mb-5 bg-white rounded ">
                            <div class="mb-3 ">
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <label for="name">Full Name:</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror "
                                    name="name" value="{{ $data->name }}">
                                @error('name')
                                    <span class="invalid-feedback"
                                        style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 d-flex w-100 ">
                                <div class="mb-3 " style="width: 30%;">
                                    <label for="District">District</label>
                                    <select class="form-select @error('District') is-invalid @enderror" name="District">
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
                                        <option @if ($data->District == 'Outside Nepal') selected @endif
                                            value="Outside
                                        Nepal">
                                            Outside Nepal</option>
                                    </select>
                                    @error('District')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3 mx-auto" style="width: 30%;">
                                    <label for="Municipality">Municipality</label>
                                    <select class="form-select @error('Municipality') is-invalid @enderror "
                                        name="Municipality">
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
                                        <option @if ($data->Municipality == 'Outside Nepal') selected @endif
                                            value="Outside
                                        Nepal">
                                            Outside Nepal</option>
                                    </select>
                                    @error('Municipality')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror
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
                                    @error('city')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 d-flex ">
                                <div class="mb-3" style="width: 30%;">
                                    <label for="DateofBirth">Date Of Birth:</label>
                                    <input type="date" class="form-control @error('DateofBirth') is-invalid @enderror "
                                        name="DateofBirth" value="{{ $data->DateofBirth }}">
                                    @error('DateofBirth')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
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
                                    @error('Gender')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3 " style="width: 30%;">
                                    <label for="phoneno">Mobile Number:</label>
                                    <input type="text" class="form-control @error('phoneno') is-invalid @enderror"
                                        name="phoneno" value="{{ $data->phoneno }}">
                                    @error('phoneno')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="JobTime">Job Time:</label>
                                <select class="category form-select @error('JobTime') is-invalid @enderror"
                                    name="JobTime">
                                    <option @if ($data->JobTime == 'Full Time') selected @endif value="Full Time">Full Time
                                    </option>
                                    <option @if ($data->JobTime == 'Part Time') selected @endif value="Part Time">Part Time
                                    </option>
                                    <option @if ($data->JobTime == 'Freelance') selected @endif value="Freelance">Freelance
                                    </option>
                                </select>
                                @error('JobTime')
                                    <span class="invalid-feedback"
                                        style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Objective">Your Career Objective:</label>
                                <textarea class=" form-control editor @error('Objective') is-invalid @enderror" name="Objective">{{ $data->Objective }}</textarea>
                                @error('Objective')
                                    <span class="invalid-feedback"
                                        style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <h5 style="margin-top: 50px; font-size: 2.375rem;">Add Education</h5>
                        <div class="sub_form shadow-sm p-4 mb-5 bg-white rounded ">
                            <div class="mb-3 d-flex w-100 ">
                                <div class="mb-3 " style="width: 30%;">
                                    <label for="Degree">Degree:</label>
                                    <select class="form-select @error('Degree') is-invalid @enderror" name="Degree">
                                        <option hidden disabled selected value> Select</option>
                                        <option @if ($data->Degree == 'SLC/SEE') selected @endif value="SLC/SEE">SLC/SEE
                                        </option>
                                        <option @if ($data->Degree == 'Intermediate') selected @endif value="Intermediate">
                                            Intermediate</option>
                                        <option @if ($data->Degree == 'Bachelor') selected @endif value="Bachelor">
                                            Bachelor</option>
                                        <option @if ($data->Degree == 'Diploma') selected @endif value="Diploma">Diploma
                                        </option>
                                    </select>
                                    @error('Degree')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3 mx-auto" style="width: 30%;">
                                    <label for="Institution">Institution:</label>
                                    <input type="text" class="form-control @error('Institution') is-invalid @enderror"
                                        name="Institution" value="{{ $data->Institution }}">
                                    @error('Institution')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3" style="width: 30%;">
                                    <label for="University">University:</label>
                                    <input type="text" class="form-control @error('University') is-invalid @enderror"
                                        name="University" value="{{ $data->University }}">
                                    @error('University')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 d-flex w-100 ">

                                <div class="mb-3 " style="width: 50%;">
                                    <label for="Joined_year">Joined Year:</label>
                                    <input type="number" class="form-control @error('Joined_year') is-invalid @enderror"
                                        placeholder="YYYY" min="1999" max="2020" name="Joined_year"
                                        value="{{ $data->Joined_year }}">
                                    @error('Joined_year')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3 " style="width: 50%;margin-left: 46px;">
                                    <label for="Passed_year">Passed Year:</label>
                                    <input type="number" class="form-control @error('Passed_year') is-invalid @enderror"
                                        placeholder="YYYY" min="1999" max="2020" name="Passed_year"
                                        value="{{ $data->Passed_year }}">
                                    @error('Passed_year')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="Skills">Your Skills:</label>
                                <textarea class="form-control editor @error('Skills') is-invalid @enderror" name="Skills">{{ $data->Skills }}</textarea>
                                @error('Skills')
                                    <span class="invalid-feedback"
                                        style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <h5 style="font-size: 2.375rem;">Add Experience</h5>
                        <div class="form-check" style="padding-left: 2.5em;">
                            <input class="form-check-input" name="Fresher" type="checkbox" value="true" @if($data->Checked == 1) checked @endif
                                id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Mark, If you are a Fresher.
                            </label>
                        </div>
                        <div class="sub_form shadow-sm p-4 mb-5 bg-white rounded ">
                            <div class="mb-3 d-flex w-100 ">
                                <div class="mb-3 " style="width: 50%;">
                                    <label for="Position">Position:</label>
                                    <input type="text"
                                        class="form-control Exp @error('Position') is-invalid @enderror" name="Position"
                                        value="{{ $data->Position }}">
                                    @error('Position')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="mb-3 " style="width: 50%;margin-left: 46px;">
                                    <label for="Organization">Organization:</label>
                                    <input type="text"
                                        class="Exp form-control @error('Organization') is-invalid @enderror"
                                        name="Organization" value="{{ $data->Organization }}">
                                    @error('Organization')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3 d-flex w-100 ">
                                <div class="mb-3 " style="width: 50%;">
                                    <label for="Industry">Industry</label>
                                    <select class=" Exp category form-select @error('Industry') is-invalid @enderror"
                                        name="Industry">
                                        <option @if ($data->Industry == 'Accounting & Consulting') selected @endif
                                            value="Accounting & Consulting">
                                            Accounting and Consulting</option>
                                        <option @if ($data->Industry == 'Admin Support') selected @endif
                                            value="Admin
                                        Support">
                                            Admin
                                            Support</option>
                                        <option @if ($data->Industry == 'Data Science & Analysis') selected @endif
                                            value="Data Science & Analysis">
                                            Data Science and Analysis</option>
                                        <option @if ($data->Industry == 'Design & Creative') selected @endif
                                            value="Design & Creative">Design
                                            and Creative</option>
                                        <option @if ($data->Industry == 'Engineering & Architecture') selected @endif
                                            value="Engineering & Architecture">Engineering and Architecture</option>
                                        <option @if ($data->Industry == 'IT & Networking') selected @endif
                                            value="IT & Networking">IT &
                                            Networking</option>
                                        <option @if ($data->Industry == 'Legal') selected @endif value="Legal">Legal
                                        </option>
                                        <option @if ($data->Industry == 'Sales & Marketing') selected @endif
                                            value="Sales & Marketing">Sales
                                            and Marketing</option>
                                        <option @if ($data->Industry == 'Web, Mobile, & Software Development') selected @endif
                                            value="Web, Mobile, & Software Development">Web, Mobile, & Software Development
                                        </option>
                                    </select>
                                    @error('jobCategory')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3 " style="width: 50%;margin-left: 46px;">
                                    <label for="Level">Job Level:</label>
                                    <select class="form-select Exp @error('Level') is-invalid @enderror" name="Level">
                                        <option hidden disabled selected value> Select</option>
                                        <option @if ($data->Level == 'Entry Level') selected @endif value="Entry Level">
                                            Entry Level</option>
                                        <option @if ($data->Level == 'Junior Level') selected @endif value="Junior Level">
                                            Junior Level</option>
                                        <option @if ($data->Level == 'Senior Level') selected @endif value="Senior Level">
                                            Senior Level</option>
                                        <option @if ($data->Level == 'Top Level') selected @endif value="Top Level">Top
                                            Level</option>
                                       
                                    </select>
                                    @error('Level')
                                        <span class="invalid-feedback"
                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="Roles">Roles And Responsibility:</label>
                                <textarea class="form-control @error('Roles') is-invalid @enderror" id="Exp-js" name="Roles">{{ $data->Roles }}</textarea>

                                @error('Roles')
                                    <span class="invalid-feedback"
                                        style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <h1>Upload Your Resume</h1>

                        <div class="resume_part shadow-sm p-4 mb-5 bg-white rounded ">
                            <div class="wrapper">
                                <div class="container-resume">
                                    <div class="upload-container">
                                        @if (empty($data->Resume))
                                            <div id="when_not_uploaded">
                                                <h2>Upload a file</h2>
                                                <div class="border-container">
                                                    <div class="icons fa-4x">
                                                        <i class="fas fa-file-image"
                                                            data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                                                        <i class="fas fa-file-alt" data-fa-transform="shrink-2 up-4"></i>
                                                        <i class="fas fa-file-pdf"
                                                            data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
                                                    </div>
                                                    <input type="file" id="file-upload"
                                                        class="@error('Resume') is-invalid @enderror" name="Resume">
                                                    <p>Drag and drop files here, or
                                                        <a href="#" id="file-browser">browse</a> your computer.
                                                    </p>
                                                    @error('Resume')
                                                        <span class="invalid-feedback"
                                                            style="font-size:1.3rem;padding-left:1rem;color:red;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endif
                                        <div id="FileInfo"
                                            style="@if (is_null($storagePath)) display:none @endif">
                                            <a href="{{ url('/view', $data->id) }}" target="blank">
                                                <div class="resume_img">
                                                    <img src="{{ asset('storage/Resume/Files-PNG-File.png') }}"
                                                        alt="" style="height:56px">
                                                    <p id="resumeName"></p>
                                                </div>
                                            </a>
                                            <div class="delete_resume">
                                                <a href="{{ url('/deleteResume', $data->id) }}"
                                                    id="delete-file-btn">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>

        <div class="botton text-center">
            <button type="submit" style="margin-bottom:60px" class="btn btn-warning btn-lg step_btn">Submit</button>
        </div>
        </form>

        </div>
        </div>
        </div>

    </body>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script src="{{ asset('js/formatter.js') }}"></script>
    <script>
        $(function() {
            if ($('#flexCheckIndeterminate').is(":checked")) {

                $('.Exp').prop('disabled', true);
                $('#Exp-js').prop('disabled', true);
            } else {
                $('.Exp').prop('disabled', false);
                $('#Exp-js').prop('disabled', false);
            }

            $('#flexCheckIndeterminate').click(function() {
                if ($(this).is(':checked')) {
                    $('.Exp').prop('disabled', true);
                    $('#Exp-js').prop('disabled', true);
                } else {
                    $('.Exp').prop('disabled', false);
                    $('#Exp-js').prop('disabled', false);
                }
            });
        });

        $("#file-upload").css("opacity", "0");

        $("#file-browser").click(function(e) {
            e.preventDefault();
            $("#file-upload").trigger("click");
        });


        //direct Submit without reloading
        $(document).ready(function() {
            $('#file-upload').on('change', function() {
                var fileInput = $(this)[0];
                var file = fileInput.files[0];
                var formData = new FormData();

                formData.append('Resume', file);

                // console.log(formData);
                // var data = file.name;
                if (file) {
                    // var formData = new FormData($('#form')[0]);
                    // console.log(file);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('UpdateCv') }}",
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            // console.log(data)
                            // $('#FileInfo').find('img').attr('src', data.storagePath );
                            $("#resumeName").html(data.resumeName)
                            $('#FileInfo').show();
                            $('#when_not_uploaded').hide();
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr.responseText);
                        }
                    });
                } else {
                    $('#when_not_uploaded').show();
                }
            });
        });
        //editor box script

        const editors = document.querySelectorAll('.editor');
        editors.forEach(editor => {
            ClassicEditor
                .create(editor)
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection
