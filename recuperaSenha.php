<?php
  if (isset($_POST['recuperaSenha'])) {
    $email=$_POST['recuperaSenha'];
    $arquivo = 'usuario.json';
    if (file_exists($arquivo)){
      $conteudo = file_get_contents($arquivo);
      $jsonParaArray = json_decode($conteudo, true);
      foreach ($jsonParaArray as $array) {
        foreach ($array as $user) {
          foreach ($user as $key => $value) {
            if ($key=='email' && $value==$email) {
              $senha = $user['senha'];
            }
          }
        }
      }
      $msg = "Sua senha é $senha";
    }
    mail($email, "Senha talkHouse", $msg);
  }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Recuperar Senha</title>
   </head>
   <?php include_once 'header.php'; ?>
   <body>
     <div class="conteiner m-3">
     <h1>Esqueceu sua senha?</h1>
     <form class="" action="recuperaSenha.php" method="post">
       <label for="recuperaSenha">Insira seu e-mail</label><br>
       <input type="email" name="recuperaSenha" id="recuperaSenha">
     </form>
   </div>
     <?php include_once 'footer.php'; ?>
   </body>
 </html>
