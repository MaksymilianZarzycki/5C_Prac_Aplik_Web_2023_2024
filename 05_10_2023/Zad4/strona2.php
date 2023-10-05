<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad4</title>
</head>
<body>
    <?php
        $nr1 = $_POST['nr1'];
        $isPrime=true;
        for($i=2;$i<$nr1;$i++)
        {
            if($nr1%$i==0)
            {
                $isPrime=false;
                break;
            }
        }
        
        if($isPrime==true)
        {
            echo $nr1." jest liczbą pierwszą";
        } else echo $nr1." Nie jest liczbą pierwszą";
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>