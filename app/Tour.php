<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function CustomizeTour(){
        return $this->hasMany(User::class);
    }
}
