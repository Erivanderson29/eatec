<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>eatec</title>
    <meta charset="utf-8">
     <!--  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="shortcut icon"  href="assest/logo.png" sizes="32x32" type="imagem/png">
    <meta name="Viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>

  <header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#" alt="eatec - home" title="home"><img id="logo" src="assest/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu_lista" aria-controls="menu_lista" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu_lista">
          <ul class="navbar-nav  navbar-right">
            <li class="nav-item active">
              <a class="nav-link" href="?i=Inicio">home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?i=imagem">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?i=cadastro">Cadastre-se</a>
            </li>
          </ul>  
        </div>
    </nav>
  </header>

  <div id="main">
      <div class="row no-gutters bg-light position-relative">
          <div class="col-md-6 mb-md-0 p-md-4">
            <img src="assest\car0.png" class="w-100" alt="...">
          </div>

          <div class="col-md-6 position-static p-4 pl-md-0">
            <h5 class="mt-0"><h5><p>Seja bem Vindo!!</p></h5>
                  <p>Esse site foi desenvolvido para fins de estudo, aonde eu estou colocando em pratica o que estou a estudar
                  Fique a vontade para deixa seu comentário se ficou bom ou ruim e onde eu poso melhora para fica agradável para os visitantes.</p>




            <form>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Aceito os ternos</label>
              </div>
              <button type="submit" class="btn btn-primary" href="pagina inicial">Entre</button>
            </form>
          </div>

          
  </div>

  <footer>
      <div class="container">
        <div class="row">
      
          <div class="col-md-1 lista_footer"><a href="?i=contato">Contato</a></div>
          <div class="col-md-1 lista_footer"><a href="?i=historia">Quem somos</a></div>
          <div class="col-md-1 lista_footer"><a href="?i=recadar">Doar</a></div>
        </div>
     
    <div class="row">
      <div class="col-md-12">
         <p>© 2020-2021 Compania, Inc.<a href="#">Privacidade</a> · <a href="#">Terms</a></p>
      </div>
    </div>
   
  </footer>


  <script src="jquery/jquery.min"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  </body>
</html>