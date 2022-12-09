<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
    
        return view('posts.index', compact('posts'));
    }
    public function show($id)
    {
    	$post = Post::find($id);
        return view('posts.show', compact('post'));     
    }

    public function test()
    {
        $user = Comment::find(1);
        $user->user()->get();
        return $user;
      
    }
}
