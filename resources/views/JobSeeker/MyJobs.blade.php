@extends('layouts.User')
@section('content')
    <div class="profile-right-box">
        <div class="row">
            <div class="col" style="padding: 0 8rem">
                <h1 class="header1" style="color: #ff6158;letter-spacing:1px">Applied Jobs</h1>
            </div>
            <hr style="height: 3px;width:90%;color: black !important;margin: 0.3rem 0 3rem 8rem;">
        </div>
        <div class="row" style="padding: 0 8rem;margin-top: 3rem">
            <div class="col-md-12 bg-white shadow-sm" style="padding: 2rem 0">
                <div class="JobsTable" style="padding: 0 2rem;color:black">
                    <h2 class="header2">Applied Jobs</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #e3e9ef;">
                                <tr>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Job Type</th>
                                    <th scope="col">Salary</th>
                                    <th scope="col">Expire date</th>
                                    <th scope="col">Job status</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($appliedJobs) <= 0)
                                    <tr style=" height:60px">
                                        <td colspan="6" style="text-align: center">No applied jobs yet.</td>
                                    </tr>
                                @else
                                    @foreach ($appliedJobs as $jobs)
                                        <tr style="height:60px;">
                                            <td>{{ $jobs->Title }}</td>
                                            <td>{{ $jobs->Type }}</td>
                                            <td>{{ $jobs->Salary }}</td>
                                            <td>{{ $jobs->ExpiryDate }}</td>
                                            @if ($jobs->status == 0)
                                                <td><span
                                                        style="padding:5px 12px;font-size:14px;background:#EB5406; border-radius:25px;color:white">expired</span>
                                                </td>
                                            @else
                                                <td><span
                                                        style="padding:5px 16px;font-size:14px;background:#00FA9A; border-radius:25px;color:white">active</span>
                                                </td>
                                            @endif

                                            @php
                                                $status = App\Models\UserJob::where([['user_id', Session::get('UloginId')], ['job_id', $jobs->id]])->first();
                                            @endphp
                                            @if ($jobs->isdeleted == 1)
                                                <td>
                                                    <div
                                                        style="display:flex;gap:1px;justify-content:center;align-items:center;">
                                                        <i class="uil uil-trash-alt" style="font-size:2.8rem;color:red"></i>
                                                        <p
                                                            style="margin:0;color:red;font-weight:700;letter-spacing:0.7px;font-size:1.6rem">
                                                            Deleted</p>
                                                    </div>
                                                </td>
                                            @elseif ($status->status == 0)
                                                <td>
                                                    <div
                                                        style="display:flex;gap:1px;justify-content:center;align-items:center;">
                                                        <i class="uil uil-times-circle"
                                                            style="font-size:2.8rem;color:#dc143c"></i>
                                                        <p
                                                            style="margin:0;color:#dc143c;font-weight:700;letter-spacing:0.7px;font-size:1.6rem">
                                                            Rejected</p>
                                                    </div>
                                                </td>
                                            @elseif($status->status == 1)
                                                <td>
                                                    <div style="display:flex;justify-content:center;align-items:center;">
                                                        <i class="uil uil-check-circle"
                                                            style="font-size:2.8rem;color:#2a9634"></i>
                                                        <p
                                                            style="margin:0;color:#2a9634;font-weight:700;letter-spacing:0.7px;font-size:1.6rem">
                                                            Accepted</p>
                                                    </div>
                                                </td>
                                            @elseif($status->status == 2)
                                                <td>
                                                    <div
                                                        style="display:flex;justify-content:center;align-items:center;gap:5px;">
                                                        <i class="uil uil-history"
                                                            style="font-size:2.3rem;color:#ff8c00"></i>
                                                        <p
                                                            style="margin:0;color:#ff8c00;font-weight:700;letter-spacing:0.7px;font-size:1.6rem">
                                                            Pending</p>
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
