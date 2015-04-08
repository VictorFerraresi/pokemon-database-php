<?php
session_start();
require 'mysqlcon.php';

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = hash('whirlpool', $_POST['password']);
    trylogin($user, $pass);
}
else {
    header("location:index.php");
}
function trylogin($user, $pass){    
    $result = mysql_query("SELECT * FROM `pokemon`.`usuarios` WHERE username = '$user' AND password = '$pass' LIMIT 1");
    if(!$result){
        $_SESSION['error'] = 1;
        header("location:login.php");
    }
}
?>
