<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php

    include("DBCONNECT.php");

    $sql_query = "SELECT * FROM marvelmovies WHERE title LIKE '%X-Men%'";

    $result = $db->query($sql_query);

    while($row = $result->fetch_array()){
        echo "<p>".$row['title']."</p>";
    }

    $result->dose();
    $db->dose();

    ?>
</p>
</body>
</html>
