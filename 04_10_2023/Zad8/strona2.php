<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad8</title>
</head>
<body>
    <?php
        $nr = array(
            $_POST['nr1'],
            $_POST['nr2'],
            $_POST['nr3']
        );
        $a=0;
        if($nr[0]==$nr[1])
        {
           echo "Liczby pierwsza i druga są równe<br>";
        }

        if($nr[1]==$nr[2])
        {
            echo "Liczby druga i trzecia są równe<br>";
        }

        if($nr[0]==$nr[2])
        {
            echo "Liczby pierwsza i trzecia są równe<br>";
        } 
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>