<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    public function treatment()
    {
        return $this->hasMany('App\Treatment', 'treat_id');
    }

}
