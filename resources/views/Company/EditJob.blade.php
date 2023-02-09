@extends('layouts.company')
@section('content')
    <div class="profile-right-box">
        <div class="row">
            <div class="col-md-4" style="padding: 0 8rem">
                <h1 class="header1" style="color: #ff6158;">Edit a Job</h1>
                @if ($check == null)
                    <p class="paragraph">Id: {{ $id }}</p>
                @else
                    <p class="paragraph">Id: {{ $id . ' ' . '(' . $check .')' }}</p>
                @endif
            </div>
            <hr style="height: 3px;width:90%;color: black !important;margin: 0.7rem 0 3rem 8rem;">
        </div>
        <div class="row" style="padding: 0 8rem">
            <div class="col-md-8 shadow rounded" style="background-color: rgb(252, 252, 252);padding:1rem 0.5rem">
                <form action="{{ route('JobEdit') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{$id}}" name="Jobid">
                    <div class="company-form-grp">
                        <label for="jobTitle">Job Title</label>
                        <input type="text" class="form-control @error('jobTitle') is-invalid @enderror" name="jobTitle"
                            value="{{ $value->Title }}">
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
                                <option @if ($value->Category == 'Accounting & Consulting') selected @endif value="Accounting & Consulting">
                                    Accounting and Consulting</option>
                                <option @if ($value->Category == 'Admin Support') selected @endif value="Admin Support">Admin
                                    Support</option>
                                <option @if ($value->Category == 'Admin Support') selected @endif value="Admin Support">Customer
                                    Service</option>
                                <option @if ($value->Category == 'Data Science & Analysis') selected @endif value="Data Science & Analysis">
                                    Data Science and Analysis</option>
                                <option @if ($value->Category == 'Design & Creative') selected @endif value="Design & Creative">Design
                                    and Creative</option>
                                <option @if ($value->Category == 'Engineering & Architecture') selected @endif
                                    value="Engineering & Architecture">Engineering and Architecture</option>
                                <option @if ($value->Category == 'IT & Networking') selected @endif value="IT & Networking">IT &
                                    Networking</option>
                                <option @if ($value->Category == 'Legal') selected @endif value="Legal">Legal</option>
                                <option @if ($value->Category == 'Sales & Marketing') selected @endif value="Sales & Marketing">Sales
                                    and Marketing</option>
                                <option @if ($value->Category == 'Translation') selected @endif value="Translation">Translation
                                </option>
                                <option @if ($value->Category == 'Web, Mobile, & Software Development') selected @endif
                                    value="Web, Mobile, & Software Development">Web, Mobile, & Software Development
                                </option>
                                <option @if ($value->Category == 'Writing') selected @endif value="Writing">Writing</option>
                            </select>
                            @error('jobCategory')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="company-form-grp" style="flex: 1">
                            <label for="expiredDate">Closing Date</label>
                            <input type="date" class="form-control @error('expiredDate') is-invalid @enderror"
                                name="expiredDate" class="form-control" value="{{ $value->ExpiryDate }}">
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
                                style="resize: vertical;">{{ $value->Description }}</textarea>
                            @error('jobDescription')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="jobType">Job Type</label>
                            <select class="category form-select @error('jobType') is-invalid @enderror" name="jobType">
                                <option @if ($value->Type == 'Full Time') selected @endif value="Full Time">Full Time
                                </option>
                                <option @if ($value->Type == 'Part Time') selected @endif value="Part Time">Part Time
                                </option>
                                <option @if ($value->Type == 'Freelance') selected @endif value="Freelance"
                                    value="Freelance">Freelance</option>
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
                                class="form-control @error('requiredSkills') is-invalid @enderror">{{ $value->Skills }}</textarea>
                            @error('requiredSkills')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="experience">Experience</label>
                            <select class="form-select category @error('experience') is-invalid @enderror"
                                name="experience">
                                <option @if ($value->experience == 'Expert') selected @endif value="Expert">Expert</option>
                                <option @if ($value->experience == '2 Years') selected @endif value="2 Years">2 Years</option>
                                <option @if ($value->experience == '3 Years') selected @endif value="3 Years">3 Years</option>
                                <option @if ($value->experience == '4 Years') selected @endif value="4 Years">4 Years</option>
                                <option @if ($value->experience == '5 Years') selected @endif value="5 Years">5 Years</option>
                            </select>
                            @error('experience')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-one-line">
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="salary">Salary</label>
                            <input type="text" name="salary"
                                class="form-control @error('salary') is-invalid @enderror" value="{{ $value->Salary }}">
                            @error('salary')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="company-form-grp" style="flex: 1;">
                            <label for="status">Status</label>
                            <select class="category form-select @error('status') is-invalid @enderror" name="status">
                                <option @if ($value->status == '1') selected @endif value="1">Active</option>
                                <option @if ($value->status == '0') selected @endif value="0">Expired</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback"
                                    style="font-size:1.3rem;padding-left:1rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="company-form-grp"
                        style="display: flex;justify-content:flex-end;gap:1.5rem;align-items:center;margin-top:1rem">
                        <a href="{{ route('ListofAllJobs') }}"
                            style="text-decoration: none;background-color:#ff6158;padding:0.7rem 1.1rem;font-size:1.4rem;height:36px;color:white;border-radius:5px">Cancel</a>
                        <button type="submit" style="margin: 0">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
