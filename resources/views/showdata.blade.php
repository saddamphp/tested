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
  <div class="col-sm-9">
    <div class="card">
      <div class="card-header text-center bg-info ">
        All  Students
      </div>



@if(session('update'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('update')}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


@if(session('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{session('delete')}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif



      <div class="card-body">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th style="width:50px;">Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Dept</th>
        <th>Gender</th>
        <th>Marks</th>
        <th>Reg</th>
        <th>Batch</th>
        <th>Action</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody style="width:500px;">  
@php
$serial= 1;   
@endphp

@foreach($students as $row)
      <tr class=" border-1 border-light">
        <td>{{$serial++}}</td>
        <td>{{ $row->name }}</td>
        <td >{{ $row->email }}</td>
        <td>{{ $row->phone }}</td>
        <td>{{ $row->address }}</td>
        <td>{{ $row->dept }}</td>
        <td>{{ $row->gender }}</td>
        <td>{{ $row->marks }}</td>
        <td>{{ $row->reg }}</td>
        <td>{{ $row->batch }}</td>
        <td><a href="{{url('student/edit/'.$row->id)}}" class="btn btn-primary">Edit</a></td>
        <td><a href="{{url('student/destroy/'.$row->id)}}" onclick=" return confirm('Are you sure data deleted ') " class="btn btn-danger">Delete</a></td>
     
      </tr>
     @endforeach
    </tbody>
  </table>

      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-header text-center bg-success ">
        Add Students
      </div>
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

      <div class="card-body">
 <form action="{{url('/student/store')}}" method="POST">
  @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="name" name="name" class="form-control 
          @error('name') is-invalid   @enderror " id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('name')
      <strong class="text-danger">{{ $message }}</strong>
          @enderror
        </div>

        <div class="mb-3" >
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input style="" type="email" name="email" class="form-control" id="exampleInputPassword1">
        </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Phone</label>
          <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
        </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Address</label>
          <input type="text" name="address" class="form-control" id="exampleInputPassword1">
        </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Dept</label>
          <input type="text" name="dept" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Gender</label>
          <input type="text" name="gender" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Marks</label>
          <input type="text" name="marks" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Reg</label>
          <input type="text" name="reg" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Batch</label>
          <input type="text" name="batch" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

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