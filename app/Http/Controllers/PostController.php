<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PostController extends Controller
{
    //
    public function index($id)
    {
      $post = Post::find($id);

      return view('post.index');s
    }
}