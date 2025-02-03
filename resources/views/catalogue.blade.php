@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')
    <h1>Catalogue</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Bean</th>
                <th>Description</th>
                <th>Price/Unit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beans as $bean)
                <tr>
                    <td>{{ $bean->name }}</td>
                    <td>{{ $bean->description }}</td>
                    <td>${{ number_format($bean->price, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
