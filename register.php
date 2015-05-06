<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('location:./');
    }
?>    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Pokémon Damage Calculator &bull; Registro</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
      
      <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container2">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">Pokémon Damage Calculator</a>
                </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="./">Home</a></li>
                    <li class="active"><a href="login.php">Login</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tipos de Calculadora <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Simples</a></li>
                            <li><a href="#">Counter</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">

      <form class="form-signin" method="post" action="validateRegister.php">
        <h2 class="form-signin-heading">Crie sua Conta</h2>
        <input type="text" id="inputUser" name="user" class="form-control" placeholder="Nome de Usuário"required autofocus>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Endereço de Email"required>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha" required>                
        <input type="password" id="inputRepeatPassword" name="repeatpassword" class="form-control" placeholder="Repita a Senha" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Registrar</button>
      </form>
      <?php                    
        if(isset($_SESSION['error'])){	
            if($_SESSION['error'] == 1){
                echo '<div class="alert alert-danger" role="alert">
                    <strong>As senhas são diferentes!</strong>
                    </div>';
            } else if($_SESSION['error'] == 2){
                echo '<div class="alert alert-danger" role="alert">
                    <strong>Este nome de usuário já está em uso!</strong>
                    </div>';
            } else if($_SESSION['error'] == 3){
                echo '<div class="alert alert-danger" role="alert">
                    <strong>Este e-mail já está em uso!</strong>
                    </div>';
            }
            unset($_SESSION['error']);
        }
    ?>

    </div> 
      
    <?php
        include 'randomFrase.php';
        ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../project/dist/js/bootstrap.min.js"></script>
    <script src="../project/assets/js/docs.min.js"></script>
    <script src="../project/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
