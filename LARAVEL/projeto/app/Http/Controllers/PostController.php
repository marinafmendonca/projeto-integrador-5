<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Usuario;


class PostController extends Controller
{
  public function feed()
  {
      $posts = Post::orderBy('created_at', 'desc')->get();
      $usuario_id = session('usuario_id');
      $usuario = Usuario::find($usuario_id);
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
        $usuario_id = session('usuario_id');
         // if ($request->usuario()->posts()->save($post)) {
         //     $mensagem = 'Post successfully created!';
         // }
         $post = Post::create([
            'post'=>$request['post'],
            'usuario_id'=>$usuario_id
          ]);
         $post->save();
         return redirect()->action('PostController@feed');
        // return view('feed')->with(['mensagem' => $mensagem]);
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
