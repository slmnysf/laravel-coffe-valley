@extends('layouts.app')

@section('title', 'Distributors')

@section('content')
    <h1>Distributors</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Distributor Name</th>
                <th>City</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($distributors as $distributor)
                <tr>
                    <td>{{ $distributor->name }}</td>
                    <td>{{ $distributor->city }}</td>
                    <td>
                        <a href="/distributors/{{ $distributor->id }}/edit">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="/distributors/add">Add</a>
@endsection
