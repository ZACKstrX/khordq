<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    protected $fillable=[

        'resturant_name',
        'speciality',
        'location',
        'number'
    ];
    use HasFactory;
}
