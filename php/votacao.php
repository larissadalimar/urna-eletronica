<?php

include("connection.php");

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset( $_GET['numero'])){
        $voto = $_GET['numero'];
        $sql = "UPDATE candidatos set votos = votos + 1 where numero='".$voto."'";
        $result = $mysqli->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "\ntrue";
    } else {
        echo "\nerror: " . $conn->error;
    }

    }
}

if($_SERVER['REQUEST_METHOD'] === 'GET')

