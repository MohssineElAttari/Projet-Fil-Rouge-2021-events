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
                        <li class="nav_env__item"><a href="{{ url('/') }}" class="nav_env__link active_env">Home</a>
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
    <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <section class="section-container">

            <div class="create">
                <h1>Creat New Events</h1>
                <p>
                    Give your event a name.
                </p>
                <p>
                    See how your name appears on the event page and a list of all places
                    where your event name will be used
                </p>
                <input class="evant-input" name="titre" type="text" placeholder="entrer name event">
                <hr>
                <h3>Choose a category for your event.*</h3>
                <p>Choosing relevant categories helps to improve the discoverability of your event.</p>
                <div class="select-ev">
                    <select name="category">
                        <option value="">All Category</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <hr>
                <h3>When is your event?</h3>
                <p>Tell your attendees when your event starts so they can get ready to attend.</p>
                <div class="adrsse-event">
                    <input type="date" name="day" placeholder="Enter the day of the event">
                    <input type="time" name="time" placeholder="Enter the event start time">
                    <input type="number" name="duration" placeholder="event duration">
                </div>
                <hr>
                <h3>Add a cover images to your event .</h3>
                <p>Upload cover images for your event!</p>
                <input type="file" accept=".png, .jpg, .jpeg .jpg , .png , .jpeg , .gif , .svg" class="btn btn-primary"
                    name="image" onchange="loadFile(event)">

                <br>
                <br>
                <br>
                <img src="{{ asset('images/Conference-amico.png') }}" style="width: 300px;" alt="Image folder-rafiki"
                    id="outputImage">
                <hr>

                {{-- @error('cover')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror --}}

                <h3>Please describe your event.</h3>
                <p>Write a few words below to describe your event and provide any extra information such as schedules,
                    itinerary
                    or any special instructions required to attend your event.</p>
                <textarea name="description" id="" cols="30" rows="10"
                    style="width: 1000px; height: 300px; margin:10px 20px"></textarea>
                <hr>
                <h3>
                    Where is your event taking place? *
                </h3>
                <p>
                    Add a venue to your event to tell your attendees where to join the event.
                </p>
                <div class="place-event">
                    <label for="city">City *</label>
                    <select name="city">
                        <option value="">All cities</option>
                        @foreach ($cities as $citie)
                            <option value="{{ $citie->id }}">{{ $citie->name }}</option>
                        @endforeach
                    </select>
                    <label for="address">Address *</label>
                    <input type="text" name="address" id="address">
                </div>
                <hr>
                <div class="valider-btn">
                    <input type="submit" class="valider-event" value="Valider">
                </div>

            </div>

        </section>
    </form>
    {{-- <form id="regForm" action="">

        <h1>Register:</h1>

        <!-- One "tab" for each step in the form: -->
        <div class="tab">Name:
            <p><input placeholder="First name..." oninput="this.className = ''"></p>
            <p><input placeholder="Last name..." oninput="this.className = ''"></p>
        </div>

        <div class="tab">Contact Info:
            <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
            <p><input placeholder="Phone..." oninput="this.className = ''"></p>
        </div>

        <div class="tab">Birthday:
            <p><input placeholder="dd" oninput="this.className = ''"></p>
            <p><input placeholder="mm" oninput="this.className = ''"></p>
            <p><input placeholder="yyyy" oninput="this.className = ''"></p>
        </div>

        <div class="tab">Login Info:
            <p><input placeholder="Username..." oninput="this.className = ''"></p>
            <p><input placeholder="Password..." oninput="this.className = ''"></p>
        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

    </form> --}}

@endsection
<script>
    let loadFile = function(event) {
        // alert('ok');
        let image = document.getElementById('outputImage');
        image.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
@section('footer')
    @include('layouts.footer')
@endsection
