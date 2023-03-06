@extends('layouts.adminlayout')
@section('content')
    <!-- main -->
    <div class="main">
        <div class="cards">

            <div class="h d-flex align-items-center justify-content-between"
                style="border-radius: 10px;box-shadow:0 7px 25px 0 rgb(203, 198, 198);background: #fff;">
                <div class="card-content" style="padding:1rem 3rem;text-align:center;">
                    <div class="number">{{ count($Jobs) }}</div>
                    <div class="card-name">Total Jobs</div>
                </div>
                <div class="icon-box" style="padding:1rem 2rem">
                    <i class="fas fa-user-graduate"></i>
                </div>
            </div>
            <div class="h d-flex align-items-center justify-content-between"
                style="border-radius: 10px;box-shadow:0 7px 25px 0 rgb(203, 198, 198);background: #fff;">
                <div class="card-content" style="padding:1rem 3rem;text-align:center;">
                    <div class="number">{{ count($Jobseeker) }}</div>
                    <div class="card-name">Total Users</div>
                </div>
                <div class="icon-box" style="padding:1rem 2rem">
                    <i class="fas fa-user-plus"></i>
                </div>
            </div>
            <div class="h d-flex align-items-center justify-content-between"
                style="border-radius: 10px;box-shadow:0 7px 25px 0 rgb(203, 198, 198);background: #fff;">
                <div class="card-content" style="padding:2rem 3rem;text-align:center;">
                    <div class="number">{{ count($Company) }}</div>
                    <div class="card-name">Total Company</div>
                </div>
                <div class="icon-box" style="padding:1rem 2rem">
                    <i class="fas fa-building"></i>
                </div>
            </div>
        </div>




        {{-- chart --}}

        @php
            $jan = DB::table('jobs')
                ->whereMonth('created_at', 1)
                ->count();
            $feb = DB::table('jobs')
                ->whereMonth('created_at', 2)
                ->count();
            $mar = DB::table('jobs')
                ->whereMonth('created_at', 3)
                ->count();
            $apr = DB::table('jobs')
                ->whereMonth('created_at', 4)
                ->count();
            $may = DB::table('jobs')
                ->whereMonth('created_at', 5)
                ->count();
            $jun = DB::table('jobs')
                ->whereMonth('created_at', 6)
                ->count();
            $jul = DB::table('jobs')
                ->whereMonth('created_at', 7)
                ->count();
            $aug = DB::table('jobs')
                ->whereMonth('created_at', 8)
                ->count();
            $sep = DB::table('jobs')
                ->whereMonth('created_at', 9)
                ->count();
            $oct = DB::table('jobs')
                ->whereMonth('created_at', 10)
                ->count();
            $nov = DB::table('jobs')
                ->whereMonth('created_at', 11)
                ->count();
            $dec = DB::table('jobs')
                ->whereMonth('created_at', 12)
                ->count();
            $company = App\Models\User::where('role', 'company')->count();
            $user = App\Models\User::where('role', 'user')->count();
            $jobs = App\Models\Job::all()->count();
            $recentjobs = App\Models\Job::latest()
                ->take(10)
                ->get();
        @endphp
        <div class="row justify-content-between p-5">
            <div class="col-md-6">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="col-md-5 d-flex justify-content-center">
                <div>
                    <canvas id="myPie"></canvas>
                </div>
            </div>
        </div>

        {{-- end chart  --}}

        @php $i=1; @endphp
        <div class="container p-5">
            <div class="row">
                <div class="col bg-white shadow-sm rounded p-3">
                    <h2 style="font-weight:700; color: var(--purple)">Recent Jobs</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Salary</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recentjobs as $item)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $item->Title }}</td>
                                    <td>{{ $item->Category }}</td>
                                    <td>{{ $item->Salary }}</td>                           
                                    @if ($item->status == 0)
                                        <td><span
                                                style="padding: 0.2rem 1rem;background:#EB5406; border-radius:10px;color:white">expired</span>
                                        </td>
                                    @else
                                        <td><span
                                                style="padding: 0.2rem 1rem;background:#00FA9A; border-radius:10px;color:white">active</span>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- chart scripts  --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Job',
                    data: [<?= $jan ?>, <?= $feb ?>, <?= $mar ?>, <?= $apr ?>, <?= $may ?>, <?= $jun ?>,
                        <?= $jul ?>, <?= $aug ?>, <?= $sep ?>, <?= $oct ?>, <?= $nov ?>, <?= $dec ?>
                    ],
                    backgroundColor: [
                        '#EC6B56'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // piechart 
        const ctx1 = document.getElementById('myPie').getContext('2d');
        const myPie = new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['Company', 'User', 'Jobs'],
                datasets: [{
                    label: '',
                    data: [{{ $company }}, {{ $user }}, {{ $jobs }}],
                    backgroundColor: [
                        '#EC6B56',
                        'yellow',
                        '#47B39C'
                    ],
                }]
            },
            options: {
                Response: true,
            }
        });
    </script>
@endsection
