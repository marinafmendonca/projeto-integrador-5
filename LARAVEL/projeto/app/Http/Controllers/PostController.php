<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
              
        $post->usuario_Id = Auth::user()->usuario_id;

         if ($post->save()) {
             $mensagem = 'Post successfully created!';
         }
        return view('feed')->with(['mensagem' => $mensagem]);
    }

  public function deletePost($post_id)
    {
      $post = Post::where('post_id', $post_id)->first();
      if (Auth::user() != $post->user) {
          return redirect()->back();
      }
      $post->delete();
      return redirect()->route('feed')->with(['mensagem' => 'Post deletado']);
    }

}
