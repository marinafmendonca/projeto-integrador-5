
<?php


if($_POST){


    if(isset($_POST['email']) && isset($_POST['senha'])){
      $arqJson = "usuario.json";
      $conteudo = file_get_contents($arqJson);
      $jsonParaArray = json_decode($conteudo, true);


      foreach($jsonParaArray as $usuario){
        foreach($usuario as $dados){
              if($_POST['email'] === $dados['email'] && $_POST['senha']===$dados['senha']){
               session_start();
                $_SESSION['usuarioLogado'] = true;
                $_SESSION['nomeUsuario'] = $dados["nome"];
                $_SESSION['emailUsuario'] = $dados["email"];
                $_SESSION['FotoUsuario'] = $dados["caminhoFoto"];

                if(isset($_POST['lembrarUsuario'])) {
                  setcookie("email", $_POST ["email"]);
                }else{

                  //http://www.php.net/manual/pt_BR/function.setcookie.php
                  // parametros do setcookie usados aqui: 1 - nome do meu cookie,
                  //2 valor (coloquei vazio), 3 - tempo (coloquei data anterior ao dia  atual)

                  setcookie('email', '', time()-3600);
                }
                // header('location:\projeto-integrador-5\paginadepublicacao\index.php');
                header('location:\projeto-integrador-5\usuario.php');
              }
        }
      }

    }
}
?>


<!DOCTYPE html>
<html lang="br-pt" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <title>Login</title>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/login.css">

  <script>
    //Linha de codigo encontrada no stackoverflow (jquery)para exbir o modal
    // Document  é a pagina;
    // ready é quando ele esta pronto
    // modal.('show') é para exibir o modal
    $(document).ready(function () {
      $('#modalCadastro').modal('show');
    })

  </script>


</head>

<style>
  @keyframes scrollBgGridLinks {
    from {
      transform: translateY(0px);
    }
    to {
      transform: translateY(-600px);
    }
  }
</style>


<body>

  <div class="slide"></div>

  <div class="transparencia">


    <form method="POST" action="login.php">
      <div class="modal" id="modalCadastro" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Logar</h5>
              <img class="logoCadastro" src="image/logoCadastro.png" alt="talkHouse">
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
              <?php

             ?>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-12">
                  <input type="email" class="form-control" name= "email" id="email" value="<?php echo @$_COOKIE["email"];?>"  placeholder="usuario@e-mail.com.br">
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
              <div class="container text-center ml-0">
                <input type="submit"  class="btn btn-primary btn-lg" value ="Entrar">
                <a href="home.php" class="btn btn-primary btn-lg">Voltar</a>
              </div>
              </div>
            </div>
          </div>

        </div>
        <footer class="page-footer font-small indigo">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-3 mx-auto">

      <!-- Links -->

      <ul class="list-unstyled">
        <li>
          <a href="#!">Central de Ajuda</a>
        </li>
        <li>
          <a href="#!">Termos</a>
        </li>
    </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-3 mx-auto">

      <!-- Links -->
    <ul class="list-unstyled">
        <li>
          <a href="#!">Sobre Nós</a>
        </li>
        <li>
          <a href="#!">Blog</a>
        </li>
    </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-3 mx-auto">

      <!-- Links -->

      <ul class="list-unstyled">
        <li>
          <a href="#!">Trabalhe na talkHouse</a>
        </li>
        <li>
          <a href="#!">Saiba Mais</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-3 mx-auto">

      <!-- Links -->
      <ul class="list-unstyled">
        <li>
          <a href="#!">Política de Privacidade</a>
        </li>
        <li>
          <a href="faq.php">Faq</a>
        </li>
    </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2018 Copyright:Grupo5
</div>
<!-- Copyright -->

</footer>




      </div>
      </form>
  </div>





</body>


</html>
