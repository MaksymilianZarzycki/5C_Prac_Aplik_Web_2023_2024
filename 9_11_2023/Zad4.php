<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad4</title>
</head>
<body>
    <?php
        define("START",1);

        echo "<h3>FOR</h3>";
        for($i=START;$i<START+10;$i++)
        {
            echo $i."<br>";
            echo sqrt($i)."<br><hr/>";
        }

        echo "<h3>WHILE</h3>";
        $j=START;
        while($j<START+10)
        {
            echo $j."<br>";
            echo sqrt($j)."<br><hr/>";
            $j++;
        }

        echo "<h3>DO WHILE</h3>";
        $k=START;
        do
        {
            echo $k."<br>";
            echo sqrt($k)."<br><hr/>";
            $k++;
        }
        while($k<START+10);
    ?>
</body>
</html>