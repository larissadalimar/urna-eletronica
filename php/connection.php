<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");


$hostname = "localhost";
$database = "urna";
$username = "root"; 
$password = ""; 

$mysqli =  new \MySQLi($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
}

