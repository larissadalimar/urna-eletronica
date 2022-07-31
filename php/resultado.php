<!DOCTYPE html>
<html lang="en" dir="ltr">
<html>
  <head>
    <meta charset="utf-8">
    <title>Resultado ds eleições</title>
  </head>
  <body>
    <div>
     <table>

<?php

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");

include("connection.php");

if($_SERVER['REQUEST_METHOD'] === 'GET') {


    $prefeito = 'Prefeito';
    $sql_prefeitos = "SELECT * FROM candidatos where titulo='".$prefeito."' order by votos desc";

    $result_prefeitos = $mysqli->query($sql_prefeitos);
    
    $output_prefeitos = array();
   
    echo "<tr><td>Prefeito</td><td>Número</td><td>Partido</td><td>Votos</td></tr>";

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

    echo "<tr><td>Vereador</td> <td>Número</td> <td>Partido</td> <td>Votos</td></tr>";

    while ($row = $result_vereadores->fetch_assoc()) {
        echo "<tr> <td> ".$row["nome"]."</td> <td> ".$row["numero"]." </td> <td>".$row["partido"]."</td><td> ".$row["votos"]."</td></tr>";
    }

  
}

?>
</table>
</div>
</body>
</html>