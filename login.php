<?php
    session_start();
?>    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Pokémon Damage Calculator &bull; Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="validateLogin.php">
        <h2 class="form-signin-heading">Faça Login</h2>
        <input type="text" id="inputUser" name="user" class="form-control" placeholder="Nome de Usuário"required autofocus>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha" required>        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Mantenha-me conectado
          </label>
        </div>
        <a href="register.php">Não possuo uma conta</a>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
      </form>
      <?php                    
        if(isset($_SESSION['error'])){				
            echo '<div class="alert alert-danger" role="alert">
                <strong>Usuário ou senha incorretos </strong>
                </div>';
            unset($_SESSION['error']);
        }
    ?>

    </div> 


    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
