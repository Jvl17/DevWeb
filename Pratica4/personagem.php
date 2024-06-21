<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    class Personagem {
        public $nome;
        public $tipo;
        public $nivel;

        public function aumentarNivel ($quantidade){
            $this->nivel += $quantidade;

        }
    }

    if($_POST) {
        $personagem = new Personagem();
        $personagem->nome = $_POST["nome"];
        $personagem->tipo = $_POST["tipo"];
        $personagem->nivel = intval($_POST["nivel"]);


        echo "<h2>Dados do Personagem: </h2>";
        var_dump($personagem);

        $personagem->aumentarNivel(1);
        echo "<h2>Personagem Após Aumentar o Nível: </h2>";
        var_dump($personagem);
    }


    ?>




</body>
</html>