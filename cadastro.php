<<<<<<< HEAD


=======
<?php
//gravar imagem enviada
if (isset($_FILES['fotoPerfil'])) {
  $foto = $_FILES['fotoPerfil'];
  $fotoName = $foto['name'];
  if ($foto['error'] === UPLOAD_ERR_OK) {
    $path = "image/".$fotoName;
      $ok = move_uploaded_file($foto['tmp_name'], $path);
      if ($ok) {
        //salvar no json!
      }
  }
}
?>
>>>>>>> 51a1f75dbfab9919f131dde9b0e6bab9d741d06c
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

<<<<<<< HEAD
    <form action="controleCadastro.php" method="post" enctype="multipart/form-data">
=======
    <form action="cadastro.php" method="post" enctype="multipart/form-data">
>>>>>>> 51a1f75dbfab9919f131dde9b0e6bab9d741d06c
      <?php
      // if ($_POST){
      //   if($_POST['senha'] != $_POST['confirma-senha']){
      //     echo "<p> Senha não é compativel </p>";
      // }
      // }
       ?>
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
                     <?php
                                    if(isset($_GET['error'])){
                                     
                                        echo "<div class=\"alert alert-danger\" role=\"alert\">".$_GET['error']."</div>";
                                  
                                    }
                                 ?>
                    <div class="modal-body">
                        <div class="form-group row">
                                

                            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input required placeholder="Nome" type="text" class="form-control" id="nome" name="nome"  value='<?php echo
                                 isset($_POST['nome'])?$_POST['nome']:''; ?>' required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input required type="email" class="form-control" id="email" name="email" placeholder="usuario@e-mail.com.br"  value='<?php echo
                                 isset($_POST['email'])?$_POST['email']:''; ?>'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                            <div class="col-sm-10">
                                <input required type="password" class="form-control" name="senha" id="senha">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirmaSenha" class="col-sm-2 col-form-label">Confirmar Senha</label>
                            <div class="col-sm-10">
                                <input required type="password" class="form-control" name="confirmaSenha"  id="confirmaSenha">
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
                            <label for="campus" class="col-sm-2 col-form-label">Curso</label>
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
                    </div>

                        <div class="modal-footer">

                        <input type="submit" class="btn btn-primary">
                        
                        <a href="home.php"class="btn btn-primary">Voltar</a>
                    
                 
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
