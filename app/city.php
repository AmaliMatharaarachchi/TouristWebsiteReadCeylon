<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function has_city(){
        return $this->hasMany(Has_city::class);
    }
    public function has_image(){
        return $this->hasMany(Has_image::class);
    }

    public function customizeTour(){
        return $this->hasMany(CustomizeTour::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }


}
