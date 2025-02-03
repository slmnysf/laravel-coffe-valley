@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome, {{ Session::get('user_id') }}</h1>
    <p>You are now logged in.</p>
    <a href="/logout">Logout</a>
@endsection
