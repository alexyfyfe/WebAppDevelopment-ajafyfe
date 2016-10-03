<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <p>
            <?php
                function awardForCapture($specsOwned,$mugsOwned,$sausageRollsOwned){
                    echo 10*pow($specsOwned*$mugsOwned*$sausageRollsOwned,2)/2;
                }
                echo "Hello World";
            ?>
        </p>
    </body>
</html>