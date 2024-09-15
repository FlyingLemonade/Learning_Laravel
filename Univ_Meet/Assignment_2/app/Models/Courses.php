<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;


    protected $primrayKey = 'ID';
    protected $table = 'courses';
    protected $keyType = 'string';
    protected $fillable = [
        'courseCode',
        'curriculumYear',
        'courseName',
        'courseNameEN',
        'creditUnit',
        'unitID',
        'isActive',
        'createdAt',
        'updatedAt',

    ];

    protected $rules = [
        'courseCode' => 'required|string',
        'curriculumYear' => 'required|year',
        'courseName' => 'required|string',
        'courseNameEN' => 'required|string',
        'creditUnit' => 'required|string',
        'unitID' => 'required|string',
        'isActive' => 'required|string',
        'createdAt' => 'required|timestamp',
        'updatedAt' => 'required|timestamp',


    ];
}
