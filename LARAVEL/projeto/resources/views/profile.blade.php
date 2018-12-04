
@extends('layouts.master')

@section('content')

<html lang="pt-br" >

<head>
  <meta charset="UTF-8">
  <title>Perfil</title>

      
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0, user-scalable=no">
    


</head>

<body>

  <div id="perfil">

	<!-- Capa do Perfil -->
	<div class="header">
		<!-- Botão "Alterar Fundo" -->
		<button class="mui-btn">
			<div class="text">ALTERAR FUNDO</div>
			<i class="fa fa-picture-o" aria-hidden="true"></i>
		</button>
	</div>

	<!-- Avatar do Utilizador -->
	<div class="avatar">
	</div>
	<!-- Opções de Conta -->
	<div class="opperfil">
		<center>
			<!-- Botão "Editar Perfil" -->
			<button class="btn btn-lighty" style="background-color: #ab0127;border-color: #ab0127;color: #fff; margin-bottom: 0 ">
				<div class="text">ALTERAR FOTO</div>
			</button>
			<!-- Botão "Alterar Password" -->
			<button class="mui-btn mui-btn--primary" style="background-color: #ab0127;border-color: #ab0127;color: #fff; margin-bottom: 0 ">
				<div class="text">EDITAR PERFIL</div>
			</button>
		</center>
	</div>
	<br><br><br>
	<!-- Título do Perfil -->
	<div class="tituloperfil">
		<!-- Nome do Utilizador -->
		<h1>Leila Ferreira</h1>
		<div class="bigbriefing">
			<!-- Briefing do usuário -->
			<p>
				<b>Idade:</b> 1999 <b>|</b>
				<b>Distrito:</b> São Paulo <b>|</b>
				<b>Função:</b> Desenvolvedora
			</p>
		</div>
	<div class="infocandidato">
		<form class="form-inline" >
			<a class="mui-btn mui-btn--raised" style="background-color: #ab0127;border-color: #ab0127;color: #fff; margin-bottom: 0 ">FOTOS E VIDEOS</a>
			<a href="/feed" class="mui-btn mui-btn--raised mui-btn--primary"style="background-color: #ab0127;border-color: #ab0127;color: #fff; margin-bottom: 0 ">Mensagens</a>
		</form>
	</div>

	<br/><br/>

</div>


 <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <form action="/createpostProfile" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="post" id="new-post" rows="5" placeholder="Escreva aqui"></textarea>
                </div>
                
                <input type="hidden" value="{{ Session::token() }}" name="_token">
                <button class="btn btn-lithy" style="background-color: #ab0127;border-color: #ab0127;color: #fff; margin-bottom: 0" >
                <i class="material-icons" style="font-size:15px;color:white">perm_media</i>
                </button>
             
                  <button type="submit" class="btn btn-lighty" style="background-color: #ab0127;border-color: #ab0127;color: #fff; margin-bottom: 0 ">Postar</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
      </div>
  </section>
  
  
  
  <section class="row posts">
        <div class="col-md-6 col-md-offset-3"   style="  height:300px; overflow-y: auto">
          @isset($posts)
            <header><h3></h3></header>
            @foreach($posts as $post)
            
            <div class="card">
                <div class="card-header">
                    Postado por <strong> {{ $post->usuario->nome }} </strong> em {{ $post->created_at }}
                </div>
                        <div class="card-body">
                         
                            <p class="card-text">{{ $post->post }}</p>
                            <a href="/profile/editarpost/{{$post->post_id}}" class="btn btn-lighty" style="background-color: #ab0127;border-color: #ab0127;color: #fff; margin-bottom: 0 ">Editar</a>
                            <a href="/profile/deletepost/{{$post->post_id}}" class="btn btn-lighty" style= "background-color: #ab0127;border-color: #ab0127;color: #fff; margin-bottom: 0">Excluir</a>
                        </div>
                </div>
                <br>
            @endforeach
            @endisset
        </div>
    </section>

   
    <style type="text/css">
    div#publish{ display:block ; margin: auto; border: none;
    border-radius:5px;background: #FFF; box-shadow: 0 0 5px #A1A1A1; margin-top:10px;
    overflow: hidden}

    div#publish img{margin-top:0px; margin-left: 10px; width:40px; cursor:pointer;}
   
    </style>











  <script src='js/mui.mim.js'></script>



</body>

</html>


           
          
         
@endsection





