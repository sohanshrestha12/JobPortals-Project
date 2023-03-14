@extends('layouts.adminlayout')
@section('content')

    @if (Session::has('AdmindeletejobsSuccess'))
        @php
            toastr()->success('Job has been successfully deleted!', ['closeButton' => true, 'closeOnHover' => false, 'timeOut' => 9999]);
        @endphp
    @endif

    <!-- Job Delete Modal -->
    <div class="modal fade" id="AdmindeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('Admindeletejobs') }}" method="post">
                    @csrf
                    <div class="modal-header jobmodal">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Job Delete</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body jobmodal">
                        <input type="hidden" name="AdminJobid" id="AdminJobid">
                        <h5>Are you sure you want to delete this Job?</h5>
                        <h5 style="margin-top:10px;font-size:14px;font-weight:bold;">Message:</h5>
                        <textarea name="reason" cols="30" rows="7"
                            style="resize: vertical;width:100%; padding:10px 10px;outline:none;">We request the removal of an inappropriate job posting on your online job portal. The content of the job advertisement violates your terms of service and is not suitable for the professional atmosphere of the platform.</textarea>
                    </div>
                    <div class="modal-footer jobmodal">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Yes Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Job Delete Permanently Modal -->
    <div class="modal fade" id="AdmindeletePermanentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('AdmindeletejobsPermanently') }}" method="post">
                    @csrf
                    <div class="modal-header jobmodal">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Job Delete</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body jobmodal">
                        <input type="hidden" name="PermanentAdminJobid" id="PermanentAdminJobid">
                        <h5>Are you sure you want to delete this Job Permanently?</h5>
                    </div>
                    <div class="modal-footer jobmodal">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Yes Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="main">
        <h1 class="text-center pt-4 mb-3" style="color:#6f42c1">All Jobs</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Type</th>
                    <th scope="col">Posted by</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if (count($AllJobs) <= 0)
                    <tr>
                        <td colspan="8" style="text-align:center;height:50px;">No Jobs Available.</td>
                    </tr>
                @else
                    @foreach ($AllJobs as $job => $value)
                        <tr>
                            <th scope="row">{{ $AllJobs->firstitem() + $job }}</th>
                            <td>{{ $value->Title }}</td>
                            <td>{{ $value->Category }}</td>
                            <td>{{ $value->Salary }}</td>
                            <td>{{ $value->Type }}</td>
                            <td>{{ $value->company->name }}</td>
                            @if ($value->status == 0)
                                <td><span
                                        style="padding: 0.2rem 1rem;background:#EB5406; border-radius:10px;color:white">expired</span>
                                </td>
                            @else
                                <td><span
                                        style="padding: 0.2rem 1rem;background:#00FA9A; border-radius:10px;color:white">active</span>
                                </td>
                            @endif
                            <td>
                                <a href="javscript:void(0)" data-value="{{ $value->id }}" class="AdminDeleteJobs"><i
                                        class="uil uil-trash-alt" style="margin-left:0.8rem;color:red;font-size:1.4rem;"
                                        title="Delete"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="row pagination" style="margin: 30px 0 70px 0">
            {{ $AllJobs->onEachSide(1)->links() }}
        </div>

        {{-- deleted Jobs --}}
        <h2 style="color:#dc3545;margin-top:20px;text-align:center;margin-bottom:30px;">Deleted Jobs</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Type</th>
                    <th scope="col">Posted by</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if (count($AllDeletedJobs) <= 0)
                    <tr>
                        <td colspan="8" style="text-align:center;height:50px;">No Deleted Jobs Available.</td>
                    </tr>
                @else
                    @foreach ($AllDeletedJobs as $job => $value)
                        <tr>
                            <th scope="row">{{ $AllDeletedJobs->firstitem() + $job }}</th>
                            <td>{{ $value->Title }}</td>
                            <td>{{ $value->Category }}</td>
                            <td>{{ $value->Salary }}</td>
                            <td>{{ $value->Type }}</td>
                            <td>{{ $value->company->name }}</td>
                            <td><span
                                    style="padding: 0.2rem 1rem;background:#EB5406; border-radius:10px;color:white">deleted</span>
                            </td>
                            <td>
                                <a href="javscript:void(0)" data-value="{{ $value->id }}" class="AdminDeleteJobsPermanent"><i
                                        class="uil uil-trash-alt" style="margin-left:0.8rem;color:red;font-size:1.4rem;"
                                        title="Delete"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="row pagination" style="margin: 30px 0 70px 0">
            {{ $AllDeletedJobs->onEachSide(1)->links() }}
        </div>
    </div>
    <script>
        jQuery.noConflict();
        jQuery(document).ready(function($) {
            //adminDeleteJobs
            $('.AdminDeleteJobs').click(function(e) {
                e.preventDefault();

                var Jobid = $(this).data("value");
                $('#AdminJobid').val(Jobid);
                $('#AdmindeleteModal').modal('show');

            });
        });
    </script>
@endsection
