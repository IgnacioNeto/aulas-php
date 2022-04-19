<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP</title>
    <style>
        .ok {
            color:blue;
            font-weight: bold;
            font-size: 18px;
        }
        .repor {
            color:red;
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Estruturas de Controle Condicional</h1>
    <hr>
<!-- ___________________________________________________________________ -->
    <h2>Simples</h2>

<?php

    $numero = 5;
    if($numero > 1) {
        echo "<p>$numero é maior que 1 </p>";
    }

    // Aceita como abaixo por ser apenas 1 instrução simples
    if($numero > 1) echo "<p>$numero é maior que 1 </p>";

?>
<hr>
<!-- ___________________________________________________________________ -->
    <h2>Composta</h2>

<?php
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 0; // o que temos no momento
    $qtdCritica = 14; //mínimo necessário

    echo "<h3>$produto</h3>";
    if($qtdEmEstoque < $qtdCritica) {
        echo "<p class = 'repor'>É necessário comprar!</p>";

        // Condicional aninhada
        // Obs === Indentidade considera (Valor e Tipo de dados)
        if($qtdEmEstoque === 0) {
            echo "<p><mark><b>URGENTE!</b></mark></p>";

        }

    }
    else {
        echo "<p class = 'ok'>Estoque OK!</p>";

    }

?>
<hr>
<!-- ___________________________________________________________________ -->
    <h2>Encadeada</h2>

<?php
    /* Cardápio digital
    1 -> Pastel
    2 -> Pizza
    3 -> Esfiha
    x -> Opção inválida */

/*
    $opcao = 1; // comece com qualquer valor

    if($opcao === 1) {
        echo "<p>Pastel</p>";
    } elseif($opcao === 2) {
        echo "<p>Pizza</p>";
    } elseif($opcao === 3) {
        echo "<p>Esfiha</p>";
    } else {
        echo "<p>Opção inválida!</p>";
    } */
/* ___________________________________________________________________ */
    // Refatorada (Melhorada)
    $opcao = 1; // comece com qualquer valor

    if($opcao === 1) {
        $opcaoEscolhida = "Pastel";
    } elseif($opcao === 2) {
        $opcaoEscolhida = "Pizza";
    } elseif($opcao === 3) {
        $opcaoEscolhida = "Esfiha";
    } else {
        $opcaoEscolhida = "Opção inválida";
    } 

    echo "<p>$opcaoEscolhida</p>";

?>
<hr>

<!-- ___________________________________________________________________ -->
<h2>Switch/Case</h2>

<?php
    switch($opcao) {
        case 1: $pedido = "Pastel"; break;
        case 2: $pedido = "Pizza"; break;
        case 3: $pedido = "Esfiha"; break;
        default: $pedido = "Opção inválida"; break;
    }

    echo "<p>$pedido</p>";

?>


    
</body>
</html>