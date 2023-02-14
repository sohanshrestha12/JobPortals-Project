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
                <h1>oaspd</h1>
            </div>
        </div>
    </div>
@endsection
