<?php
    if(!isset($_COOKIE["hits"]))
    {
        $nr=1;
    }
    else
    {
        $nr=(int)$_COOKIE["hits"];
        if($nr<1)
        {
            $nr=1;
        }
        $nr++;
    }
    setcookie("hits","$nr");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad5</title>
</head>
<body>
    <?php
        
            echo "Liczba odwiedzin: ".$nr;

            if($nr=="69")
            {
                echo " Nice!";
            }

            if($nr=="666")
            {
                echo " 😈";
            }
    ?>
</body>
</html>