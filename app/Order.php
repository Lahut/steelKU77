<?php

namespace App;

use App\Product;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    public function product() {
        return $this->belongsTo(Product::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    
}
