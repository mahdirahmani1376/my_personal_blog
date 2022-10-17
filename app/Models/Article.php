<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $with = ['category','tags'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function authors(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function scopeFilter($query, array $filters){
        $query->when($filters['category'] ?? false, fn($query , $category) =>
            $query->wherehas('category', fn($query) =>
                $query->where('name',$category)
            )
        );
    }
}
