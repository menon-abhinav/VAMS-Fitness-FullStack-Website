<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'package_id','days','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
