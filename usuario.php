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
    <div class="container" style="width=100px;">
      <?php
      if (isset($_FILES['fotoPerfil'])) {
        $foto = $_FILES['fotoPerfil'];
        $fotoName = $foto['name'];
        if ($foto['error'] === UPLOAD_ERR_OK) {
          $path = "image/".$fotoName;
          if(file_exists($path)){
            echo "Arquivo já existe";
          }
          else {
            $ok = move_uploaded_file($foto['tmp_name'], $path);
            if ($ok) {
              // echo "Foto ".$foto['name']." salva";
              echo "<img src='image/$fotoName' alt='foto de perfil'>";
            }
          }
        }
      }
      ?>
  </div>
  </body>
</html>
