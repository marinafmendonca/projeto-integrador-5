
@csrf
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

<script>


            function seguirPessoa(id){
        
        var jsonObject = {
            "idPessoa": id
            "_token":  session('_token');
        };
    
            $.ajax
                ({
                    type: 'POST',
                   // dataType: 'html',
                    url: '/seguirPessoas',
                    beforeSend: function(){//Chama o loading antes do carregamento
                          
                    },
                    data: jsonObject,
                    success: function(msg)
                    {
                        // loading_hide();
                        // var data = msg;
                        // $(div).html(data).fadeIn();
                       return "Seguindo";				
                    }
                }); 
            
        }


</script>
