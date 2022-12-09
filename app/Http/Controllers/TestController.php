<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use App\Models\Video;

class TestController extends Controller
{
    public function add()
    {
        // $video = Video::find(1);	             
 
        // $tag = new Tag;
        // $tag->name = "hyyy";
         
        // $video->tags()->save($tag);


        return 'done';
    }
}
