<?php

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");

include("connection.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset($_GET['numero'])){
        $voto = $_GET['numero'];
        $sql = "update candidatos set votos = votos + 1 where numero='".$voto."'";
        $result = $mysqli->query($sql);

        echo "Votação bem sucedida!";
    }
}

if($_SERVER['REQUEST_METHOD'] === 'GET') {

    $sql = "select * from candidatos";

    $result = $mysqli->query($sql);
    
    $output = array();

    while($row = $result->fetch_assoc()) {

      $output[] = array( 'id' => $row['id'],  'nome' => $row['nome'], 'numero' => $row['numero'], 'partido' => $row['partido'], 'cargo_pretendido' => $row['cargo_pretendido'], 'foto' => $row['foto'],  'votos' => $row['votos'] );
    }

    echo json_encode($output, JSON_UNESCAPED_UNICODE);

   
}

mysqli_close($conn);
?>

