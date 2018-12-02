<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
  public function feed()
  {
      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('feed')->with('posts', $posts);
  }

  public function createPost(Request $request)
    {
        $this->validate($request, [
            'post' => 'required|max:500'
        ]);

        $post = new Post();
        $post->post = $request['post'];
        $mensagem = '!!!';

         if ($request->usuario()->posts()->save($post)) {
             $mensagem = 'Post successfully created!';
         }
        return view('feed')->with(['mensagem' => $mensagem]);
    }

  public function deletePost($post_id)
    {
      $post = Post::where('id', $post_id)->first();
      if (Auth::user() != $post->user) {
          return redirect()->back();
      }
      $post->delete();
      return redirect()->route('feed')->with(['mensagem' => 'Post deletado']);
    }

}
