@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-md-3 d-flex justify-content-center align-items-center UserCompanyProfileImglogo">
                @if ($Cid->ProfileImg == 'defaultImg.png')
                    <img src="../img/job-icon1.png" alt="404 image not found">
                @else
                    <img src="{{ asset('storage/Company Logo/' . $Cid->ProfileImg) }}" alt="404 image not found">
                @endif
            </div>
        </div>
        <div class="row mb-1">
            <div class="col text-center">
                <h1 class="header1" style="letter-spacing:3px;font-weight:500">{{ $Cid->name }}</h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col text-center">
                <p style="letter-spacing: 3px;"><i class="uil uil-map-marker"
                        style="font-size:1.6rem"></i>{{ $Cid->city . ', ' . $Cid->location . ' | ' }}<i
                        class="uil uil-phone" style="font-size:1.6rem"></i>{{ $Cid->phoneno }}</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 border border-dark-subtle border-start-0 border-end-0 p-4">
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <h2 class="header2" style="letter-spacing:2px">Type:</h2>
                        <p style="letter-spacing:2px">{{ $Cid->category }}</p>
                    </div>
                    <div class="col-md-4">
                        <h2 class="header2" style="letter-spacing:2px">Established In:</h2>
                        <p style="letter-spacing:2px">{{ Carbon\Carbon::parse($Cid->established)->format('Y') }}</p>
                    </div>
                    <div class="col-md-4">
                        <h2 class="header2" style="letter-spacing:2px">Official Website:</h2>
                        @if ($Cid->link == null || $Cid->link == ''  || $Cid->link == 'Link not available.')
                            <p style="letter-spacing:2px;">Link not available.</p>
                        @else
                            <a href="{{ $Cid->link }}" target="_blank"
                                style="font-size:16px; text-decoration:none;letter-spacing:2px">{{ $Cid->link }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-9 p-4">
                <h1 style="margin-bottom: 10px">Company description</h1>
                @if (empty($Cid->description) || $Cid->description == 'Write about your company.')
                    <p>The Company has not updated its company details. As more and more people rely on online searches to
                        learn about companies, it's essential to ensure that your online presence accurately represents your
                        brand and offerings.Updating your company's description can help potential customers understand what
                        you do and how you can help them. It can also improve your visibility in search engine results and
                        boost your credibility with online users. We encourage you to update your company details.</p>
                @else
                    <p>{{ $Cid->description }}</p>
                @endif
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-9 p-4">
                <h1 class="mb-5">Posted Jobs</h1>
                <div class="PostedJobs_wrapper">
                    @foreach ($postedJobs as $jobs)
                        <div>
                            <div class="box1 d-flex bg-white shadow-sm align-items-center justify-content-between"
                                style="border-radius: 60px;padding:5px 38px">
                                <div class="d-flex align-items-center">
                                    <div class="icon-sec d-flex align-items-center">
                                        @if ($jobs->company->ProfileImg == 'defaultImg.png')
                                            <img src="../img/job-icon1.png" alt=""
                                                style="object-fit: cover;border-radius:50%;width:70px;">
                                        @else
                                            <img src="{{ asset('storage/Company Logo/' . $jobs->company->ProfileImg) }}"
                                                alt=""
                                                style="height:90px;width:90px;border-radius:50%;object-fit: cover;">
                                        @endif
                                    </div>
                                    <div class="text-sec" style="margin-left:10px!important">
                                        <a style="text-decoration: none" href="{{ url('JobProfile/' . $jobs->id) }}">
                                            <h4 style="font-size:1.8rem;letter-spacing:1px;font-weight:bold">
                                                {{ ucfirst($jobs->Title) }}</h4>
                                        </a>
                                        <div class="Jobiconprofile">
                                            <p>{{ 'Rs. ' . $jobs->Salary }}</p>
                                        </div>
                                        <div>
                                            <p style="font-size:1.4rem;margin:0">{{ $jobs->Skills }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="UserCompany_view">
                                    <div>
                                        <p
                                            @if ($jobs->Type == 'Freelance') style="background-color: #28a745;border-radius:20px;padding:0.3rem 1.4rem;color:white;margin:0;" 
                                        @elseif($jobs->Type == 'Full Time') style="background-color: orange;border-radius:20px;padding:0.3rem 1.4rem;color:white;margin:0;" 
                                        @else style="background-color:#ff4d4d;border-radius:20px;padding:0.3rem 1.4rem;color:white;margin:0;" @endif>
                                            {{ $jobs->Type }}</p>
                                    </div>
                                    <a href="{{ url('JobProfile/' . $jobs->id) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row pagination" style="margin: 30px 0 70px 0">
            {{ $postedJobs->onEachSide(1)->links() }}
        </div>
    </div>
@endsection
