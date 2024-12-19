@extends('layouts.app')

@section('title', 'Create Movie')

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
                        <a class="nav-link" href="{{ route('movies.index') }}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('songs.index') }}">Songs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5 pt-5">
        <h1 class="text-center mb-4">Create Movie</h1>

        <form action="{{ route('movies.store') }}" method="POST" class="custom-form">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label text-white">Title</label>
                <input type="text" class="form-control custom-input" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label text-white">Description</label>
                <textarea class="form-control custom-input" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label text-white">Year</label>
                <input type="number" class="form-control custom-input" id="year" name="year" min="1900" max="{{ date('Y') }}" required>
            </div>

            <div class="mb-3">
                <label for="director" class="form-label text-white">Director</label>
                <input type="text" class="form-control custom-input" id="director" name="director" required>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label text-white">Rating</label>
                <input type="number" class="form-control custom-input" id="rating" name="rating" min="0" max="10" step="0.1" required>
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label text-white">Genre</label>
                <input type="text" class="form-control custom-input" id="genre" name="genre" required>
            </div>

            <button type="submit" class="btn btn-dark custom-btn">Create Movie</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container-fluid">
            <p class="mb-0">&copy; {{ date('Y') }} LaravelTinkering. All rights reserved.</p>
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

        .custom-input {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            border: 1px solid rgba(0, 0, 0, 0.9);
            width: 80%;
            max-width: 600px;
            height: 50px;
        }

        .custom-input:focus {
            background-color: rgba(0, 0, 0, 0.9);
            border-color: #17a2b8;
            color: white;
        }

        .custom-btn {
            background-color: #212529;
            color: white;
            border: none;
            transition: background-color 0.3s ease;
        }

        .custom-btn:hover {
            background-color: #343a40;
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

        .container {
            margin-top: 100px;
        }

        .custom-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
@endsection
