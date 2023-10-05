<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad5</title>
</head>
<body>
    <?php
        echo "FOR:<br>";
        echo "<table style='border-collapse: collapse;'>";
        for($i=0;$i<=10;$i++)
        {
            echo "<tr>";
            echo "<td style='border-top:1px solid grey; width:50px; height:20px;'>$i</td>";
            for($j=1;$j<=10;$j++)
            {
                echo "<td style='border-top:1px solid grey; width:50px; height:20px;'>";
                if($i>0)
                {
                    echo $i*$j;
                }else echo $j;
                echo "</td>";
            }
              echo "</tr>";
        }
        echo "</table>";

        echo "<hr/><br>";
        echo "WHILE:<br>";
        echo "<table style='border-collapse: collapse;'>";
        $i=0;
        while($i<=10)
        {
            
            echo "<tr>";
            echo "<td style='border-top:1px solid grey; width:50px; height:20px;'>$i</td>";
            $j=1;
            while($j<=10)
            {
                
                echo "<td style='border-top:1px solid grey; width:50px; height:20px;'>";
                if($i>0)
                {
                    echo $i*$j;
                }else echo $j;
                echo "</td>";
                $j++;
            }
            echo "</tr>";
            $i++;
        }
        echo "</table>";

        echo "<hr/><br>";
        echo "DO WHILE:<br>";
        echo "<table style='border-collapse: collapse;'>";
        $i=0;
        do
        {
            
            echo "<tr>";
            echo "<td style='border-top:1px solid grey; width:50px; height:20px;'>$i</td>";
            $j=1;
            do
            {
                
                echo "<td style='border-top:1px solid grey; width:50px; height:20px;'>";
                if($i>0)
                {
                    echo $i*$j;
                }else echo $j;
                echo "</td>";
                $j++;
            }while($j<=10);
            echo "</tr>";
            $i++;
        }while($i<=10);
        echo "</table>";
    ?>
</body>
</html>