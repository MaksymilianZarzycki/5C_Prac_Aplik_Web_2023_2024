<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad8</title>
</head>
<body>
    <?php
        $nr1 = $_POST['nr1'];
        $nr2 = $_POST['nr2'];
        echo "<table>";
        for($i=1;$i<=$nr2;$i++)
        {
            echo "<tr>";
            for($j=1;$j<=$nr1;$j++)
            {
                if($i%2==0&&$j%2==0||$i%2!=0&&$j%2!=0)
                {
                    echo "<td>X</td>";
                } else echo "<td>O</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>