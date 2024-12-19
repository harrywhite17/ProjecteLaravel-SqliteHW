@extends('layouts.app')

@section('title', 'Inici')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LaravelTinkering</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('movies.index') }}">Pel·lícules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('songs.index') }}">Cançons</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container text-center mt-5">
        <div class="jumbotron py-5 bg-dark text-white shadow-lg">
            <h1 class="display-4 mb-3">Benvingut a <span class="text-info">LaravelTinkering</span></h1>
            <p class="lead">La teva plataforma definitiva per gestionar i explorar col·leccions de pel·lícules i música sense esforç. Troba les teves pel·lícules i cançons favorites, afegeix noves entrades i comparteix-les amb els teus amics.</p>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="container mt-5">
        <div class="row text-center">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <i class="fas fa-film fa-3x text-primary mb-3"></i>
                        <h2 class="card-title">Pel·lícules</h2>
                        <p class="card-text">Submergeix-te en la nostra extensa col·lecció de pel·lícules, des de clàssics fins a estrenes recents.</p>
                        <a href="{{ route('movies.index') }}" class="btn btn-primary">Explora les Pel·lícules</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <i class="fas fa-music fa-3x text-success mb-3"></i>
                        <h2 class="card-title">Cançons</h2>
                        <p class="card-text">Gestiona les teves cançons preferides o explora la nostra vasta base de dades.</p>
                        <a href="{{ route('songs.index') }}" class="btn btn-success">Explora les Cançons</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews Section -->
    <div class="container text-center mt-5">
        <h2 class="mb-2">Ressenyes</h2> <!-- Reduced margin-bottom -->
    </div>
    @php
        $reviews = [
            (object)[
                'name' => 'Joan Puig',
                'review' => 'Fa temps que utilitzo aquesta plataforma i he de dir que ha superat les meves expectatives. La interfície d\'usuari és intuïtiva i les funcions són exactament el que necessito per gestionar les meves col·leccions de pel·lícules i música. Molt recomanable!'
            ],
            (object)[
                'name' => 'Maria Soler',
                'review' => 'Aquesta plataforma és molt útil per mantenir un registre de les meves pel·lícules i cançons preferides. La funcionalitat de cerca és ràpida i precisa, i m\'encanta la facilitat amb què es poden afegir noves entrades. Bona feina!'
            ],
            (object)[
                'name' => 'Anna Garcia',
                'review' => 'Experiència increïble! La plataforma està ben dissenyada i ofereix una experiència sense problemes. M\'agrada especialment la funció de recomanacions, que m\'ha presentat moltes pel·lícules i cançons noves. Continueu així!'
            ],
            (object)[
                'name' => 'Pere Martínez',
                'review' => 'Recomano molt aquesta plataforma a qualsevol que li agradi el cinema i la música. Les eines de gestió de col·leccions són excel·lents i les funcions comunitàries faciliten compartir i descobrir nous continguts.'
            ],
            (object)[
                'name' => 'Carles Rovira',
                'review' => 'Bon servei en general. La plataforma té molt potencial i agraeixo les actualitzacions regulars i les noves funcions. Espero veure com evoluciona en el futur.'
            ],
            // Add more reviews as needed
        ];
    @endphp

    <div id="reviews" class="container mt-3 mb-5"> <!-- Reduced margin-top -->
        <div id="reviewsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($reviews as $index => $review)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="d-flex justify-content-center">
                            <div class="card shadow-sm h-100" style="width: 30rem;">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $review->name }}</h5>
                                    <p class="card-text">{{ $review->review }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container-fluid">
            <p class="mb-0">&copy; {{ date('Y') }} LaravelTinkering. Tots els drets reservats.</p>
        </div>
    </footer>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            overflow-x: hidden; /* Prevent horizontal scroll */
            background: #0a192f;
            color: #c9c9c9;
        }

        body {
            background: url('https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExNmdhbHhheDdtNmpzMjNsMmZ2OW1qMzNvYWpnNmVjOGI3bnoxa2FleSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/iicDrNGWxHmDrIni6j/giphy.gif') no-repeat center center fixed;
            background-size: cover;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: backgroundAnimation 10s ease-in-out infinite;
            background-color: transparent; /* Transparent background */
        }

        .container-fluid, .container {
            padding: 0;
            margin: 0;
            max-width: 100%;
        }

        nav, footer {
            position: fixed;
            width: 100%;
            z-index: 10;
            background: rgba(0, 0, 0, 0.7); /* Transparent background for better readability */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            padding-left: 20px;
        }

        .nav-link {
            font-size: 1rem;
            margin-left: 10px;
            padding-left: 10px;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #17a2b8;
        }

        .jumbotron {
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
            margin-top: 50px; /* Reduced margin-top */
            background: rgba(0, 0, 0, 0.5); /* More transparent background */
            color: #c9c9c9; /* Softer text color */
        }

        .card {
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
            background: rgba(0, 0, 0, 0.7); /* Transparent background for better readability */
            color: #c9c9c9; /* Softer text color */
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .btn {
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 25px;
        }

        .btn-primary, .btn-success, .btn-warning, .btn-info {
            background: rgba(0, 0, 0, 0.7); /* Transparent background */
            border: none;
        }

        .btn-primary:hover, .btn-success:hover, .btn-warning:hover, .btn-info:hover {
            background: rgba(0, 0, 0, 0.9); /* Slightly less transparent on hover */
        }

        i {
            transition: transform 0.3s;
        }

        i:hover {
            transform: scale(1.2);
        }

        footer {
            bottom: 0;
            padding: 1rem;
            text-align: center;
            color: #bbb;
            font-size: 0.9rem;
        }

        footer a:hover {
            color: #fff;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes backgroundAnimation {
            0% {
                background-position: 0 0;
            }
            50% {
                background-position: 100% 100%;
            }
            100% {
                background-position: 0 0;
            }
        }

        /* Ensure the main content fills the available space */
        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .jumbotron, .card, .carousel, .carousel-inner {
            flex: 1;
        }

        /* Adjust carousel controls to avoid clipping into the description */
        .carousel-control-prev, .carousel-control-next {
            width: 5%;
        }
    </style>

@endsection
