<?php
session_start();

if(isset($_POST['submit'])){
   calculate();
}
function calculate(){
    $atk=$_POST['atk'];
    $def=$_POST['def'];
    $lvl=$_POST['lvl'];
    $dmg=$_POST['dmg'];
    if(isset($_POST['stab'])){
        $stab=1.5;
    }
    else{$stab=1;}
    $type=$_POST['type'];
    if(isset($_POST['critico'])){
        $critico=1.5;
    }
    else{$critico=1;}
    $rand=rand(0.81,1);
    $result=(((2*$lvl+10)/250)*($atk/$def)*$dmg+2)*$stab*$type*$critico*$rand;
    $_SESSION['showresult'] = $result;
    header("location:index.php");
    }
?>