@extends('layouts.app')

@section('title', 'Add Distributor')

@section('content')
    <h1>Add Distributor</h1>
    <form action="{{ route('distributors.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Distributor Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="city">City:</label>
            <input type="text" name="city" id="city" required>
        </div>
        <div>
            <label for="state_region">State/Region:</label>
            <input type="text" name="state_region" id="state_region">
        </div>
        <div>
            <label for="country">Country:</label>
            <input type="text" name="country" id="country">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <button type="submit">Add</button>
        </div>
    </form>
@endsection
