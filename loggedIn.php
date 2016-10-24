<?php

session_start();
$accessLevel = $COOKIE['access_level_cookie'];

displayAcessLevelInformation($accessLevel);

function displayLevelInformation($accessLevel){
    if($accessLevel == "standarduser"){
        echo "<p style = \"background-color:lightgreen\">You are currently logged in as a standard user</p>";
    }
    elseif($accessLevel == "root"){
        echo "<p style = \"background-color: red\">You are currently logged in as a root user</p>";
    }
}

?>