@extends('layouts.app')
@section('content')
    @php
        
        use Carbon\Carbon;
        
        $currentdate = Carbon::now();
        
        $userexpire = App\Models\Job::get();
        
        foreach ($userexpire as $user) {
            if ($currentdate > $user->ExpiryDate) {
                $user->status = '0';
                $user->save();
            }
        }
    @endphp
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <section class="banner-sec">
        <div class="banner-text">
            <h2>Find The Job That Fits Your Life</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
            </p>
            <a href="job-list.html" style="color: white" class="btn">Know More</a>
        </div>
    </section>
    <!-- End Banner Section -->


    <!-- Start Works Process -->
    <section class="section how-work-area pb-0">
        <div class="container">
            <h3 class="section-title mb-0">
                Our Works Process<br> <img src="img/title-border.png" alt=""></h3>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature">
                        <div class="single-feature-icon"><i class="fas fa-user-plus"></i></div>
                        <h4>Create Account</h4>
                        <p>Lorem ipsum dolor sit amet, a arcu justo eget, placerat suspendisse ornare accumsan et fringilla
                            consectetuer </p>
                        <a class="angle-icon" href="#"><i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature">
                        <div class="single-feature-icon"><i class="fas fa-search"></i></div>
                        <h4>Serach Job</h4>
                        <p>Lorem ipsum dolor sit amet, a arcu justo eget, placerat suspendisse ornare accumsan et fringilla
                            consectetuer </p>
                        <a class="angle-icon" href="#"><i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature">
                        <div class="single-feature-icon"><i class="far fa-file"></i></div>
                        <h4>Submit Resume</h4>
                        <p>Lorem ipsum dolor sit amet, a arcu justo eget, placerat suspendisse ornare accumsan et fringilla
                            consectetuer </p>
                        <a class="angle-icon" href="#"><i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Works Process -->

    <!-- Start Services Section -->
    <section class="section services-sec">
        <div class="container">
            <h2 class="section-title mb-0">Our Services<br> <img src="img/title-border.png" alt="">
            </h2>
            <div class="row ">
                <div class="col-sm-12 col-md-6 col-lg-3 ">
                    <div class="box">
                        <img src="img/service-icon1.png" alt="">
                        <h5>Web & Software</h5>
                        <p>Lorem ipsum dolor sit amet, our consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ">
                    <div class="box">
                        <img src="img/service-icon2.png" alt="">
                        <h5>Data Science & Analitycs</h5>
                        <p>Lorem ipsum dolor sit amet, our consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ">
                    <div class="box">
                        <img src="img/service-icon3.png" alt="">
                        <h5>Accounting & Consulting</h5>
                        <p>Lorem ipsum dolor sit amet, our consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ">
                    <div class="box">
                        <img src="img/service-icon4.png" alt="">
                        <h5>Writing & Translations</h5>
                        <p>Lorem ipsum dolor sit amet, our consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ">
                    <div class="box">
                        <img src="img/service-icon5.png" alt="">
                        <h5>Sales & Marketing</h5>
                        <p>Lorem ipsum dolor sit amet, our consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ">
                    <div class="box">
                        <img src="img/service-icon6.png" alt="">
                        <h5>Graphics & Design</h5>
                        <p>Lorem ipsum dolor sit amet, our consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ">
                    <div class="box">
                        <img src="img/service-icon7.png" alt="">
                        <h5>Digital Marketing</h5>
                        <p>Lorem ipsum dolor sit amet, our consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ">
                    <div class="box">
                        <img src="img/service-icon8.png" alt="">
                        <h5>Education & Training</h5>
                        <p>Lorem ipsum dolor sit amet, our consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    {{-- Recent Jobs Starts here  --}}
    <section class="inner-content-wrapper section current-job-sec">
        <div class="container">
            <h2 class="section-title mb-0">Recent Jobs</h2><br> <img src="img/title-border.png" alt="">
            <div class="row w-100 m-0">
                
                @foreach ($latestJobs as $jobs)
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
                                {{-- <h4>UI / UX Designer</h4>
                                <a href="job-details.html" target="_blank">job-details.html</a>
                                <p><img src="../img/money-bag-icon.png" alt=""> $20k - $25K</p>
                                <p><img src="../img/map-icon.png" alt=""> Location 210-27 Quadra, Market Street,
                                    Victoria Canada</p> --}}
                            </div>
                            <div class="JobTypehome">
                                <a href="{{ url('JobProfile/' . $jobs->id) }}">View Details</a>

                            </div>
                        </div>
                    </div>
                @endforeach
                @if(count($latestJobs) >= 6)
                    <div class="d-flex justify-content-center">
                        <a href="{{route('jobs')}}" class="btn btn-primary" style="font-size:1.6rem;width:fit-content;">View More</a>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Start Blog Section -->
    <section class="section blog-sec">
        <div class="container">
            <h3 class="section-title mb-0">Our Blog<br> <img src="img/title-border.png" alt=""></h3>
            <div class="row-blg">
                <div class=" col-md-6 col-lg-3">
                    <div class="blog">
                        <img src="img/blog1.jpg" alt="" class="w-100">
                        <div class="text-box">
                            <div class="name-sec">
                                <p><i class="fas fa-user"></i> Henry H.Garrick</p>
                                <p><i class="fas fa-clock"></i> November 16, 2016</p>
                                <div class="date">05 <span>Jun</span>
                                </div>
                            </div>
                            <h6>How to Get Better Learning</h6>
                            <p>Lorem ipsum dolor sit amet, our consectetur adipiscing elit Lorem ipsum dolor sit amet,
                                our consectetur adipiscing elit.
                            </p>
                            <div class="text-right">
                                <a href="single-blog.html" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog">
                        <img src="img/blog2.jpg" alt="" class="w-100">
                        <div class="text-box">
                            <div class="name-sec">
                                <p><i class="fas fa-user"></i> Henry H.Garrick</p>
                                <p><i class="fas fa-clock"></i> November 16, 2016</p>
                                <div class="date">08 <span>Aug</span>
                                </div>
                            </div>
                            <h6>How to Get Better Learning</h6>
                            <p>Lorem ipsum dolor sit amet, our consectetur adipiscing elit Lorem ipsum dolor sit amet,
                                our consectetur adipiscing elit.
                            </p>
                            <div class="text-right">
                                <a href="single-blog.html" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog">
                        <img src="img/blog3.jpg" alt="" class="w-100">
                        <div class="text-box">
                            <div class="name-sec">
                                <p><i class="fas fa-user"></i> Henry H.Garrick</p>
                                <p><i class="fas fa-clock"></i> November 16, 2016</p>
                                <div class="date">010 <span>Sep</span>
                                </div>
                            </div>
                            <h6>How to Get Better Learning</h6>
                            <p>Lorem ipsum dolor sit amet, our consectetur adipiscing elit Lorem ipsum dolor sit amet,
                                our consectetur adipiscing elit.
                            </p>
                            <div class="text-right">
                                <a href="single-blog.html" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->

    <!-- Start Subscription Section -->
    <section class="subscription-sec ">
        <h3>Subscribe</h3>
        <p>Get weekly top new jobs delivered to your inbox</p>
        <div class="input-group pl-3 subscribe-group">
            <input type="email" class="form-control" placeholder="Your Enter email" aria-label=""
                aria-describedby="subscribe">
            <div class="input-group-append"> <span class="input-group-text subscribe-btn" id="subscribe">Subscribe</span>
            </div>
        </div>
    </section>
    <!-- End Subscription Section -->
@endsection
