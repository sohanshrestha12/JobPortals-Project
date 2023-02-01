
@extends('layouts.company')
@section('content')
<link rel="stylesheet" href="{{ asset('css/company_jobs.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

<script>
  
    function openmenu(){
        document.querySelector(".form_box").classList.remove("hidden");
    }
    function menupop(){
        document.querySelector(".form_box").classList.add("hidden");

    }
    function openeditmenu(x){
      document.getElementById("form_edit_box_"+x).style.display = "block";
      document.querySelector(".form_edit_box").classList.remove("hidden");
    }
    function closeeditmenu(x){
      document.getElementById(x).style.display = "none";
      document.querySelector(".form_edit_box").classList.add("hidden");
    }
</script>


        <section class="intro">
        <div class="form_box hidden">
        <div class="container" id="form_box">
          <div class="close " id="close_btn">
                <i class="fa-thin fa-phone" onclick="menupop()"></i>
          </div>
          @if($errors->all()){
            openmenu();
          }
          @endif
        <form action="{{route('Save_jobs_List')}}" method="post">
        @csrf
              <div class="mb-3">
                <label for="job_title" class="form-label">Title</label>
                <input type="text" class="form-control @error('Title') is-invalid @enderror" id="" name="Title">
                  @error('Title')
                    <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                  @enderror
              </div>
              <div class="date">
            <div class="mb-3" style="flex:1;">
                <label for="Posted_date" class="form-label">Posted Date</label>
                <input type="date" class="form-control @error('Posted_Date') is-invalid @enderror"  name="Posted_Date">
                @error('Posted_Date')
                    <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                  @enderror
              </div>
              <div class="mb-3" style="flex:1;">
                <label for="expiry_date" class="form-label">Expiry Date</label>
                <input type="date" class="form-control @error('Expiry_Date') is-invalid @enderror" name="Expiry_Date">
                @error('Expiry_Date')
                    <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                  @enderror
              </div>
              </div>
              <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" class="form-control @error('Salary') is-invalid @enderror" id="" name="Salary">
                @error('Salary')
                    <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                @enderror
              </div>
            <div class="mb-3">
            <label for="category">Choose Company Industry</label>
                        <select class="form-select" name="Company_industry" >
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
                <label for="Job_description" class="form-label">Job Description</label>
                <textarea class="form-control @error('Job_description') is-invalid @enderror" aria-label="With textarea" name="Job_description"></textarea>
                @error('Job_description')
                    <span class="invalid-feedback" style="font-size:1.3rem">{{ $message }}</span>
                  @enderror
              </div>
            <button type="submit" class="btn btn-primary" style="font-size:12px;" >Add</button>
          </form>
          </div>

    </div>
    <!-- edit_box -->
    @foreach($List as $value)
    <div class="form_edit_box hidden" id ="form_edit_box_{{$value->id}}">
        <div class="container" id="form_box">
          <div class="close " id="close_btn">
                <i class="fa-thin fa-phone" id="form_edit_box_{{$value->id}}" onclick="closeeditmenu(this.id)"></i>
          </div>
        <form action="{{route('Update_jobs_List')}}" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$value->id}}">
              <div class="mb-3">
                <label for="job_title" class="form-label">Title</label>
                <input type="text" class="form-control" id="" name="Title_edited" value={{$value->Title}} >
              </div>
            <div class="mb-3">
                <label for="Posted_date" class="form-label">Posted Date</label>
                <input type="date" class="form-control"  name="Posted_Date_edited" value={{$value->Posted_Date}}>
              </div>
              <div class="mb-3">
                <label for="expiry_date" class="form-label">Expiry Date</label>
                <input type="date" class="form-control" name="Expiry_Date_edited" value={{$value->Expiry_Date}}>
              </div>
              <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" class="form-control" id="" name="Salary_edited" value={{$value->Salary}}>
              </div>
            <div class="mb-3">
            <label for="category" >Choose Company Industry</label>
                        <select class="form-select" name="Company_industry_edited" value={{$value->Company_industry}} >
                            <option hidden disabled selected value value={{$value->Company_industry}} > Choose Company Industries</option>
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
                <textarea class="form-control" aria-label="With textarea" name="Job_description_edited" value={{$value->Job_description}}></textarea>
              </div>
            <button type="submit" class="btn btn-primary" style="font-size:12px;" >Add</button>
          </form>
          </div>

    </div>
    @endforeach




    <!-- edit_box_end -->
        <div class="heading">
                    <h1>Hello</h1>
            </div>
            <div class="button">
                 <button type="button" class="btn btn-primary" style="width:115px;height: 50px; font-size:12px;" onclick="openmenu();">Add</button>
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
                  @foreach($List as $data)
                  <tr>
                    <th scope="row" style="color: #666666;">{{$data->Title}}</th>
                    <td>{{$data->Posted_Date}}</td>
                    <td>{{$data->Expiry_Date}}</td>
                    <td>{{$data->Company_industry}}</td>
                    <td>{{$data->Salary}}</td>
                    <td><a type="button" class="btn btn-danger" style="font-size:12px" href="{{url('/delete/'.$data->id)}}">Delete</a></td>
                    <td><a type="button" class="btn btn-warning" style="font-size:12px" onclick="openeditmenu(this.id)"  id="{{$data->id}}" >Edit</a></td>
                  </tr>
                  @endforeach
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
