@extends('layouts.masterwithoutheader')

@section('title')
    Please Create A New Account!
@endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::to('src/css/signup.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
@endsection

@section('content')
    @include('includes.message-block')
    <!-- <div class="row">
        <div class="col-md-5 signup">
            <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email_signup" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                    <label for="first_name">Your First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password_signup" value="{{ Request::old('password') }}">
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary mx-auto my-auto">Sign Up</button>
                    <div class="col-md-1"></div>
                    <button type="button" class="btn btn-success col-md-5 mr-auto">Already Have An Account</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-2">
            <div class="inbetween"></div>
        </div>
        <div class="col-md-5 signin">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email_signin" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password_signin" value="{{ Request::old('password') }}">
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary mx-auto my-auto">Sign In</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div> -->

    <!-- <div class="card bg-light"> -->
        <!-- <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Account</h4>
            <p class="text-center">Get started with your free account</p>
            <p>
                <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
            </p>
            <p class="divider-text">
                <span class="bg-light">OR</span>
            </p> -->
            
            <form class="form-signup form-signup-main" action="{{ route('signup') }}" method="post">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="first_name" class="form-control" placeholder="Full name" type="text" required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email address" type="email" required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <!-- <select class="custom-select" style="max-width: 120px;">
                        <option selected="">+971</option>
                        <option value="1">+972</option>
                        <option value="2">+198</option>
                        <option value="3">+701</option>
                    </select> -->
                    <input name="phone_number" class="form-control" placeholder="Phone number" type="text">
                </div> <!-- form-group// -->
                <!-- <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select class="form-control">
                        <option selected=""> Select job type</option>
                        <option>Designer</option>
                        <option>Manager</option>
                        <option>Accaunting</option>
                    </select>
                </div> form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password" id="password" class="form-control" placeholder="Create password" type="password" required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password_repeat" id="password_repeat" class="form-control" placeholder="Repeat password" type="password" required>
                </div> <!-- form-group// -->                                      
                <div class="form-group">
                <span id='message'></span>
                    <button type="submit" id="btn_submit" class="btn btn-md btn-block font-weight-bold"> Create Account  </button>
                </div> <!-- form-group// -->      
                <p class="text-center font-weight-normal">Have an account? <a class="font-weight-bold" href="{{ route('home') }}">Log In</a> </p>       
                <input type="hidden" name="_token" value="{{ Session::token() }}">                                                          
            </form>
        <!-- </article> -->
    <!-- </div> card.// -->
@endsection

@section('js')
    <script>
        $('#password, #password_repeat').on('keyup', function () {
            if ($('#password').val() == $('#password_repeat').val()) {
                $('#message').html('');
                $('#btn_submit').removeAttr('disabled');
            } else {
                $('#message').html('Not Matching').css('color', 'red');
                $('#btn_submit').attr('disabled', true);
            }
        });
    </script>
@endsection