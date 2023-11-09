<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad3</title>
</head>
<body>
    <?php
        define("START",100);

        echo "<h3>FOR</h3>";
        for($i=START;$i<START+25;$i+=5)
        {
            echo $i.", ";
        }

        echo "<h3>WHILE</h3>";
        $j=START;
        while($j<START+25)
        {
            echo $j.", ";
            $j+=5;
        }

        echo "<h3>DO WHILE</h3>";
        $k=START;
        do
        {
            echo $k.", ";
            $k+=5;
        }
        while($k<START+25);
    ?>
</body>
</html>