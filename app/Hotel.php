<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //oneToMany relationship
    //get all the facilities that a hotel has

    public function facilities(){
        return $this->belongsToMany('App\Facility','hotel_facility');
    }

    //Many hotels have many cuisines
    public function cuisines(){
        return $this->belongsToMany('App\Cuisine','cuisine_hotel');
    }

    
}
