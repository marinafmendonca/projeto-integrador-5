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
    $password = bcrypt($request['password']);
    $confirmaSenha = bcrypt($request['confirmaPassword']);
    

    $usuario = new Usuario();
    $usuario->nome = $nome;
    $usuario->email = $email;
    $usuario->password = $password;
    

    $usuario->save();

    Auth::login($usuario);

    return redirect('/feed');
  }
  public function login(Request $request)
  {
      	
	  $credentials = [
      'email' => $request['email'],
      'password' =>  $request['password']
        ];

    if(Auth::attempt($credentials)){
      // return redirect()->route('feed');
      return view('feed');
    }
    else {
      return redirect()->back();
    }
  }

  public function logout()
  {
      $this->guard()->logout();
      // $request->session()->flush();
      // $request->session()->regenerate();
       return view('welcome');
  }
    protected function guard()
  {
      return Auth::guard();
  }
}
