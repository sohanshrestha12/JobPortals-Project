@extends('layouts.app')
@section('content')
    <div class="container mb-5">
        <div class="row justify-content-center bg-light">
            <div class="col-md-6 p-5 shadow">
                @if (session()->has('Registersuccess'))
                    <div class="alert alert-success" role="alert"
                        style="display: flex;justify-content:center;font-size:1.6rem;">
                        {{ session()->get('Registersuccess') }} &nbsp; <a class="paragraph login" style="text-decoration: none"
                            href="javascript:void(0)"> Please login</a>
                    </div>
                @endif
                <h1 class="header1">Jobseeker Registration</h1>
                <p class="paragraph mt-4"> Fill out the form below to create a <span class="paragraph"
                        style="font-weight: 500">free account</span>. Once you have filled out the registration form, you will have access to our job listings and can start applying for jobs that match your skills and interests. 
                </p>
                <hr style="color: black !important;height:2px;opacity:1;">
                <form id="company-register-form" action="{{ route('RegisterJobSeeker') }}" method="POST">
                    @csrf
                    <h2 class="header2 text-center">Login Information</h2>
                    <div class="signup-form-grp">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="signup-form-grp">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="signup-form-grp">
                        <label for="password">Password</label>
                        <input type="password" name="password" 
                            class="form-control @error('password') is-invalid @enderror">
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

                    <div class="signup-form-grp">
                        <p style="font-size: 1.3rem">Do you already have Account? <a href="javascript:void(0)"
                                class="login" style="font-size: 1.3rem;text-decoration:none;font-weight:500">Click here
                                to
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
