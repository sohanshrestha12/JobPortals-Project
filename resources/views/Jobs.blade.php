@extends('layouts.app')
@section('content')
    <section class="job">
        <div class="job-text">
            <h2>Contact US</h2>
            <ul>
                <li><a href="index.html">Home</a> </li>
                <li>Job </li>
            </ul>
        </div>
    </section>
    <section class="inner-content-wrapper section current-job-sec">
        <div class="container">
            <form action="" class="search">
                <div class="row mb-5" style="padding-left:0.5rem;">
                    <div class="col-md-8">
                        <input type="text" name="Jobsearch" class="form-control" value="{{$Jobsearch}}" placeholder="Search for Job">
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
            </form>

            <div class="row w-100 m-0">
                @foreach ($joblist as $jobs)
                    <div class="current-job_product col-lg-6 col-md-6 col-sm-12 filter new">
                        <div class="box1 d-flex">
                            <div class="icon-sec">
                                @if ($jobs->company->ProfileImg == 'defaultImg.png')
                                    <img src="../img/job-icon1.png" alt="" style="object-fit: cover;">
                                @else
                                    <img src="{{ asset('storage/Company Logo/' . $jobs->company->ProfileImg) }}"
                                        alt="" style="height:90px;width:90px;border-radius:50%;object-fit: cover;">
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
            </div>
            <div class="row pagination">
                {{ $joblist->onEachSide(1)->links() }}
            </div>
        </div>
    </section>
@endsection
