@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
<h1>Edit Task</h1>
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form method="POST" action="{{ route('tasks.update', $task->id) }}">
    @csrf
    @method('PUT')
    <label>Title:</label>
    <input type="text" name="title" value="{{ $task->title }}">

    <label>Description:</label>
    <textarea name="description">{{ $task->description}}</textarea>

    <button type="submit">Save Task</button>
</form>
@endsection