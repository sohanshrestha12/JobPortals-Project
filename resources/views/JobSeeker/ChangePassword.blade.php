@extends('layouts.user')
@section('content')
    <div class="profile-right-box">
        <div class="row">
            <div class="col-md-4" style="padding: 0 8rem">
                <h1 class="header1" style="color: #ff6158;">Change Password</h1>
            </div>
            <hr style="height: 3px;width:90%;color: black !important;margin: 0.7rem 0 3rem 8rem;">
        </div>
        <div class="row">
            <div class="col-md-12" style="padding: 0 8rem">
                <p style="color: black;font-xize:1.4rem">Enter a new password for the user <span class="paragraph"
                        style="font-weight:bold">{{ $data->email }}</span></p>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-6 bg-white shadow" style="padding: 3.5rem 5rem">
                <form action="{{ route('ChangeUserPassword') }}" method="post">
                    @csrf
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert"
                            style="display: flex;justify-content:center;align-items:center;font-size:1.6rem;margin-bottom:1rem">
                            <i class="uil uil-check-circle" style="font-size:2rem"></i> &nbsp;
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if (session()->has('fail'))
                        <div class="alert alert-danger" role="alert"
                            style="display: flex;justify-content:center;align-items:center;font-size:1.6rem;margin-bottom:1rem">
                            <i class="uil uil-exclamation-circle" style="font-size:2rem"></i> &nbsp;
                            {{ session()->get('fail') }}
                        </div>
                    @endif
                    <input type="hidden" name="email" value="{{$data->email}}">
                    <div class="company-form-grp" style="padding:1rem 0;">
                        <label for="CurrentPassword">Current Password</label>
                        <input type="password" name="CurrentPassword"
                            class="form-control @error('CurrentPassword') is-invalid @enderror">
                        @error('CurrentPassword')
                            <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="company-form-grp" style="padding:1rem 0;">
                        <label for="NewPassword">New Password</label>
                        <input type="password" name="NewPassword"
                            class="form-control @error('NewPassword') is-invalid @enderror">
                        @error('NewPassword')
                            <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="company-form-grp" style="padding:1rem 0;">
                        <label for="NewPassword_confirmation">Confirm New Password</label>
                        <input type="password" name="NewPassword_confirmation"
                            class="form-control @error('NewPassword_confirmation') is-invalid @enderror">
                        @error('NewPassword_confirmation')
                            <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="company-form-grp d-flex justify-content-end" style="padding:1rem 0 0 0;">
                        <button type="submit">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
