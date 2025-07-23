@extends('layouts.app')

@section('content')
    <h1>Task Details</h1>
    <p><strong>Title:</strong> {{ $task->title }}</p>
    <a href="{{ route('tasks.index') }}">Back to List</a>
@endsection