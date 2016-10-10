<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <p>
            Database!

            <?php

            include("DBCONNECT.php");

            $sql = "SELECT * from marvelmovies";

            $result = mysqli_query($db, $sql);

            while($row = $result->fetch_array()){
                $movieTitle = $row['title'];
                echo ''<p>''.$movieTitle.''</p>'';
            }

            ?>
        </p>
    </body>
</html>
