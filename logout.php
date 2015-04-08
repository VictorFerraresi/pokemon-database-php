<?php
    session_start();
    
    if(!isset($_SESSION['user'])){
        header('location:./');
    } else {
        unset($_SESSION['id']);
        unset($_SESSION['user']);
        unset($_SESSION['email']);
        unset($_SESSION['admin']);
        
        $_SESSION['error'] = 3;
        header('location:login.php');
    }
?>