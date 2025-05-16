<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
     public function blog()//blog_id
    {
        return $this->belongsTo(Blog::class);
    }
    public function user()//author_id
    {
        return $this->belongsTo(User::class);
    }
}
