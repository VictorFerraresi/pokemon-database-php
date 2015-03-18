<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Pokémon Damage Calculator">
        <meta name="keywords" content="Pokémon,Damage,Calculator">
        <meta name="author" content="GRUPO ZIKA">
        <title>Pokémon Damage Calculator</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <link rel="icon" 
        type="image/png" 
        href="favicon.ico">
    </head>
    
    <body>
        <header>HEADERHEADERHEADERHEADERHEADERHEADER</header>
        
        <menu id="topmenu">TOPMENUTOPMENUTOPMENU</menu>
        
        <menu id="sidemenu">SIDEMENUSIDEMENU</menu>
        
        <section id="formcontainer">
            <p>
                Este <i>site</i> foi criado com o propósito de auxiliar jogadores dos jogos 
               da franquia de Pokémon que se dispõe a dedicar seu tempo ao ambiente competitivo. 
               Aqui você pode escolher seu Pocket Monster favorito e montá-lo com seu <i>set</i> de golpes, 
               habilidade, natureza, itens, e simular o golpe que o tornará efetivo a gosto contra seu adversário.
            </p>
            <form id="form">
                Level do Pokémon atacante:
                <input type="text" name="lvl" id="input"><br><br>
                Valor do atributo atk/sp.atk:
                <input type="text" name="atk" id="input"><br><br>
                Valor do atributo def/sp.def:
                <input type="text" name="def" id="input"><br><br>
                Dano base do golpe:
                <input type="text" name="dmg" id="input"><br><br>
                Stab:
                <input type="checkbox" name="stab" value="yes" id="input"><br><br>
                Modificadores de tipo:
                <select id="input">
                    <option value="1">1</option>
                    <option value="0.25">0.25</option>
                    <option value="0.5">0.5</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                </select><br><br>
                Golpe crítico:
                <input type="checkbox" name="critico" value="yes" id="input"><br><br>
                <input type="submit" value="Calcular" id="input">
                
                
            </form>
        </section>
        
        <!-- <footer>FOOTERFOOTERFOOTERFOOTERFOOTERFOOTER</footer> -->
    </body>
    
</html>