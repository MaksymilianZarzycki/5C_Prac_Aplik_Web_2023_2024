<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad6</title>
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
                if($i==1||$i==$nr2||$j==1||$j==$nr1)
                {
                    echo "<td>*</td>";
                } else echo "<td> </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>