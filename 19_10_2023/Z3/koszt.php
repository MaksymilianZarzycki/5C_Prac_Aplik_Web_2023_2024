<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad3</title>
</head>
<body>
    <?php
         $fuel = $_POST['fuel'];
         $distance = $_POST['distance'];
         $average = $_POST['average'];

         $fuel=floatval($fuel);
         $average=floatval( $average);

         echo "Cena paliwa: <b>$fuel</b> zł/l<br>";
         echo "Dystans: <b>$distance</b> km<br>";
         echo "Średnie spalanie: <b>$average</b> l/100km<br>";
         echo "Koszt przejazdu: <b>".$average*($distance/100)*$fuel."</b>zł";

    ?>
</body>
</html>