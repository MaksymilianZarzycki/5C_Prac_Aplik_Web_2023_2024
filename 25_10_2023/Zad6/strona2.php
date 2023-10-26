<?php
    $bday = $_POST['bday'];
    setcookie("bday","$bday");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad6</title>
</head>
<body>
    <?php
        if($bday=="26.10") 
        {
            echo "Wszystkiego najlepszego!";
        }
    ?>
</body>
</html>