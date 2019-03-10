@extends('layouts.masterwithoutheader')

@section('title')
    Welcome!
@endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::to('src/css/signin.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
@endsection

@section('content')
        @include('includes.message-block')
        <form class="form-signin" action="{{ route('signin') }}" method="post">
            <i class="fab fa-y-combinator fa-6x mb-1"></i>
            <h1 class="h3 mb-5 font-weight-bold">Yuge's Home</h1>
            <div class="form-signin-main px-3 py-3 border border-light">
                <h1 class="h5 mt-3 mb-3 font-weight-normal">Sign In Here!</h1>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div class="checkbox mb-2 font-weight-normal">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-md btn-block font-weight-bold" type="submit">Sign in</button>
                <div class="float-right mt-2 mr-2"><span class="font-weight-light">or </span><a class="font-weight-bold" href="{{ route('welcome') }} ">Sign Up</a></div>
                <p class="mt-5 mb-3 text-muted">&copy; 2019 YUGE'S HOME</p>
            </div>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
@endsection