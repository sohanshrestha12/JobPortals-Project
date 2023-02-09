@extends('layouts.company')
@section('content')
    <div class="profile-right-box">
        <div class="row">
            <div class="col-md-4" style="padding: 0 8rem">
                <h1 class="header1" style="color: #ff6158;">Post a Job</h1>
            </div>
            <hr style="height: 3px;width:90%;color: black !important;margin: 0.7rem 0 3rem 8rem;">
        </div>
        <div class="row" style="padding: 0 8rem">
            <div class="col-md-8 shadow rounded" style="background-color: rgb(252, 252, 252);padding:1rem 0.5rem">
                <form action="{{ route('PostnewJob') }}" method="post">
                    @csrf
                    @if (session()->has('JobPostedSuccessfully'))
                        <div class="alert alert-success" role="alert"
                            style="display: flex;justify-content:center;align-items:center;font-size:1.6rem;margin-bottom:1rem">
                            <i class="uil uil-check-circle" style="font-size:2rem"></i> &nbsp;
                            {{ session()->get('JobPostedSuccessfully') }}
                        </div>
                    @endif
                    <input type="hidden" name="companyId" value="{{ Session::get('CloginId') }}">
                    <div class="company-form-grp">
                        <label for="jobTitle">Job Title</label>
                        <input type="text" class="form-control @error('jobTitle') is-invalid @enderror" name="jobTitle" value="{{old('jobTitle')}}">
                        @error('jobTitle')
                            <span class="invalid-feedback"
                                style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-one-line">
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="jobCategory">Job Category</label>
                            <select class="category form-select @error('jobCategory') is-invalid @enderror"
                                name="jobCategory">
                                <option hidden disabled selected value> Choose Job Category</option>
                                <option @if(old('jobCategory') == 'Accounting & Consulting') selected @endif value="Accounting & Consulting">Accounting and Consulting</option>
                                <option @if(old('jobCategory') == 'Admin Support') selected @endif value="Admin Support">Admin Support</option>
                                <option @if(old('jobCategory') == 'Customer Service') selected @endif value="Customer Service">Customer Service</option>
                                <option @if(old('jobCategory') == 'Data Science & Analysis') selected @endif value="Data Science & Analysis">Data Science and Analysis</option>
                                <option @if(old('jobCategory') == 'Design & Creative') selected @endif value="Design & Creative">Design and Creative</option>
                                <option @if(old('jobCategory') == 'Engineering & Architecture') selected @endif value="Engineering & Architecture">Engineering and Architecture</option>
                                <option @if(old('jobCategory') == 'IT & Networking') selected @endif value="IT & Networking">IT & Networking</option>
                                <option @if(old('jobCategory') == 'Legal') selected @endif value="Legal">Legal</option>
                                <option @if(old('jobCategory') == 'Sales & Marketing') selected @endif value="Sales & Marketing">Sales and Marketing</option>
                                <option @if(old('jobCategory') == 'Translation') selected @endif value="Translation">Translation</option>
                                <option @if(old('jobCategory') == 'Web, Mobile, & Software Development') selected @endif value="Web, Mobile, & Software Development">Web, Mobile, & Software Development
                                </option>
                                <option @if(old('jobCategory') == 'Writing') selected @endif value="Writing">Writing</option>
                            </select>
                            @error('jobCategory')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="company-form-grp" style="flex: 1">
                            <label for="expiredDate">Closing Date</label>
                            <input type="date" class="form-control @error('expiredDate') is-invalid @enderror"
                                name="expiredDate" class="form-control" value="{{old('expiredDate')}}">
                            @error('expiredDate')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-one-line">
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="jobDescription">Job Description</label>
                            <textarea name="jobDescription" class="form-control @error('jobDescription') is-invalid @enderror"
                                style="resize: vertical;">{{old('jobDescription')}}</textarea>
                            @error('jobDescription')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="jobType">Job Type</label>
                            <select class="category form-select @error('jobType') is-invalid @enderror" name="jobType">
                                <option hidden disabled selected value>Choose Job Type</option>
                                <option @if(old('jobType') == 'Full Time') selected @endif value="Full Time">Full Time</option>
                                <option @if(old('jobType') == 'Part Time') selected @endif value="Part Time">Part Time</option>
                                <option @if(old('jobType') == 'Freelance') selected @endif value="Freelance">Freelance</option>
                            </select>
                            @error('jobType')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-one-line">
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="requiredSkills">Required Skills</label>
                            <textarea name="requiredSkills" style="resize: vertical;"
                                class="form-control @error('requiredSkills') is-invalid @enderror">{{old('requiredSkills')}}</textarea>
                            @error('requiredSkills')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="experience">Experience</label>
                            <select class="form-select category @error('experience') is-invalid @enderror"
                                name="experience">
                                <option hidden disabled selected value>Job Experience</option>
                                <option @if(old('experience') == 'Expert') selected @endif value="Expert">Expert</option>
                                <option @if(old('experience') == '2 Years') selected @endif value="2 Years">2 Years</option>
                                <option @if(old('experience') == '3 Years') selected @endif value="3 Years">3 Years</option>
                                <option @if(old('experience') == '4 Years') selected @endif value="4 Years">4 Years</option>
                                <option @if(old('experience') == '5 Years') selected @endif value="5 Years">5 Years</option>
                            </select>
                            @error('experience')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="company-form-grp">
                        <label for="salary">Salary</label>
                        <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror" value="{{old('salary')}}">
                        @error('salary')
                            <span class="invalid-feedback"
                                style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="company-form-grp" style="display: flex;justify-content:flex-end">
                        <button type="submit">Add new Job</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
