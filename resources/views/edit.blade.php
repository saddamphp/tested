<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>cruds</title>
  </head>
  <body>
    <div style="padding:40px;">
    <!---cards start-->
   <div class="container-fluid">
      <div class="row">
 
  <div class="col-sm-8 m-auto">
    <div class="card">
      <div class="card-header text-center bg-secondary ">
        Update Students
      </div>

@if(session('update'));
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('update')}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

      <div class="card-body">
 <form action="{{url('/student/update/'. $student->id)}}" method="POST">
  @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="name" name="name" class="form-control 
          @error('name') is-invalid   @enderror " id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$student->name}}">

          @error('name')
      <strong class="text-danger">{{ $message }}</strong>
          @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="{{$student->email}}">
        </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Phone</label>
          <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="{{$student->phone}}">
        </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Address</label>
          <input type="text" name="address" class="form-control" id="exampleInputPassword1"value="{{$student->address}}">
        </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Dept</label>
          <input type="text" name="dept" class="form-control" id="exampleInputPassword1"value="{{$student->dept}}">
        </div>

           <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Gender</label>
          <input type="text" name="gender" class="form-control" id="exampleInputPassword1"value="{{$student->gender}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Marks</label>
          <input type="text" name="marks" class="form-control" id="exampleInputPassword1"value="{{$student->marks}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Reg</label>
          <input type="text" name="reg" class="form-control" id="exampleInputPassword1"value="{{$student->reg}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Batch</label>
          <input type="text" name="batch" class="form-control" id="exampleInputPassword1"value="{{$student->batch}}">
        </div>
       
        <button type="submit" class="btn btn-primary">Update</button>

</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
    <!---end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>