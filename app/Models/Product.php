<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;
    
    protected $table = 'order_details';
    protected $guarded = [];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    
    public function brand() {
        return $this->belongsTo('App\Models\Brand');
    }

    
    public function orders() {
        return $this->belongsToMany('App\Models\Order');
    }
}
