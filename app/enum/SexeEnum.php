
<?php

namespace App\enum;

// create enum for sexe enum
enum SexeEnum: int
{
    case Homme = 1;
    case Femme = 2;


    // make labels
    public static function labels()
    {
        return [
            self::Homme->name => 'Homme',
            self::Femme->name => 'Femme'
        ];
    }
}
