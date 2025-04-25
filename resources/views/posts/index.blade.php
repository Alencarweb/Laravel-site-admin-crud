@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Criar post</a>
        <ul class="list-group">
            @foreach ($posts as $post)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <h5>{{ $post->title }}</h5>
                        <p>{{ $post->content }}</p>
                    </div>
                    <div>
                        <!-- Edit Icon -->
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary me-2">
                            <i class="bi bi-pencil"></i> Editar
                        </a>
                        
                        <!-- Delete Icon -->
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja excluir este post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection