@extends('layouts.adminlayout')
@section('content')
    <!-- main -->
    <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <div class="card-name">Total Jobs</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <div class="card-name">Total Users</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <div class="card-name">Total Company</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
            </div>
                <div class="charts">
                    <div class="chart">
                        <h2>Earnings (past 12 months</h2>
                        <canvas id="linechart"></canvas>
                    </div>
                    <div class="chart" id="doughnut-chart">
                        <h2>Employees</h2>
                        <canvas id="doughnut"></canvas>
                    </div>
                </div>
            </div>

@endsection