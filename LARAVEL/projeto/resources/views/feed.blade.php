@extends('layouts.master')

@section('content')

  <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Escreva seu post</h3></header>
            <form action="/createpost" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="post" id="new-post" rows="5" placeholder="Escreva aqui"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Postar</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
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

@endsection
