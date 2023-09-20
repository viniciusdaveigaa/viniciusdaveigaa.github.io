<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área de Triângulo Retângulo</title>
</head>
<body>
    <form method="post">
        <label for="Altura">Altura:</label>
        <input type="text" name="Altura" id="Altura"><br>
        <label for="Base">Base:</label>
        <input type="text" name="Base" id="Base"><br>
        <input type="submit" value="Calcular Área Triângulo">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Altura = $_POST["Altura"];
        $Base = $_POST["Base"];
      
        $area = ($Altura * $Base) / 2;
      
        echo "<h3>A área do triângulo retângulo é de $area </h3>";
    }
    ?>
</body>
</html>
