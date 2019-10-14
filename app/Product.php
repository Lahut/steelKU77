<?php

namespace App;

use App\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public function productCategories() {
        //belongsto เป็นของ
            return $this->belongsTo(ProductCategory::class);
    }
    public function scopeEntertainment($query) {
        $category = ProductCategory::where('name', 'Entertainment')->first();
        return $query->where('category_id', $category->id);
    }
    public function scopeSport($query) {
        $category = ProductCategory::whereName('Sport')->first();
        return $query->whereCategoryId($category->id);
    }
    public function scopeActiveCategory($query) {
        $category_ids = ProductCategory::active()->pluck('id');
        return $query->whereIn('category_id', $category_ids);
    }
    public function isActive(){
        return $this->category->status === 'ACTIVE';
    }
}
