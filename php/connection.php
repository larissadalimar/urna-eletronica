<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

$hostname = "localhost";
$database = "urna";
$username = "teste"; 
$password = "teste"; 

$mysqli =  new \MySQLi($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}