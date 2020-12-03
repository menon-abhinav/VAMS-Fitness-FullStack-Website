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
        return $this->hasMany(Blog::class)->latest();
    }

    // Relation To Package
    public function package(){
        return $this->belongsTo(Package::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class)->latest();
    }

    public function order(){
        return $this->hasMany(Order::class);
    }

    public function transaction(){
        return $this->hasManyThrough(Transaction::class,Order::class);
    }

    public function plan(){
        return $this->hasOne(Plan::class);
    }

    public function contact(){
        return $this->hasMany(Contact::class)->latest();
    }

    public function cart(){
        return $this->hasOne(Cart::class);
    }
}


