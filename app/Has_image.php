<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Has_image extends Model
{
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function image(){
        return $this->belongsTo(Image::class);
    }
}
