<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <p>
            <?php
                function awardForCapture($personName,$specsOwned,$mugsOwned,$sausageRollsOwned){
                    echo "Wanted: $personName<br>Known to be in possession of the following items:<br>Specs $specsOwned<br>Mugs $mugsOwned<br>Sausages Rolls $sausageRollsOwned<br>Award for capture: £ (10*pow($specsOwned*$mugsOwned*$sausageRollsOwned,2)/2)";
                }

                awardForCapture("Joe Bloggs",2,2,2);
            ?>
        </p>
    </body>
</html>