@extends('layouts.app')

@section('body')
<form class="p-3 d-flex gap-2" action="{{route('tasks.update', $task->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input class="form-control" name="description" type="text" value="{{$task->description}}">
    <button class="btn btn-outline-primary" type="submit">Edit</button>
    <a href="{{route('tasks.index')}}" class="btn btn-outline-danger">Cancel</a>
</form>
@endsection
