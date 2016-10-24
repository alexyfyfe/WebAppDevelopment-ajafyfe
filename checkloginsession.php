<?php

$username = $_POST["name"];
$password = $_POST["password"];


if($username == "username" && $password == "password"){
    session_start();
    $_SESSION['type'] = 'standarduser';
}

header('Location: loggedInSession.php');

?>