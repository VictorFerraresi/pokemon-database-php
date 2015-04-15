<?php
    $host = "localhost:3308";
    $user = "root";
    $pass = "";

    $sql = mysql_connect($host, $user, $pass);

    if (!$sql) {
        die('Não foi possível conectar: ' . mysql_error());
    }
?>