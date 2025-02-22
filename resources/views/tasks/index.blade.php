@extends('layouts.app')

@section('body')
    <h1 class="bg-danger text-center">Tasks Manager</h1>
    @include('tasks.list')
@endsection
