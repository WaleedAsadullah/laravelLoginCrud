@extends('layout')

@section('content')

<div class="card p-5 mt-5">
    <div class="form-group text-right mb-2">
    <form method="POST" action = "logout">
          @csrf
          <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
    <br>
<h4>Edit Employee Data</h4>
<form class="row g-3" action="editvalue" method = "POST">
@csrf
@foreach ($data as $item)
<div class="col-md-12">
    <label for="" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{$item->name}}">
    <input type="hidden" class="form-control" name="editid" value="{{$item->id}}">
  </div>
  <div class="col-md-12">
    <label for="" class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" value="{{$item->phone}}">
  </div>
  <div class="col-md-12">
    <label for="" class="form-label">Position</label>
    <input type="text" class="form-control" name="position" value="{{$item->position}}">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Salary</label>
    <input type="number" class="form-control" name="salary" value="{{$item->salary}}">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Edit Employee</button>
  </div>
</form>
@endforeach
</div>
@stop