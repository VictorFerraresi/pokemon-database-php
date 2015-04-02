<!DOCTYPE html>
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
        <header>HEADERHEADERHEADERHEADERHEADERHEADER</header>
      
        <menu id="sidemenu">           
        </menu>
        
        <div class="container">

      <form class="form-signin" id="form" method="post" action="calcuate.php">
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
          <label>
            <input type="checkbox" name = "critico" id ="inputcrit" value="yes"> Golpe Crítico
          </label>
          <select id="input" name="type">
                    <option value="1">1</option>
                    <option value="0.25">0.25</option>
                    <option value="0.5">0.5</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
           </select>
            
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Calcular!</button>
      </form>

    </div> <!-- /container -->
        
        <section id="formcontainer">
            <p>
                Este <i>site</i> foi criado com o propósito de auxiliar jogadores dos jogos 
               da franquia de Pokémon que se dispõe a dedicar seu tempo ao ambiente competitivo. 
               Aqui você pode escolher seu Pocket Monster favorito e montá-lo com seu <i>set</i> de golpes, 
               habilidade, natureza, itens, e simular o golpe que o tornará efetivo a gosto contra seu adversário.
            </p> 
            <?php
                session_start();
                if(isset($_SESSION['showresult'])){				
                    if($_SESSION['showresult'] != 0){
                        echo '<p>'.$_SESSION['showresult'].'</p>';
                        unset($_SESSION['showresult']);
                    } 
		}
            ?>
        </section>
        
        <!-- <footer>FOOTERFOOTERFOOTERFOOTERFOOTERFOOTER</footer> -->
    </body>
    
</html>