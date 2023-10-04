<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad7</title>
</head>
<body>
    <?php
        $nr = array(
            $_POST['nr1'],
            $_POST['nr2'],
            $_POST['nr3']
        );
        $a=0;
        if($nr[1]<$nr[0])
        {
            $a=$nr[0];
            $nr[0]=$nr[1];
            $nr[1]=$a;
        }

        if($nr[2]<$nr[1])
        {
            $a=$nr[1];
            $nr[1]=$nr[2];
            $nr[2]=$a;
        }

        if($nr[1]<$nr[0])
        {
            $a=$nr[0];
            $nr[0]=$nr[1];
            $nr[1]=$a;
        }

        if($nr[1]==$nr[0])
        {
            if($nr[1]==$nr[2])
            {
                echo "Liczby ".$nr[0].", ".$nr[1].", ".$nr[2]. " są równe";
            } else  echo "Liczby ".$nr[0].", ".$nr[1]." są najmniejsze";
        } else  echo "Liczba ".$nr[0]." jest najmniejsza";
           
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>