@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')
    <h1>All Tasks</h1>

    <a href="/tasks/create">Create New Task</a>

    <ul>
        @foreach ($tasks as $task)
        <li>
            <strong>{{ $task->title }}</strong>: {{ $task->description }}
            <a href="/tasks/{{$task->id}}/edit">Edit</a>
            <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
@endsection