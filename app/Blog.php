<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
 
 
    protected $fillable = [
        'subject','content','user_id'
    ];
 
 
 
    // RELATION MODEL 
 
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class)->latest();
    }
}
