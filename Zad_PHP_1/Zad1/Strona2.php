<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1</title>
</head>
<body>
    <?php
         $nr=$_POST['nr'];

        if($nr % 2 == 0)
        {
          echo "Liczba $nr jest parzysta";
        } else echo "Liczba $nr nie jest parzysta";
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>