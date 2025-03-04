@extends('layouts.app')

@section('body')
    @include('tasks.lists.uncompleted-tasks')
    @include('tasks.lists.completed-tasks')
    <ul class="list-group">
        <li class="list-group-item"><a href="{{route('tasks.create')}}" role="button"><i class="bi bi-plus-circle-dotted"></i> Add a task</a></li>
    </ul>
@endsection
