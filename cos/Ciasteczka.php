<?php
    $cookie_name="user";

    $cookie_value="Jan Kowalski";
    $cookie_value="Jan Nowak";

    setcookie($cookie_name, $cookie_value, time()+(86400*30),"/");

    if(!isset($_COOKIE['visited']))
    {
        setcookie("visited", "Yes");
        $str = "No cookie :(";
    } 
    else
    {
        $str= "{$_COOKIE['visited']} cookie :)";
    }

    if(!isset($_COOKIE['hits']))
    {
        $nr=1;
    }
    else
    {
        $nr=(int)$_COOKIE['hits'];
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
    <title>Ciasteczka</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name]))
        {
            echo "Cookie named '".$cookie_name."' is not set!";
        } 
        else 
        {
            echo "Cookie '".$cookie_name."' is set!<br>";
            echo "Value is: ".$_COOKIE[$cookie_name];
        }
        
        echo "<br>";
        echo $str;

        echo "<br>";
        echo "$nr";

        echo "<br>";
        if(count($_COOKIE)>0)
        {
            echo "cookies enabled";
        }
        else
        {
            echo "cookies disabled";
        }
    ?>
</body>
</html>