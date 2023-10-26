<?php
    $t=time()+3600;
    if(!isset($_COOKIE["hits"]))
    {
        setcookie("time","$t");
    }

    if(!isset($_COOKIE["hits"]))
    {
        $nr=1;
    }
    else if($_COOKIE["time"]<time())
    {
        
        $nr=(int)$_COOKIE["hits"];
        if($nr<1)
        {
            $nr=1;
        }
        $nr++;

        setcookie("time","$t");
    } 
    else  $nr=(int)$_COOKIE["hits"];

    setcookie("hits","$nr");
    
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad7</title>
</head>
<body>
    <?php
        
            echo "Liczba odwiedzin: ".$nr;
    ?>
</body>
</html>