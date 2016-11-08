<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use App\File;

class PostController extends Controller
{
    //
    public function indexGet($slug)
    {
      $post = Post::where('slug', $slug)->first();

      $file = File::where('post_id', $post->id)->first();

      return view('post.index', compact('post', 'file'));
    }
}
