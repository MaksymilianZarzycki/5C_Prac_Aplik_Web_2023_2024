<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
          $id4 = $_POST['id4'];
          $idm4 = $_POST['idm4'];
          $date4 = $_POST['date4'];
          $tn4 = $_POST['tn4'];
          $td4 = $_POST['td4'];
          $o4 = $_POST['o4'];
          $c4 = $_POST['c4'];


          $host="localhost";
          $user="root";
          $pass="";
          $db="prognoza";

          $connection= mysqli_connect($host,$user,$pass,$db);

          $statement = "UPDATE `pogoda` SET `miasta_id`='$idm4',`data_prognozy`='$date4',`temperatura_noc`='$tn4',`temperatura_dzien`='$td4',`opady`='$o4',`cisnienie`='$c4' WHERE `id`=$id4";

          $result = mysqli_query($connection,$statement);
          
          mysqli_close($connection);
    ?>
</body>
</html>