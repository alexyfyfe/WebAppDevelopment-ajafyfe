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

            $row = $mysql_fetch_array($result,MYSQLI_ASSOC);

            while($row = $result->fetch_array()){
                $movieTitle = $row['title'];
                echo ''<p>''.$movieTitle.''</p>'';
            }

            ?>
        </p>
    </body>
</html>
