<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            ['movie_title' => 'Science of Skibidi', 'duration' => 120, 'release_date' => '2024-03-10'],
            ['movie_title' => 'Planets of the Skibidi', 'duration' => 125, 'release_date' => '2024-03-21'],
            ['movie_title' => 'Attack on Skibidi', 'duration' => 115, 'release_date' => '2024-01-30'],
            ['movie_title' => 'The Next Skibidi', 'duration' => 130, 'release_date' => '2024-04-10'],
            ['movie_title' => 'Guardian of The Skibidi', 'duration' => 140, 'release_date' => '2024-04-14']
        ]);
    }
}
