@extends('layouts.app')
@section('content')
    <section class="breadcrumbs-sec">
        <img src="img/about-banner.jpg" class="w-100 banner-img" alt="">

        <div class="breadcrumbs-text">
            <h2>About US</h2>
            <ul>
                <li><a href="{{route('home')}}">Home</a> </li>
                <li>About </li>
            </ul>
        </div>

    </section>
    <section class="sectionAbout section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-4 col-sm-12 left-sec " style="position:relative;">
                    <img src="img/section1-img1.jpg" class="img1" alt="">
                    <div class="video">
                        <img src="img/video-bg.jpg" class="w-100" alt="">
                        <a class="play-btn video-play-btn mfp-iframe" href="https://youtu.be/BS4TUd7FJSg">
                            <i class="fas fa-play-circle"></i></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-12 right-sec">
                    <div class="text">
                        <h2 class="section-titled mb-3">Popular Job Portal <br><img src="img/title-border-gray.png"
                                alt=""></h2>
                        <p>Welcome to our job portal website! We are a platform designed to connect job seekers with
                            employment opportunities across various industries. At our core, we believe that finding the
                            right job can change a person's life. That's why we
                            strive to make the job search process as easy and efficient as possible. We offer a wide range
                            of job listings from companies big and small, and our user-friendly search features help job
                            seekers narrow down their options based on their skills, interests, and location.</p>
                        <p>In addition to our job listings, we also offer resources and tools to help job seekers improve
                            their chances of success.
                            We are proud to be a part of the employment ecosystem and to have helped countless job seekers
                            find meaningful employment.
                        </p>
                        <button class="botoon mt-3">About More</button>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Section1 -->

    <!-- Start Section2 -->
    <section class="section2 ">
        <div class="container">

            <div class="row ">
                <div class="col-lg-5 col-md-12 col-sm-12 left-sec">
                    <div class="text">
                        <h2 class="section-titled mb-3">Our Working Process <br><img src="img/title-border-gray.png"
                                alt=""></h2>
                        <p>Our job portal webpage works by aggregating job listings from various sources and providing a
                            user-friendly search functionality that allows job seekers to filter job listings based on their
                            skills, interests, and location. Companies can create an account and manage their listings, view
                            applications, and communicate with job seekers directly through our website. We also offer a
                            range of resources to help job seekers improve their job search process, including career advice
                            articles and interview tips. </p>
                        <p>Our goal is to make the job search process as seamless as possible for job seekers and employers
                            alike.</p>
                    </div>

                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 right-sec">
                    <div class="trust-batch"><img src="img/trust-bg.png" alt="">
                        <p>100%<span>Trusted</span></p>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Section2 -->

    <!-- Strat Section3 -->
    <section class="sectionAbout section3">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-4 col-sm-12 left-sec">
                    <img src="img/section3-img1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12 right-sec">
                    <div class="text mt-5">
                        <h2 class="section-titled mb-3">Why We are Most Popular <br><img src="img/title-border-gray.png"
                                alt=""></h2>
                        <p>We offer a wide range of job listings from various sources, a user-friendly search functionality,
                            and valuable resources to help job seekers improve their job search process. Our platform also
                            provides an effective way for companies to find and attract top talent. We continuously improve
                            and innovate our platform to provide the best possible experience for our users. Overall, our
                            popularity stems from our comprehensive job database, user-friendly interface. </p>
                        <p> our job portal webpage is popular because we offer a comprehensive database of job
                            opportunities, user-friendly search functionality, valuable resources for job seekers, and an
                            effective platform for employers.</p>
                        <button class="botoon mt-3">About More</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Section3 -->

    <!-- Strat Section4 -->
    <section class="sectionAbout section4">
        <div class="container">


            <div class="row ">
                <div class="col-lg-6 col-md-8 col-sm-12 left-sec">
                    <div class="text mt-5">
                        <h2 class="section-titled mb-3">Planning & Strategy <br><img src="img/title-border-gray.png"
                                alt=""></h2>
                        <p>Our job portal website's Planning and Strategy section outlines the steps we take to ensure the
                            best possible user experience. We conduct regular user research, invest in new technologies, use
                            marketing and promotion strategies, form partnerships and collaborations, and make data-driven
                            decisions to continuously improve our platform. Our commitment to these areas allows us to stay
                            ahead in the highly competitive job search industry and provide our users with the most
                            comprehensive and up-to-date job listings and resources.</p>
                        <p>Overall, our Planning and Strategy section reflects our commitment to continuously improving our
                            platform and offering the best possible experience for job seekers and employers.</p>
                        <button class="botoon mt-3">About More</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12 right-sec">
                    <img src="img/section4-img1.jpg" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>
    <!-- End Section4 -->



    <!--jquery js -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <!--jquery js -->
    <script src="js/bootstrap.min.js"></script>
    <!--Easing js -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- CounterUp JS -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- MagnificPopup JS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!--jquery js -->
    <script src="js/plugins.js"></script>
    <!--Fontawesome js -->
    <script src="js/fontawesome.js"></script>
    <!--jquery js -->
    <script src="js/custom.js"></script>
@endsection
