<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomizeTour extends Model
{
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function tour(){
        return $this->belongsTo(Tour::class);
    }
}
