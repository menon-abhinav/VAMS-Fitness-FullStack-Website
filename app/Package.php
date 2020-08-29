<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    public function user(){
        return $this->hasMany(User::class);
    }

    public function content(){
        return $this->belongsToMany(Content::class);
        }


}
