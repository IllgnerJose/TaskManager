@extends('layouts.app')

@section('body')
<form class="d-flex p-2" action="{{route('tasks.update', $task->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input class="form-control" name="description" type="text" value="{{$task->description}}">
    <button class="btn btn-outline-primary" type="submit">Edit</button>
</form>
@endsection
