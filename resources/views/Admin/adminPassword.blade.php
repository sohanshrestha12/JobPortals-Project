@extends('layouts.adminlayout')
@section('content')
<div class="main" style="overflow: hidden;">
    <div class="profile-right-box">
        <div class="row">
            <div class="col" style="padding: 20px 0 10px 50px;">
                <h1 class="header1" style="color: #ff6158;font-size:30px;">Change Password</h1>
            </div>
            <hr style="height: 3px;width:100%;color: black !important;">
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-6 bg-white shadow" style="padding: 3.5rem 5rem">
                <form action="{{ route('AdminChangePassword') }}" method="post">
                    @csrf
                    @if (session()->has('AdminPasswordsuccess'))
                        <div class="alert alert-success" role="alert"
                            style="display: flex;justify-content:center;align-items:center;margin-bottom:1rem">
                            <i class="uil uil-check-circle" style="font-size:18px"></i> &nbsp;
                             <p style="font-size: 14px;margin:0;">{{ session()->get('AdminPasswordsuccess') }}</p>
                        </div>
                    @endif
                    @if (session()->has('AdminPasswordfail'))
                        <div class="alert alert-danger" role="alert"
                            style="display: flex;justify-content:center;align-items:center;margin-bottom:10px">
                            <i class="uil uil-exclamation-circle" style="font-size:18px"></i> &nbsp;
                           <p style="font-size: 14px;margin:0">{{ session()->get('AdminPasswordfail') }}</p> 
                        </div>
                    @endif
                    <input type="hidden" value="{{Session::get('AloginId')}}" name="id">
                    <div class="company-form-grp" style="padding:1rem 0;">
                        <label for="CurrentPassword" style="font-weight:bold;margin-bottom:5px">Current Password</label>
                        <input type="password" name="CurrentPassword"
                            class="form-control @error('CurrentPassword') is-invalid @enderror">
                        @error('CurrentPassword')
                            <span class="invalid-feedback" style="font-size:13px">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="company-form-grp" style="padding:1rem 0;">
                        <label for="NewPassword" style="font-weight:bold;margin-bottom:5px">New Password</label>
                        <input type="password" name="NewPassword"
                            class="form-control @error('NewPassword') is-invalid @enderror">
                        @error('NewPassword')
                            <span class="invalid-feedback" style="font-size:13px">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="company-form-grp" style="padding:1rem 0;">
                        <label for="NewPassword_confirmation" style="font-weight:bold;margin-bottom:5px">Confirm New Password</label>
                        <input type="password" name="NewPassword_confirmation"
                            class="form-control @error('NewPassword_confirmation') is-invalid @enderror">
                        @error('NewPassword_confirmation')
                            <span class="invalid-feedback" style="font-size:13px">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="company-form-grp d-flex justify-content-end" style="padding:1rem 0 0 0;">
                        <button type="submit" style="padding:7px 15px;border-radius:5px;border:none;background-color:#ff6158;color:white;">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection