<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';
    protected $primaryKey = 'id';
    protected $fillable = [
        'movie_id',
        'customer_name',
        'seat_number',
        'is_checked_in',
        'check_in_time',
        'member_id'
    ];
    public static array $rules = [
        'movie_id' => 'required|biginteger',
        'customer_name' => 'required|string|max:100',
        'seat_number' => 'required|string|max:5',
        'is_checked_in' => 'required|boolean',
        'check_in_time' => 'nullable|datetime',
        'member_id' => 'required|bigInteger'

    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }
}
