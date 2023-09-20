<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área de Quadrado</title>
</head>
<body>
    <form method="post">
        <label for="lado">Comprimento dos lados (metros):</label>
        <input type="text" name="lado" id="lado"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST["lado"];
        $area = $lado * $lado;
        echo "A área do quadrado de lado $lado metros é $area metros quadrados.";
    }
    ?>
</body>
</html>
