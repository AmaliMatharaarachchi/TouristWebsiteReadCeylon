<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Has_city extends Model
{
    public function city(){
//        return $this->hasMany(City::class);
        return $this->belongsToMany(City::class);
    }
    public function package(){
//        return $this->hasMany(Package::class);
        return $this->belongsToMany(Package::class);
    }
}
