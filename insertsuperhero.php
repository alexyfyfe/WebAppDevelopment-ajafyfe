<?php
//include database
include("DBCONNECT.php");

$firstname = $_POST["firstName"];
$lastname = $_POST["lastName"];
$mainsuperpower = $_POST["mainSuperPower"];

$sql = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ('$firstname','$lastname','$mainsuperpower')";

if(mysqli_query($db,$sql)){
}else{
    echo "Error: " . $sql . "<br>" . mysqli_errno($db);
}

header("location:Showsuperheros.php");

?>
