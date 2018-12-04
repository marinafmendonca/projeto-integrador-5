@extends('layouts.master')

@section('content')

  <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <form action="/feed/atualiza/{{$post->post_id}}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="post" id="new-post" rows="5" placeholder="Escreva aqui">{{$post->post}}</textarea>
                </div>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
                <button class="btn btn-lighty" style="background-color: #ab0127;border-color: #ab0127;color: #fff; margin-bottom: 0 " >
                <i class="material-icons" style="font-size:15px;color:white">perm_media</i>
                </button>
             
                  <button type="submit" class="btn btn-lighty" style="background-color: #ab0127;border-color: #ab0127;color: #fff; margin-bottom: 0 " >Postar</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
      </div>
  </section>
  @endsection