<?php include("DBCONNECT.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Show SuperHero</title>
    </head>
    <body>
        <h1>Superhero List!</h1>
        <p>The following superheros have registered on the site:</p>
        <ul>
            <?
                $sql_query = "SELECT * FROM superheros";
                $result = $db->query($sql_query);
                while($row = $result->fetch_array()){
                    $superheroID = $row['superheroID'];
                    $firstName = $row['firstName'];
                    $lastName = $row['lastName'];
                    $mainSuperPower = $row['mainSuperpower'];
                        echo "<li>{$superheroID} {$firstName} {$lastName} {$mainSuperPower}</li>";
                }
            ?>
        </ul>
    </body>
</html>
