@extends('layouts.app')

@section('content')

<h1>Tasks Grouped by Task Lists</h1>

@foreach($tasklists as $tasklist)
    <h2>{{ $tasklist->name }}</h2>
    <ul>
        @foreach($tasklist->tasks as $task)
            <li>{{ $task->title }}</li>
        @endforeach
    </ul>
@endforeach

@endsection