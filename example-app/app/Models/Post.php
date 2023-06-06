<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'excerpt', 'body', 'category_id'];
    protected $guarded = [];
    //can also use $guarded which is the opposite of $fillable. Every is available unless stated.

    // protected $with = ['category', 'author']; 
    //defaults to replace eager load stating in routes

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
