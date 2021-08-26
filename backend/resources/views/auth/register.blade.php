@extends('layouts.app')
@section('content')
    <main class="d-flex justify-content-center align-items-center">
        <div class="signup-div">
            <div class="img-login">
                <img src="{{ asset('images/Mobile_login-pana_1.png') }}" alt="" class="image-login-img">
            </div>

            <div class="div-sign">
                <div>
                    <h1>Sign up</h1>
                    <p style="font-size: 14px;">Register to start to follow events and create your event</p>
                </div>
                <form method="POST" action="{{ route('register') }}" class="form-sign">
                    @csrf
                    <div class="w-100 d-flex justify-content-between">
                        <dir class="div-input" style="margin-right:1em;">
                            <input type="text" style="margin-bottom: 10px;" name="firstName" id="firstName" placeholder="First Name" class="input-sign">
                            @error('firstName')
                                <span class="error-span" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </dir>
                        <div class="div-input"  style="margin-left:1em;">
                            <input type="text" style="margin-bottom: 10px;" name="lastName" id="lastName" placeholder="Last Name" class="input-sign">
                            @error('lastName')
                                <span class="error-span" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="div-input">
                        <input type="email" style="margin-bottom: 10px;" class="input-login" name="email" id="email" class="input-login"
                            placeholder="Email Adress">
                        @error('email')
                            <span class="error-span" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="div-input">
                        <input class="input-login" style="margin-bottom: 10px;" id="password" type="password" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="error-span" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="div-input">
                        <input class="input-login" style="margin-bottom: 10px;"
                        id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="div-input">
                        <select name="role" id="role" style="margin-bottom: 10px;" class="input-login">
                            <option value="choisie">choisie votre role</option>
                            <option value="ustilisateur" id="ustilisateur">Ustilisateur</option>
                            <option value="organisateur" id="organisateur">Organisateur</option>
                        </select>
                        @error('role')
                            <span class="error-span" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="submit" class="btn-login" value="sign up">
                </form>
                <div class="d-flex justify-content-between align-items-center">
                    <hr style="color: black; width: 44%;">
                    <p style="display: contents">or</p>
                    <hr style="color: black; width: 44%;">
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <button class="btn-api"> <img src="{{ asset('images/google.svg') }}" alt="images google"
                            style="width: 20px; margin-right: 5px;">sign
                        up with Google</button>
                    <button class="btn-api"> <img src="{{ asset('images//facebook.svg') }}" alt="images facebook"
                            style="width: 20px; margin-right: 5px;">sign up with Facebook</button>
                </div>
                <div class="already">
                    <p>Already have an account ?</p>
                    <a href="{{ url('login') }}" style="margin-left: 8px; text-decoration: none;">Login</a>
                </div>
            </div>
        </div>
    </main>
@endsection
