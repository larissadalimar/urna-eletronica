<?php

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");

include("connection.php");

if($_SERVER['REQUEST_METHOD'] === 'GET') {


    $prefeito = 'Prefeito';
    $sql_prefeitos = "SELECT * FROM candidatos where titulo='".$prefeito."' order by votos desc";

    $vereador = 'Vereador';
    $sql_vereadores =  "SELECT * FROM candidatos where titulo='".$vereador."' order by votos desc";

    $result_prefeitos = $mysqli->query($sql_prefeitos);
    $result_vereadores = $mysqli->query($sql_vereadores);
    
    $output_prefeitos = array();

    while($row = $result_prefeitos->fetch_assoc()) {

      $output_prefeitos[] = array( 'id' => $row['id'],  'nome' => $row['nome'], 'numero' => $row['numero'], 'partido' => $row['partido'], 'título' => $row['titulo'], 'foto' => $row['foto'],  'votos' => $row['votos'] );
    }

   
    echo "<table> <tr> <td>Prefeito</td> <td>Número</td> <td>Partido</td> <td>Votos</td></tr>";

    while ($row = $result_prefeitos->fetch_assoc()) {
        echo "<tr> <td> " . $row["nome"] . "</td> <td> " . $row["numero"] . " </td> <td>" . $row["partido"] . "</td><td> " . $row["votos"] . "</td></tr>";
    }

    echo "</table>";


    $output_vereadores = array();

    echo "<table> <tr> <td>Vereador</td> <td>Número</td> <td>Partido</td> <td>Votos</td></tr>";

    while ($row = $result_vereadores->fetch_assoc()) {
        echo "<tr> <td> " . $row["nome"] . "</td> <td> " . $row["numero"] . " </td> <td>" . $row["partido"] . "</td><td> " . $row["votos"] . "</td></tr>";
    }

    echo "</table>";

    echo "<br><br>";
  
}

?>