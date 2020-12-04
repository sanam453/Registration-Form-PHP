<?php

$serverName = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'register1';
$errorMsg   = 'Connecting problem';

$conn = mysqli_connect($serverName, $username, $password, $database) or die($errorMsg);
?>