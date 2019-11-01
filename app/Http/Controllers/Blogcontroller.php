<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Blogcontroller extends Controller
{
    public function getSingle($slug){
    	$post=Post::where('slug','=',$slug)->first();
    	return view('blog.single')->withpost($post);

    }
}
