<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    // 1 Category has many Post(s)
    public function posts() {
        return $this->hasMany(Post::class);
    }
    // ตรวจสอบว่า field status เป็น ACTIVE หรือไม่
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
