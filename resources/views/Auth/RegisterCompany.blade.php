@extends('layouts.app')
@section('content')
    <div class="container mb-5">
        <div class="row justify-content-center bg-light">
            <div class="col-md-6 p-5 shadow">
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert" style="display: flex;justify-content:center;font-size:1.6rem;">
                        {{session()->get('success')}}
                    </div>
                @endif
                <h1 class="header1">Company Registration</h1>
                <p class="paragraph mt-4"> Fill out the form below to create a <span class="paragraph"
                        style="font-weight: 500">free account</span>. Once you create an account, log in to the system and
                    post
                    your vacancies online to reach out to hundreds of thousands of our website visitors and active users
                    looking
                    for a new job.
                </p>
                <hr style="color: black !important;height:2px;opacity:1;">
                <form id="company-register-form" action="{{ route('RegisterCompany') }}" method="POST">
                    @csrf
                    <h2 class="header2 text-center">Login Information</h2>
                    <div class="signup-form-grp">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="signup-form-grp">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="signup-form-grp">
                        <label for="password_confirmation">Retype Password</label>
                        <input type="password" name="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror">
                        @error('password_confirmation')
                            <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                        @enderror
                    </div>

                    <hr style="color: black !important;height:2px;opacity:1;margin:3rem 0;">


                    <h2 class="header2 text-center">Company Information</h2>
                    <div class="signup-form-grp">
                        <label for="name">Company Name</label>
                        <input type="text" name="name"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="signup-form-grp">
                        <label for="phoneno">Primary Phone Number</label>
                        <input type="text" name="phoneno" class="form-control @error('phoneno') is-invalid @enderror">
                        @error('phoneno')
                            <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="signup-form-grp">
                        <label for="category">Choose Company Industry</label>
                        <select class="form-select @error('category') is-invalid @enderror" name="category" id="category">
                            <option hidden disabled selected value> Choose Company Industries</option>
                            <option value="Art">Art</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Online Media">Online Media</option>
                            <option value="Laravel">Laravel</option>
                            <option value="Literature">Literature</option>
                            <option value="Intertior/exterior design">Intertior/exterior design</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Business">Business</option>
                            <option value="Security">Security</option>
                            <option value="Telecommunication">Telecommunication</option>
                        </select>
                        @error('category')
                            <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-one-line">
                        <div class="signup-form-grp" style="flex: 1">
                            <label for="city">City</label>
                            <select class="form-select @error('city') is-invalid @enderror" name="city" id="category">
                                <option hidden disabled selected value> Choose Company City</option>
                                <option value="Kathmandu">Kathmandu</option>
                                <option value="Baktapur">Baktapur</option>
                                <option value="Lalitpur">Lalitpur</option>
                                <option value="Pokhara">Pokhara</option>
                                <option value="Biratnagar">Biratnagar</option>
                                <option value="Birgunj">Birgunj</option>
                                <option value="Chitwan">Chitwan</option>
                                <option value="Dharan">Dharan</option>
                                <option value="Nepalgunj">Nepalgunj</option>
                                <option value="Outside Nepal">Outside Nepal</option>
                            </select>
                            @error('city')
                                <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="signup-form-grp" style="flex: 1">
                            <label for="location">Location</label>
                            <input type="text" name="location" placeholder="Company Street Address"
                                class="form-control @error('location') is-invalid @enderror">
                            @error('location')
                                <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <hr style="color: black !important;height:2px;opacity:1;margin:3rem 0;">

                    <div class="signup-form-grp">
                        <p style="font-size: 1.3rem">Do you already have Account? <a href="javascript:void(0)"
                                class="login" style="font-size: 1.3rem;text-decoration:none;font-weight:500">Click here to
                                login.</a></p>
                        <div class="submit-btn">
                            <button type="submit">Create Account</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 pt-5 pl-1 shadow" style="color:white; background-color:var(--main-color);">
                <h2 class="header2 text-center">Features</h2>
                <div class="signup-form-features">
                    <i class="uil uil-user-plus"></i>
                    <div class="signup-form-features-group">
                        <p class="paragraph">Easy Register</p>
                        <p style="font-size: 1.2rem">Signing up is easy.</p>
                    </div>
                </div>
                <div class="signup-form-features">
                    <i class="uil uil-user-square"></i>
                    <div class="signup-form-features-group">
                        <p class="paragraph">Create a profile and post your advertisement.</p>
                        <p style="font-size: 1.2rem">With JobPortal you can post your own advertisement at your own
                            convenience.</p>
                    </div>
                </div>
                <div class="signup-form-features">
                    <i class="uil uil-user-plus"></i>
                    <div class="signup-form-features-group">
                        <p class="paragraph">Search and screen thousands of jobseeker’s resume</p>
                        <p style="font-size: 1.2rem">Screen hundreds of high-quality candidates with free database resume
                            access. Hiring was never easier.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
