@extends('layouts.adminlayout')
@section('content')
    <!-- main -->
    <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">{{count($Jobseeker)}}</div>
                        <div class="card-name">Total Jobs</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">{{count($Jobseeker)}}</div>
                        <div class="card-name">Total Users</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">{{count($Company)}}</div>
                        <div class="card-name">Total Company</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
            </div>

@endsection