<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Matriz PHP</title>
	</head>
	<body>
                <?php
                        $linhas = 10;
                        $colunas = 14;
                        for ($line=0; $line <= $linhas; $line++) {
                                for ($column=0; $column <= $colunas; $column++) {
					$matriz[$line][$column] = rand(1, 1000);
				}      
                        }
                        echo "<table>";
                        for ($line=0; $line <= $linhas; $line++) {
                                echo "<tr>";
                                for ($column=0; $column <= $colunas; $column++) {
                                        echo "<td>".$matriz[$line][$column]."</td>";
                                }
                                echo "</tr>";
                        }
                        echo "</table>";
                ?>
        </body>
</html>
