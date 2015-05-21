<?php
    require 'mysqlcon.php';
    session_start();
    
    if(!isset($_POST["slct"]) || !isset($_POST["chora"])){
        echo "Erro";
    }
    $selecione = $_POST["slct"];
    $chora = $_POST["chora"];
                 
        if ($selecione == "selecione"){
            echo "Selecione uma das opções abaixo, por favor.";
        }
    
    $eerror = mysql_real_escape_string($chora);
    $result = mysql_query("INSERT INTO `pokemon`.`bugs` (user, type, text) VALUES ('1', '$selecione', '$eerror')");
    header("location:./bugReport.php");
?>