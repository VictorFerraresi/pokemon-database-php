<?php
session_start();

if(isset($_POST['submit'])){
   calculate();
}
else {
    header("location:index.php");
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
    $rand=rand(85,100)/100;
    $result=(((2*$lvl+10)/250)*($atk/$def)*$dmg+2)*$stab*$type*$critico*$rand;
    //echo "atk $atk , def $def, lvl $lvl, dmg $dmg, stab $stab, cri $critico, type $type, rand $rand, res $result";
    $_SESSION['showresult'] = $result;
    header("location:index.php");
    }
?>