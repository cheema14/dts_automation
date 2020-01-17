<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    public function hotels(){
        return $this->belongsToMany('App\Hotel');
    }

    public function restaurants(){
        return $this->belongsToMany('App\Restaurant');
    }
}
