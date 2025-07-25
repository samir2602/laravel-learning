@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <h1>Create a New Task</h1>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <label>Title:</label>
        <input type="text" name="title">

        <label>Description:</label>
        <textarea name="description"></textarea>

        <select name="task_list_id" required>
            @foreach($taskLists as $list)
                <option value="{{ $list->id }}">{{ $list->name }}</option>
            @endforeach
        </select>

        <button type="submit">Save Task</button>
    </form>
@endsection
