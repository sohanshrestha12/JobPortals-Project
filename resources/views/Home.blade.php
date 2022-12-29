@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<body>
<a href="{{route('adminpanel')}}">Admin</a>
<section class="banner-sec">
         <div class="banner-text">
            <h2>Find The Job That Fits Your Life</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
               dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
            </p>
            <a href="job-list.html" class="btn">Know More</a>
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
					  <p>Lorem ipsum dolor sit amet, a arcu justo eget, placerat suspendisse ornare accumsan et fringilla consectetuer </p>
					  <a class="angle-icon" href="#"><i class="fas fa-angle-right"></i></a> 
				   </div>
				</div>
				<div class="col-md-6 col-lg-4">
				   <div class="single-feature">
					  <div class="single-feature-icon"><i class="fas fa-search"></i></div>
					  <h4>Serach Job</h4>
					  <p>Lorem ipsum dolor sit amet, a arcu justo eget, placerat suspendisse ornare accumsan et fringilla consectetuer </p>
					  <a class="angle-icon" href="#"><i class="fas fa-angle-right"></i></a> 
				   </div>
				</div>
				<div class="col-md-6 col-lg-4">
				   <div class="single-feature">
					  <div class="single-feature-icon"><i class="far fa-file"></i></div>
					  <h4>Submit Resume</h4>
					  <p>Lorem ipsum dolor sit amet, a arcu justo eget, placerat suspendisse ornare accumsan et fringilla consectetuer </p>
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

      <section class="job-section">
         <div class="container">
            <h2 class="section-title mb-0">Recent Jobs<br> <img src="img/title-border.png" alt="">
            <div class="job-sec-list-box">
                  <a  href="" style="text-decoration:none;"><div class="box1">
                        <div class="image-sec">
                           <img src="img/blog3.jpg" alt="">
                        </div>
                        <div class="info-sec">
                           <h3 style="margin-bottom:10px ;margin-top:10px">Heading</h3>
                           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio temporibus quo quod dolores.</p>
                        </div>
                  </div></a>
                  <a href="" style="text-decoration:none;"><div class="box1">
                        <div class="image-sec">
                           <img src="img/blog3.jpg" alt="">
                        </div>
                        <div class="info-sec">
                           <h3 style="margin-bottom:10px ;margin-top:10px">Heading</h3>
                           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio temporibus quo quod dolores.</p>
                        </div>
                  </div></a>
                  <a href="" style="text-decoration:none;"><div class="box1">
                        <div class="image-sec">
                           <img src="img/blog3.jpg" alt="">
                        </div>
                        <div class="info-sec">
                            <h3 style="margin-bottom:10px ;margin-top:10px">Heading</h3>
                           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio temporibus quo quod dolores.</p>
                        </div>
                  </div></a>
                  <a href="" style="text-decoration:none;"><div class="box1">
                        <div class="image-sec">
                           <img src="img/blog3.jpg" alt="">
                        </div>
                        <div class="info-sec">
                            <h3 style="margin-bottom:10px ;margin-top:10px">Heading</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio temporibus quo quod dolores.</p>
                        </div>
                  </div></a>
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
            <div class="input-group-append"> <span class="input-group-text subscribe-btn"
               id="subscribe">Subscribe</span>
            </div>
         </div>
      </section>
      <!-- End Subscription Section -->

@endsection
