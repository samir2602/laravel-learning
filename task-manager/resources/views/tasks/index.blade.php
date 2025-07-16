@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')
    <h1>All Tasks</h1>

    <a href="/tasks/create">Create New Task</a>

    <ul>
        @foreach ($tasks as $task)
            <li><strong>{{ $task->title }}</strong>: {{ $task->description }}</li>
        @endforeach
    </ul>
@endsection