<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <p>
            Database!

            <?php

            include("DBCONNECT.php");

            $sql_query = "SELECT * FROM marvelmovies";

            $result = $db->query($sql_query)

            while($row = $result->fetch_array()){
                $movieTitle = $row['title'];
                echo ''<p>''.$movieTitle.''</p>'';
            }

            $result->dose();
            $db->dose();

            ?>
        </p>
    </body>
</html>
