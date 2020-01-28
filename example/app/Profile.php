<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //getRouteKeyName to override the one in the model 
    public function getRouteKeyName() {
        return 'username';
    }
}
