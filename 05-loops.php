<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>
<body>
    <h1>Estruturas de Controle e Repetição</h1>
    <hr>
    <h2>While (enquanto)</h2>

    <!-- Selecionar o 1º Elemento + Crtl + D (Altera vários itens ao mesmo tempo) -->

<?php
    $i = 1;
    while ($i <= 5){
?>
        <p><?=$i?></p>
       <!-- $i = $i + 1; -->
<?php
        $i ++; // Mesmo da linha de cima

    }

?>
<hr>
<!-- _______________________________________________________________________________ -->

    <h2>do/while (repita)</h2>

<?php
    $j = 1;
     do {
?>
    <div><h3>Olá!</h3></div>
<?php
    $j++;        


     } while ($j <=3);

?>
<hr>
<!-- _______________________________________________________________________________ -->
    <h2>For</h2>

<?php
    // Laço For
    // para i de 1 até 10 faça

    //Controle; Condição; Atualização
     for( $i = 1; $i <=10; $i++){
         // O ponto concatena
         echo $i." ";

     }
 ?>
 <!-- _______________________________________________________________________________ -->

 <!-- Exercício
      1) Crie um array com os meses do ano
      2) Usando um loop for, acesse e mostre os nomes dos meses dentro de uma lista ordenada
 -->
<hr>
    <h2>Exercício meses</h2>

<?php

    $meses = array("Janeiro", "Fevereiro", "Março", "Abril","Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro","Novembro", "Dezembro");
?>
    <ol>
<?php
    // Linha abaixo permite melhorar a performace para grandes tabelas
    $quantidade = count($meses);

    for($k = 0; $k < $quantidade; $k++) {
    // for($k = 0; $k <= 11; $k++) {
?>
     
       <li><?=$meses[$k]?></li>
    

<?php
    }
?>
    </ol>

<!-- _______________________________________________________________________________ -->
<hr>
    <h2>foreach (para cada)</h2>

<ol>
<?php
        foreach($meses as $mes) {
?>
            <li><?=$mes?></li>
<?php           
        }
        
?>

</ol>
<!-- _______________________________________________________________________________ -->
<hr>
    <h2>Array associativo</h2>
<?php
    $clubes = [
        "Corinthians" => "Timão",
        "Palmeiras" => "Porco",
        "São Paulo" => "Tricolor",
        "Santos" => "Peixe",

    ];

    // foreach($clubes as $clube) {
        foreach($clubes as $clube => $apelido) {
        ?>
        <p>
            O <?=$clube?> é conhecido como: <?=$apelido?>
        </p>
<?php
    }

?>
<!-- _______________________________________________________________________________ -->
<hr>
    <h2>Matriz (Associativa)</h2>
<?php

$alunos = [

              [
                  "nome" => "Chaves",
                  "idade" => 8

              ],
              [
                  "nome" => "Chapolin",
                  "idade" => 20

              ],
              [
                  "nome" => "Chiquinha",
                  "idade" => 10

              ]
          ];

    foreach($alunos as $aluno){
?>
    <p> Nome: <?=$aluno['nome']?> </p>
    <p> Idade: <?=$aluno['idade']?> </p>
    <hr>

<?php
    }
?>

</body>
</html>