@extends('layouts.company')
@section('content')
<div class="profile-right-box">
    <div class="container p-5">
        <div class="row" >
            <h1 class="header1" style="color: #ff6158;letter-spacing:1px;">Profile</h1>
            <hr style="height: 3px;width:90%;color: black !important;margin: 0.7rem 0 5rem 0rem;" >
            <div class="col-md-3 d-flex flex-column align-items-center mt" style="gap: 3rem">
                <div class="company-logo shadow">
                    <img src="{{asset('storage/img/th.jpg')}}" alt="404 not found">
                </div>
                <div class="update-company-photo shadow">
                    <p class="paragraph" style="margin: 0;color:#ff6158">Update Photo</p>
                    <hr style="height: 3px;width:90%;color: black !important;margin: 0.2rem 0 1rem 0;opacity:1;">
                    <form action="" enctype="multipart/form-data" class="d-flex flex-column">
                        <input type="file" accept="image/x-png,image/gif,image/jpeg">
                        <button class="align-self-end" type="submit">Update</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <div class="company-update-information shadow">
                    <h2 class="header2">Update Your Company Information</h2>
                    <hr style="height: 3px;width:90%;color: black !important;margin: 0.2rem 0 1rem 0;opacity:1;">
                    <form action="">
                        <div class="company-form-grp">
                            <label for="name">Company name</label>
                            <input type="text" name="name">
                        </div>
                        <div class="form-one-line">
                            <div class="company-form-grp" style="flex: 1;">
                                <label for="city">City</label>
                                <select id="category">
                                    <option hidden disabled selected value> Choose Company City</option>
                                    <option value="Kathmandu">Kathmandu</option>
                                    <option value="Baktapur">Baktapur</option>
                                    <option value="Lalitpur">Lalitpur</option>
                                    <option value="Pokhara">Pokhara</option>
                                    <option value="Biratnagar">Biratnagar</option>
                                    <option value="Birgunj">Birgunj</option>
                                    <option value="Chitwan">Chitwan</option>
                                    <option value="Dharan">Dharan</option>
                                    <option value="Nepalgunj">Nepalgunj</option>
                                    <option value="Outside Nepal">Outside Nepal</option>
                                </select>
                            </div>
                            <div class="company-form-grp" style="flex: 1">
                                <label for="location">Location</label>
                                <input type="text" name="location" >
                            </div>
                        </div>
                        <div class="company-form-grp" style="flex: 1">
                            <label for="phoneno">Phone No</label>
                            <input type="text" name="phoneno" >
                        </div>
                        <div class="company-form-grp">
                            <label for="description">Description </label>
                            <textarea name="description" rows="5"></textarea>
                        </div>
                        <div class="company-form-grp d-flex justify-content-end">
                            <button type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center ">
                <div class="company-information shadow">
                    <h2 class="header2">About Your Company</h2>
                    <hr style="height: 3px;width:90%;color: black !important;margin: 0.2rem 0 1rem 0;opacity:1;">
                    <div class="company-information-details">
                        <div class="mt-2">
                            <p class="paragraph"><b class="paragraph">Company Name:</b> Appledotcom</p>
                            <p class="paragraph"><b class="paragraph">Address:</b> Appledotcom</p>
                            <p class="paragraph"><b class="paragraph">City:</b> Appledotcom</p>
                            <p class="paragraph"><b class="paragraph">Location:</b> Appledotcom</p>
                            <p class="paragraph"><b class="paragraph">Phone No:</b> Appledotcom</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
