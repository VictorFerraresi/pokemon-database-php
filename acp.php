<!DOCTYPE html>
<?php
    session_start();
    if($_SESSION['admin'] == 0){
        header('location:./');
    }
    require 'mysqlcon.php';    
?>
<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Pokémon Damage Calculator">
        <meta name="keywords" content="Pokémon,Damage,Calculator">
        <meta name="author" content="GRUPO ZIKA">
        <title>Pokémon Damage Calculator &bull; Admin Control Panel</title>
        
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
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="acp.php">Painel do Administrador</a></li>
                </ul>
            </div>
        </div>
    </nav>
      
        <div class="jumbotron">
            <h1>Admin Control Panel</h1>
            <p>Olá, administrador <?php echo $_SESSION['user']; ?>!
                Não se esqueça de ser <span style="color:red">extremamente cauteloso</span> ao inserir novas informações no website e no banco de dados.
            Este painel ainda está em desenvolvimento, então provavelmente você poderá utilizar apenas as funções básicas
            para o preenchimento das informações fundamentais para o lançamento do website. Obrigado pelo auxílio e tenha
            um bom trabalho.</p>
        </div> 
        
            <div class="container">

            <form class="form-signin" id="addstrike" method="post" action="addStrike.php">
              <h2 class="form-signin-heading">Adicionar um Golpe na Database</h2>
              <label for="inputname" class="sr-only">Nome do Golpe</label>
              <input type="text" id="inputlvl" class="form-control" name="name" placeholder="Nome do Golpe" required autofocus>
              <label for="inputdmg" class="sr-only">Dano do Golpe</label>
              <input type="text" id="inputatk" class="form-control" name="dmg" placeholder="Dano do Golpe" required>
              <div class="checkbox">
                <label for="inputtype" class="sr-only">Tipo do Golpe</label>
                Tipo do Golpe
                <select id="inputtype" name="type">
                          <option value="0">Normal</option>
                          <option value="1">Fire</option>
                          <option value="2">Fighting</option>
                          <option value="3">Water</option>
                          <option value="4">Flying</option>
                          <option value="5">Grass</option>
                          <option value="6">Poison</option>
                          <option value="7">Eletric</option>
                          <option value="8">Ground</option>
                          <option value="9">Psychic</option>
                          <option value="10">Rock</option>
                          <option value="11">Ice</option>
                          <option value="12">Bug</option>
                          <option value="13">Dragon</option>
                          <option value="14">Ghost</option>
                          <option value="15">Dark</option>
                          <option value="16">Steel</option>
                          <option value="17">Fairy</option>
                 </select>

              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Adicionar!</button>
            </form>
            <?php                    
                if(isset($_SESSION['error'])){		
                    if($_SESSION['error'] == 1){
                        echo '<div class="alert alert-danger" role="alert">
                            <strong>Este golpe já existe na database!</strong>
                            </div>';
                    } else if($_SESSION['error'] == 2){     
                        echo '<div class="alert alert-success" role="alert">
                            <strong>Você adicionou este golpe à database!</strong>
                            </div>';
                    }
                    unset($_SESSION['error']);
                }
                ?><br><br>
                <hr>
                <br>
            <form class="form-signin" id="editstrike" method="post" action="editStrike.php">
              <h2 class="form-signin-heading">Alterar um Golpe Existente</h2>
              <h6>Obs: O ID do golpe é referente à coluna ID da database.</h6>
              <label for="strikeid" class="sr-only">ID do Golpe</label>
              <input type="text" id="strikeid" class="form-control" name="strikeid" placeholder="Database ID do Golpe" required autofocus>
              <label for="newname" class="sr-only">Novo nome do Golpe</label>
              <input type="text" id="newname" class="form-control" name="newname" placeholder="Novo nome do Golpe" required>
              <label for="newdmg" class="sr-only">Novo dano do Golpe</label>
              <input type="text" id="newdmg" class="form-control" name="newdmg" placeholder="Novo dano do Golpe" required>
              <div class="checkbox">
                <label for="inputtype" class="sr-only">Novo tipo do Golpe</label>
                Novo tipo do Golpe
                <select id="inputtype" name="newtype">
                          <option value="0">Normal</option>
                          <option value="1">Fire</option>
                          <option value="2">Fighting</option>
                          <option value="3">Water</option>
                          <option value="4">Flying</option>
                          <option value="5">Grass</option>
                          <option value="6">Poison</option>
                          <option value="7">Eletric</option>
                          <option value="8">Ground</option>
                          <option value="9">Psychic</option>
                          <option value="10">Rock</option>
                          <option value="11">Ice</option>
                          <option value="12">Bug</option>
                          <option value="13">Dragon</option>
                          <option value="14">Ghost</option>
                          <option value="15">Dark</option>
                          <option value="16">Steel</option>
                          <option value="17">Fairy</option>
                 </select>

              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Alterar!</button>
            </form>                
            <?php                    
                if(isset($_SESSION['error2'])){		
                    if($_SESSION['error2'] == 3){
                        echo '<div class="alert alert-danger" role="alert">
                            <strong>Não foi encontrado nenhum golpe com este ID na database!</strong>
                            </div>';
                    } else if($_SESSION['error2'] == 4){     
                        echo '<div class="alert alert-success" role="alert">
                            <strong>Você alterou as informações deste golpe!</strong>
                            </div>';
                    }
                    unset($_SESSION['error2']);
                }
            ?><br>             
            <hr>
            <?php
                $result = mysql_query("SELECT * FROM `pokemon`.`golpes`");
                echo '<table class="table table-striped table-bordered">';
                echo '<tr>
                        <th>Database ID</th>
                        <th>Nome do Golpe</th> 
                        <th>Dano</th>
                        <th>Tipo</th>
                      </tr>';
                while ($row = mysql_fetch_assoc($result)){
                    echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td> 
                            <td>".$row['damage']."</td>
                            <td>".$row['type']."</td>
                          </tr>";
                }
                echo '</table>';
            ?>

        </div> <!-- /container -->

        <!-- <footer>FOOTERFOOTERFOOTERFOOTERFOOTERFOOTER</footer> -->
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../project/dist/js/bootstrap.min.js"></script>
    <script src="../project/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../project/assets/js/ie10-viewport-bug-workaround.js"></script>
</html>