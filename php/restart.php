<?php
/**
 * @file restart.php
 *
 * Zera os votos para começar uma nova eleição.
 * 
 *
 * PHP versão 8.1.6
 *
 * LICENSE: Esse arquivo está submetido à versão 3.01 da licença do PHP
 * essa licença está disponível na world-wide-web atráves do seguinte
 * endereço: https://www.php.net/license/3_01.txt
 * Caso você não tenha uma cópia da licença PHP e não seja possível
 * acessá-la através da internet, por favor relate o seu problema para
 * licence@php.net a fim de que seja possível recebê-la por email.
 *
 *
 * @author     Larissa Dalimar
 * @since      31/07/2022
 * @copyright  2001-2022 The PHP Group
 * @license    https://www.php.net/license/3_01.txt PHP License 3.01
 * @version    1.0
 * @link       https://github.com/larissadalimar/urna-eletronica
 * @deprecated Not aplicable
 */

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
include("connection.php");


if($_SERVER['REQUEST_METHOD'] === 'GET') {

    $sql = "UPDATE candidatos SET votos = 0";
    $result = $mysqli->query($sql);

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