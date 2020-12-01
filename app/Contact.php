<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'user_id',
        'message',
        'reply_user_id',
        'reply_message'
    ];
}
