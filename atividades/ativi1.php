<!DOCTYPE html>
<html>
<head>
    <title>Soma de Valores</title>
</head>
<body>
    <form method="post">
        <label for="valor1">Valor 1:</label>
        <input type="text" name="valor1" id="valor1"><br>

        <label for="valor2">Valor 2:</label>
        <input type="text" name="valor2" id="valor2"><br>

        <label for="valor3">Valor 3:</label>
        <input type="text" name="valor3" id="valor3"><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $valor3 = $_POST["valor3"];

        $soma = $valor1 + $valor2 + $valor3;

        if ($valor1 > 10) {
            $cor = "blue";
        } elseif ($valor2 < $valor3) {
            $cor = "green";
        } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            $cor = "red";
        } else {
            $cor = "black"; 
        }
        echo "<p style='color: $cor;'>A soma dos três valores é: $soma</p>";
    }
    ?>
</body>
</html>
