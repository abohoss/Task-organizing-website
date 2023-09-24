@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
 
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit task</div>

                <div class="card-body">
                <form method="post" action="{{url('/update/'.$task->id)}}">
                    @csrf
                <div class="form-group">
                <label for="exampleInputEmail1">Task name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$task->name}}" name="name">
                </div>
                @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        <div class="form-group">
            <label for="exampleInputPassword1">description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="exampleInputPassword1" value="{{$task->description}}" name="description">
        </div>
        @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="form-group">
    <label for="exampleInputPassword1">deadline</label>
    <input type="text" class="form-control @error('deadline') is-invalid @enderror" id="exampleInputPassword1" value="{{$task->deadline}}" name="deadline">
  </div> 
  @error('deadline')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <button type="submit" class="btn btn-primary">Update</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection