@extends('layouts.app')
@section('header')
    <header class="header_nav">
        {{-- <div>
            <a href="#" class="nav_env__name header_nav__logo">
                <span>Ach</span><span class="Nlogo__last">Kayn</span>
            </a>
        </div> --}}
        <nav class="nav_env" id="nav_env-menu">
            <div class="nav_env__content bd-grid">
                {{-- <div class="nav_env__perfil">
                    <div>
                        <a href="#" class="nav_env__name">
                            <span>Ach</span><span class="Nlogo__last">Kayn</span>
                        </a>
                    </div> --}}
                </div>

            </div>
        </nav>
    </header>

@endsection
@section('content')
<main class="d-flex justify-content-center align-items-center">
    <div class="login-container">
        <div class="img-login">
            <img src="{{ asset('images/Login-bro.png') }}" class="image-login-img">
        </div>
        <div class="login-div">
            <div>
                <h1>Sign in</h1>
                <p style="font-size: 14px; ">login to manage yout events</p>
            </div>
            <form method="POST" action="{{ route('login') }}" class="form-login">
                @csrf
                <div>
                    <input type="email" style="margin-bottom: 10px" class="input-login" placeholder="Email Adress"
                        @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                        autocomplete="email" autofocus>
                    @error('email')
                        <span class="error-span">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <input type="password" style="margin-bottom: 5px" id="password" class="input-login"
                        @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">
                    @error('email')
                        <span class="error-span" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex w-100 align-items-center">
                    <input type="checkbox" name=" " id=" ">
                    <label style="margin: 8px 8px;">remember me</label>
                </div>
                <input type="submit" class="btn-login" value="sign in">

            </form class="f">
            <div class="d-flex justify-content-center flex-column">
                <div class="d-flex justify-content-between">
                    <hr style="color: black; width: 44%;">
                    <p>or</p>
                    <hr style="color: black; width: 44%;">
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn-api"> <img src="{{ asset('images/google.svg') }}" alt=" "
                            style="width: 20px; margin-right: 5px; ">sign in with Google</button>
                    <button class="btn-api"> <img src="{{ asset('images/facebook.svg') }}" alt=" "
                            style="width: 20px; margin-right: 5px;">sign in with Facebook</button>
                </div>
                <div class="yet">
                    <p>Not Register yet ? </p>
                    <a href="{{ url('register') }}" style="text-decoration: none;">register </a>
                    <p>| </p>
                    <a href="#" style="text-decoration: none;">forgot password</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

       
@endsection
