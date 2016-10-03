<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <p>
            <?php
                function awardForCapture($personName,$specsOwned,$mugsOwned,$sausageRollsOwned){
                    echo "Wanted: "+10*pow($specsOwned*$mugsOwned*$sausageRollsOwned,2)/2;
                }

                awardForCapture("Joe Bloggs",2,2,2);
            ?>
        </p>
    </body>
</html>