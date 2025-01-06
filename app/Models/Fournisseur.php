<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{ 
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'age',
        'email',
        'password',
    ];


    use HasFactory;
}
