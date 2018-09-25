<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  if (isset($_POST['recuperaSenha'])) {
    $email=$_POST['recuperaSenha'];
    $arquivo = 'usuario.json';
    $senha=null;
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
      if(!$senha) echo "<div class='alert alert-danger'>E-mail inexistente</div>";
      else{
        $msg = "<!DOCTYPE html><html lang=\"en\" dir=\"ltr\">
        <head><meta charset=\"utf-8\"></head>
        <body>Sua senha é <b>$senha</b></body></html>";

        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'talkhouse.pi5@gmail.com';                 // SMTP username
          $mail->Password = 'projetointegrador5';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to
          //Recipients
          $mail->setFrom('talkhouse.pi5@gmail.com', 'talkHouse');
          $mail->addAddress($email);     // Add a recipient
          //Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'talkHouse - Senha';
          $mail->Body    = $msg;
          $mail->AltBody = strip_tags($msg);

          $mail->send();
          echo "<div class='alert alert-success'>Senha enviada por e-mail!</div>";
        } catch (Exception $e) {
          echo 'Senha não pode ser enviada. Mailer Error: ', $mail->ErrorInfo;
        }

      }
    }

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
