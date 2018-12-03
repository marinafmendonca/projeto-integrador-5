
<body>


    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/estilos.css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
  
   <style type="text/css">
    *{font-family: 'Montserrat'; cursive; margin:0;}
    body{background: white;}
    </style>

    

    <nav class="navbar navbar-expand-lg navbar navbar-light"style="background-color: #e3f2fd; height: 40px ; padding-bottom:2%" >
      <a class="navbar-brand" href="paginadepublicacao/index.php" >
      <img src="/imagem/logo.png" class="my-0 mr-md-auto font-weight-normal" height="20" name="logo">
    </a>
     
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
       
      
            <ul class="navbar-nav mr-auto" >
                <li class="nav-item active">
                  <a class="nav-link" href="#">Linha do Tempo <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Amigos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Notificações <span class="badge badge-info">9</span>
                <span class="sr-only">unread messages</span></a>
                </li>
            
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Meu Perfil
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Perfil</a>
                    <a class="dropdown-item" href="#">Pagina Inicial</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Configurações</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route('logout')}}">Sair</a>
                </li>

             </ul>
            
            </div>
               <div>
                <form class="form-inline my-2 my-lg-0" style= "padding-top:9%">
                    <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                    <a href="#"> <span class="glyphicon glyphicon-search"></span>   </a>
                  </form>
                </div>
             
    </nav>


 

  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
