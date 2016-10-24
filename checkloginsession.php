<?php

$username = $_POST["name"];
$password = $_POST["password"];

$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

if($username == "username" && $password == "password"){
    $_SESSION['type'] = 'standarduser';
}

header('Location: loggedInSession.php');

?>