<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad6</title>
</head>
<body>
    <?php
        $nr1=$_POST['nr1'];
        $czyPrzestępny=true;
        if($nr1%4==0)
        {
            if($nr1%100==0)
            {
                if($nr1%400!=0)
                {
                    $czyPrzestępny=false;
                }
            }
        } else $czyPrzestępny=false;
        
        if($nr1>1582)
        {
            if($czyPrzestępny==true)
            {
               echo "Rok przestępny, luty ma 29 dni";
            } else echo "Rok nie przestępny, luty ma 28 dni";
        } else echo "Lata przestępne liczymy od momentu reformy kalendarza w roku 1582";
        
           
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>