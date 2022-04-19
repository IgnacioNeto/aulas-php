<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <style>
        h2 {
            color:blue;
            text-decoration: underline;

        }
        #ignacio {

            background-color: lightgray;

        }
        #maria {

            background-color: lightgreen;

        }
        main {
            display: flex;
            justify-content: inline;
 

        }
        section {
            margin: 5px;
            border: 3px solid black;
            width: 250px;
        }
    </style>
</head>
<body>
    <h1>Exercício 2</h1>
    <hr>

<h2>Dados dos usuários</h2>

<?php
    $dadosUsuario = [
        "nome" => "Ignacio",
        "email" => "igcunha89@gmail.com",
        "idade" => 40,
        "sexo" => "masculino",
        "cidade" => "São Paulo",

    ];

    $dadosUsuario2 = [
        "nome" => "Maria",
        "email" => "maria56@gmail.com",
        "idade" => 18,
        "sexo" => "feminino",
        "cidade" => "Rio de Janeiro",

    ];

?>

    <main>
        <section id="ignacio">
            <p>Nome de usuário: <?=$dadosUsuario["nome"]?> </p>
            <p>e-mail: <?=$dadosUsuario["email"]?> </p>
            <p>Idade: <?=$dadosUsuario["idade"]?> anos</p>
            <p>Sexo: <?=$dadosUsuario["sexo"]?> </p>
            <p>Cidade: <?=$dadosUsuario["cidade"]?> </p>
        </section>
        <!-- <hr> -->
        <section id="maria">
            <p>Nome de usuário: <?=$dadosUsuario2["nome"]?> </p>
            <p>e-mail: <?=$dadosUsuario2["email"]?> </p>
            <p>Idade: <?=$dadosUsuario2["idade"]?> anos </p>
            <p>Sexo: <?=$dadosUsuario2["sexo"]?> </p>
            <p>Cidade: <?=$dadosUsuario2["cidade"]?> </p>
        </section>
    </main>


    
</body>
</html>