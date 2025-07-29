@extends('layouts.app')

@section('title', 'Add Task list')

@section('content')
    <h1>Create a New TaskList</h1>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form method="POST" action="{{ route('task-lists.update', $taskList->id) }}">
    @csrf
    @method('PUT')
        <label>Title:</label>
        <input type="text" name="name" value="{{ $taskList->name }}">

        <button type="submit">Save Task List</button>
    </form>
@endsection