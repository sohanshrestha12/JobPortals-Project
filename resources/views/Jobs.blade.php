@extends('layouts.app')
@section('content')
    <section class="job">
        <div class="job-text">
            <h2>Jobs</h2>
            <ul>
                <li><a href="{{route('home')}}">Home</a> </li>
                <li>Job </li>
            </ul>
        </div>
    </section>
    <section class="inner-content-wrapper section current-job-sec">
        <div class="container">
            <form action="" class="search">
                <div class="row mb-3" style="padding-left:0.5rem;">
                    <div class="col-md-8">
                        <input type="text" name="Jobsearch" class="form-control" value="{{ $Jobsearch }}"
                            placeholder="Search for Job">
                    </div>
                    <div class="col-md-2 JobsearchBtn" style="z-index:9">
                        <button type="submit">Search</button>
                    </div>
                    <div class="col-md-2" style="z-index:9;">
                        <div class="row" style="height: 100%">
                            <div class="col-md-5 d-flex align-items-center justify-content-center JobFilter">
                                <i class="uil uil-filter"></i>
                                <h2>Filter</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border" id="Jfilter">
                    <div class="col-md-4">
                        <div class="company-form-grp">
                            <label for="JobType"
                                style="font-size: 1.4rem;font-weight:500;margin-bottom:0.7rem;margin-left:0.3rem;">Job
                                Type</label>
                            <select name="JobType" class="category">
                                <option hidden disabled selected value>Job Type</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Freelance">Freelance</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="company-form-grp">
                            <label for="JobType"
                                style="font-size: 1.4rem;font-weight:500;margin-bottom:0.7rem;margin-left:0.3rem;">Job
                                Category</label>

                            <select class="category" name="jobCategory">
                                <option hidden disabled selected value> Choose Job Category</option>
                                <option value="Accounting & Consulting">
                                    Accounting and Consulting</option>
                                <option value="Admin Support">Admin
                                    Support</option>
                                <option value="Customer Service">Customer
                                    Service</option>
                                <option value="Data Science & Analysis">
                                    Data Science and Analysis</option>
                                <option value="Design & Creative">Design
                                    and Creative</option>
                                <option value="Engineering & Architecture">
                                    Engineering and Architecture</option>
                                <option value="IT & Networking">IT &
                                    Networking</option>
                                <option value="Legal">Legal</option>
                                <option value="Sales & Marketing">Sales
                                    and Marketing</option>
                                <option value="Translation">Translation
                                </option>
                                <option value="Web, Mobile, & Software Development">Web, Mobile, & Software Development
                                </option>
                                <option value="Writing">Writing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row d-flex" style="height:100%">
                            <label for="JobType"
                                style="font-size: 1.4rem;font-weight:500;margin-bottom:0.7rem;margin-left:0.3rem;">Salary</label>
                            <div class="col-md-6" style="margin-top: -3rem">
                                <input type="number" class="form-control" name="minsalary"
                                    style="height:55%;padding:0 0.8rem;" placeholder="Rs.min">
                            </div>
                            <div class="col-md-6" style="margin-top: -3rem">
                                <input type="number" class="form-control" name="maxsalary"
                                    style="height:55%;padding:0 0.8rem;" placeholder="Rs.max">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row w-100 m-0">
                @if (count($joblist) <= 0)
                    <p class="text-center">No results found.</p>
                @else
                    @foreach ($joblist as $jobs)
                        <div class="current-job_product col-lg-6 col-md-6 col-sm-12 filter new">
                            <div class="box1 d-flex">
                                <div class="icon-sec">
                                    @if ($jobs->company->ProfileImg == 'defaultImg.png')
                                        <img src="../img/job-icon1.png" alt="" style="object-fit: cover;">
                                    @else
                                        <img src="{{ asset('storage/Company Logo/' . $jobs->company->ProfileImg) }}"
                                            alt=""
                                            style="height:90px;width:90px;border-radius:50%;object-fit: cover;">
                                    @endif
                                </div>
                                <div class="text-sec">
                                    <a href="{{ url('JobProfile/' . $jobs->id) }}">
                                        <h4>{{ ucfirst($jobs->Title) }}</h4>
                                    </a>
                                    <a href="job-details.html" style="margin-left: .5rem!important"
                                        target="_blank">{{ ucfirst($jobs->company->name) }}</a>
                                    <div class="Jobiconprofile">
                                        <i class="uil uil-rupee-sign"></i>
                                        <p>{{ 'Rs. ' . $jobs->Salary }}</p>
                                    </div>
                                    <div class="Jobiconprofile">
                                        <i class="uil uil-map-marker"></i>
                                        <p>{{ 'Location ' . $jobs->company->city . ', ' . $jobs->company->location }}</p>
                                    </div>
                                    <div class="JobProfileType">
                                        <p>{{ $jobs->Skills }}</p>
                                        <div>
                                            <p
                                                @if ($jobs->Type == 'Freelance') style="background-color: #28a745" 
                                @elseif($jobs->Type == 'Full Time') style="background-color: orange" 
                                @else style="background-color:red" @endif>
                                                {{ $jobs->Type }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="JobTypehome">
                                    <a href="{{ url('JobProfile/' . $jobs->id) }}" style="padding:1rem 1rem!important;">View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row pagination">
                {{ $joblist->appends($searchdata)->onEachSide(1)->links() }}
            </div>
        </div>
    </section>
@endsection
