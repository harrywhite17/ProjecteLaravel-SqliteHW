<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'artist' => 'required|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'genre' => 'required|max:255',
            'duration' => 'required|integer|min:1',
        ]);

        Song::create($validatedData);

        return redirect()->route('songs.index')->with('success', 'Song created successfully.');
    }

    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    public function update(Request $request, Song $song)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'artist' => 'required|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'genre' => 'required|max:255',
            'duration' => 'required|integer|min:1',
        ]);

        $song->update($validatedData);

        return redirect()->route('songs.index')->with('success', 'Song updated successfully.');
    }

    public function destroy(Song $song)
    {
        $song->delete();

        return redirect()->route('songs.index')->with('success', 'Song deleted successfully.');
    }
}
