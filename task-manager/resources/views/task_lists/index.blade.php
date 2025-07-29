@extends('layouts.app')

@section('title', 'Tasklist')

@section('content')
@if(session('success'))
<div style="background: #c6f6d5; padding: 10px; margin-bottom: 10px;">
    {{ session('success') }}
</div>
@endif
<h1>Task List</h1>

<a href="{{ route('task-lists.create') }}">Add New Tasklist</a>

<table>
    <tr>
        <th>TaskList Name</th>    
        <th>Action</th>    
    </tr>
    @foreach($tasklist as $tl)
    <tr>
        <td>{{ $tl->name }}</td>      
        <td>
            <a href="{{ route('task-lists.edit', $tl->id) }}">Edit</a>
            <form action="{{ route('task-lists.destroy', $tl->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>      
    </tr>
    @endforeach
</table>
@endsection

