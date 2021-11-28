@extends('layout')

@section('content')

<div class="card p-5 mt-5">
    <div class="form-group text-right mb-2">
    <form method="POST" action = "logout">
          @csrf
          <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
    <div class="row mt-5">
    <a href="employee"> <button class="btn btn-primary">view</button></a>
</div>
<br>
<h4>Add New Employee</h4>
<form class="row g-3" action="addemployee" method = "POST">
@csrf
<div class="col-md-12">
    <label for="" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="col-md-12">
    <label for="" class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" >
  </div>
  <div class="col-md-12">
    <label for="" class="form-label">Position</label>
    <input type="text" class="form-control" name="position" >
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Salary</label>
    <input type="number" class="form-control" name="salary" >
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Add Employee</button>
  </div>
</form>
</div>
@stop