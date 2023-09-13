<!DOCTYPE html>
<html>
<head>
    <title>Matriz Aleatória</title>
</head>
<body>
    <table border="1">
        <?php
        // Defina o tamanho da matriz
        $x = 5; // número de linhas
        $y = 5; // número de colunas

        // Inicialize a matriz e preencha com valores aleatórios
        $matriz = array();
        for ($i = 0; $i < $x; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $y; $j++) {
                $valor = rand(1, 1000);
                $matriz[$i][$j] = $valor;
                echo "<td>" . $valor . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
