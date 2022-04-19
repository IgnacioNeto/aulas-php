<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
    <style>
        <?php $cor = "Green"; ?>

        p { color: <?= $cor?> }

    </style>
</head>
<body>
    <h1>Manipulando dados na memória</h1>
    <hr>
<?php
    // Variáveis
    $curso = "Técnico em informática para internet"; // String
    $ano = 2022; // Inteiro (integer)
    $preco = 2500.45; // real (float)

    echo "<h2>Saídas de dados</h2>";
    echo "<p>$curso</p>";
    echo "<p>$ano</p>";
    echo $preco;

    // Estamos fazendo o curso Técnico em informática para internet no ano de 2022
    echo "<p>Estamos fazendo o curso $curso no ano de $ano</p>"

?>

    <h2>Saída de dados usando sintaxe simplificada</h2>
    <p><?php echo $curso ?></p>

    <!-- Forma abreviada -->
    <p><?= $curso ?></p>

    <!-- Forma abreviada -->
    <p>Estamos fazendo o curso <?=$curso?> no ano de <?=$ano?> </p>
    <hr>

    <?php
        // Constantes
    
        // 1ª Forma usando a função define ("NOME", "VALOR")
        define("MEU_NOME", "Ignacio");

        // 2ª Forma usando a palavra chave const
        const ESCOLA = "Senac";
    
    ?>

    <!-- Saída das constantes -->
    <p>Olá me chamo <?=MEU_NOME ?></p>
    <p>Estamos estudando no <b><?=ESCOLA?></b></p>

    <?php
        // Versão concatenada (mais trabalhosa)
        echo "<p> Olá Me chamo ".MEU_NOME."</p> ";
        echo "<p> Estamos estudando no <b> ".ESCOLA."<b> </p> ";


    ?>

    
</body>
</html>