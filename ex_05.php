<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas e média</title>
    <style>
        .aprovado {color: blue;}
        .reprovado {color: red;}
    </style>
</head>
<body>
    <h1>Notas é média</h1>

<?php
// Versão simples

    $nota1 =8;
    $nota2 =9;

    $media = ($nota1 + $nota2)/2;

    if($media >= 7) {
        $situacao = "Aprovado!";
    }else{
        $situacao = "Reprovado";

    }

?>

    <p><?=$media?></p>
    <p><?=$situacao?></p>
    <hr>
<!-- _______________________________________________________________________ -->

<?php
    // Versão com funções

    function calculaMedia ($n1, $n2) {
        // Variável Local

        $media2 = ($n1 + $n2)/2;
        return $media2;
        
    }

    function verificaSituacao($m) {
        if($m >= 7) {
            return "aprovado";
        }else{
            return "reprovado";

        }
    }
        $media2 = calculaMedia($nota1, $nota2);
        $resultado = verificaSituacao($media2);       

?>

<p>A média foi: <u><strong class="<?=$media2?>"><?=$media2?></strong></u></p>
<p>E você está: <u><strong class="<?=$resultado?>"><?=$resultado?></strong></u></p>
    
</body>
</html>