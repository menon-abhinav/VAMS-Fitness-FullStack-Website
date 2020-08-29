<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function package(){
        return $this->belongsToMany(Package::class);
}

}
