<!DOCTYPE html>
<?php
    session_start();
    require 'mysqlcon.php';
?>
<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Pokémon Damage Calculator">
        <meta name="keywords" content="Pokémon,Damage,Calculator">
        <meta name="author" content="GRUPO ZIKA">
        <title>Pokémon Damage Calculator</title>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        
        <link rel="icon" 
        type="image/png" 
        href="favicon.ico">
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
                    <li class="active"><a href="./">Home</a></li>
                    <?php
                        if(!isset($_SESSION['user'])){
                            echo "<li><a href='login.php'>Login</a></li>";
                        } else {
                            echo "<li><a href='logout.php'>Logout</a></li>";
                        }
                    ?>
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
                    <?php
                        if($_SESSION['admin'] > 0){
                            echo '<li><a href="acp.php">Painel do Administrador</a></li>';
                        }
                   ?>
                </ul>
            </div>
        </div>
    </nav>
      
        <div class="jumbotron">
            <h1>Pokémon Damage Calculator</h1>
            <p>Este <i>site</i> foi criado com o propósito de auxiliar jogadores dos jogos 
           da franquia de Pokémon que se dispõem a dedicar seu tempo ao ambiente competitivo. 
           Aqui você pode escolher seu Pocket Monster favorito e montá-lo com seu <i>set</i> de golpes, 
           habilidade, natureza, itens, e simular o golpe que o tornará efetivo a gosto contra seu adversário.</p>
        </div> 
        
            <div class="container">

            <form class="form-signin" id="form" method="post" action="calculate.php">
              <h2 class="form-signin-heading">Insira as informações</h2>
              <label for="inputlvl" class="sr-only">Level do Pokémon atacante</label>
              <input type="text" id="inputlvl" class="form-control" name="lvl" placeholder="Level do Pokémon Atacante" required autofocus>
              <label for="inputatk" class="sr-only">Ataque</label>
              <input type="text" id="inputatk" class="form-control" name="atk" placeholder="Valor do atributo atk/sp.atk" required>
              <label for="inputdef" class="sr-only">Defesa</label>
              <input type="text" id="inputdef" class="form-control" name="def" placeholder="Valor do atributo def/sp.def" required>
              <label for="inputdmg" class="sr-only">Dano Base</label>
              <input type="text" id="inputdmg" class="form-control" name="dmg" placeholder="Dano base do golpe" required>
              <div class="checkbox">
                <label>
                    <input type="checkbox" name = "stab" id ="inputstab" value="yes"> Stab
                </label>
                <br>                     
                <label>
                    <input type="checkbox" name = "critico" id ="inputcrit" value="yes"> Golpe Crítico
                </label>
                <br>
                <label for="inputmod" class="sr-only">Modificador de Dano</label>
                Modificador de Dano
                <select id="inputmod" name="type">
                          <option value="1">1</option>
                          <option value="0.25">0.25</option>
                          <option value="0.5">0.5</option>
                          <option value="2">2</option>
                          <option value="4">4</option>
                 </select>
                 <?php                    
                    if(isset($_SESSION['showresult'])){				
                        echo '<div class="alert alert-info" role="alert">
                            <strong>Resultado do Dano: </strong>' .$_SESSION['showresult'].'
                            </div>';
                        unset($_SESSION['showresult']);
                    }
                ?>

              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Calcular!</button>
            </form>

        </div> <!-- /container -->

        <!-- <footer>FOOTERFOOTERFOOTERFOOTERFOOTERFOOTER</footer> -->
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../project/dist/js/bootstrap.min.js"></script>
    <script src="../project/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../project/assets/js/ie10-viewport-bug-workaround.js"></script>
</html>
