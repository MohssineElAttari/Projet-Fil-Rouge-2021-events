@extends('layouts.app')

@push('stylenav')
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/eventCreate.css') }}" rel="stylesheet"> --}}
@endpush

@section('header')

    <header class="header_nav">
        <div>
            <a href="{{ url('/') }}" class="nav_env__name header_nav__logo">
                <span>Ach</span><span class="Nlogo__last">Kayn</span>
            </a>
        </div>
        <ion-icon name="menu-outline" class="header_nav__toggle" id="nav-toggle"></ion-icon>
        <nav class="nav_env" id="nav_env-menu">
            <div class="nav_env__content bd-grid">

                <ion-icon name="close-outline" class="nav_env__close" id="nav_env-close"></ion-icon>

                <div class="nav_env__perfil">
                    <div>
                        <a href="{{ url('/') }}" class="nav_env__name">
                            <span>Ach</span><span class="Nlogo__last">Kayn</span>
                        </a>
                    </div>
                </div>

                <div class="nav_env__menu">
                    <ul class="nav_env__list">
                        <li class="nav_env__item"><a href="{{ url('/') }}" class="nav_env__link">Home</a>
                        </li>
                        <li class="nav_env__item"><a href="{{ url('/about') }}" class="nav_env__link">About Us</a></li>
                        <li class="nav_env__item"><a href="{{ route('eventsLists') }}" class="nav_env__link">Events</a>
                        </li>
                        <li class="nav_env__item"><a href="{{ url('/contact') }}" class="nav_env__link">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="nav_env__social">

                    <a class="btn_event" href="{{ url('/eventCreate') }}"><i class="fas fa-pencil-alt"></i> Create
                        Event</a>
                    @auth
                    @else
                        <a class="btn_login" href="{{ url('/login') }}">Sign in</a>
                    @endauth
                    </a>
                </div>
            </div>
        </nav>
    </header>
@endsection
@section('content')

    <section class="section-container">

        <div class="create">
            <h1>{{ $eventInfo[0]->titre }}</h1>
            <br>
            <br>
            <div class="d-flex justify-content-center">
                <img src="{{ URL('assets/images/' . $eventInfo[0]->image) }}" style="width: 60em;"
                    alt="Image folder-rafiki" id="outputImage">
            </div>

            <hr>

            <p>
                {{ $eventInfo[0]->description }}
            </p>

            <hr>

            <div>
                <div>
                    {{ $eventInfo[0]->day }}
                </div>
                <div>
                    {{ $eventInfo[0]->time }}
                </div>
                <div>
                    {{ $eventInfo[0]->duree }}h
                </div>
            </div>
            <br>
            <hr>
            <br>

            <label for="city">City : {{ $eventInfo[0]->name }}</label>
            <label for="address">{{ $eventInfo[0]->addrese }}</label>
            <label for="user"> Created by : {{ $eventInfo[0]->firstName }} {{ $eventInfo[0]->lastName }}</label>
            <label for="address">created_at : {{ $eventInfo[0]->created_at }}</label>
            <div class="d-flex justify-content-center">
                <a class="btn_login" style="text-decoration: none;color: white;" href="#">Register To Event</a>
            </div>
        </div>

    </section>
    </form>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
