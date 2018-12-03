@extends('layouts.master')

@section('content')

  <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <form action="/createpost" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="post" id="new-post" rows="5" placeholder="Escreva aqui"></textarea>
                </div>
                
                <input type="hidden" value="{{ Session::token() }}" name="_token">
                <a><i class="material-icons" style="font-size:38px;color:blue">perm_media</i></a>
                <a><i class="material-icons" style="font-size:38px;color:blue">subject</i></a>
            </form>
      </div>
  </section>
  <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
          @isset($posts)
            <header><h3>Outros posts</h3></header>
            @foreach($posts as $post)
                <article class="post" data-postid="{{ $post->id }}">
                    <p>{{ $post->post }}</p>
                    <div class="info">
                        Postado por 
                    </div>
                    <div class="interaction">

                    </div>
                </article>
            @endforeach
            @endisset
        </div>
    </section>

    <div id="publish">
        
    </div> 
    
    <div id="publish">
        
    </div> 
    <style type="text/css">
    div#publish{ width: 400px; height:270px; display:block ; margin: auto; border: none;border-radius:5px;background: #FFF; box-shadow: 0 0 20px #A1A1A1; margin-top:100px;}
    div#publish textarea{width: 300px; height: 150px; display: block; margin: auto;border-radius:5px; padding-left: 5px; padding-top: 5px;border-width:1px; border-color: #A1A1A1;}
    div#publish img{margin-top:0px; margin-left: 10px; width:40px; cursor:pointer;}
    div#publish input[type="submit"]{width: 70px; height: 25px; border-radius:3px; float:right;margin-right:15px; border: none; margin-top: 5px; background: #4169E1; color: #FFF;cursor:pointer;}
    div#publish input[type="submit"]: houver{background: #001F3F;}
    </style>

@endsection
