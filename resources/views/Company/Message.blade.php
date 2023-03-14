@extends('layouts.company')
@section('content')
    <div class="profile-right-box">
        <div class="row" style="padding: 0 8rem">
            <div class="col-md-12 bg-white shadow-sm" style="padding-bottom: 2rem;">
                <div class="d-flex align-items-center" style="padding: 1.3rem 1.2rem;gap:1rem;">
                    <i class="uil uil-envelope-times" style="font-size: 2.7rem;color:#ff6158"></i>
                    <h1 style="color:#ff6158;font-size:2.5rem;font-weight:bold;padding-top:0.7rem;">Message</h1>
                </div>
                <hr style="height: 3px;width:100%;color: black !important;margin: -1rem 0 1rem 0">

                <div class="JobsTable" style="padding: 0 2rem;color:black">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #e3e9ef;">
                                <tr >
                                    <th style="width:10%" scope="col">SN</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Applicants</th>
                                    <th scope="col">Expire date</th>
                                    <th scope="col">Job Type</th>
                                    <th scope="col">Status</th>
                                    <th style="width:40%" scope="col">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                        
                                @forelse($deletedJobs as $Jobs)
                                    <tr style="height:50px">
                                        <td>{{$i++}}</td>
                                        <td>{{$Jobs->Title}}</td>
                                        <td>{{count($Jobs->Jobseeker) . ' candidate'}}</td>
                                        <td>{{$Jobs->ExpiryDate}}</td>
                                        <td>{{$Jobs->Type}}</td>
                                        <td><span style="padding: 0.5rem 1rem;background:#EB5406;font-size:1.4rem; border-radius:15px;color:white">deleted</span></td>
                                        <td>{{$Jobs->message}}</td>
                                    </tr>
                                    @empty
                                    <tr style="height:60px;">
                                        <td colspan="7" style="text-align: center">
                                            No Message Available.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
