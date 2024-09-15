<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $primrayKey = 'ID';
    protected $keyType = 'string';
    protected $table = 'students';
    protected $fillable = [
        'NRP',
        'name',
        'dateOfBirth',
        'placeOfBirth',
        'address',
        'phoneNumber',
        'NIK',
        'createdAt',
        'updatedAt',
        'unitID'
    ];

    protected $rules = [
        'NRP' => 'required|string',
        'name' => 'required|string',
        'dateOfBirth' => 'required|date',
        'placeOfBirth' => 'required|string',
        'address' => 'nullable|string',
        'phoneNumber' => 'required|string',
        'NIK' => 'required|boolean',
        'createdAt' => 'required|timestamp',
        'updatedAt' => 'required|timestamp',
        'unitID' => 'required|timestamp'
    ];
}
