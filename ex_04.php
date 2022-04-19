<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <style>

        table {
            text-align: center; 
            background: coral;
            border-collapse: collapse;/* Agrupa as bordas da tabela e deixa mais fácil formatá-las*/
            border: black 2px solid;

        }

        tr{
            background-color:limegreen;
        }
        tr:nth-child(even) {
            background-color:limegreen;
        }
        tr:nth-child(odd) {
            background-color:lightblue;
        }

        td{
            border: black 2px solid;
        }

        th{
            background: #333;
            color: white;
            
        }
        h1 {
            font-family: helvetica;
            color: blue;
            text-decoration: underline;
        }

    </style>

</head>
<body>
    <h1>Array associativo</h1>

    <?php
        $linguagens = [
            "HTML" => "Estruturação",
            "CSS" => "Estilos",
            "JS" => "Comportamentos",
            "PHP" => "Back-End",

        ];
    ?>
    <table>

            <caption>Tabela</caption> <!-- Título acima -->
            <thead> <!-- Melhora a semântica da tabela (head da tabela)  -->
                <tr>
                    <th>ID</th>
                    <th>Linguagem</th>
                    <th>Descrição</th>
                </tr>
            </thead>

        <tbody> <!-- Melhora a semântica da tabela (body da tabela)  -->
            <?php
                    $i=0;
                    foreach($linguagens as $linguagen => $apelido) {
                    $i++;
            
            ?>
                    <tr>
                        <!-- Poderia ser incrementado aqui ($i++) -->
                        <td><?=$i?></td> 
                        <td><?=$linguagen?></td>
                        <td><?=$apelido?></td>
                    </tr>
            <?php
                }
            ?>
        </tbody>

    </table>
<!--_____________________________________________________________________________________  -->

    <p>&nbsp;</p> <!-- Espaço -->
    <hr>
    <h1>Array matriz</h1>

    <?php
    $linguagens2=[
                    [
                        "id" => 1, 
                        "linguagem" => "HTML",
                        "Descrição" => "Estruturação",
                    ],

                    [
                        "id" => 2, 
                        "linguagem" => "CSS",
                        "Descrição" => "Estilos",

                    ],
                    [
                        "id" => 3, 
                        "linguagem" => "JS",
                        "Descrição" => "Comportamentos",

                    ],
                    [
                        "id" => 4, 
                        "linguagem" => "PHP",
                        "Descrição" => "Back-End",

                    ]

                ];
    
    ?>

    <table>

        <caption>Tabela</caption> <!-- Título acima -->
            <thead> <!-- Melhora a semântica da tabela (head da tabela)  -->
                <tr>
                    <th>ID</th>
                    <th>Linguagem</th>
                    <th>Descrição</th>
                </tr>
            </thead>

        <tbody> <!-- Melhora a semântica da tabela (body da tabela)  -->
            <?php

                    foreach($linguagens2 as $Dados) {
                 

            ?>
                    <tr>
                        <td><?=$Dados['id']?></td> 
                        <td><?=$Dados['linguagem']?></td> 
                        <td><?=$Dados['Descrição']?></td> 
                    </tr>
            <?php
                }
            ?>
        </tbody>

    </table>
    
</body>
</html>