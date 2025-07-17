@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
<h1>Edit Task</h1>
<form method="POST" action="/tasks/{{ $task->id }}">
    @csrf
    @method('PUT')
    <label>Title:</label>
    <input type="text" name="title" value="{{ $task->title }}">

    <label>Description:</label>
    <textarea name="description">{{ $task->description}}</textarea>

    <button type="submit">Save Task</button>
</form>
@endsection