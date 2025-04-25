@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h3>Category: {{ $post->category->name }}</h3>

    <a href="{{ route('posts.index') }}">Back to Posts</a>
    <a href="{{ route('posts.edit', $post->id) }}">Edit Post</a>

    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Post</button>
    </form>
@endsection