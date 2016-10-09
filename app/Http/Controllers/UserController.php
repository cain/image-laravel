<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\File;
use Auth;

use App\Http\Requests;

class UserController extends Controller
{
    //

    public function shareGet()
    {
      return view('share');
    }

    public function sharePost(Request $request)
    {
      // add file and post validation here

      $post = new Post;
      $post->user_id = Auth::id();
      $post->title = $request->title;

      $post->save();

      $file_path = request()->file('share')->store('files');

      $file = new File;
      $file->path = $file_path;
      $file->post_id = $post->id;
      $file->save();
      return redirect('/p/' . $post->id);
    }
}
