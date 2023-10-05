<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad3</title>
</head>
<body>
    <?php
        $nr1=$_POST['nr1'];
            if($nr1>=100&&$nr1<150)
            {
            echo "Liczba $nr1 mieści się w przedziale <100,150)";
            } else echo "Liczba $nr1 nie mieści się w przedziale <100,150)";
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>