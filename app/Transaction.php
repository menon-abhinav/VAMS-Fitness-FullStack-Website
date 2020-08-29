<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'order_id','txnid','txnamount','txndate','status', 'gatewayname', 'banktxnid', 'bankname'
    ];
 
    public function order(){
        return $this->belongsTo(Order::class);
    }

    
}
