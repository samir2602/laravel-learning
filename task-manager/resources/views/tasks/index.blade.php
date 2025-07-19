@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')
    @if(session('success'))
    <div style="background: #c6f6d5; padding: 10px; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
    @endif
    <h1>All Tasks</h1>

    <a href="/tasks/create">Create New Task</a>

    <ul>
        @foreach ($tasks as $task)
        <li>
            <strong>{{ $task->title }}</strong>: {{ $task->description }}
            <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
@endsection