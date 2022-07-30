<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
include("connection.php");


if($_SERVER['REQUEST_METHOD'] === 'GET') {

    $sql = "UPDATE candidatos SET_votos = 0";
    //$result = $mysqli->query($sql);

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reseta Eleições</title>
  </head>
  <body style="display:flex; justify-content:center; align-items: center;">
    <div class="" style="display:flex; flex-direction:column; justify-content:center; align-items: center;">
        <h3> Eleição encerrada! Hora de iniciar uma nova eleição. </h3>
        <button type="button" name="button" onclick="location.href='../';"  style="padding:10px;"> Vote novamente </button>
    </div>
  </body>
</html>