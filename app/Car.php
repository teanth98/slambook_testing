<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Car extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'cars';
    
    protected $fillable = [
        'friendsname','username','carcompany', 'model','price','fblink','instalink','photolink','snapchatid','favoritecar','favoritebike','favoritebrand','favoritebook'
    ];
}