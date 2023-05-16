@extends('layouts.company')
@section('content')
    <div class="profile-right-box">
        <div class="row">
            <div class="col-md-4" style="padding: 0 8rem">
                <h1 class="header1" style="color: #ff6158;letter-spacing:2px;">Applicants</h1>
            </div>
            <hr style="height: 3px;width:90%;color: black !important;margin: 0.7rem 0 3rem 8rem;">
        </div>
        <div class="row">
            <div class="col-md-10 shadow-sm bg-white" style="margin: 0 8rem">
                <div class="row flex-column">
                    <div class="col border border-start-0 border-end-0" style="background: rgba(0,0,0,.03);">
                        <p style="color: #ff6158;margin:1rem 0.5rem;font-size:1.6rem">{{ $Jid->Title }}</p>
                    </div>
                    <div class="col border border-start-0 border-top-0 border-end-0 p-0"
                        style="background: rgba(0,0,0,.03);">
                        <div class="JobsTable" style="padding: 0;color:black">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" style="margin:0;">
                                    <thead style="background-color: #e3e9ef;">
                                        <tr>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Phoneno.</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($Jobuser) <= 0)
                                            <tr>
                                                <td colspan="8" style="height: 60px">No Applicants Yet.</td>
                                            </tr>
                                        @else
                                            @foreach ($Jobuser as $user)
                                                <tr>
                                                    <td>
                                                        @if ($user->ProfileImg == 'defaultImg.png')
                                                            <img style="width:100px;height:100px"
                                                                src="{{ asset('storage/default/' . $user->ProfileImg) }}"
                                                                alt="404 image not found">
                                                        @else
                                                            <img style="width:100px;height:100px;object-fit:cover;"
                                                                src="{{ asset('storage/JobSeekerImg/' . $user->ProfileImg) }}"
                                                                alt="404 image not found">
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->Gender }}</td>
                                                    <td>@if($user->Level == null) Fresher @else{{ $user->Level }}@endif</td>
                                                    <td>{{ $user->phoneno }}</td>
                                                    <td>
                                                        @php
                                                            $status = App\Models\UserJob::where([['user_id', $user->id], ['job_id', Session::get('ApplicantJobid')]])->first();
                                                        @endphp
                                                        @if ($status->status == 1)
                                                            <div
                                                                style="transform:rotate(-8deg);border:3px solid #2a9634;padding:3px 0;display:flex;justify-content:center;align-items:center;">
                                                                <p
                                                                    style="margin:0;color:#2a9634;font-weight:700;letter-spacing:2px;font-size:1.6rem">
                                                                    Accepted</p>
                                                            </div>
                                                        @elseif($status->status == 0)
                                                            <div
                                                                style="transform:rotate(-8deg);border:3px solid #dc143c;padding:3px 0;display:flex;justify-content:center;align-items:center;">
                                                                <p
                                                                    style="margin:0;color:#dc143c;font-weight:700;letter-spacing:2px;font-size:1.6rem">
                                                                    Rejected</p>
                                                            </div>
                                                        @else
                                                            <div
                                                                style="border:3px solid #ff8c00;padding:3px 0;display:flex;justify-content:center;align-items:center;">
                                                                <p
                                                                    style="margin:0;color:#ff8c00;font-weight:700;letter-spacing:2px;font-size:1.6rem">
                                                                    Pending</p>
                                                            </div>
                                                        @endif
                                                    </td>

                                                    <td><a style="font-size:1.4rem"
                                                            href="{{ url('ApplicantsDetails/' . $user->id) }}"
                                                            class="btn btn-primary">View details</a></td>
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
        </div>
    </div>
@endsection
