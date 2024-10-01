<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Courses extends Model
{
    use HasFactory;

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Units::class);
    }

    public function studyPlans(): HasMany
    {
        return $this->hasMany(Study_Plans::class, 'course_id');
    }

    public function students(): HasManyThrough
    {
        return $this->hasManyThrough(
            Students::class,
            Study_Plans::class,
            'ID',
            'ID',
            'sekoci',
            'student_id'
        );
    }

    protected $primaryKey = 'ID';
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
