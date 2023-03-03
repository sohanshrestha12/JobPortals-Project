@extends('layouts.app')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <!-- Modal -->
    <div class="modal fade" id="ApplyJobs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="staticBackdropLabel" style="font-size:1.6rem;">Personal Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @if ($JobseekerInfo)
                    <form action="{{ url('ApplyJob/' . $Jid->id) }}" method="post" id="Applyform">
                        <div class="modal-body">
                            <div style="padding:0.5rem 2rem">
                                @csrf
                                <h5 style="font-size: 2.375rem;">Add Your Personal Details</h5>
                                <div class="sub_form shadow-sm p-4 mb-5 bg-white rounded">
                                    <div class="mb-3 ">
                                        <input type="hidden" name="id" value="{{ $JobseekerInfo->id }}">
                                        <label for="name">Full Name:</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror "
                                            name="name" value="{{ $JobseekerInfo->name }}">
                                        @error('name')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 d-flex w-100 ">

                                        <div class="mb-3 " style="width: 30%;">
                                            <label for="District">District</label>
                                            <select class="form-select @error('District') is-invalid @enderror "
                                                name="District">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($JobseekerInfo->District == 'Kathmandu') selected @endif value="Kathmandu">
                                                    Kathmandu</option>
                                                <option @if ($JobseekerInfo->District == 'Bhaktapur') selected @endif value="Bhaktapur">
                                                    Bhaktapur</option>
                                                <option @if ($JobseekerInfo->District == 'Lalitpur') selected @endif value="Lalitpur">
                                                    Lalitpur</option>
                                                <option @if ($JobseekerInfo->District == 'Pokhara') selected @endif value="Pokhara">
                                                    Pokhara</option>
                                                <option @if ($JobseekerInfo->District == 'Biratnagar') selected @endif
                                                    value="Biratnagar">
                                                    Biratnagar</option>
                                                <option @if ($JobseekerInfo->District == 'Birgunj') selected @endif value="Birgunj">
                                                    Birgunj</option>
                                                <option @if ($JobseekerInfo->District == 'Chitwan') selected @endif value="Chitwan">
                                                    Chitwan</option>
                                                <option @if ($JobseekerInfo->District == 'Dharan') selected @endif value="Dharan">
                                                    Dharan</option>
                                                <option @if ($JobseekerInfo->District == 'Nepalgunj') selected @endif
                                                    value="Nepalgunj">
                                                    Nepalgunj</option>
                                                <option @if ($JobseekerInfo->District == 'Outside Nepal') selected @endif
                                                    value="Outside Nepal">
                                                    Outside Nepal</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mx-auto" style="width: 30%;">
                                            <label for="Municipality">Municipality</label>
                                            <select class="form-select @error('Municipality') is-invalid @enderror "
                                                name="Municipality">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($JobseekerInfo->Municipality == 'Kathmandu') selected @endif
                                                    value="Kathmandu">
                                                    Kathmandu</option>
                                                <option @if ($JobseekerInfo->Municipality == 'Bhaktapur') selected @endif
                                                    value="Bhaktapur">
                                                    Bhaktapur</option>
                                                <option @if ($JobseekerInfo->Municipality == 'Lalitpur') selected @endif
                                                    value="Lalitpur">
                                                    Lalitpur</option>
                                                <option @if ($JobseekerInfo->Municipality == 'Pokhara') selected @endif value="Pokhara">
                                                    Pokhara</option>
                                                <option @if ($JobseekerInfo->Municipality == 'Biratnagar') selected @endif
                                                    value="Biratnagar">
                                                    Biratnagar</option>
                                                <option @if ($JobseekerInfo->Municipality == 'Birgunj') selected @endif value="Birgunj">
                                                    Birgunj</option>
                                                <option @if ($JobseekerInfo->Municipality == 'Chitwan') selected @endif value="Chitwan">
                                                    Chitwan</option>
                                                <option @if ($JobseekerInfo->Municipality == 'Dharan') selected @endif value="Dharan">
                                                    Dharan</option>
                                                <option @if ($JobseekerInfo->Municipality == 'Nepalgunj') selected @endif
                                                    value="Nepalgunj">
                                                    Nepalgunj</option>
                                                <option @if ($JobseekerInfo->Municipality == 'Outside Nepal') selected @endif
                                                    value="Outside Nepal">
                                                    Outside Nepal</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 " style="width: 30%;">
                                            <label for="city">City</label>
                                            <select class="form-select @error('city') is-invalid @enderror "
                                                name="city">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($JobseekerInfo->city == 'Kathmandu') selected @endif
                                                    value="Kathmandu">
                                                    Kathmandu</option>
                                                <option @if ($JobseekerInfo->city == 'Bhaktapur') selected @endif
                                                    value="Bhaktapur">
                                                    Bhaktapur</option>
                                                <option @if ($JobseekerInfo->city == 'Lalitpur') selected @endif
                                                    value="Lalitpur">
                                                    Lalitpur</option>
                                                <option @if ($JobseekerInfo->city == 'Pokhara') selected @endif value="Pokhara">
                                                    Pokhara</option>
                                                <option @if ($JobseekerInfo->city == 'Biratnagar') selected @endif
                                                    value="Biratnagar">
                                                    Biratnagar</option>
                                                <option @if ($JobseekerInfo->city == 'Birgunj') selected @endif value="Birgunj">
                                                    Birgunj</option>
                                                <option @if ($JobseekerInfo->city == 'Chitwan') selected @endif value="Chitwan">
                                                    Chitwan</option>
                                                <option @if ($JobseekerInfo->city == 'Dharan') selected @endif value="Dharan">
                                                    Dharan</option>
                                                <option @if ($JobseekerInfo->city == 'Nepalgunj') selected @endif
                                                    value="Nepalgunj">
                                                    Nepalgunj</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex ">
                                        <div class="mb-3" style="width: 30%;">
                                            <label for="DateofBirth">Date Of Birth:</label>
                                            <input type="date" class="form-control" name="DateofBirth"
                                                value="{{ $JobseekerInfo->DateofBirth }}">
                                            @error('DateofBirth')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 mx-auto" style="width: 30%;">
                                            <label for="Gender">Gender:</label>
                                            <select class="form-select   @error('Gender') is-invalid @enderror "
                                                name="Gender">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($JobseekerInfo->Gender == 'Male') selected @endif value="Male">
                                                    Male</option>
                                                <option @if ($JobseekerInfo->Gender == 'Female') selected @endif value="Female">
                                                    Female</option>
                                                <option @if ($JobseekerInfo->Gender == 'Others') selected @endif value="Others">
                                                    Others</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 " style="width: 30%;">
                                            <label for="phoneno">Mobile Number:</label>
                                            <input type="text" class="form-control" name="phoneno"
                                                value="{{ $JobseekerInfo->phoneno }}">
                                            @error('phoneno')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="JobTime">Job Time:</label>
                                        <select class="category form-select @error('JobTime') is-invalid @enderror"
                                            name="JobTime">
                                            <option @if ($JobseekerInfo->JobTime == 'Full Time') selected @endif value="Full Time">
                                                Full
                                                Time
                                            </option>
                                            <option @if ($JobseekerInfo->JobTime == 'Part Time') selected @endif value="Part Time">
                                                Part
                                                Time
                                            </option>
                                            <option @if ($JobseekerInfo->JobTime == 'Freelance') selected @endif value="Freelance">
                                                Freelance
                                            </option>
                                        </select>
                                        @error('JobTime')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Objective">Your Career Objective:</label>
                                        <textarea class="form-control" name="Objective">{{ $JobseekerInfo->Objective }}</textarea>
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
                                                <option @if ($JobseekerInfo->Degree == 'SLC/SEE') selected @endif
                                                    value="SLC/SEE">
                                                    SLC/SEE
                                                </option>
                                                <option @if ($JobseekerInfo->Degree == 'Intermediate') selected @endif
                                                    value="Intermediate">
                                                    Intermediate</option>
                                                <option @if ($JobseekerInfo->Degree == 'Bachelor') selected @endif
                                                    value="Bachelor">
                                                    Bachelor</option>
                                                <option @if ($JobseekerInfo->Degree == 'Diploma') selected @endif
                                                    value="Diploma">
                                                    Diploma
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mx-auto" style="width: 30%;">
                                            <label for="Institution">Institution:</label>
                                            <input type="text" class="form-control" name="Institution"
                                                value="{{ $JobseekerInfo->Institution }}">
                                        </div>
                                        <div class="mb-3" style="width: 30%;">
                                            <label for="University">University:</label>
                                            <input type="text" class="form-control" name="University"
                                                value="{{ $JobseekerInfo->University }}">
                                            @error('University')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex w-100 ">

                                        <div class="mb-3 " style="width: 50%;">
                                            <label for="Joined_year">Joined Year:</label>
                                            {{-- <input type="date"> --}}
                                            <select class="form-select " name="Joined_year">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($JobseekerInfo->Joined_year == '2001') selected @endif value="2001">
                                                    2001
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2002') selected @endif value="2002">
                                                    2002
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2003') selected @endif value="2003">
                                                    2003
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2004') selected @endif value="2004">
                                                    2004
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2005') selected @endif value="2005">
                                                    2005
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2006') selected @endif value="2006">
                                                    2006
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2007') selected @endif value="2007">
                                                    2007
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2008') selected @endif value="2008">
                                                    2008
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2009') selected @endif value="2009">
                                                    2009
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2010') selected @endif value="2010">
                                                    2010
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2011') selected @endif value="2011">
                                                    2011
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2012') selected @endif value="2012">
                                                    2012
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2013') selected @endif value="2013">
                                                    2013
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2014') selected @endif value="2014">
                                                    2014
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2015') selected @endif value="2015">
                                                    2015
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2016') selected @endif value="2016">
                                                    2016
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2017') selected @endif value="2017">
                                                    2017
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2018') selected @endif value="2018">
                                                    2018
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2019') selected @endif value="2019">
                                                    2019
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2020') selected @endif value="2020">
                                                    2020
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2021') selected @endif value="2021">
                                                    2021
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2022') selected @endif value="2022">
                                                    2022
                                                </option>
                                                <option @if ($JobseekerInfo->Joined_year == '2023') selected @endif value="2023">
                                                    2023
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-3 " style="width: 50%;margin-left: 46px;">
                                            <label for="Passed_year">Passed Year:</label>
                                            <select class="form-select " name="Passed_year">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($JobseekerInfo->Passed_year == 'Currently Reading') selected @endif
                                                    value="Currently Reading">Currently Reading</option>
                                                <option @if ($JobseekerInfo->Passed_year == '2001') selected @endif value="2001">
                                                    2001
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2002') selected @endif value="2002">
                                                    2002
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2003') selected @endif value="2003">
                                                    2003
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2004') selected @endif value="2004">
                                                    2004
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2005') selected @endif value="2005">
                                                    2005
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2006') selected @endif value="2006">
                                                    2006
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2007') selected @endif value="2007">
                                                    2007
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2008') selected @endif value="2008">
                                                    2008
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2009') selected @endif value="2009">
                                                    2009
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2010') selected @endif value="2010">
                                                    2010
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2011') selected @endif value="2011">
                                                    2011
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2012') selected @endif value="2012">
                                                    2012
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2013') selected @endif value="2013">
                                                    2013
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2014') selected @endif value="2014">
                                                    2014
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2015') selected @endif value="2015">
                                                    2015
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2016') selected @endif value="2016">
                                                    2016
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2017') selected @endif value="2017">
                                                    2017
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2018') selected @endif value="2018">
                                                    2018
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2019') selected @endif value="2019">
                                                    2019
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2020') selected @endif value="2020">
                                                    2020
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2021') selected @endif value="2021">
                                                    2021
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2022') selected @endif value="2022">
                                                    2022
                                                </option>
                                                <option @if ($JobseekerInfo->Passed_year == '2023') selected @endif value="2023">
                                                    2023
                                                </option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label for="Skills">Your Skills:</label>
                                        <textarea class="form-control" name="Skills">{{ $JobseekerInfo->Skills }}</textarea>
                                        @error('Skills')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <h5 style="font-size: 2.375rem;">Add Experience</h5>
                                <div class="form-check" style="padding-left: 2.5em;">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Mark, If you are a Fresher.
                                    </label>
                                </div>
                                <div class="sub_form shadow-sm p-4 mb-5 bg-white rounded ">
                                    <div class="mb-3 d-flex w-100 ">
                                        <div class="mb-3 " style="width: 50%;">
                                            <label for="Position">Position:</label>
                                            <input type="text" class="form-control Exp" name="Position"
                                                value="{{ $JobseekerInfo->Position }}">
                                            @error('Position')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                            @enderror

                                        </div>
                                        <div class="mb-3 " style="width: 50%;margin-left: 46px;">
                                            <label for="Organization">Organization:</label>
                                            <input type="text" class="Exp form-control" name="Organization"
                                                value="{{ $JobseekerInfo->Organization }}">
                                            @error('Organization')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex w-100 ">
                                        <div class="mb-3 " style="width: 50%;">
                                            <label for="Industry">Industry</label>
                                            <select
                                                class=" Exp category form-select @error('Industry') is-invalid @enderror"
                                                name="Industry">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($JobseekerInfo->Industry == 'Accounting & Consulting') selected @endif
                                                    value="Accounting & Consulting">
                                                    Accounting and Consulting</option>
                                                <option @if ($JobseekerInfo->Industry == 'Admin Support') selected @endif
                                                    value="Admin Support">
                                                    Admin
                                                    Support</option>
                                                <option @if ($JobseekerInfo->Industry == 'Data Science & Analysis') selected @endif
                                                    value="Data Science & Analysis">
                                                    Data Science and Analysis</option>
                                                <option @if ($JobseekerInfo->Industry == 'Design & Creative') selected @endif
                                                    value="Design & Creative">Design
                                                    and Creative</option>
                                                <option @if ($JobseekerInfo->Industry == 'Engineering & Architecture') selected @endif
                                                    value="Engineering & Architecture">Engineering and Architecture
                                                </option>
                                                <option @if ($JobseekerInfo->Industry == 'IT & Networking') selected @endif
                                                    value="IT & Networking">IT &
                                                    Networking</option>
                                                <option @if ($JobseekerInfo->Industry == 'Legal') selected @endif value="Legal">
                                                    Legal
                                                </option>
                                                <option @if ($JobseekerInfo->Industry == 'Sales & Marketing') selected @endif
                                                    value="Sales & Marketing">Sales
                                                    and Marketing</option>
                                                <option @if ($JobseekerInfo->Industry == 'Web, Mobile, & Software Development') selected @endif
                                                    value="Web, Mobile, & Software Development">Web, Mobile, & Software
                                                    Development
                                                </option>
                                            </select>
                                            @error('jobCategory')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 " style="width: 50%;margin-left: 46px;">
                                            <label for="Level">Job Level:</label>
                                            <select class="form-select Exp" name="Level">
                                                <option hidden disabled selected value> Select</option>
                                                <option @if ($JobseekerInfo->Level == 'Entry Level') selected @endif
                                                    value="Entry Level">
                                                    Entry Level</option>
                                                <option @if ($JobseekerInfo->Level == 'Junior Level') selected @endif
                                                    value="Junior Level">
                                                    Junior Level</option>
                                                <option @if ($JobseekerInfo->Level == 'Senior Level') selected @endif
                                                    value="Senior Level">
                                                    Senior Level</option>
                                                <option @if ($JobseekerInfo->Level == 'Top Level') selected @endif
                                                    value="Top Level">
                                                    Top
                                                    Level</option>
                                                <option @if ($JobseekerInfo->Level == 'Top Level') selected @endif
                                                    value="Top Level">
                                                    Top
                                                    Level</option>
                                            </select>
                                            @error('Level')
                                                <span class="invalid-feedback"
                                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="Roles">Roles And Responsibility:</label>
                                        <textarea class="form-control Exp" name="Roles">{{ $JobseekerInfo->Roles }}</textarea>
                                        @error('Roles')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                style="font-size:1.4rem;">Close</button>
                            <button type="submit" class="btn btn-primary" style="font-size:1.4rem;">Submit</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#ApplyJobs').modal('show');
            });
        </script>
    @endif
    <section class="job">
        <div class="job-text">
            <h2>Jobs</h2>
            <ul>
                <li><a href="{{ route('home') }}">Home</a> </li>
                <li>Job Details</li>
            </ul>
        </div>
    </section>
    <div class="container" style="padding:0 8rem;margin-bottom:8rem;">
        <div class="row bg-white shadow p-5">
            <div class="col-md-12 justify-content-between">
                <div class="row">
                    <div class="col-md-6 JobCompanyProfile">
                        <div class="JobCompanyProfilelogo rounded-50">
                            @if ($Jid->company->ProfileImg == 'defaultImg.png')
                                <img src="../img/job-icon1.png" alt="404 image not found">
                            @else
                                <img src="{{ asset('storage/Company Logo/' . $Jid->company->ProfileImg) }}"
                                    alt="404 image not found">
                            @endif
                        </div>
                        <div class="JobCompanyProfilecontent">
                            <h2 class="header2">{{ ucfirst($Jid->Title) }}</h2>
                            <div class="JobCompanyProfilecontentinside">
                                <p class="paragraph">{{ $Jid->company->name }}</p>
                                <div class="JobProfilelocation">
                                    <i class="uil uil-location-pin-alt"></i>
                                    <p class="paragraph">{{ $Jid->company->city . ', ' . $Jid->company->location }}</p>
                                </div>
                                <p class="paragraph">{{ 'Rs. ' . $Jid->Salary }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex flex-column align-items-end">
                        <div style="display: inline-block">
                            <div class="JobProfilePhone">
                                <i class="uil uil-phone"></i>
                                <p>{{ $Jid->company->phoneno }}</p>
                            </div>
                            <div class="JobProfilelocation1">
                                <i class="uil uil-map-marker-alt"></i>
                                <p>{{ $Jid->company->city . ', ' . $Jid->company->location }}</p>
                            </div>
                            <div class="JobProfileCompanyProfile">
                                <i class="uil uil-globe" style="color: #3c2064"></i>
                                <a href="{{ url('UserCompanyProfile/' . $Jid->company->id) }}"
                                    style="text-decoration: none;color:#3c2064;">View Company Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between" style="margin-top:5rem">
            <div class="col-md-4 bg-white shadow " style="height:fit-content">
                <div class="border border-top-0 border-start-0 border-end-0"
                    style="background: rgba(0,0,0,.03);padding:2rem 1rem;margin: 0 -1rem">
                    <h2 class="header2" style="margin-left:3rem;margin-bottom: 0">Related Jobs</h2>
                </div>
                @if (count($relatedjobs) <= 0)
                    <div class="row border border-top-0 border-start-0 border-end-0"
                        style="margin:1rem 0 0 0; padding:1rem 0">
                        <div class="col-md-12 RelatedJobs d-flex justify-content-center">
                            <p>Currently no related jobs available.</p>
                        </div>
                    </div>
                @else
                    @foreach ($relatedjobs as $jobs)
                        <div class="row border border-top-0 border-start-0 border-end-0"
                            style="margin:1rem 0 0 0; padding:1rem 0">
                            <div class="col-md-4 RelatedJobs d-flex justify-content-center">
                                <div style="height:70px;width:70px">
                                    @if ($jobs->company->ProfileImg == 'defaultImg.png')
                                        <img src="../img/job-icon1.png" alt="">
                                    @else
                                        <img src="{{ asset('storage/Company Logo/' . $jobs->company->ProfileImg) }}"
                                            alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8">
                                <a href="{{ url('JobProfile/' . $jobs->id) }}"
                                    style="letter-spacing: 2px;font-weight:500;text-decoration:none;color:#3c2064;font-size:1.8rem">{{ ucfirst($jobs->Title) }}</a>
                                <p style="letter-spacing: 0.9px">{{ ucfirst($jobs->company->name) }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="col-md-7 bg-white shadow p-5" style="overflow: hidden">
                <div style="background: rgba(0,0,0,.03);margin:-3rem;padding:2rem 1rem;">
                    <h2 class="header2" style="margin-left:3rem;margin-bottom: 0">{{ ucfirst($Jid->Title) }}</h2>
                </div>
                <hr style="height: 3px;width:110%;color: black !important;margin: 3rem -3rem 1rem -3rem">
                <div class="JobHeader" style="margin-top: 4rem">
                    <h2 style="margin-bottom: 0">Basic Information</h2>
                </div>

                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Job Category</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->Category }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Required Skills</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->Skills }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Type</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->Type }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Experience</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->experience }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Offered Salary</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->Salary }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Apply Before(Deadline)</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->ExpiryDate }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="JobHeader" style="margin-top: 4rem">
                    <h2 style="margin-bottom: 0">Job Specification</h2>
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Education Degree</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->EducationDegree }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Education</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp; {{ $Jid->Education }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="SingleJobCategory">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="paragraph">Location</p>
                        </div>
                        <div class="col-md-7">
                            <p class="paragraph">:&nbsp;&nbsp;&nbsp;
                                {{ $Jid->company->city . ', ' . $Jid->company->location }}</p>
                        </div>
                    </div>
                    <hr style="height: 3px;width:100%;color: black !important;margin: -1.2rem 0 1rem 0">
                </div>
                <div class="JobHeader" style="margin-top: 4rem">
                    <h2 style="margin-bottom: 0">Job Description</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="paragraph mt-5" style="text-align:justify;white-space:normal;word-break:break-word;">
                            {{ $Jid->Description }}</p>
                    </div>
                </div>
                @if (Session::has('UloginId'))
                    @if ($applied == 1)
                        <div class="d-flex justify-content-center"
                            style="background: rgba(0,0,0,.03);margin:3rem -3rem -3rem -3rem;padding:2rem 1rem;">
                            <p style="margin: 1rem 0 0 0;color:green;">You have already applied for this job.</p>
                        </div>
                    @else
                        <div class="d-flex justify-content-end"
                            style="background: rgba(0,0,0,.03);margin:3rem -3rem -3rem -3rem;padding:2rem 1rem;">
                            <div class="d-flex">
                                <button class="JobApplyNowBtn" type="button"><i class="uil uil-plus-circle"
                                        style="color:white;font-size: 1.8rem;margin-right:0.6rem;margin-top:0.2rem"></i>Apply
                                    Now</button>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="d-flex justify-content-center"
                        style="background: rgba(0,0,0,.03);margin:3rem -3rem -3rem -3rem;padding:2rem 1rem;">
                        <p style="margin: 1rem 0 0 0;color:black;">Login as Jobseeker to apply to this job.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
