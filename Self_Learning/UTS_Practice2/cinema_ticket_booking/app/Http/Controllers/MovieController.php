<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show(Movie $movie)
    {

        $movies = $movie::all();
        return view('listFilm', ['movies' => $movies]);
    }

    public function toForm(Movie $movie)
    {
        $movieId = $movie->id;
        $movieDetail = $movie::find($movieId);
        $members = Member::all();

        return view('bookTicket', ['movie' => $movieDetail, 'members' => $members]);
    }

    public function showTicket(Movie $movie)
    {

        $tickets = $movie->tickets()->get();

        return view('listTicket', ['tickets' => $tickets, 'movies' => $movie]);
    }
}
