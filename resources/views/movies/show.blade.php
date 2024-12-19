@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">LaravelTinkering</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('movies.index') }}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('songs.index') }}">Songs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="collections" class="container mt-5">
        <div class="row text-center justify-content-center">
            <!-- Movie Details Section -->
            <div class="col-md-8 mb-4">
                <div class="card shadow-sm h-100" style="min-height: 700px;">
                    <div class="card-body">
                        <h5 class="card-title" style="margin-bottom: 30px; font-size: 2rem; font-weight: bold;">{{ $movie->title }} ({{ $movie->year }})</h5>
                        <h6 class="card-subtitle mb-4" style="color: white; font-weight: bold; font-size: 1.25rem; margin-bottom: 40px;">Directed by {{ $movie->director }}</h6>
                        <p class="card-text" style="margin-bottom: 40px; font-size: 1.1rem;"><strong>Description:</strong> {{ $movie->description }}</p>
                        <p class="card-text" style="margin-bottom: 40px; font-size: 1.1rem;"><strong>Year of Release:</strong> {{ $movie->year }}</p>
                        <p class="card-text" style="margin-bottom: 40px; font-size: 1.1rem;"><strong>Rating:</strong> {{ $movie->rating }}/10</p>
                        <p class="card-text" style="margin-bottom: 40px; font-size: 1.1rem;"><strong>Genre:</strong> {{ $movie->genre }}</p>

                        <!-- Flexbox container for the buttons to align them in the center -->
                        <div class="d-flex justify-content-center align-items-center" style="gap: 20px; margin-bottom: 40px;">
                            <a href="{{ route('movies.edit', $movie) }}" class="btn btn-warning" style="padding: 12px 25px; font-size: 1.1rem;">Edit</a>
                            <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this movie?')" style="padding: 12px 25px; font-size: 1.1rem;">Delete</button>
                            </form>
                            <a href="{{ route('movies.index') }}" class="btn btn-secondary" style="padding: 12px 25px; font-size: 1.1rem;">Back to Movies</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-5">
        <div class="container-fluid">
            <p class="mb-0" style="font-size: 1.2rem;">&copy; {{ date('Y') }} LaravelTinkering. All rights reserved.</p>
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
            overflow-x: hidden;
            background: #0a192f;
            color: #fff;
        }

        body {
            background: url('https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExNmdhbHhheDdtNmpzMjNsMmZ2OW1qMzNvYWpnNmVjOGI3bnoxa2FleSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/iicDrNGWxHmDrIni6j/giphy.gif') no-repeat center center fixed;
            background-size: cover;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: backgroundAnimation 10s ease-in-out infinite;
            background-color: transparent;
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
            background: rgba(0, 0, 0, 0.7);
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

        .card {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 30px;
            margin-top: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 700px;
        }

        .card-text {
            color: #fff;
            font-size: 1.1rem;
        }

        .btn {
            font-size: 1.1rem;
            padding: 12px 25px;
            border-radius: 25px;
            background: rgba(0, 0, 0, 0.7);
            border: none;
            color: #fff;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: rgba(0, 0, 0, 0.9);
        }

        .btn-primary, .btn-success, .btn-info, .btn-warning, .btn-danger {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            color: #fff;
        }

        .btn-primary:hover, .btn-success:hover, .btn-info:hover, .btn-warning:hover, .btn-danger:hover {
            background: rgba(0, 0, 0, 0.9);
        }

        footer {
            bottom: 0;
            padding: 3rem;
            text-align: center;
            color: #bbb;
            font-size: 1.2rem;
        }

        footer a:hover {
            color: #fff;
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
