@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <div class="m-3">
        <h1>Register</h1>

        <form class="row g-3" action="{{ route('register') }}" method="post">
            @csrf
            @include('auth.form-register')
        </form>

        <a class="btn btn-link text-light" href="{{ route('login') }}">Login</a>
    </div>

@endsection
