<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad2</title>
</head>
<body>
    <?php
        $nr1=$_POST['nr1'];
        $nr2=$_POST['nr2'];
            if($nr1 % $nr2 == 0)
            {
            echo "Liczba $nr1 jest podzielna przez $nr2";
            } else echo "Liczba $nr1 nie jest podzielna przez $nr2";
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>