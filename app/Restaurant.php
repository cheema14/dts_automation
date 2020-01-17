<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function facilities(){
        return $this->belongsToMany('App\Facility','restaurant_rfacility');
    }

    //Many Restaurants have many cuisines
    public function cuisines(){
        return $this->belongsToMany('App\Cuisine','rcuisine_restaurant');
    }
    
}
