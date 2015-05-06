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
        
        <link href="css/sticky-footer-navbar.css" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        
        <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.min.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>                      
        
        
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
                    <li><a href="./">Home</a></li>
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
                            <li><a href="#">Outro Tipo</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Submenu</li>
                            <li><a href="#">Link Separado</a></li>
                            <li><a href="#">Outro Link Separado</a></li>
                        </ul>
                    </li>
                    <?php
                        if(isset($_SESSION['admin']) && $_SESSION['admin'] > 0){
                            echo '<li><a href="acp.php">Painel do Administrador</a></li>';
                        }
                   ?>
                </ul>
            </div>
        </div>
    </nav>
        <p>O site ainda está em fase de testes. caso você perceba um bug, por favor reporte-o.</p>
        <form>
            E-mail:<br>
            <input type ="text" name="email"><br>
            Qual o tipo de bug?<br>
            <select>
                <option value="brokenLink">Link quebrado</option>
                <option value="calcError">Erros na calculadora</option>
                <option value="golpesErro">Golpes com valores/tipos errados</option>
                <option value="outros">Outros</option>
            </select><br>
            Uma breve descrição do bug:<br>
            <input type="text" name="descricao"><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
    <?php
        include 'randomFrase.php';
        ?>
</html>