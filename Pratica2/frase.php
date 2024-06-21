<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        function hp() {
            $nome = $_POST["vasco"];
            $idade = $_POST["botafogo"];
            $hobbyF = $_POST["athletico_paranaense"];

            echo "<h1> Meu nome é $nome e tenho $idade anos. Meu hobby favorito é $hobbyF.";
        }

        hp();
    ?>





</body>
</html>