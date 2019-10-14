<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use SoftDeletes;

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function isActive() {
        return $this->status === 'ACTIVE';
    }
    public function scopeActive($query) {
        return $query->where('status', 'ACTIVE');
    }
    public function scopeActuiveCategory($query) {
        $categories_ids = Category::actove()->pluck('id');
        return $query->whereIn('category_id', $categories_ids);
    }
}
