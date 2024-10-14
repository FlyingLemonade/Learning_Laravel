<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    use HasFactory;




    protected $table = 'members';
    protected $primaryKey = 'id';

    public static array $rules = [
        'nama' => 'required|string|max:30',
        'tanggal_lahir' => 'required|date'
    ];


    protected $fillable = [
        'nama',
        'tanggal_lahir'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'member_id', 'id');
    }
}
