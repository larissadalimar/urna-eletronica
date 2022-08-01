<!DOCTYPE html>
<html lang="en" dir="ltr">
<html>
  <head>
    <meta charset="utf-8">
    <title>Resultado das eleições</title>
  </head>
  <body>
    <div>
     <table>

<?php

/**
 * @file resultado.php
 *
 * Mostra a situação dos candidatos em ordem decrescente de votos, separados em Prefeito e Vereador. 
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

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");

include("connection.php");

if($_SERVER['REQUEST_METHOD'] === 'GET') {


    $prefeito = 'Prefeito';
    $sql_prefeitos = "SELECT * FROM candidatos where titulo='".$prefeito."' order by votos desc";

    $result_prefeitos = $mysqli->query($sql_prefeitos);
    
    $output_prefeitos = array();
   
    echo "<tr><td><h3>Prefeito</h3></td><td><h3>Número</h3></td><td><h3>Partido</h3></td><td><h3>Votos</h3></td></tr>";

    while ($row = $result_prefeitos->fetch_assoc()) {
        echo "<tr><td>".$row["nome"]."</td><td>".$row["numero"]." </td> <td>".$row["partido"]."</td><td> ".$row["votos"]."</td></tr>";
    }
}

?>
    </table>
    </div>
    <div>
     <table>
<?php

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");

include("connection.php");

if($_SERVER['REQUEST_METHOD'] === 'GET') {

    $vereador = 'Vereador';
    $sql_vereadores =  "SELECT * FROM candidatos where titulo='".$vereador."' order by votos desc";
    $result_vereadores = $mysqli->query($sql_vereadores);

    $output_vereadores = array();

    echo "<tr><td><h3>Vereador</h3></td> <td><h3>Número</h3></td> <td><h3>Partido</h3></td> <td><h3>Votos</h3></td></tr>";

    while ($row = $result_vereadores->fetch_assoc()) {
        echo "<tr> <td> ".$row["nome"]."</td> <td> ".$row["numero"]." </td> <td>".$row["partido"]."</td><td> ".$row["votos"]."</td></tr>";
    }

  
}

?>
</table>
</div>
<div class="" style="display:flex; justify-content:flex-start; margin-top: 30px;">
<button type="button" name="button" onclick="location.href='../';"  style="padding:10px;"> Volte para a votação </button>
    <button type="button" name="button" onclick="location.href='restart.php';"  style="padding:10px;"> Reiniciar as Eleições </button>
</div>
</body>
</html>