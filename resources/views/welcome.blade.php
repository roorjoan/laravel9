@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="m-3">
        <h1 class="text-success">Welcome</h1>
        <br>

        @auth
            <div class="text-white">
                Authenticated User: <span class="text-success">{{ Auth::user()->name }}</span><br>
                User Email: <span class="text-success">{{ Auth::user()->email }}</span>
            </div>
        @endauth
    </div>

@endsection
