<?php
/*
    Pagina que realiza validação dos dados do cadastro e direcionameto do usuario
    logado para a area de usuario.
    
*/
$nome_usuario= @$_POST ['nome'];
$email = @$_POST['email'];
$senha = @$_POST['senha'];
$confirmarSenha = @$_POST['ConfirmarSenha'];
$foto = @$_FILES['fotoPerfil'];
$erroMensValidacao ="";

// verificando email, login e senha para inserir no cadastro 
 
if(empty($nome_usuario)){
  $erroMensValidacao = "Nome do Usuairo não pode ser em braco. </br>";
  
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
  $erroMensValidacao .= "Email invalido.</br>"; 
}

if(isset($_POST['senha'])&& isset($_POST['confirmaSenha'])){
  if($_POST['senha'] != $_POST['confirmaSenha']){ 
    $erroMensValidacao .= "Senhas incompativeis.";
    
  }
}

if(!empty($erroMensValidacao)){
 header("Location:cadastro.php?error=".$erroMensValidacao);

}else{
 
  //Dados da imagem para ser salva.
  
  $caminhoFoto = "image/".  $foto['name'];
  gravarUsuario ($nome_usuario,$email,$senha,$caminhoFoto, $foto['tmp_name']);
}


 /* Função para gravar dados do usuario no arquivo json.
 Ela recebe os dados vindo da pagina de cadastro. */

function gravarUsuario ($nome_usuario,$email,$senha,$caminhoFoto,$fotoNoneTemp){
   
  $arquivo = 'usuario.json';
   
  if(move_uploaded_file($fotoNoneTemp, $caminhoFoto)){

    if (file_exists($arquivo)){
      
      $conteudo = file_get_contents($arquivo);
      $jsonParaArray = json_decode($conteudo, true);
      $registroNovo = ["nome" => $nome_usuario, "email" => $email, "senha" => $senha , "caminhoFoto" => $caminhoFoto];
      array_push($jsonParaArray['usuario'],$registroNovo );
      
      $fp =  fopen ($arquivo,"r+");
      $arrayParaJson = json_encode($jsonParaArray);
      fwrite($fp,$arrayParaJson);
      fclose($fp);
      header("Location:login.php");
    }

  }else{
      header("Location:cadastro.php?error=Erro ao salvar imagem.");
  }
 
     
    
}




?>
