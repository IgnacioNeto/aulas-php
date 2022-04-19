<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Cálculo de Reajuste de Salário</title>
</head>
<body>

<h2>Exercício 3 - Cálculo de Reajuste de Salário</h2>

<?php

    $salario = 1000; // Entrada

    if($salario < 500) {
        $novoSalario = $salario * 1.15;
    } elseif($salario <= 1000) {
        $novoSalario = $salario * 1.10;
    } else {
        $novoSalario = $salario * 1.05;
    }

    /* number_format(valor, 2,",",".") */

?>

    <p>Salário antigo: R$ <?=number_format($salario, 2, ',', '.')?></p>
    <p>Salário reajustado: R$ <?=number_format($novoSalario, 2, ',', '.')?></p>

<hr>
   
</body>
</html>