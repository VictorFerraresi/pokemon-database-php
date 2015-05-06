<footer class="footer">
            <div class="container">
                <p class="text-muted">
                    <?php
                    $x=rand(1, 20);
                    
                    teamRocket($teamR);
                    chocolapis($choco);
                    
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
                            $teamR=1;
                            break;
                        case 9:
                            echo 'Are you emotionally okay?';
                            break;
                        case 10:
                            echo 'All I wanna do is see you turn in to a Giant Woman';
                            break;
                        case 11:
                            echo 'I was destined to meet you.';
                            break;
                        case 12:
                            echo 'Chocolapis is the worst food in the whole universe. Only peolple with no self love would eai it.';
                            $choco=1;
                            break;

                        default:
                            echo 'Now is not the time to use that!';
                            break;    
                    }
                    
                    function teamRocket ($teamR){
                        if ($teamR==1){
                            echo 'And make it double!';
                            return $teamR=2;
                        }
                        if ($teamR==2){
                            echo 'Meow, that is right!';
                            return $teamR=0;
                        }
                    }
                    
                    function chocolapis ($choco){
                        if ($choco==1){
                            echo 'That was a lie.';
                            return $choco=0;
                        }
                    }
                    ?>
                </p>
            </div>
        </footer>

