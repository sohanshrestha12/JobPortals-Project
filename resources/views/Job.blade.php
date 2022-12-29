@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{ asset('css/admin_jobs.css') }}">


        <section class="intro">
        <div class="container" id="form_box">
        <form>
            <div class="mb-3">
                <label for="company_logo" class="form-label">Company Logo</label>
                <input type="file" class="form-control" id="">
              </div>
            <div class="mb-3">
                <label for="name" class="form-label">Company Name</label>
                <input type="text" class="form-control" >
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Company Address</label>
                <input type="text" class="form-control" >
              </div>
              <div class="mb-3">
                <span class="input-group-text">With textarea</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
              </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </form>


    </div>
        <div class="heading">
                    <h1>Hello</h1>
            </div>
            <div class="button">
                 <button type="button" class="btn btn-primary" style="width:115px;height: 50px;">Add</button>
            </div>

             <div class="gradient-custom-1 h-100">
            <div class="mask d-flex align-items-center h-100">
            <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive bg-white">
              <table class="table mb-0">
                <thead>
                  <tr>
                    <th scope="col">EMPLOYEES</th>
                    <th scope="col">POSITION</th>
                    <th scope="col">CONTACTS</th>
                    <th scope="col">AGE</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">SALARY</th>
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" style="color: #666666;">Tiger Nixon</th>
                    <td>System Architect</td>
                    <td>tnixon12@example.com</td>
                    <td>61</td>
                    <td>Edinburgh</td>
                    <td>$320,800</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-warning">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;">Sonya Frost</th>
                    <td>Software Engineer</td>
                    <td>sfrost34@example.com</td>
                    <td>23</td>
                    <td>Edinburgh</td>
                    <td>$103,600</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-warning">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;">Jena Gaines</th>
                    <td>Office Manager</td>
                    <td>jgaines75@example.com</td>
                    <td>30</td>
                    <td>London</td>
                    <td>$90,560</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-warning">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;">Quinn Flynn</th>
                    <td>Support Lead</td>
                    <td>qflyn09@example.com</td>
                    <td>22</td>
                    <td>Edinburgh</td>
                    <td>$342,000</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-warning">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;">Charde Marshall</th>
                    <td>Regional Director</td>
                    <td>cmarshall28@example.com</td>
                    <td>36</td>
                    <td>San Francisco</td>
                    <td>$470,600</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-warning">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;">Haley Kennedy</th>
                    <td>Senior Marketing Designer</td>
                    <td>hkennedy63@example.com</td>
                    <td>43</td>
                    <td>London</td>
                    <td>$313,500</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-warning">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;">Tatyana Fitzpatrick</th>
                    <td>Regional Director</td>
                    <td>tfitzpatrick00@example.com</td>
                    <td>19</td>
                    <td>Warsaw</td>
                    <td>$385,750</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-warning">Edit</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
@endsection
