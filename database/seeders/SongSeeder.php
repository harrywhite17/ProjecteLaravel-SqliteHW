<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::create([
            'title' => 'Bohemian Rhapsody',
            'artist' => 'Queen',
            'year' => 1975,
            'genre' => 'Rock',
            'duration' => 355
        ]);

        Song::create([
            'title' => 'Billie Jean',
            'artist' => 'Michael Jackson',
            'year' => 1983,
            'genre' => 'Pop',
            'duration' => 294
        ]);
    }
}
