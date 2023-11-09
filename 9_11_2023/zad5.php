<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad5</title>
</head>
<body>
    <?php

        function f($x)
        {
            return 3*$x-30;
        }

        function polowienie_przedzialow($a,$b,$epsilon)
        {
            if(f($a)==0.0)return $a;
            if(f($b)==0.0)return $b;

            $middle=($a+$b)/2;

            if($b-$a<=$epsilon){return $middle;}

            if(f($a)*f($middle)<0)
            {
                return polowienie_przedzialow($a,$middle,$epsilon);
            }

            return polowienie_przedzialow($middle,$b,$epsilon);
            echo $middle;
        }

        echo "Miejsce zerowe wynosi: ".polowienie_przedzialow(0,15,0.1);
    ?>
</body>
</html>