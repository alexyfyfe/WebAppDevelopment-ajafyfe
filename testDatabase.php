
<?php

include("DBCONNECT.php");

$sql = "SELECT * from marvel movies";

$result = mysqli_query($db, $sql);

$row = $mysql_fetch_array($result,MYSQLI_ASSOC);

