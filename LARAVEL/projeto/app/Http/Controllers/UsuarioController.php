<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
    $curso = $request['curso'];
    $campus = $request['campus'];


    $usuario = new Usuario();
    $usuario->nome = $nome;
    $usuario->email = $email;
    $usuario->senha = $senha;
    $usuario->confirmaSenha = $confirmaSenha;
    $usuario->curso = $curso;
    $usuario->campus = $campus;

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
}
