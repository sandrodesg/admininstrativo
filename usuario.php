  

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">
	<title>projeto em andamento</title>
	<link rel="stylesheet" href="anime.css">
<link rel="stylesheet" href="animette.css">  
<link href="Hover-master/css/hover.css" rel="stylesheet" media="all">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo2.css" rel="stylesheet">
</head>

<body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
          
          </div>
          <div class="col-md-8 col-md-offset-2">
            <div class="inner">
              <h3 class="masthead-brand">Cover</h3>
            
            </div>
            <nav class="nav nav-masthead">
                <a class="nav-link active" href="#">Home</a>|
                <a class="nav-link" href="#">Faturas</a>|
                <a class="nav-link" href="#">Contato</a>|

                <button type="button" class="btn btn-dark"><a href="sair.php">Sair</a></button>

              </nav>
          <div class="inner cover">
            <h1 class="cover-heading">Página Usuário.</h1><br>
            <?php
				session_start();
				include_once("seguranca.php");
				echo "BEM-VINDO Usuário:".$_SESSION['usuarioNome'];

				?><br>

            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
            	
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>

				
              <a href="#" class="btn btn-lg btn-secondary">Conheça Mais</a>
            </p>
          </div>
          
          <div class="mastfoot">
            <div class="inner">
              <p>Sandro Desifgner<a href="https:sandrodesigner.jimdo.com">Acesse</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
            </div>
          </div>

        </div>

      </div>

    </div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

