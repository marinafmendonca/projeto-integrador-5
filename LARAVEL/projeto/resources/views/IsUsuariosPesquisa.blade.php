

@isset($listUsuarios)
 @foreach($listUsuarios as $usuario)
 <div class="feed-item">
                 
                 
                  <div class="live-activity">
                  @if($usuario->fotoProfile)
                        <img src="{{$usuario->fotoProfile}}" 
                                        class="profile2-photo-md"/> 
                      @endif
                
                      <p>{{$usuario->nome}} - {{$usuario->usuario_id}} </p>
                    <input type="button" value="Seguir" onclick="seguirPessoa({{$usuario->usuario_id}})" class="btn"/>
                    <p class="text-muted"></p>
                  </div>
</div>
 @endforeach
 @endisset

 