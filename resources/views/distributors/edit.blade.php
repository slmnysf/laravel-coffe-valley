@extends('layouts.app')

@section('title', 'Edit Distributor')

@section('content')
    <h1>Edit Distributor</h1>
    <form action="{{ route('distributors.update', $distributor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Distributor Name:</label>
            <input type="text" name="name" id="name" value="{{ $distributor->name }}" required>
        </div>
        <div>
            <label for="city">City:</label>
            <input type="text" name="city" id="city" value="{{ $distributor->city }}" required>
        </div>
        <div>
            <label for="state_region">State/Region:</label>
            <input type="text" name="state_region" id="state_region" value="{{ $distributor->state_region }}">
        </div>
        <div>
            <label for="country">Country:</label>
            <input type="text" name="country" id="country" value="{{ $distributor->country }}">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" value="{{ $distributor->phone }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $distributor->email }}">
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
