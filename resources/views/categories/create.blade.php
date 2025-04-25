@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Category Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <button type="submit">Create Category</button>
        </div>
    </form>

    <a href="{{ route('categories.index') }}">Back to Categories</a>
@endsection