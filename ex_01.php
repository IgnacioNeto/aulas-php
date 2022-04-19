<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Variáveis e Constantes</title>

</head>
<body>

<?php
    // Variáveis

    // $data = "18/03/2022"; // Data em String
    date_default_timezone_set("America/Sao_Paulo"); // Acerta fuso horário
    $data = date("d/m/Y H:i"); // Função date()
   // $data = date("d/m/Y"); // Função date()

   // const NOME = "Ozzy Osbourne"; // Por constante
   // define("NOME", "Ozzy Osbourne"); 

    $nome = "Ignacio neto"; // String   
    $curso = "Técnico em informática para internet"; // String
    $cargahr = 1000; // Inteiro (integer)
    $limite = $cargahr * 0.25; // Cálculo limite de faltas

?>

    <h2>Saída de dados</h2>
    <hr>

    <!-- Forma abreviada -->
    <p><u><strong>Data de hoje:</strong></u> <?=$data?></p>
    <!-- <p><u><strong>Nome:</strong></u> <?=$NOME?></p> -->
    <p><u><strong>Nome:</strong></u> <?=$nome?></p>
    <p><u><strong>Curso:</strong> </u><?=$curso?></p>
    <p><u><strong>Carga horária:</strong></u> <?=$cargahr?> Hs</p>
    <p><u><strong>Limite de faltas:</strong></u> <?=$limite?> Hs</p>

    
</body>
</html>