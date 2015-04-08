<?php
session_start();
require 'mysqlcon.php';

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = hash('whirlpool', $_POST['password']);
    tryLogin($user, $pass);
}
else {
    header("location:./");
}
function tryLogin($user, $pass){    
    $result = mysql_query("SELECT * FROM `pokemon`.`usuarios` WHERE user = '$user' AND password = '$pass' LIMIT 1");
    if(mysql_num_rows($result) == 0){
        $_SESSION['error'] = 1;
        header("location:login.php");
    } else {
        $row = mysql_fetch_assoc($result);
        loadStuff($row["id"]);
        header("location:./");
    }
}

function loadStuff($sqlid){
    $result = mysql_query("SELECT * FROM `pokemon`.`usuarios` WHERE id = $sqlid LIMIT 1");
    $row = mysql_fetch_assoc($result);
    
    $_SESSION['id'] = $row['id'];
    $_SESSION['user'] = $row['user'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['admin'] = $row['admin'];
}
?>
