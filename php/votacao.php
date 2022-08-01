<?php

/**
 * @file votacao.php
 *
 * Computa cada voto (método post) e mostra a situação dos candidatos (get) 
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

