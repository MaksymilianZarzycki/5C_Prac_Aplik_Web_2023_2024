<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad4</title>
</head>
<body>
    <?php
        $nr1=$_POST['nr1'];
            if($nr1==0)
            {
            echo "Liczba $nr1 jest równa 0";
            } else  if($nr1<0)
            {
            echo "Liczba $nr1 mniejsza od 0";
            } else  echo "Liczba $nr1 większa od 0";
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>