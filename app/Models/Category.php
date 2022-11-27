<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // public function products()
    // {
    //     return $this->hasMany(Product::class, 'category_id', 'id');
    // }

    public function products()
    {
        return $this->belongsToMany(Product::class, ProductCategory::class, 'category_id', 'product_id');
    }

    public function reviews()
    {
        return $this->hasManyThrough(Review::class, Product::class, 'category_id', 'product_id', 'id');
    }
}
