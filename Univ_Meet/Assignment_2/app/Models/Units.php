<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Units extends Model
{
    use HasFactory;





    protected $primaryKey = 'ID';
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

    public function students(): HasMany
    {
        return $this->hasMany(Students::class, 'unit_ID');
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Courses::class, 'unit_ID');
    }
}
