<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad4</title>
</head>
<body>
    <?php
         $distance = $_POST['distance'];
         if(isset( $_POST['warm']))
         {
            $isWarm = $_POST['warm'];
         }else $isWarm = false;
         


         $price = $distance*0.5;
         if($isWarm) $price *= 1.15;
         echo "Koszt dostawy: <b>$price</b>zł";

    ?>
</body>
</html>