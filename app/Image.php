<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function has_image(){
        return $this->hasMany(Has_image::class);
    }
}
