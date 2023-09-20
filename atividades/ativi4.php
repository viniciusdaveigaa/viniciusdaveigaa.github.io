<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área de Retângulo</title>
</head>
<body>
    <form method="post">
        <label for="ladoA">lado A:</label>
        <input type="text" name="ladoA" id="ladoA"><br>
        <label for="ladoB">lado B:</label>
        <input type="text" name="ladoB" id="ladoB"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ladoA = $_POST["ladoA"];
        $ladoB = $_POST["ladoB"];
      
        $area = $ladoA * $ladoB;

        $tagHTML = ($area > 10) ? 'h1' : 'h3';

        echo "<$tagHTML>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</$tagHTML>";
    }
    ?>
</body>
</html>
