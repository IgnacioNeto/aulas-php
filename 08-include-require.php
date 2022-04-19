<!-- Fazendo a inclusão de um arquivo de programação -->
<?php include "recursos.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de recursos</title>
</head>
<body>
    <h1>Inclusão de recursos</h1>
    <hr>

<h2> <?=ESCOLA?> </h2>
<p>Estamos fazendo o curso de <?=$curso?> </p>
<ul>
    <?php foreach($tecnologias as $tecnologia) { ?>
        <li> <?=$tecnologia?></li>

  <?php  } ?>
</ul>

<p>O aluno Chapolin Colorado tem 25 anos e é: <?=verificaIdade(25)?> de idade. </p>

<hr>
<!-- Tras conteudo de um arquivo externo HTML -->
<article>
    <h2>Conteúdo qualquer</h2>
    <!-- No caso de erros o required para tudo e o include não -->
    <?php include "Textos.php"?>
</article>

    
</body>
</html>