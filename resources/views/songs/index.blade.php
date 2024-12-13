@extends('layouts.app')

@section('title', 'Songs')

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
                        <a class="nav-link" href="{{ route('movies.index') }}">Pel·lícules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('songs.index') }}">Cançons</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="collections" class="container mt-5">
        <div class="row text-center justify-content-center">
            <div class="col-md-10 mb-4">
                <!-- Songs Table -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="mb-4" style="font-size: 2rem; font-weight: bold; color: white;">Songs</h1>
                        <p class="card-text" style="color: white;">Submergeix-te en la nostra extensa col·lecció de cançons, des de clàssics fins a estrenes recents. Afegeix noves cançons, edita les existents o consulta els detalls de les teves cançons preferides.</p>
                        <a href="{{ route('songs.create') }}" class="btn btn-primary mb-4" style="padding: 12px 25px; font-size: 1.2rem;">Add New Song</a>

                        @if(session('success'))
                            <div class="alert alert-success mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="color: white;">Title</th>
                                <th style="color: white;">Artist</th>
                                <th style="color: white;">Year</th>
                                <th style="color: white;">Genre</th>
                                <th style="color: white;">Duration</th>
                                <th style="color: white;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($songs as $song)
                                <tr>
                                    <td style="color: white;">{{ $song->title }}</td>
                                    <td style="color: white;">{{ $song->artist }}</td>
                                    <td style="color: white;">{{ $song->year }}</td>
                                    <td style="color: white;">{{ $song->genre }}</td>
                                    <td style="color: white;">{{ $song->duration }} seconds</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ route('songs.show', $song) }}" class="btn btn-sm btn-info me-2" style="padding: 8px 15px; font-size: 1rem;">View</a>
                                        <a href="{{ route('songs.edit', $song) }}" class="btn btn-sm btn-warning me-2" style="padding: 8px 15px; font-size: 1rem;">Edit</a>
                                        <form action="{{ route('songs.destroy', $song) }}" method="POST" class="d-inline" style="margin: 0;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this song?')" style="padding: 8px 15px; font-size: 1rem;">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-5">
        <div class="container-fluid">
            <p class="mb-0" style="font-size: 1.2rem;">&copy; {{ date('Y') }} LaravelTinkering. Tots els drets reservats.</p>
            <a href="#" class="text-info text-decoration-none" style="font-size: 1.1rem;">Política de Privacitat</a> | <a href="#" class="text-info text-decoration-none" style="font-size: 1.1rem;">Termes del Servei</a>
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

        .table {
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
