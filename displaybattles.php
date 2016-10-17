<?php include("DBCONNECT.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show SuperHero</title>
</head>
<body>
<h1>Superhero Battles!</h1>
<ul>
    <?
    $sql_query = "SELECT * FROM superherobattles";
    $result = $db->query($sql_query);
    while($row = $result->fetch_array()){
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $mainSuperPower = $row['mainSuperpower'];
        $villanFought = $row['villanFought'];
        echo "<li>The superhero known as {$firstName} {$lastName} recently faught {$villanFought} using {$mainSuperPower}</li>";
    }
    ?>
</ul>
</body>
</html>
