<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
     'title',
     'author', 
     'content', 
     'tags'
    ];

    // public function post()
    // {
    //     return $this->belongsTo(Post::class);
    // }
}
