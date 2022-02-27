@extends('frontend.layouts.app')

@section('content')
    <div class="h1">
        <img class="image logo" src="{{ asset('frontend/assets/images/logo.svg') }}" alt="Facebook">
        <p class="pr">Facebook helps you connect and share with the people in your life.</p>
    </div>
    <form class="main" action="{{ route('login.store') }}" method="post">
        @csrf
        <input name="username" type="text" placeholder="Email address or phone number" class="txt"><br>
        <input name="password" type="password" placeholder="Password" class="txt"><br>
        <input type="submit" value="Log In" class="login-btn"><br>
        <div class="a-link">
            <a href="" class="link">Forgotten Password?</a>
        </div>
        <div class="ca">
            <a href="" class="pca">Create New Account</a>
        </div>
    </form>
@endsection