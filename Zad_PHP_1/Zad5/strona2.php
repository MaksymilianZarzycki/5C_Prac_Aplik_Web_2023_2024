<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad5</title>
</head>
<body>
    <?php
        $nr1=$_POST['nr1'];
            if($nr1<11)
            {
            echo "Dziecko";
            } else  if($nr1>=18)
            {
            echo "Dorosły";
            } else  echo "Nastolatek";
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>