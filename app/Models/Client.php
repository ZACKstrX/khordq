<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{ 

   public const TABLE_NAME = 'clients';

    public const COL_ID = 'id';
    public const COL_NAME = 'name';
    public const COL_LASTNAME = 'lastName';
    public const COL_AGE = 'age';
    public const COL_BIRTHDAY = 'birthDay';

    use HasFactory;
}
