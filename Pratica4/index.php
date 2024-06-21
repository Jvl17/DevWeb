<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="personagem.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="tipo">Tipo: </label>
        <select name="tipo" id="tipo">
            <option value="Guerreiro">Guerreiro</option>
            <option value="Arqueiro">Arqueiro</option>
            <option value="Mago">Mago</option>
        </select> <br> <br>

        <label for="nivel">Nível: </label>
        <input type="number" id="nivel" name="nivel"> <br> <br>

        <button type="submit" value="Enviar">Enviar</button>
    </form>
</body>
</html>