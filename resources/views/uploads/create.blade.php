@extends('layouts.app')

@section('title', 'Add Document')

@section('content')
    <h1>Add Document</h1>
    <form action="{{ route('uploads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="document_file">Document File:</label>
            <input type="file" name="document_file" id="document_file" required>
        </div>
        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" required>
        </div>
        <div>
            <button type="submit">Add Document</button>
        </div>
    </form>
@endsection
