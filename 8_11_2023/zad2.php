<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>zad2</title>
</head>
<body>
    <?php
        $nr=100;

        if($nr<0)
        {
            echo "Liczba musi być nieujemna";
        }
        else
        {
            echo sqrt($nr);
        }
    ?>
</body>
</html>