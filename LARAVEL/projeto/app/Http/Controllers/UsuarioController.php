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
    $id = Auth::id();
    session(['usuario_id'=> $id]);

    return redirect('/profilePost');
  }
  public function login(Request $request)
  {

	  $credentials = [
      'email' => $request['email'],
      'password' =>  $request['password']
        ];

    if(Auth::attempt($credentials)){
      // return redirect()->route('feed');
      $id = Auth::id();
      session(['usuario_id'=> $id]);
      return redirect('/profilePost');
    }
    else {
      return redirect()->back();
    }
  }
  public function profile()
  {
      $usuario_id = session('usuario_id');
      $usuario = Usuario::find($usuario_id);
      return view('profile')->with('usuario', $usuario_id);
  }

  public function faq()
  {
       return view('faq');
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
