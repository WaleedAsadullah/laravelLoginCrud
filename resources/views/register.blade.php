@extends('layout')

@section('content')
<div class="card p-5 mt-5 col-sm-4">
<h4>Register</h4>
<form class="row g-3" action="register" method = "POST">
@csrf
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" required="" name="name" >
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Phone</label>
    <input type="text" class="form-control" required="" name="phone" >
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" required="" name="email" >
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" required="" name="pass" >
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>
</div>
@stop