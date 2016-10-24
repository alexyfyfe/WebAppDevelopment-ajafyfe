<?php

$username = $_POST["name"];
$password = $_POST["password"];

session_start();
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

if($username == "username" && $password == "password"){
    $_SESSION['type'] = 'standarduser';
}

header('Location: loggedInSession.php');

?>