<?php

$servername = '127.0.0.1:49619';
$username = 'azure';
$password = '6#vWHD_$';
$dbname = 'localdb';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    echo 'Connection Error '.mysqli_connect_error();
}


?>
