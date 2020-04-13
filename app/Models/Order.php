<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['order_user_id', 'order_cus_name', 'order_total_price', 'order_address', 'order_city', 'order_phone', 'order_note', 'order_status'];

    public function products() {
        return $this->belongsToMany('App\Models\Product');
    }
}
