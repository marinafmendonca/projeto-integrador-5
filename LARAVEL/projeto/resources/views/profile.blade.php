
@extends('layouts.master')

@section('content')

<?php

    /* session_start();
    
  
    if (!isset($_SESSION['usuarioLogado']) || !isset(  $_SESSION['nomeUsuario'] )){
        header('location:\projeto-integrador-5\home.php');
        exit;
    } */
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0, user-scalable=no">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/estilos.css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
  
  </head>
  <body>
   
    <div class="container my-4">
      <div class="row">
        <div class="col-lg-3 col-xl-3 text-center" style="border-right:2px solid rgb(200,200,200)">
          <?php

              if (isset($_SESSION['FotoUsuario'])) {
                echo "<img class='fotoPerfil img-fluid mb-2' src='".$_SESSION['FotoUsuario']."' alt='foto de perfil'>";
              }else{
                echo "<img class='fotoPerfil img-fluid mb-2' src='image/colearning1.JPG' alt='foto de perfil'>";
              }
          ?>
          <?php
            /* if (isset($_SESSION['nomeUsuario'])) {
              $nome= $_SESSION['nomeUsuario'];
              echo "<h2> $nome </h2>";
            }else{ echo "<h3>Nome - Sobrenome</h3>"; }; */
           ?>
          <h4>Curso</h4>
          <h4>Campus</h4>
        </div>
        <div class="col-lg-9 col-xl-9 text-center">
          <h4>Histórico</h4>
        </div>
    </div>
  </div>
  <!--  -->
  </body>
  
</html>   
@endsection
