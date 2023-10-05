<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad2</title>
</head>
<body>
    <?php
        $nr1 = $_POST['nr1'];
        $nr2 = $_POST['nr2'];
    
        echo "FOR: <br>";
        echo "Zwiększanie: ";
        for($i=$nr1;$i<=$nr2;$i+=2)
        {
            echo $i.", ";
        }
        $i-=2;
        echo "<br>";
        echo "Zmniejszanie: ";
        for($i;$i>=1;$i-=4)
        {
            echo $i.", ";
        }

        echo "<hr/><br>";
        echo "WHILE: <br>";
        echo "Zwiększanie: ";
        $i=$nr1;
        while($i<=$nr2)
        {
            echo $i.", ";
            $i+=2;
        }
        $i-=2;
        echo "<br>";
        echo "Zmniejszanie: ";
        while($i>=1)
        {
            echo $i.", ";
            $i-=4;
        }

        echo "<hr/><br>";
        echo "DO WHILE: <br>";
        echo "Zwiększanie: ";
        $i=$nr1;
        do
        {
            echo $i.", ";
            $i+=2;
        }while($i<=$nr2);
        $i-=2;
        echo "<br>";
        echo "Zmniejszanie: ";
        do
        {
            echo $i.", ";
            $i-=4;
        }while($i>=1);
    ?>
    <br><a href="strona1.php">Powrót</a>
</body>
</html>