<?php
    $host = "localhost";
    $user = "root";
    $pass = "root";

    $sql = mysql_connect($host, $user, $pass);

    if (!$sql) {
        die('Não foi possível conectar: ' . mysql_error());
    }
?>