<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id'
    ];

    public function transaction(){
        return $this->hasOne(Transaction::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
