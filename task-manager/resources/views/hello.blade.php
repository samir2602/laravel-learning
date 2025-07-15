@extends('layouts.app')

@section('title', 'Hello Page')

@section('content')
    <h1>Hello, {{ $name }}</h1>
    <p>Welcome to level 4 of your laravel game.</p>
@endsection