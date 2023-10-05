<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad7</title>
</head>
<body>
    <?php
        $nr1 = $_POST['nr1'];
        $nr2 = $_POST['nr2'];
        $w=0;
        for($i=$nr1;$i<=$nr2;$i++)
        {
            if($i%2!=0)
            {
                echo "$w + $i = ";
                echo $w+=$i;
                echo "<br>";
            }
        }
        echo "Wynik: ".$w;
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>