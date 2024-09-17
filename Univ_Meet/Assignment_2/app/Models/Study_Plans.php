<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Study_Plans extends Model
{

    use HasFactory;

    public function student(): BelongsTo
    {
        return $this->belongsTo(Units::class, 'student_id');
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }


    protected $primaryKey = 'ID';
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
