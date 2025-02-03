@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Bean of the Day</h1>
    @if($beanOfTheDay)
        <h2>{{ $beanOfTheDay->bean->name }}</h2>
        <p><strong>Sale Price:</strong> ${{ number_format($beanOfTheDay->sale_price, 2) }}</p>
        <p><strong>Description:</strong> {{ $beanOfTheDay->bean->description }}</p>
        <p><em>{{ $beanOfTheDay->date->format('F j, Y') }}</em></p>
    @else
        <p>No bean of the day available.</p>
    @endif
@endsection
