@extends('layout')

@section('content')
<div class="card p-5 mt-5 col-sm-4">
@if(Session::get('status'))
<div class="alert alert-success" role="alert">
{{Session::get('status')}}
</div>
@endif
<h4>Login</h4>
<form action="login" method = "POST" class="row g-3">
  @csrf
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control"  required="" name="email">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control"  required="" name="pass">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
<div class="col-sm-12 text-right">
    <p class="text-muted"> <a href="/register" class="text-primary m-l-5"><b> Sign up</b></a></p>
</div>
</div>
@stop