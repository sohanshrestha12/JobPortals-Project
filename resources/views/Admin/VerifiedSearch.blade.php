<table class="table">
    <thead>
        <tr>
            <th scope="col">SN</th>
            <th scope="col">Profile</th>
            <th scope="col">Company Name</th>
            <th scope="col">Category</th>
            <th scope="col">Location</th>
            <th scope="col">Phone No.</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php $i =1; @endphp
        @if (count($search) <= 0)
            <tr style="height:70px;">
                <td colspan="8" style="text-align:center;">No Data found!!!</td>
            </tr>
        @else
            @foreach ($search as $com)
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
                    <td>{{ ucfirst($com->name) }}</td>
                    <td>{{ $com->category }}</td>
                    <td>{{ $com->city . ', ' . $com->location }}</td>
                    <td>{{ $com->phoneno }}</td>
                    <td>
                        <a href="{{ url('verify/' . $com->id) }}" class="btn btn-primary">
                            Verified</a>
                    </td>
                    <td><a href="{{url('AdminCompanyProfile/' . $com->id )}}" class="btn" style="padding:5px 10px;color:white;background-color:#ff6158">View Details</a></td>

                </tr>
            @endforeach
        @endif
    </tbody>
</table>
