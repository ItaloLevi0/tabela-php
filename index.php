<?php

$mysqli = new mysqli("localhost", "root", "1234", "escola");

if ($mysqli) {
    echo "Conexão ok";
} else {
    echo "Conexão off";
    die(mysqli_Error($mysqli));
}

$leitura = "SELECT * FROM escola.alunos;";
$retorno = $mysqli->query($leitura);
?>

<html lang="pt-br">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>escola</title>
    </head>
    <body>
        <table border= "1px">
        <tr>
            <td>Id</td>
            <td>Aluno</td>
            <td>Cidade</td>
            <td>Matricula</td>
        </tr>
        <?php 
        foreach($retorno as $dado){
            echo "<tr>
            <td>{$dado ['id']}</td>
            <td>{$dado ['aluno']}</td>
            <td>{$dado ['cidade']}</td>
            <td>{$dado ['matricula']}</td>
        </tr>";
         } 
        ?>
       </table> 
    </body>
</html>