@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<h1>{{ $category->name }}</h1>

<p>Category ID: {{ $category->id }}</p>

<h2>Posts in this Category</h2>
<ul>
    @foreach($category->posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        </li>
    @endforeach
</ul>

<a href="{{ route('categories.edit', $category->id) }}">Edit Category</a>

<form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Category</button>
</form>

<a href="{{ route('categories.index') }}">Back to Categories</a>
@endsection