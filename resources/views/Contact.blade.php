@extends('layouts.app')
@section('content')
 <section class="contact">
		<div class="contact-text">
            <h2>Contact US</h2>
			<ul>
				<li><a href="index.html">Home</a> </li>
				<li>Contact Us </li>
            </ul>
		</div>  
    </section>
   
	<section class="inner-content-wrapper contact-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 contact-form-box">
                  <div class="content">
                     <div class="heading">
                        <h2>Need Help?</h2>
                        <p>Reach out to the world's most reliable IT services.</p>
                     </div>
                     <form action="" method="" class="contact-form">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                 <span class="alert-error"></span>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                 <span class="alert-error"></span>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                 <span class="alert-error"></span>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group comments">
                                 <textarea class="form-control" id="comments" name="comments" placeholder="Please describe what you need."></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-12">
                              <button type="submit" name="submit" id="submit">Submit</button>
                           </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                           <div id="message" class="alert-msg"></div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-6 info mt-5 mt-lg-0">
                  <div class="contact-tabs">
                     <ul id="tabs" class="nav nav-tabs">
                        <li class="nav-item">
                           <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">
                           Address
                           </a>
                        </li>
                     </ul>
                     <div id="tabsContent" class="tab-content">
                        <div id="tab1" class="tab-pane fade active show">
                           <ul>
                              <li>
                                 <div class="icon">
                                    <img src="../img/placeholder.png" alt="" style="width: 40px">
                                 </div>
                                 <div class="info">
                                    <p>
                                       Our Location
                                       <span>Kathmandu, Nepal
									   </span>
                                    </p>
                                 </div>
                              </li>
                              <li>
                                 <div class="icon">
                                    <img src="../img/gmail.png" alt="" style="width: 40px">
                                 </div>
                                 <div class="info">
                                    <p>
                                       Send Us Mail
                                       <span>Info@test.com</span>
                                    </p>
                                 </div>
                              </li>
                              <li>
                                 <div class="icon">
                                    <img src="../img/phone-call.png" alt="" style="width: 40px">
                                 </div>
                                 <div class="info">
                                    <p>
                                       Call Us
                                       <span>+012 345 6789</span>
                                    </p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection	