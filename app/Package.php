<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class)->orderby('created_at','desc');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
    public function has_city(){
        return $this->hasMany(Has_city::class);
    }

}
