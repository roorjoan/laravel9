@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div class="m-3">
        <h1>Login</h1>

        <form class="row g-3" action="{{ route('login') }}" method="post">
            @csrf
            @include('auth.form-login')
        </form>

        <a class="btn btn-link text-light" href="{{ route('register') }}">Register</a>
    </div>

@endsection
