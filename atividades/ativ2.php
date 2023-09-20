<!DOCTYPE html>
<html>
<head>
    <title>Verificar Divisibilidade por 2</title>
</head>
<body>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="text" name="numero" id="numero"><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenha o número digitado no formulário
        $numero = $_POST["numero"];

        // Verifique se o número é divisível por 2
        if ($numero % 2 == 0) {
            echo "Valor divisível por 2";
        } else {
            echo "O valor não é divisível por 2";
        }
    }
    ?>
</body>
</html>
