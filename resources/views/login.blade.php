@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h1>Login</h1>
    <form action="/login" method="POST">
        @csrf
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" id="user_id" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
@endsection
