<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad2</title>
</head>
<body>
    <?php
        define("START",100);

        echo "<h3>FOR</h3>";
        for($i=START;$i>START-10;$i--)
        {
            echo $i.", ";
        }

        echo "<h3>WHILE</h3>";
        $j=START;
        while($j>START-10)
        {
            echo $j.", ";
            $j--;
        }

        echo "<h3>DO WHILE</h3>";
        $k=START;
        do
        {
            echo $k.", ";
            $k--;
        }
        while($k>START-10);
    ?>
</body>
</html>