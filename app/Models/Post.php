<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Comment_Poly;

class Post extends Model
{
    use HasFactory;
   
    protected $guarded = []; 

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }


    public function comment()
    {
        return $this->morphMany(Comment_Poly::class, 'commentable');
    }



    
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
