@extends('layouts.app')

@section('title', 'Edit')

@section('content')

    <div class="m-3">

        <h1>Edit post</h1>

        <form action="{{ route('posts.update', $post) }}" method="post">
            @csrf @method('PATCH')
            @include('posts.form-fields')
        </form>

        <a class="btn btn-link" href="{{ route('posts.index') }}">Regresar</a>
    </div>

@endsection
