@extends('layouts.adminlayout')
@section('content')
    <div class="main">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Location</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Official link</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i =1; @endphp
                @foreach ($Verifycompany as $com)
                    <tr>
                        <td scope="row">{{ $i++ }}</td>
                        <td>
                            @if ($com->ProfileImg === 'defaultImg.png')
                                <img width="100px" src="{{ asset('storage/default/defaultImg.png') }}" alt="404 not found">
                            @else
                                <img width="100px" src="{{ asset('storage/Company Logo/' . $com->ProfileImg) }}"
                                    alt="404 not found">
                            @endif
                        </td>
                        <td>{{ $com->name }}</td>
                        <td>{{ $com->category }}</td>
                        <td>{{ $com->city . ', ' . $com->location }}</td>
                        <td>{{ $com->phoneno }}</td>
                        <td>{{ $com->link }}</td>
                        <td>
                            <a href="{{ url('verify/' . $com->id) }}" class="btn btn-danger">
                                Pending</a>
                        </td>
                        <td>okay</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
