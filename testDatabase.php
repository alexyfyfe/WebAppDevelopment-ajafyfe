<?php

include("DBCONNECT.php");

$sql = "SELECT * from marvel movies";

$result = mysqli_query($db, $sql);

$row = $mysql_fetch_array($result,MYSQLI_ASSOC);


<html>
    <head>

    </head>
    <body>
        <p>
            <h1> This is a Database!</h1>
            <p>$row</p>
        </p>
    </body>
</html>