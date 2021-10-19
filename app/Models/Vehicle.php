<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'price',
    ];

    //não é necessário retornar timestamps
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    
}
