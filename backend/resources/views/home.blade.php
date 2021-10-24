@extends('layouts.app')

@push('stylenav')
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />@endpush

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
                        <li class="nav_env__item"><a href="{{ url('/') }}" class="nav_env__link active_env">Home</a>
                        </li>
                        <li class="nav_env__item"><a href="{{ url('/about') }}" class="nav_env__link">About Us</a></li>
                        <li class="nav_env__item active"><a href="{{ route('eventsLists') }}"
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

    <section class="section-header">
        <div class="header-home">
            <div class="img_bg">
                <img src="{{ asset('images/Conference.png') }}" alt="event logo page home">
            </div>
            <div class="about-ev">
                <h1>Plan The Perfect Event</h1>
                <p>
                    An Application That Enables You To Learn About
                    The Events Organized In Morocco By City,
                    Category And Organization.
                    Provide Easy Management And Organization Of
                    Events
                </p>
                <button>
                    Start Boking Now
                </button>
            </div>
        </div>
        <div class="serch-ev">
            <h3>Find The Events</h3>
            <div class="search">
                <div class="search-ev">
                    <input type="text" placeholder="Serch Name, Organisation Or By Venue ... ">
                </div>


                <div class="select-ev">
                    <select>
                        <option value="All Category">All Category</option>
                        <option value="">Technologie</option>
                        <option value="">Sports</option>
                        <option value="">Festivals</option>
                        <option value="">Community</option>
                        <option value="">Education</option>
                    </select>
                </div>
                <div class="select-ev">
                    <select>
                        <option value="All City">All City</option>
                        <option value="">Marrakech</option>
                        <option value="">Rabat</option>
                        <option value="">Agadir</option>
                        <option value="">Tanger</option>
                        <option value="">Fes</option>
                    </select>
                </div>

                <div class="btn-ev">
                    <button><i class="fas fa-search" style="color: white"> Search</i></button>
                </div>
            </div>
        </div>
    </section>
    <section class="most-populer">
        <div class="container-most">
            <h3>Most Populer Event</h3>
            <div class="slider">
                <div class="card-event">
                    <div class="container-background">
                        <i class="far fa-heart"></i>
                        <img src="{{ asset('images/Telecommuting-rafiki.png') }}" alt="">
                        <div class="time-event">
                            <p>7<br>Aug</p>
                        </div>
                    </div>
                    <div class="info-event">
                        <div class="title-event">
                            Event title
                        </div>
                        <div class="adresss-ev">
                            Event Adress Adress Adress Adress
                        </div>
                        <div class="info-time">
                            <div class="time">
                                <i class="far fa-clock"></i>
                                Sat 09:00
                            </div>
                            <div class="Duration">
                                <i class="fas fa-stopwatch"></i>
                                2h 30m
                            </div>
                            <div class="price">
                                <i class="fas fa-dollar-sign"></i>
                                Free
                            </div>
                        </div>
                        <div class="read-more">
                            <button>Read More</button>
                        </div>
                    </div>
                </div>
                <div class="card-event">
                    <div class="container-background">
                        <i class="far fa-heart"></i>
                        <img src="{{ asset('images/Telecommuting-rafiki.png') }}" alt="">
                        <div class="time-event">
                            <p>7<br>Aug</p>
                        </div>
                    </div>
                    <div class="info-event">
                        <div class="title-event">
                            Event title
                        </div>
                        <div class="adresss-ev">
                            Event Adress Adress Adress Adress
                        </div>
                        <div class="info-time">
                            <div class="time">
                                <i class="far fa-clock"></i>
                                Sat 09:00
                            </div>
                            <div class="Duration">
                                <i class="fas fa-stopwatch"></i>
                                2h 30m
                            </div>
                            <div class="price">
                                <i class="fas fa-dollar-sign"></i>
                                Free
                            </div>
                        </div>
                        <div class="read-more">
                            <button>Read More</button>
                        </div>
                    </div>
                </div>
                <div class="card-event">
                    <div class="container-background">
                        <i class="far fa-heart"></i>
                        <img src="{{ asset('images/Telecommuting-rafiki.png') }}" alt="">
                        <div class="time-event">
                            <p>7<br>Aug</p>
                        </div>
                    </div>
                    <div class="info-event">
                        <div class="title-event">
                            Event title
                        </div>
                        <div class="adresss-ev">
                            Event Adress Adress Adress Adress
                        </div>
                        <div class="info-time">
                            <div class="time">
                                <i class="far fa-clock"></i>
                                Sat 09:00
                            </div>
                            <div class="Duration">
                                <i class="fas fa-stopwatch"></i>
                                2h 30m
                            </div>
                            <div class="price">
                                <i class="fas fa-dollar-sign"></i>
                                Free
                            </div>
                        </div>
                        <div class="read-more">
                            <button>Read More</button>
                        </div>
                    </div>
                </div>
                <div class="card-event">
                    <div class="container-background">
                        <i class="far fa-heart"></i>
                        <img src="{{ asset('images/Telecommuting-rafiki.png') }}" alt="">
                        <div class="time-event">
                            <p>7<br>Aug</p>
                        </div>
                    </div>
                    <div class="info-event">
                        <div class="title-event">
                            Event title
                        </div>
                        <div class="adresss-ev">
                            Event Adress Adress Adress Adress
                        </div>
                        <div class="info-time">
                            <div class="time">
                                <i class="far fa-clock"></i>
                                Sat 09:00
                            </div>
                            <div class="Duration">
                                <i class="fas fa-stopwatch"></i>
                                2h 30m
                            </div>
                            <div class="price">
                                <i class="fas fa-dollar-sign"></i>
                                Free
                            </div>
                        </div>
                        <div class="read-more">
                            <button>Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Event-Types">
        <h3>Most Populer Event</h3>
        <div class="cards">
            <div class="card-type">
                <div class="img-type">
                    <img src="{{ asset('images/Celebration-bro.png') }}" alt="Celebration" srcset="">
                </div>
                <h3>
                    Party
                </h3>
                <p>
                    Find a party venue for you anniversary,
                    birthday party, office party,
                    or a reunion of family and friends.
                </p>
            </div>
            <div class="card-type">
                <div class="img-type">
                    <img src="{{ asset('images/Wedding-amico.png') }}" alt="Celebration" srcset="">
                </div>
                <h3>
                    Wedding
                </h3>
                <p>
                    Find a wedding venue for your reception.
                    Banquet halls are popular, Barn weddings are a hot trend,
                    and there are many unique venues like museums,
                    zoos, and wineries.
                </p>
            </div>
            <div class="card-type">
                <div class="img-type">
                    <img src="{{ asset('images/Meeting-pana.png') }}" alt="Celebration" srcset="">
                </div>
                <h3>
                    Meeting
                </h3>
                <p>
                    Find a meeting venue for any business gathering that can range
                    from a small group in a hotel board room
                    to a large conference at an event center.
                </p>
            </div>
        </div>

    </section>

    <section class="Event-Service">
        <h3>Service</h3>
        <div class="service-one">
            <div class="img-service">
                <img src="{{ asset('images/Time.png') }}" alt="Time management-amico">
            </div>
            <div class="info-service">
                <h3>The easy to use event management app your staff wants</h3>
                <p>
                    event management application that makes organizing events simple and
                    intuitive. In addition to easily adding, removing, and editing events, your
                    staff will be able to easily manage ticketing and attendees
                </p>
                <p>
                    Know the statistics of attendees and events, and approval of requests to
                    attend the event.
                </p>
            </div>
        </div>

        <div class="service-one">

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
            <div class="img-service">
                <img src="{{ asset('images/Learning-amico.png') }}" alt="Time management-amico">
            </div>
        </div>
    </section>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
