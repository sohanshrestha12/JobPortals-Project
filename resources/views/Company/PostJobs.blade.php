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
                    <div class="company-form-grp">
                        <label for="jobTitle">Job Title</label>
                        <input type="text" class="form-control" name="jobTitle">
                    </div>
                    <div class="form-one-line">
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="jobCategory">Job Category</label>
                            <select class="category" name="jobCategory">
                                <option hidden disabled selected value> Choose Job Category</option>
                                <option value="Accounting and Consulting">Accounting and Consulting</option>
                                <option value="Admin Support">Admin Support</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Data Science and Analysis">Data Science and Analysis</option>
                                <option value="Design and Creative">Design and Creative</option>
                                <option value="Engineering and Architecture">Engineering and Architecture</option>
                                <option value="IT & Networking">IT & Networking</option>
                                <option value="Legal">Legal</option>
                                <option value="Sales and Marketing">Sales and Marketing</option>
                                <option value="Translation">Translation</option>
                                <option value="Web, Mobile, & Software Development">Web, Mobile, & Software Development
                                </option>
                                <option value="Writing">Writing</option>
                            </select>
                        </div>
                        <div class="company-form-grp" style="flex: 1">
                            <label for="expiredDate">Deadline</label>
                            <input type="date" name="expiredDate" class="form-control">
                        </div>
                    </div>
                    <div class="form-one-line">
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="jobDescription">Job Description</label>
                            <textarea name="jobDescription" style="resize: vertical;"></textarea>
                        </div>
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="jobType">Job Type</label>
                            <select class="category" name="jobType">
                                <option hidden disabled selected value>Choose Job Type</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Freelance">Part Time</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-one-line">
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="requiredSkills">Required Skills</label>
                            <textarea name="requiredSkills" style="resize: vertical;"></textarea>
                        </div>
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="experience">Experience</label>
                            <select class="category" name="experience">
                                <option hidden disabled selected value>Job Experience</option>
                                <option value="Expert">Expert</option>
                                <option value="2 Years">2 Years</option>
                                <option value="3 Years">3 Years</option>
                                <option value="4 Years">4 Years</option>
                                <option value="5 Years">5 Years</option>
                            </select>
                        </div>
                    </div>
                    @error('experience')
                        <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                    @enderror
                    <div class="company-form-grp">
                        <label for="salary">Salary</label>
                        <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror">
                        @error('salary')
                            <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
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
