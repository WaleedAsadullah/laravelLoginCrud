@extends('layout')

@section('content')

<!-- {{print_r($data);}} -->
<div class="card p-5 mt-5">
    <div class="form-group text-right mb-2">
    <form method="POST" action = "logout">
          @csrf
          <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
    <div class="row mt-5">
    <a href="add"> <button class="btn btn-primary">Add</button></a>
</div>
@if(Session::get('status'))
<div class="alert alert-success" role="alert">
{{Session::get('status')}}
</div>
@endif
<br>
<h4>Employees Record</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Position</th>
      <th scope="col">Salary</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->position}}</td>
      <td>{{$item->salary}}</td>
      <td><form method="POST" action = "delete">
          @csrf
          <input type="hidden" name ="deleteid" value="{{$item->id}}" />
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
    <td><form method="POST" action = "edittake">
          @csrf
          <input type="hidden" name ="editid" value="{{$item->id}}" />
          <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@stop