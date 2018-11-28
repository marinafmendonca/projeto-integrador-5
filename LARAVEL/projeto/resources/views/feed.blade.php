@extends('layouts.master')

@section('content')

  <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Escreva seu post</h3></header>
            <form action="/createpost" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="post" id="new-post" rows="5" placeholder="Escreva aqui"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
                <!-- <input type="hidden" value="{{ Session::token() }}" name="_token"> -->
            </form>
      </div>
  </section>
  <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Outros posts</h3></header>
            @foreach($posts as $post)
                <article class="post" data-postid="{{ $post->id }}">
                    <p>{{ $post->post }}</p>
                    <div class="info">
                        Posted by {{ $post->user->first_name }} on {{ $post->created_at }}
                    </div>
                    <div class="interaction">
                        <!-- @if(Auth::user() == $post->user) -->
                            <!-- | -->
                            <!-- <a href="#" class="edit">Edit</a> | -->
                            <!-- <a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a> -->
                        <!-- @endif -->
                    </div>
                </article>
            @endforeach
        </div>
    </section>

@endsection
