<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <?php
          $id1 = $_POST['id1'];
          $idm1 = $_POST['idm1'];
          $date1 = $_POST['date1'];
          $tn1 = $_POST['tn1'];
          $td1 = $_POST['td1'];
          $o1 = $_POST['o1'];
          $c1 = $_POST['c1'];


          $host="localhost";
          $user="root";
          $pass="";
          $db="prognoza";

          $connection= mysqli_connect($host,$user,$pass,$db);

          $statement = "INSERT INTO `pogoda`(`id`, `miasta_id`, `data_prognozy`, `temperatura_noc`, `temperatura_dzien`, `opady`, `cisnienie`) 
          VALUES (' $id1',' $idm1','$date1','$tn1','$td1','$o1','$c1')";

          $result = mysqli_query($connection,$statement);
          
          mysqli_close($connection);
    ?>
</body>
</html>