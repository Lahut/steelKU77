<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    // 1 Post beLongs to 1 Category
    public function caegory() {
        //belongsto เป็นของ
            return $this->belongsTo(Category::class);
    }
    public function scopeEntertainment($query) {
        $category = Category::where('name', 'Entertainment')->first();
        return $query->where('category_id', $category->id);
    }
    public function scopeSport($query) {
        $category = Category::whereName('Sport')->first();
        return $query->whereCategoryId($category->id);
    }
    public function scopeActiveCategory($query) {
        $category_ids = Category::active()->pluck('id');
        return $query->whereIn('category_id', $category_ids);
    }
    public function isActive(){
        return $this->category->status === 'ACTIVE';
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
