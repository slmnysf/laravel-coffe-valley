@extends('layouts.app')

@section('title', 'Uploads')

@section('content')
    <h1>Uploads</h1>
    <a href="{{ route('uploads.create') }}">Add Document</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Title</th>
                <th>Document File</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach($uploads as $upload)
                <tr>
                    <td>{{ $upload->title }}</td>
                    <td>
                        <a href="{{ Storage::url($upload->document_file) }}" target="_blank">Download</a>
                    </td>
                    <td>{{ $upload->author }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
