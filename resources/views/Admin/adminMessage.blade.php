@extends('layouts.adminlayout')
@section('content')
    @if (Session::has('MessageDelete'))
        @php
            toastr()->success('Data has been successfully deleted!', ['closeButton' => true, 'closeOnHover' => false, 'timeOut' => 9999]);
        @endphp
    @endif

    <!-- Contact Delete Modal -->
    <div class="modal fade" id="AdmindeleteMessageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('AdmindeleteContact') }}" method="post">
                    @csrf
                    <div class="modal-header jobmodal">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Message Delete</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body jobmodal">
                        <input type="hidden" name="AdminMessageid" id="AdminMessageid">
                        <h5>Are you sure you want to delete this Message?</h5>
                    </div>
                    <div class="modal-footer jobmodal">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Yes Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <<div class="main">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $message => $value)
                    <tr>
                        <th scope="row">{{ $contact->firstitem() + $message }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->description }}</td>
                        <td>
                            <a href="javscript:void(0)" data-value="{{ $value->id }}" class="AdminDeleteContact"><i
                                    class="uil uil-trash-alt" style="margin-left:0.8rem;color:red;font-size:1.4rem" title="Delete"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row pagination" style="margin: 30px 0 70px 0">
            {{ $contact->onEachSide(1)->links() }}
        </div>
        </div>
    @endsection
