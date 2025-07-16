@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <h1>Create a New Task</h1>

    <form method="POST" action="/tasks">
        @csrf
        <label>Title:</label>
        <input type="text" name="title">

        <label>Description:</label>
        <textarea name="description"></textarea>

        <button type="submit">Save Task</button>
    </form>
@endsection
