<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada de 1 a 5</title>
    <style>
        table {
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <?php
        // Loop para gerar tabelas de 1 a 5
        for ($i = 1; $i <= 5; $i++) {
            echo "<td>";
            echo "<h2>Tabuada do $i</h2>";
            echo "<table>";
            echo "<tr><th>Operação</th><th>Resultado</th></tr>";

            // Loop para preencher a tabela de multiplicação
            for ($j = 1; $j <= 10; $j++) {
                $resultado = $i * $j;
                echo "<tr><td>$i x $j</td><td>$resultado</td></tr>";
            }

            echo "</table>";
            echo "</td>";
        }
        ?>
    </tr>
</table>

</body>
</html>
