@extends('layouts.company')
@section('content')
    <div class="profile-right-box">
        <div class="container" style="padding: 0 4rem">
            <div class="row">
                <h1 class="header1" style="color: #ff6158;letter-spacing:1px;padding-left:25px;">Profile</h1>
                <hr style="height: 3px;width:90%;color: black !important;margin: 0.7rem 0 5rem 2.5rem;">
                <div class="col-md-3 d-flex flex-column align-items-center mt" style="gap: 3rem">
                    <div class="company-logo shadow">
                        @if ($data->ProfileImg === 'defaultImg.png')
                            <img src="{{ asset('storage/default/defaultImg.png') }}" alt="404 not found">
                        @else
                            <img src="{{ asset('storage/Job Seeker Img/' . $data->ProfileImg) }}" alt="404 not found">
                        @endif
                    </div>
                    <div class="update-company-photo shadow">
                        <p class="paragraph" style="margin: 0;color:#ff6158">Update Profile Picture</p>
                        <hr style="height: 3px;width:90%;color: black !important;margin: 0.2rem 0 1rem 0;opacity:1;">
                        <form action="UpdateCompanyLogo" enctype="multipart/form-data" method="POST"
                            class="d-flex flex-column">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <input type="file" accept="image/x-png,image/gif,image/jpeg" name="logo" style="color:black;">
                            @error('logo')
                                <span style="font-size:1.3rem;color:red">{{ $message }}</span>
                            @enderror
                            <button class="align-self-end" type="submit">Update</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="company-update-information shadow">
                        <h2 class="header2">Update Your Company Information</h2>
                        <hr style="height: 3px;width:90%;color: black !important;margin: 0.2rem 0 1rem 0;opacity:1;">
                        <form action="UpdateCompanyInformation" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">

                            <div class="company-form-grp">
                                <label for="name">Company name</label>
                                <input type="text" name="name" value="{{ $data->name }}"
                                    class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-one-line">
                                <div class="company-form-grp" style="flex: 1;">
                                    <label for="city">City</label>
                                    <select class="category" name="city">
                                        <option @if ($data->city == 'Kathmandu') selected @endif value="Kathmandu">
                                            Kathmandu</option>
                                        <option @if ($data->city == 'Baktapur') selected @endif value="Baktapur">Baktapur
                                        </option>
                                        <option @if ($data->city == 'Lalitpur') selected @endif value="Lalitpur">Lalitpur
                                        </option>
                                        <option @if ($data->city == 'Pokhara') selected @endif value="Pokhara">Pokhara
                                        </option>
                                        <option @if ($data->city == 'Biratnagar') selected @endif value="Biratnagar">
                                            Biratnagar</option>
                                        <option @if ($data->city == 'Birgunj') selected @endif value="Birgunj">Birgunj
                                        </option>
                                        <option @if ($data->city == 'Chitwan') selected @endif value="Chitwan">Chitwan
                                        </option>
                                        <option @if ($data->city == 'Dharan') selected @endif value="Dharan">Dharan
                                        </option>
                                        <option @if ($data->city == 'Nepalgunj') selected @endif value="Nepalgunj">
                                            Nepalgunj</option>
                                        <option @if ($data->city == 'Outside Nepal') selected @endif value="Outside Nepal">
                                            Outside Nepal</option>
                                    </select>
                                </div>
                                <div class="company-form-grp" style="flex: 1">
                                    <label for="location">Location</label>
                                    <input type="text" name="location" value="{{ $data->location }}"
                                        class="form-control @error('location') is-invalid @enderror">
                                    @error('location')
                                        <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="company-form-grp" style="flex: 1">
                                <label for="phoneno">Phone No</label>
                                <input type="text" name="phoneno" value="{{ $data->phoneno }}"
                                    class="form-control @error('phoneno') is-invalid @enderror">
                                @error('phoneno')
                                    <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="company-form-grp">
                                <label for="description">Description </label>
                                <textarea name="description" rows="5">@if ($data->description == '') {{'Write about your company'}} @else {{ $data->description }} @endif</textarea>
                            </div>
                            <div class="company-form-grp d-flex justify-content-end">
                                <button type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <div class="company-information shadow">
                        <h2 class="header2" style="color:black">About Your Company</h2>
                        <hr style="height: 3px;width:90%;color: black !important;margin: 0.2rem 0 1rem 0;opacity:1;">
                        <div class="company-information-details">
                            <div class="mt-2 d-flex flex-column" style="padding-left: 2rem;flex-wrap:wrap">
                                <p class="paragraph"><b class="paragraph">Company Name:</b> {{ ' ' . $data->name }}</p>
                                <p class="paragraph"><b class="paragraph">Company Industry:</b>{{ ' ' . $data->category }}
                                </p>
                                <p class="paragraph"><b class="paragraph">City:</b>{{ ' ' . $data->city }}</p>
                                <p class="paragraph"><b class="paragraph">Location:</b> {{ ' ' . $data->location }}</p>
                                <p class="paragraph"><b class="paragraph">Phone No:</b> {{ ' ' . $data->phoneno }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
