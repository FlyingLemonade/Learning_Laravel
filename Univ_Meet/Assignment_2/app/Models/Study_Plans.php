<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study_Plans extends Model
{
    use HasFactory;
    protected $primrayKey = 'ID';
    protected $keyType = 'string';
    protected $table = 'plans';
    protected $fillable = [
        'studentID',
        'courseID',
        'period',
        'grade',
        'createdAt',
        'updatedAt',

    ];

    protected $rules = [
        'studentID' => 'required|string',
        'courseID' => 'required|string',
        'period' => 'required|string',
        'grade' => 'required|float',
        'createdAt' => 'required|timestamp',
        'updatedAt' => 'required|timestamp',

    ];
}
