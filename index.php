<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela com Números de 1 a 100</title>
    <style>
        table {
            margin: auto; 
        }
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid black; 
            width: 10%;
        }
        .amarelo {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <table>
        <?php
            $contador = 1;
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 10; $j++) {
                    $classeAmarela = ($j == $i) ? 'amarelo' : '';
                    echo "<td class='$classeAmarela'>$contador</td>";
                    $contador++;
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>