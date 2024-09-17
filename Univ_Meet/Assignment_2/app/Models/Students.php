<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Students extends Model
{
    use HasFactory;
    public function unit(): BelongsTo
    {
        return $this->belongsTo(Units::class);
    }

    public function studyplan(): HasMany
    {
        return $this->hasMany(Study_Plans::class, 'student_id');
    }

    protected $primaryKey = 'ID';
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
