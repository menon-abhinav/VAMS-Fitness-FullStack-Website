<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first-name','last-name', 'email', 'password','mobile','package_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    // RELATION MODEL 



    // Relation to Blog 
    public function blog(){
        return $this->hasMany(Blog::class);
    }

    // Relation To Package
    public function package(){
        return $this->belongsTo(Package::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
