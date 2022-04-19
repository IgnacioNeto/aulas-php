<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <h1>Exercício 7</h1>
    <hr>
<!-- Método mais seguro (Não mostra as informações na URL) -->
<?php

// SE + OU (|| (Quando o usuário não preencher produto e preco))
if( empty($_POST['produto']) || empty($_POST['preco']) ){
?>
    <p style="color:red">Você deve preencher Nome do produto e preço!</p>
    
<?php

} else {

    // Captura dos dados com filtro de segurança
        $produto = filter_input(INPUT_POST, 'produto',FILTER_SANITIZE_SPECIAL_CHARS);
        $fabricante = filter_input(INPUT_POST, 'fabricante',FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_input(INPUT_POST, 'preco',FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $descricao = filter_input(INPUT_POST, 'descricao',FILTER_SANITIZE_SPECIAL_CHARS);

    ?>
        <h2>Dados</h2>

        <ul>
        
            <li> <b>Nome do produto:</b> <?=$produto?></li>
            <li> <b>Fabricante:</b> <?=$fabricante?></li>

            <li> <b>Preço:</b> <?= "R$".number_format(($preco), 2, ",", ".");?></li>

            <li> <b>Descrição:</b> <?=$descricao?></li>
            <!-- nl2br -->
        </ul>

 <?php 
} // fim if/else da validação de campos obrigatórios
?>  

</body>
</html>