<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{

  public function feed()
  {
    return view('feed');
  }

  public function signUp(Request $request)
  {
    $nome = $request['nome'];
    $email = $request['email'];
    $senha = bcrypt($request['senha']);
    $confirmaSenha = bcrypt($request['confirmaSenha']);
    

    $usuario = new Usuario();
    $usuario->nome = $nome;
    $usuario->email = $email;
    $usuario->senha = $senha;
    

    $usuario->save();

    Auth::login($usuario);

    return redirect('/feed');
  }
  public function login(Request $request)
  {
    if(Auth::attempt(['email' => $request['email'],'senha' => $request['senha']])){
      // return redirect()->route('feed');
      return view('feed');
    }
    else {
      return redirect()->back();
    }
  }

  public function perfil($id)
  {
    $usuario = Usuario::find($id);

    return view('perfil')->with('usuario', $usuario);
  }

  public function salvarMudancas(Request $request)
    {
        $this->validate($request, [
           'nome' => 'required|max:120'
        ]);
        $usuario = Auth::usuario();
        $nome_antigo = $usuario->nome;
        $usuario->nome = $request['nome'];
        $usuario->update();
        $file = $request->file('image');
        $filename = $request['nome'] . '-' . $usuario->usuario_id . '.jpg';
        $old_filename = $nome_antigo . '-' . $usuario->id . '.jpg';
        $update = false;
        if (Storage::disk('local')->has($old_filename)) {
            $old_file = Storage::disk('local')->get($old_filename);
            Storage::disk('local')->put($filename, $old_file);
            $update = true;
        }
        if ($file) {
            Storage::disk('local')->put($filename, File::get($file));
        }
        if ($update && $old_filename !== $filename) {
            Storage::delete($old_filename);
        }
        return redirect()->route('perfil');
    }
}
