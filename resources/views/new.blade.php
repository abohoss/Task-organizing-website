@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new task!</div>

                <div class="card-body">
                <form method="post" action="/add">
                    @csrf
                <div class="form-group">
                <label for="exampleInputEmail1">Task name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">
                </div>
  <div class="form-group">
    <label for="exampleInputPassword1">description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="enter description" name="description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">deadline</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="enter deadline" name="deadline">
  </div> 

  <button type="submit" class="btn btn-primary">Add</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection