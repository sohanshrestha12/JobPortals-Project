@extends('layouts.company')
@section('content')
    <div class="profile-right-box">
        <div class="row" style="padding: 0 8rem">
            <div class="col-md-12 bg-white shadow-sm" style="padding-bottom: 2rem;">
                <div class="d-flex align-items-center" style="padding: 1.3rem 1.2rem;gap:1rem;">
                    <i class="uil uil-sort-amount-down" style="font-size: 2.7rem;color:#ff6158"></i>
                    <h1 style="color:#ff6158;font-size:2.5rem;font-weight:bold;padding-top:0.7rem;">List of Jobs</h1>
                </div>
                <hr style="height: 3px;width:100%;color: black !important;margin: -1rem 0 1rem 0">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert"
                        style="display: flex;justify-content:center;font-size:1.6rem;">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="JobsTable" style="padding: 0 2rem;color:black">
                    <h2 class="header2">Current Jobs</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #e3e9ef;">
                                <tr>
                                    <th scope="col">Posted date</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Applicants</th>
                                    <th scope="col">Expire date</th>
                                    <th scope="col">Job Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($Jobinfo) <= 0 || count($Jobactive) <=0)
                                    <td colspan="7" style="text-align: center;vertical-align:middle;height:6rem">
                                        Currently no active Jobs Listed.</td>
                                @else
                                    @foreach ($Jobinfo as $item)
                                        @if (Session::get('CloginId') == $item->company->id)
                                            @if ($item->status == 1)
                                                <tr>
                                                    <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                                    <td>{{ $item->Title }}</td>
                                                    <td></td>
                                                    <td>{{ $item->ExpiryDate }}</td>
                                                    <td>{{ $item->Type }}</td>
                                                    <td>
                                                        @if ($item->status == 1)
                                                            {{ 'Active' }}
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <a href="{{ url('editJobs') . '/' . $item->id }}" title="Edit"><i
                                                                class="uil uil-edit" style="color:#287bff;"></i></a>
                                                        <a href="{{ url('deletejobs') . '/' . $item->id }}"><i
                                                                class="uil uil-trash-alt"
                                                                style="margin-left:0.8rem;color:red" title="Delete"></i></a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 0 8rem;margin-top: 3rem">
            <div class="col-md-12 bg-white shadow-sm" style="padding: 2rem 0">
                <div class="JobsTable" style="padding: 0 2rem;color:black">
                    <h2 class="header2">Expired Jobs</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #e3e9ef;">
                                <tr>
                                    <th scope="col">Posted date</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Applicants</th>
                                    <th scope="col">Job Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($Jobinfo) <= 0 || count($Jobexpired) <=0)
                                    <td colspan="7" style="text-align: center;vertical-align:middle;height:6rem">
                                        Currently no expired Jobs Listed.</td>
                                @else
                                    @foreach ($Jobinfo as $item)
                                        @if (Session::get('CloginId') == $item->company->id)
                                            @if ($item->status == 0)
                                                <tr>
                                                    <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                                    <td>{{ $item->Title }}</td>
                                                    <td></td>
                                                    <td>{{ $item->Type }}</td>
                                                    <td>

                                                        @if ($item->status == 0)
                                                            {{ 'Expired' }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('editJobs') . '/' . $item->id }}" title="Edit"><i
                                                                class="uil uil-edit" style="color:#287bff;"></i></a>
                                                        <a href="{{ url('deletejobs') . '/' . $item->id }}"><i
                                                                class="uil uil-trash-alt"
                                                                style="margin-left:0.8rem;color:red" title="Delete"></i></a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endif
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
