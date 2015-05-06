<?php
error_reporting(0);
session_start();
?>
<footer class="footer">
            <div class="container">
                <p class="text-muted">
                    <?php
                    error_reporting(0);
                    $x=rand(1, 30);
                    if ($_SESSION["teamR"]!=0 || $_SESSION["choco"]!=0){
                        teamRocket($_SESSION["teamR"]);
                        chocolapis($_SESSION["choco"]);
                    }
                    else{
                        random($x);
                    
                    }
                    
                    function random ($x){
                        switch ($x) {
                        case 1:
                            echo 'Hit me with your best shot!';
                            break;
                        case 2:
                            echo 'Love takes time. Love takes work.';
                            break;
                        case 3:
                            echo 'This is merely a race to the grave.';
                            break;
                        case 4:
                            echo 'Prepare to fight my six Magikarps!';
                            break;
                        case 5:
                            echo 'Will one of you pokemon keep me company?';
                            break;
                        case 6:
                            echo 'Press B to run!';
                            break;
                        case 7:
                            echo 'It is dangerous to go alone! Take this!';
                            break;
                        case 8:
                            echo 'Prepare for trouble!';
                            $_SESSION["teamR"]=1;
                            break;
                        case 9:
                            echo 'Are you emotionally okay?';
                            break;
                        case 10:
                            echo 'All I wanna do is see you turn into a Giant Woman!';
                            break;
                        case 11:
                            echo 'I was destined to meet you.';
                            break;
                        case 12:
                            echo 'Chocolapis is the worst food in the whole universe. Only peolple with no self love would eat it.';
                            $_SESSION["choco"]=1;
                            break;
                        case 13:
                            echo 'All animation is black magic!';
                            break;
                        case 14:
                            echo 'No one cares.';
                            break;
                        case 15:
                            echo 'If im wearing a bikini... where do i put my pokeballs? Teehee! Woman\'s secret!';
                            break;
                        case 16:
                            echo 'I like shorts!';
                            break;
                        case 18:
                            echo 'My Rattata is in the top percentage of Rattata!';
                            break;
                        case 19:
                            echo 'Whenever I\'m down after losing a battle, I think \'At least I\'ve still got my shorts!';
                            break;
                        case 20:
                            echo 'Wow! Your Pokemon\'s power levels are incredible! Over 9,000 for sure!';
                            break;
                        case 21:
                            echo 'My body is ready!';
                            break;
                        case 22:
                            echo 'You are pretty hot. <br>...But not as hot as BROCK!';
                            break;
                        case 23:
                            echo 'I am very bad and stupid but I am very serious about pokemon';
                            break;
                        case 24:
                            echo 'Develop amnesia conveniently and forget everything you heard!';
                            break;
                        case 25:
                            echo 'We need Poké balls! P-O-K-accent-E balls!';
                            break;
                        case 26:
                            echo 'Please make sure the bed is empty before getting in it!';
                            break;
                        case 27:
                            echo 'These are not shorts! These are half-pants!';
                            break;
                        case 28:
                            echo '... it\'s so thick!';
                            break;
                        case 29:
                            echo 'But there is nothing more beautiful and terrifying than innocence.';
                            break;
                        default:
                            echo 'Now is not the time to use that!';
                            break;    
                    }
                    }
                    
                    function teamRocket ($teamR){
                        if ($teamR==1){
                            echo 'And make it double!';
                            return $_SESSION["teamR"]=2;
                        }
                        if ($teamR==2){
                            echo 'Meow, that\'s right!';
                            return $_SESSION["teamR"]=0;
                        }
                    }
                    
                    function chocolapis ($choco){
                        if ($choco==1){
                            echo 'That was a lie.';
                            return $_SESSION["choco"]=0;
                        }
                    }
                    ?>
                </p>
            </div>
        </footer>

