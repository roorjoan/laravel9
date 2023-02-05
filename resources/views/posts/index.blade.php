@extends('layouts.app')

@section('title', 'Blog')

@section('content')

    {{-- @dump($errors) --}}


    <h1 class="text-center m-3">Blog</h1>
    @auth
        <a class="btn btn-primary" href="{{ route('posts.create') }}">CREATE NEW POST</a>
    @endauth
    <br>

    @foreach ($posts as $post)
        <div class="card box-dm">
            <div class="card-body">
                <h2 class="card-title">
                    <a class="text-decoration-none text-light" href="{{ route('posts.show', $post) }}">
                        {{ $post->title }}
                    </a>
                </h2>
                @auth
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('posts.edit', $post) }}" class="card-link text-decoration-none text-info">EDIT</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="post">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-link text-decoration-none text-danger">DELETE</button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
        <br>
    @endforeach

@endsection
