<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;


    protected $table = 'movies';
    protected $primaryKey = 'id';

    public static array $rules = [
        'movie_title' => 'required|string|max:100',
        'duration' => 'required|integer',
        'release_date' => 'required|date'
    ];


    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'movie_id', 'id');
    }
}
