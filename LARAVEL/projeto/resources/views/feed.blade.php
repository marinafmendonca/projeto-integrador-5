@extends('layouts.master')

@section('content')

  <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <form action="/createpost" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="post" id="new-post" rows="5" placeholder="Escreva aqui"></textarea>
                </div>
                
                <input type="hidden" value="{{ Session::token() }}" name="_token">
                <button class="btn btn-primary" >
                <i class="material-icons" style="font-size:15px;color:white">perm_media</i>
                </button>
             
                  <button type="submit" class="btn btn-primary">Postar</button>
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
                            <a href="#" class="btn btn-primary">Editar</a>
                            <a href="#" class="btn btn-primary">Excluir</a>
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
