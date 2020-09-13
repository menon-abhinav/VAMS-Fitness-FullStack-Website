<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    public function package(){
        return $this->belongsTo(Package::class);
    }
}
