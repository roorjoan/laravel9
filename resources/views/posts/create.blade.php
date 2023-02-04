@extends('layouts.app')

@section('title', 'Create')

@section('content')

    <div class="m-3">
        {{-- @dump($errors) --}}
        <h1>Create a new post</h1>

        <form action="{{ route('posts.store', $post) }}" method="post">
            @csrf
            @include('posts.form-fields')
        </form>

        <a class="btn btn-link" href="{{ route('posts.index') }}">Regresar</a>
    </div>

@endsection
