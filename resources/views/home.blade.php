@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your tasks</div>

                <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Deadline</th>
    </tr>
  </thead>
  <tbody>
    @foreach($todos as $todo)
    <tr>
      <td>{{$todo->name}}</td>
      <td>{{$todo->description}}</td>
      <td>{{$todo->deadline}}</td>
      <td><a href="{{url('delete/'.$todo->id)}}" class="btn btn-outline-danger">Delete</a></td>
      <td><a href="{{url('edit/'.$todo->id)}}" class="btn btn-outline-primary">edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
