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
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Jobuser as $user)
                                            <tr>
                                                {{-- {{ dd($user->ProfileImg) }} --}}
                                                <td>
                                                    @if ($user->ProfileImg == 'defaultImg.png')
                                                        <img  style="width:100px;" src="{{ asset('storage/default/' . $user->ProfileImg) }}"
                                                            alt="404 image not found">
                                                    @else
                                                        <img style="width:100px;" src="{{ asset('storage/Company Logo/' . $user->ProfileImg) }}"
                                                            alt="404 image not found">
                                                    @endif
                                                </td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{$user->Gender}}</td>
                                                <td>{{$user->Level}}</td>
                                                <td>{{$user->phoneno}}</td>
                                                <td><a style="font-size:1.4rem" href="{{url('ApplicantsDetails/' . $user->id)}}" class="btn btn-primary">View details</a></td>
                                            </tr>
                                        @endforeach
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
