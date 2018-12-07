@extends('layouts.master')

@section('content')


<aside class="main-sidebar" id="sidebar-wrapper">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

<div class="cardLateral card">
            <div class="photo"></div>
            <div class="banner"></div>
            <ul>
                <li><b>{{ Auth::user()->nome}}</b></li>
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

  
  <form action="/createpostProfile" method="post">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-7">

        <!-- Post Mensaggem
        ================================================= -->
        <div class="create-post">
          <div class="row">
            <div class="col-md-10 col-sm-7">
              <div class="form-group">
                <img src="/user-1.jpg" alt="" class="profile-photo-md">
                <textarea name="post" id="post" cols="80" rows="3" class="form-control" placeholder="Write what you wish"></textarea>
              </div>
             <div>
             <br>
             <input type="submit" id="btnCadastrar" class="btn btn-primary pull-right" value="Publicar"/>
             </div>
              
            </div>
            <!-- <div class="col-md-5 col-sm-5">
              <div class="tools">
                <ul class="publishing-tools list-inline">
                  <li><a href="#"><i class="ion-compose"></i></a></li>
                  <li><a href="#"><i class="ion-images"></i></a></li>
                </ul>
             
              </div>
            </div> -->
          
          </div>
          
        </div><!-- Post Create Box End-->
</form>

  
  
  <div id="exibePost">
    @isset($posts)
 @foreach($posts as $post)
 <div class="post-content">
             
             
             @if($post->pathimagem)
              <img src="" alt="post-image" class="img-responsive post-image">
             @endif
             
              <div class="post-container">
                <img src="{{$post->fotoProfile}}" alt="user" class="profile2-photo-md pull-left">
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="https://thunder-team.com/friend-finder/timeline.html" 
                    class="profile-link"> {{$post->nome}}</a> <span class="following">following</span></h5>
                    <p class="text-muted"> {{ $post->data_hora }}</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                  </div>

                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p> {{ $post->post }} <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="./News Feed _ Check what your friends are doing_files/user-4.jpg" alt="" class="profile-photo-sm">
                    <p><a href="https://thunder-team.com/friend-finder/timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                  </div>
                  <div class="post-comment">
                    <img src="./News Feed _ Check what your friends are doing_files/user-1.jpg" alt="" class="profile-photo-sm">
                    <input type="text" class="form-control" placeholder="Post a comment">
                  </div>
                </div>
              </div>
            </div>

      @endforeach
      @endisset
    </div>   
       

   
    <style type="text/css">
    div#publish{ display:block ; margin: auto; border: none;
    border-radius:5px;background: #FFF; box-shadow: 0 0 5px #A1A1A1; margin-top:10px;
    overflow: hidden}

    div#publish img{margin-top:0px; margin-left: 10px; width:40px; cursor:pointer;}
   
    </style>


  <input type="hidden" value="{{ Session::token() }}" name="_token">
@endsection
