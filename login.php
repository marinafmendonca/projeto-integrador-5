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


    <form>
      <div class="modal" id="modalCadastro" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Logar</h5>
              <img class="logoCadastro" src="image/logoCadastro.png" alt="talkHouse">
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->

            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-12">
                  <input type="email" class="form-control" id="email" placeholder="usuario@e-mail.com.br">
                </div>
              </div>
              <div class="form-group row">
                <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-12">
                  <input type="password" class="form-control" id="senha" placeholder="">
                </div>
              </div>

              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="lembrar-login">
                <label class="form-check-label" for="lembrar-login">Lembrar usuário?</label>
                <small class="form-text"><a href="#">Esqueceu a sua senha?</a></small>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-primary">Entrar</a>
                <a href="home.php" class="btn btn-primary">voltar</a>
              </div>
            </div>
          </div>



        </div>
      </div>
  </div>



  </form>
</body>


</html>