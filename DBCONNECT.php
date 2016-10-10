<?php

define('DB_SERVER','eu-cdbr-azure-north-e.cloudapp.net');
define('DB_USERNAME','bcfb17955d26fa');
define('DB_PASSWORD','f5e7a502');
define('DB_DATABASE','database_ajafyfe');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if($db->connect_errno){
    die('Connectfailed['.$db->connect_errno.']');
}