@extends('layouts.master')

@section('content')
<div class="container mt-5 p-2">
  <div class="text-center my-4">
    <img id="logo" class="img-fluid" src="image/logo.png" alt="logo">
  </div>
  <h2 class="text-center">Bem-vindo à talkHouse</h2>
  <h3 class="text-center">A talkHouse é a rede social de alunos e professores da Digital House</h3>
</div>

<form action="/login" method="post" enctype="multipart/form-data">
  @csrf
  <div class="login">
    <h3>Login</h3>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">E-mail</label>
      <div class="col-sm-12">
        <input type="email" class="form-control" name= "email" id="email" value="<?php echo @$_COOKIE["email"];?>"  placeholder="usuario@email.com.br">
      </div>
    </div>
    <div class="form-group row">
      <label for="senha" class="col-sm-2 col-form-label">Senha</label>
      <div class="col-sm-12">
        <input type="password" class="form-control" name= "senha" id="senha" placeholder="">
      </div>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" name= "lembrarUsuario"id="lembrar-login">
      <label class="form-check-label" for="lembrar-login">Lembrar usuário?</label>
      <small class="form-text"><a href="recuperaSenha.php">Esqueceu a sua senha?</a></small>
    </div>
    <div class="modal-footer">
      <div class="row ">
        <div class="w-100">
          <div class="col  order-last">
            <button type="submit" class="btn btn-primary btn-lg" name="button">Entrar</button>
            <a href="home.php" class="btn btn-primary btn-lg">Voltar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<form action="/signup" method="post" enctype="multipart/form-data">
  @csrf
  <div class="cadastro">
    <h3>Cadastro</h3>
    <div class="form-group row">
      <label for="nome" class="col-sm-2 col-form-label">Nome</label>
      <div class="col-sm-10">
          <input required placeholder="Nome" type="text" class="form-control" id="nome" name="nome"  value='<?php echo
           isset($_POST['nome'])?$_POST['nome']:''; ?>' required>
      </div>
  </div>
  <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">E-mail</label>
      <div class="col-sm-10">
          <input required type="email" class="form-control" id="email" name="email" placeholder="usuario@email.com.br"  value='<?php echo
           isset($_POST['email'])?$_POST['email']:''; ?>'>
      </div>
  </div>
  <div class="form-group row">
      <label for="senha" class="col-sm-2 col-form-label">Senha</label>
      <div class="col-sm-10">
          <input required type="password" class="form-control" name="senha" id="senha" placeholder="*******">

      </div>
  </div>
  <div class=  "form-group row">
      <label for="confirmaSenha" class="col-sm-2 col-form-label">Confirmar Senha</label>
      <div class="col-sm-10">
          <input required type="password" class="form-control" name="confirmarSenha"  id="confirmarSenha" placeholder="*******">
      </div>
  </div>
  <div class="form-group row">
      <label for="curso" class="col-sm-2 col-form-label">Curso</label>
      <div class="col-sm-10">
        <select class="form-control" name="curso" id="curso">
          <option value="fullstack">Desenvolvimento Web Full Stack</option>
          <option value="mobile">Desenvolvimento Mobile</option>
          <option value="marketing">Marketing Digital</option>
          <option value="datascience">Data Science</option>
          <option value="gestao">Gestão de Negócios Digitais</option>
        </select>
      </div>
  </div>
  <div class="form-group row">
      <label for="campus" class="col-sm-2 col-form-label">Campus</label>
      <div class="col-sm-10">
        <select class="form-control" name="campus" id="campus">
          <option value="vilaOlimpia">Vila Olímpia, SP - Brasil</option>
          <option value="argentina">Buenos Aires - Argentina</option>
        </select>
      </div>
  </div>
  <div class="form-group row">
      <label for="upload-foto" class="col-sm-2 col-form-label">Foto Login</label>
      <div class="col-sm-10">
          <input type="file" accept="image/*" id="upload-foto" name="fotoPerfil">
      </div>
  </div>

  <small>Ao inscrever-se, você concorda com os Termos de Serviço e com as Políticas de Privacidade,
      incluindo o Uso de Cookies. Outras pessoas poderão encontrar você pelo e-mail ou número de telefone
      fornecido.</small>
      <div class="modal-footer">
        <div class="row ">
          <div class="w-100">
            <div class="col  order-last">
              <button type="submit" class="btn btn-primary btn-lg" name="button">Entrar</button>
            </div>
          </div>
        </div>
      </div>
  </div>
</form>
@endsection
