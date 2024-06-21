<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $matriz = array();

        $sequencia = 1;
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < count($_POST) / 2; $j++) {
                $matriz[$i][$j] = $_POST["num$sequencia"];
                $sequencia++;
            }
        }

    ?>

    <table>

        <?php
            for ($i = 0; $i < count($matriz); $i++) {
                echo "<tr>";
                for ($j = 0; $j < count($matriz[$i]); $j++) {
                    $valor = $matriz[$i][$j];
                    echo "<td>$valor</td>";
                }
                echo "</tr>"; 
            }
            ?>

    </table>

    <?php
    $totalElementos = count($matriz) * count($matriz[0]);
    $somaTotal = 0;
    $somaColunaMeio = 0;

    foreach ($matriz as $linha) {
        foreach ($linha as $elemento) {
            $somaTotal += $elemento;
        }
    }

    $media = $somaTotal / $totalElementos;


    foreach ($matriz as $linha) {
        $somaColunaMeio += $linha[1];
    }

    $linhaIndice1 = $matriz[1];
    $maiorValorLinha = $linhaIndice1[0];
    $menorValorLinha = $linhaIndice1[0];

    foreach ($linhaIndice1 as $valor) {
        if ($valor > $maiorValorLinha) {
            $maiorValorLinha = $valor;
        }
        if ($valor < $menorValorLinha) {
            $menorValorLinha = $valor;
        }
    }


    echo "Media dos Elemetos da Matriz: ". $media . "<br>";
    echo "Soma da Coluna do meio da Matriz: " . $somaColunaMeio . "<br>";
    echo "Maior Valor da Linha de Indice 1 da Matriz: ". $maiorValorLinha . "<br>";
    echo "Menor Valor da Linha de Indice 1 da Matriz: ". $menorValorLinha . "<br>";
    ?>
</body>
</html>