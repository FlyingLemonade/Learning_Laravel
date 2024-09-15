<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;
    protected $primrayKey = 'ID';
    protected $table = 'units';
    protected $fillable = [
        'name',
        'unitLevel',
        'createdAt',
        'updatedAt',

    ];

    protected $rules = [
        'ID' => 'required|string',
        'name' => 'required|string',
        'unitLevel' => 'required|int',
        'isActive' => 'required|boolean',
        'createdAt' => 'required|timestamp',
        'updatedAt' => 'required|timestamp',

    ];
}
