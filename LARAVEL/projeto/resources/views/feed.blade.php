@extends('layouts.master')

@section('content')


<aside class="main-sidebar" id="sidebar-wrapper">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

<div class="cardLateral card">
            <div class="photo"></div>
            <div class="banner"></div>
            <ul>
                <li><b>Leila </b></li>
                <li>CEO: Espião do Governo</li>

            
            </ul>
            <button class="contact" id="main-button">Sobre</button>
           

</div>
<div class="social-media-banner">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
            </div>

</section>
<!-- /.sidebar -->
</aside>

  
  <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <form action="/createpost" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="post" id="new-post" rows="5" placeholder="Escreva aqui"></textarea>
                </div>
                
                <input type="hidden" value="{{ Session::token() }}" name="_token">
                <button class="btn btn-lithy" style="background-color: #149AC9; ;color: #fff; margin-bottom: 0" >
                <i class="material-icons" style="font-size:15px;color:white">perm_media</i>
                </button>
             
                  <button type="submit" class="btn btn-lighty" style="background-color: #149AC9; ;color: #fff; margin-bottom: 0">Postar</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
      </div>
  </section>
  
  
  <section class="row posts">
        <div class="col-md-6 col-md-offset-3"   style="  height:300px; ">
          @isset($posts)
            <header><h3></h3></header>
            @foreach($posts as $post)
            
            <div class="card">
                <div class="card-header">
                    Postado por <strong> {{ $post->usuario->nome }} </strong> em {{ $post->created_at }}
                </div>
                        <div class="card-body">
                         
                            <p class="card-text">{{ $post->post }}</p>
                            <a href="/feed/editarpost/{{$post->post_id}}" class="btn btn-lighty" style="background-color: #149AC9; ;color: #fff; margin-bottom: 0">Editar</a>
                            <a href="/feed/deletepost/{{$post->post_id}}" class="btn btn-lighty" style="background-color: #149AC9; ;color: #fff; margin-bottom: 0">Excluir</a>
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

@endsection
