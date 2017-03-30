<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    public function has_city(){
        return $this->hasMany(Has_city::class);
    }
    public function has_image(){
        return $this->hasMany(Has_image::class);
    }

}
