<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    protected $table = 'brands';
    protected $fillable = ['brand_name', 'brand_alias'];

    public function products() {
        return $this->hasMany('App\Models\Product');
    }
}
