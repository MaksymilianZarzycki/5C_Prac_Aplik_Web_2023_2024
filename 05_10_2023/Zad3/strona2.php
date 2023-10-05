<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad3</title>
</head>
<body>
    <?php
        $nr1 = $_POST['nr1'];
        $nr2 = $_POST['nr2'];

        echo "Przedział <$nr1,$nr2><br>";
        echo "Podzielne przez 3 i 7: ";
        for($i=$nr1;$i<=$nr2;$i++)
        {
            if($i%3==0&&$i%7==0)
            {
                echo $i.", ";
            }
        }
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>