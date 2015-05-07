<?php
    
    $selecione = $_POST["slct"];
    $chora = $_POST["chora"];
                    
        if ($selecione == "selecione"){
            echo "Selecione uma das opções abaixo, por favor.";
        }
        if ($chora == "" || $chora == null){
            echo "Preencha a caixa de texto, por favor.";
        }
?>