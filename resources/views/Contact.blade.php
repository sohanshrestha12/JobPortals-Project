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
                        @if (session()->has('Contactsuccess'))
                            <div class="alert alert-success" role="alert"
                                style="display: flex;justify-content:center;font-size:1.6rem;align-items:center">
                                <i class="uil uil-check-circle" style="font-size:2rem"></i> &nbsp;
                                {{ session()->get('Contactsuccess') }}
                            </div>
                        @endif
                        <div class="heading">
                            <h2>Need Help?</h2>
                            <p>Reach out to the world's most reliable IT services.</p>
                        </div>
                        <form action="{{ route('ContactAdmin') }}" method="post" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control @error('name') is-invalid @enderror" id="name"
                                            name="name" placeholder="Name" type="text" style="font-size:2rem"
                                            value="{{ old('name') }}">
                                        <span class="alert-error"></span>
                                        @error('name')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem; margin: 0.1rem 0 1rem 0">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control @error('email') is-invalid @enderror"
                                            id="name"id="email" name="email" placeholder="Email*" type="email"
                                            style="font-size:2rem" value="{{ old('email') }}">
                                        <span class="alert-error"></span>
                                        @error('email')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem; margin: 0.1rem 0 1rem 0">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control @error('phone') is-invalid @enderror" id="name"
                                            id="phone" name="phone" placeholder="Phone" type="text"
                                            style="font-size:2rem" value="{{ old('phone') }}">
                                        <span class="alert-error"></span>
                                        @error('phone')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem; margin: 0.1rem 0 1rem 0">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control @error('comments') is-invalid @enderror" id="comments" rows="5"
                                            name="comments"style="font-size:2rem" placeholder="Please describe what you need.">{{ old('comments') }}</textarea>
                                        @error('comments')
                                            <span class="invalid-feedback"
                                                style="font-size:1.3rem;padding-left:1rem; margin: 0.1rem 0 1rem 0">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" style="font-size:2rem;padding:0.8rem 2rem;margin-top:1rem;"
                                        id="submit">Submit</button>
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
