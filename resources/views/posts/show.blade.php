@extends('layouts.app')

@section('title', 'Posts Details')

@section('content')

    <h1 class="text-center my-3">{{ $post->title }}</h1>
    <div class="container d-flex flex-column justify-content-between align-items-start box-dm" style="height: 70vh;">
        <h5 class="m-2">{{ $post->body }}</h5>
        <a class="btn btn-link text-light m-2" href="{{ route('posts.index') }}">Regresar</a>
    </div>

@endsection
