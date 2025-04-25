@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Category</button>
</form>

<a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
@endsection