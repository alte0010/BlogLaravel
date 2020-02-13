<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        return view('post', array(
          'post' => Post::where('slug', $slug)->firstOrFail()
        ));
    }
}
