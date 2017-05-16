<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Has_city extends Model
{
    public function city(){
        return $this->belongsTo(City::class);
//        return $this->belongsToMany(City::class);
    }


    public function package(){
//        return $this->hasMany(Package::class);
        return $this->belongsTo(Package::class);
    }
}
