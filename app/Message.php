<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function sendMessage(){
        return $this->hasMany(SendMessage::class);
    }
}
