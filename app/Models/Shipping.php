<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = ['order_id', 'address', 'shipping_method', 'status'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

