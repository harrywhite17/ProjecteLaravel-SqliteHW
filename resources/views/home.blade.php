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

    <div class="container text-center mt-5">
        <div class="jumbotron py-5 bg-dark text-white shadow-lg">
            <h1 class="display-4 mb-3">Benvingut a <span class="text-info">LaravelTinkering</span></h1>
            <p class="lead">La teva plataforma definitiva per gestionar i explorar col·leccions de pel·lícules i música sense esforç. Troba les teves pel·lícules i cançons favorites, afegeix noves entrades i comparteix-les amb els teus amics.</p>
        </div>
    </div>

    <div id="collections" class="container mt-5">
        <div class="row text-center">
            <!-- Movies Section -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <i class="fas fa-film fa-3x text-primary mb-3"></i>
                        <h2 class="card-title">Pel·lícules</h2>
                        <p class="card-text">Submergeix-te en la nostra extensa col·lecció de pel·lícules, des de clàssics fins a estrenes recents. Afegeix noves pel·lícules, edita les existents, o consulta els detalls de les teves pel·lícules preferides.</p>
                        <a href="{{ route('movies.index') }}" class="btn btn-primary">Explora les Pel·lícules</a>
                    </div>
                </div>
            </div>

            <!-- Songs Section -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <i class="fas fa-music fa-3x text-success mb-3"></i>
                        <h2 class="card-title">Cançons</h2>
                        <p class="card-text">Gestiona les teves cançons preferides o explora la nostra vasta base de dades. Afegeix noves cançons, edita els detalls, o comparteix-les amb altres usuaris. Troba les cançons per gènere, artista o àlbum.</p>
                        <a href="{{ route('songs.index') }}" class="btn btn-success">Explora les Cançons</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div id="testimonials" class="container mt-5">
        <h2 class="text-center text-white mb-4">Testimonis</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white shadow-sm">
                    <div class="card-body">
                        <p class="card-text">"LaravelTinkering ha canviat la meva manera de descobrir música i pel·lícules. La plataforma és fàcil d'usar i la col·lecció és enorme!"</p>
                        <footer class="blockquote-footer text-info">Joan M.</footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white shadow-sm">
                    <div class="card-body">
                        <p class="card-text">"M'encanta com puc gestionar les meves llistes de pel·lícules i música. És una plataforma molt pràctica!"</p>
                        <footer class="blockquote-footer text-info">Anna P.</footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white shadow-sm">
                    <div class="card-body">
                        <p class="card-text">"Una experiència increïble! La varietat de contingut és impressionant i la interfície és molt amigable." </p>
                        <footer class="blockquote-footer text-info">Marc L.</footer>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews Section -->
    <div id="reviews" class="container mt-5">
        <h2 class="text-center text-white mb-4">Ressenyes</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white shadow-sm">
                    <div class="card-body">
                        <p class="card-text">"Una plataforma ideal per als amants del cinema i la música. Trobem de tot i és molt intuïtiva!"</p>
                        <footer class="blockquote-footer text-info">Laura B.</footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white shadow-sm">
                    <div class="card-body">
                        <p class="card-text">"És fàcil d'usar i té tot el que necessito per organitzar les meves pel·lícules i música preferides!"</p>
                        <footer class="blockquote-footer text-info">Pere F.</footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white shadow-sm">
                    <div class="card-body">
                        <p class="card-text">"No només pots gestionar les teves col·leccions, sinó també explorar noves pel·lícules i àlbums de forma senzilla!"</p>
                        <footer class="blockquote-footer text-info">Clara G.</footer>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container-fluid">
            <p class="mb-0">&copy; {{ date('Y') }} LaravelTinkering. Tots els drets reservats.</p>
            <a href="#" class="text-info text-decoration-none">Política de Privacitat</a> | <a href="#" class="text-info text-decoration-none">Termes del Servei</a>
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
            margin-top: 100px;
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

        .btn-primary, .btn-success {
            background: rgba(0, 0, 0, 0.7); /* Transparent background */
            border: none;
        }

        .btn-primary:hover, .btn-success:hover {
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
    </style>

@endsection
