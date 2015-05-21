<!DOCTYPE html>

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
                    <li class="active"><a href="./">Home</a></li>
                    <?php
                        if(!isset($_SESSION['user'])){
                            echo "<li><a href='login.php'>Login</a></li>";
                        } else {
                            echo "<li><a href='logout.php'>Logout</a></li>";
                        }
                    ?>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="bugReport.php">Reportar bugs</a></li>
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
        
        <div class="jumbotron">    
            <h1> Reportar bugs </h1>
            <p> Obrigado por utilizar o <i>Pokémon Damage Calculator</i>! Somos um <i>site</i> ainda
                em testes, então se notar algum defeito ou mal funcionamento, não deixe de nos avisar. Assim,
                poderemos melhorar cada vez mais os nossos serviços.</p>
        </div>
        
        <div class="container">
            
            <form method="post" action="verificarForm.php">
                <h2>Selecione o problema percebido:</h2>
                <select name="slct">
                    <option value="selecione" name="selecione">Selecione uma opção</option>
                    <option value="errosnacalculadora">Erros na calculadora</option>
                    <option value="errosdeortografia">Erros de ortografia</option>
                    <option value="errosnogolpe">Erro no valor dos golpes</option>
                    <option value="erroslayout">Problemas no layout</option>
                    <option value="errosnolink">Links quebrados</option>
                    <option value="errosoutros">Outros</option>
                </select>
                
                <h2>Insira a descrição do ocorrido:</h2>
                <textarea placeholder="Só chora..." required name="chora"value="chora" rows="7" cols="60" maxlenght="256"></textarea>   
                <input type="submit" value="Pokébola, vai!!" name="enviar"></input>    
            </form>
   
        </div>
        <br>
        
        <?php
        include 'randomFrase.php';
        ?>
        
    </body>
</html>