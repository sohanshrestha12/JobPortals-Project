<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{ asset('css/admin_jobs.css') }}">
<script>
    function openmenu(){
        document.querySelector(".form_box").classList.remove("hidden");
    }
    function menupop(){
        document.querySelector(".form_box").classList.add("hidden");

    }
</script>


        <section class="intro">
        <div class="form_box hidden">
        <div class="container" id="form_box">
          <div class="close " id="close_btn">
                <i class="fa-thin fa-phone" onclick="menupop()"></i>
          </div>
        <form>
            <div class="mb-3">
                <label for="job_title" class="form-label">Title</label>
                <input type="text" class="form-control" id="">
              </div>
            <div class="mb-3">
                <label for="Posted_date" class="form-label">Posted Date</label>
                <input type="date" class="form-control" >
              </div>
              <div class="mb-3">
                <label for="expiry_date" class="form-label">Expiry Date</label>
                <input type="date" class="form-control" >
              </div>
              <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" class="form-control" id="">
              </div>
            <div class="mb-3">
            <label for="category">Choose Company Industry</label>
                        <select class="form-select" name="category" >
                            <option hidden disabled selected value> Choose Company Industries</option>
                            <option value="Art">Art</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Online Media">Online Media</option>
                            <option value="Laravel">Laravel</option>
                            <option value="Literature">Literature</option>
                            <option value="Intertior/exterior design">Intertior/exterior design</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Business">Business</option>
                            <option value="Security">Security</option>
                            <option value="Telecommunication">Telecommunication</option>
                        </select>
            </div>
              <div class="mb-3">
                <span class="input-group-text">Job Description</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
              </div>
            <button type="submit" class="btn btn-primary" >Add</button>
          </form>
          </div>

    </div>
        <div class="heading">
                    <h1>Hello</h1>
            </div>
            <div class="button">
                 <button type="button" class="btn btn-primary" style="width:115px;height: 50px;" onclick="openmenu();">Add</button>
            </div>

             <div class="gradient-custom-1 ">
            <div class="mask d-flex align-items-center">
            <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive bg-white">
              <table class="table mb-0">
                <thead>
                  <tr>
                    <th scope="col">JOB TITLE</th>
                    <th scope="col">POSTED DATE</th>
                    <th scope="col">EXPIRY DATE</th>
                    <th scope="col">CATEGORY</th>
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
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-warning">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;">Jena Gaines</th>
                    <td>Office Manager</td>
                    <td>jgaines75@example.com</td>
                    <td>30</td>
                    <td>$90,560</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-warning">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;">Quinn Flynn</th>
                    <td>Support Lead</td>
                    <td>qflyn09@example.com</td>
                    <td>22</td>
                    <td>$342,000</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-warning">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;">Charde Marshall</th>
                    <td>Regional Director</td>
                    <td>cmarshall28@example.com</td>
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
                    <td>$313,500</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-warning">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;">Tatyana Fitzpatrick</th>
                    <td>Regional Director</td>
                    <td>tfitzpatrick00@example.com</td>
                    <td>19</td>
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
