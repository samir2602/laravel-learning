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
    <a href="{{ route('tasks.grouped') }}">Grouped view</a>

    <ul>
        @foreach ($tasks as $task)
        <li>
            <strong>{{ $task->title }}</strong>: {{ $task->description }}
            <td>{{ $task->taskList->name }}</td>
            <a href="{{ route('tasks.show', $task) }}">Show</a>
            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
@endsection