<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function customizeTour(){
        return $this->hasMany(CustomizeTour::class);
    }
}
