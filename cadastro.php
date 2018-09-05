<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/cadastro.css">

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

    <div class="transparencia"></div>

    <form action="usuario.php" method="post" enctype="multipart/form-data">

        <div class="modal" id="modalCadastro" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastrar</h5>
                        <img src="image/logoCadastro.png" style="height: 10%; width: 10%;" alt="talkHouse">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nome" name="nome" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="usuario@e-mail.com.br">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="senha">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirmaSenha" class="col-sm-2 col-form-label">Confirmar Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="confirmaSenha">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="upload-foto" class="col-sm-2 col-form-label">Envie sua foto</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" id="upload-foto" name="fotoPerfil">
                            </div>
                        </div>

                        <small>Ao inscrever-se, você concorda com os Termos de Serviço e com as Políticas de Privacidade,
                            incluindo o Uso de Cookies. Outras pessoas poderão encontrar você pelo e-mail ou número de telefone
                            fornecido.</small>
                    </div>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary">
                            <!-- <a href="#" class="btn btn-primary">Confirmar</a> -->
                            <a href="home.php" class="btn btn-primary">Voltar</a>

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




</body>

</html>
