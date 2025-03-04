@extends('layouts.app')

@section('body')
<form action="{{route('tasks.store')}}" method="POST" class="p-3 d-flex gap-2">
    @csrf
    <input class="form-control" required name="description" type="text" placeholder="Task description...">
    <button class="btn btn-outline-success">Save</button>
    <a href="{{route('tasks.index')}}" class="btn btn-outline-danger">Cancel</a>
</form>
@endsection
