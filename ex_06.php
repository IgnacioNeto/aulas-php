<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
    <style>
        label { font-weight: bold;}
        button {
            font-family: Arial, Helvetica, sans-serif;
            background-color:black;
            color: white;
            font-weight: 800;
            font-size: 18px;
            width: 120px;
            height: 50px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1 style="color:blue">Exercício 7</h1>
    <hr>
    <form action="processa-ex-6.php" method="post">
        <p>
            <label for="produto">Nome do produto:</label><br>
            <input required type="text" name="produto" id="produto">
        </p>

        <label for="fabricante">Fabricante:</label><br>
        <select name="fabricante" id="fabricante">

            <option value=""> </option>
            <?php include "fabricantes.php" ?>

                <!-- <option value="volkswagen">Volkswagen</option>
                <option value="ford">Ford</option>
                <option value="gm">GM</option>
                <option value="fiat">Fiat</option> -->
        </select>

        <p>
            <label for="preco">Preço:</label><br>
            <input required type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
        </p>

        <p>
            <label for="descricao">Descrição:</label><br>
            <textarea type="submit" name="descricao" id="descricao" cols="30" rows="6"></textarea>
        </p>
        <button type="submit" name="enviar">Enviar</button>
    </form>
    
</body>
</html>