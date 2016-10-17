<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            $forename = $_POST["forename"];
            $surname = $_POST["surname"];
            $gender = $_POST["gender"];
            $mainsuperheropower = $_POST["mainsuperheropower"];
            echo "<p>Name: $forename $surname</p><p>Gender: $gender</p><p>Main SuperHero Power: $mainsuperheropower</p>";
        ?>
    </body>
</html>