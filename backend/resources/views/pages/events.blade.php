@extends('layouts.app')

@push('stylenav')
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
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
                        <li class="nav_env__item active_en"><a href="{{ route('eventsLists') }}"
                                class="nav_env__link">Events</a></li>
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

                    {{-- <a class="btn_login" href="{{ url('/login') }}">Sign in</a> --}}
                    {{-- <div class="profile">
                        <i class="fas fa-user-circle"></i>
                        <p>Mohssine Elattari</p>
                        <i class="fas fa-caret-down"></i>
                    </div> --}}
                    </a>
                </div>
            </div>
        </nav>
    </header>
@endsection
@section('content')

    <section class="Event-Service">
        <div class="service-one">
            <div class="img-service">
                <img src="{{ asset('images/Learning-amico.png') }}" alt="Time management-amico">
            </div>
            <div class="info-service">
                <h3>
                    Know the events organized in Morocco according to the category
                    and the organizing institution.
                </h3>
                <p>
                    Look for an organized event ,
                    and Know all the information on each event
                    (description, time of organization, institution, place, etc.).
                </p>
                <p>
                    Know the statistics of attendees and events, and approval of requests to
                    attend the event.
                </p>
            </div>

        </div>
    </section>
    <section class="most-populer">
        <div class="container-most">
            <div class="filter-event">
                <div class="filter">
                    <a href="">Party</a>
                    <a href="">Wedding</a>
                    <a href="">Metting</a>
                </div>
                <div class="search">
                    <input type="text" placeholder="Filter by city">
                </div>
            </div>
            <div class="slider">
                @foreach ($events as $event)
                    <div class="card-event">
                        <div class="container-background">
                            <i class="far fa-heart"></i>
                            <img src="{{ url('assets/images/' . $event->image) }}" alt="">
                            <div class="time-event">
                                <p>{{ \Carbon\Carbon::parse($event->day)->format('d') }}<br>{{ \Carbon\Carbon::parse($event->day)->format('M') }}
                                </p>
                                {{-- <P>{{ \Carbon\Carbon::parse($event->day)->format('M') }}</P>
                                <P>{{ \Carbon\Carbon::parse($event->day)->format('m') }}</P> --}}

                                {{-- format('M') --}}
                                {{-- $comment->created_at)->diffForHumans() --}}
                            </div>
                        </div>
                        <div class="info-event">
                            <div class="title-event">
                                {{ $event->titre }}
                            </div>
                            <div class="adresss-ev">
                                {{ $event->addrese }}
                            </div>
                            <div class="info-time">
                                <div class="time">
                                    <i class="far fa-clock"></i>
                                    {{-- Sat 09:00 --}}
                                    {{ $event->time }}
                                </div>
                                <div class="Duration">
                                    <i class="fas fa-stopwatch"></i>
                                    {{-- 2h 30m --}}
                                    {{ $event->duree }}h

                                </div>
                                <div class="price">
                                    <i class="fas fa-dollar-sign"></i>
                                    Free
                                </div>
                            </div>
                            <div class="read-more">
                                <a href="{{ route('events.show', $event->id) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {!! $events->appends(['sort' => 'science-stream'])->links() !!}
        </div>
    </section>


@endsection
@section('footer')
    @include('layouts.footer')
@endsection
