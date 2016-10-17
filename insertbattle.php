<?php

include("DBCONNECT.php");

$superheroID = $_POST["superheroID"];
$villanFought = $_POST["villanFought"];

$sql = "INSERT INTO battles (superheroID, villanFought) VALUES ('$superheroID','$villanFought')";

if (mysqli_query($db, $sql)){
} else {
    echo "Error: " . $sql . "<br>" .mysqli_error($db);
}

header("location:displaybattles.php");
?>