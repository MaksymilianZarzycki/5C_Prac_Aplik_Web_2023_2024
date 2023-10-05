<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1</title>
</head>
<body>
    <?php
        $nr1 = $_POST['nr1'];
        $nr2 = $_POST['nr2'];

        echo "<table /*style='border-collapse:collapse;'*/>";
        for($i=0;$i<$nr1;$i++)
        {
            echo "<tr>";
            for($j=0;$j<$nr2;$j++)
            {
                echo "<td style='border:1px solid black; width:10px; height:10px;'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>