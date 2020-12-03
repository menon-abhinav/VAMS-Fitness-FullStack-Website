<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id','cart'
    ];
 
    public function user(){
        return $this->belongsTo(User::class);
    }
}
