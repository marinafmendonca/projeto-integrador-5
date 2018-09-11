<?php
if(isset($_POST['senha'])&& isset($_POST['confirmaSenha'])){
  if($_POST['senha'] != $_POST['confirmaSenha']){
    header("Location:cadastro.php?error=true");
  }
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php require_once 'header.php' ?>
    <div class="container my-4">
      <div class="row">
        <div class="col-lg-4 col-xl-4 text-center" style="border-right:2px solid rgb(200,200,200)">
          <?php
          if (isset($_FILES['fotoPerfil'])) {
            $foto = $_FILES['fotoPerfil'];
            $fotoName = $foto['name'];
            if ($foto['error'] === UPLOAD_ERR_OK) {
              $path = "image/".$fotoName;
              // if(file_exists($path)){
              //   echo "Arquivo já existe";
              // }
              // else {
                $ok = move_uploaded_file($foto['tmp_name'], $path);
                if ($ok) {
                  echo "<img class='fotoPerfil img-fluid mb-2' src='image/$fotoName' alt='foto de perfil'>";
                }
              // }
            }
          } else {
            echo "<img class='fotoPerfil img-fluid mb-2' src='image/colearning1.JPG' alt='foto de perfil'>";
          }
          ?>
          <?php
            if (isset($_POST['nome'])) {
              $nome=$_POST['nome'];
              echo "<h3>$nome</h3>";
            }
            else echo "<h3>Nome Sobrenome</h3>";
           ?>
          <h4>Campus</h4>
          <h4>Curso</h4>
        </div>
    </div>
  </div>
  <?php require_once 'footer.php' ?>
  </body>
</html>