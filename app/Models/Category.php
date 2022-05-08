<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function categories(){
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
    public function childCategories(){
        return $this->hasMany(Category::class, 'parent_id', 'id')->with('categories');
    }

    public function products(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
