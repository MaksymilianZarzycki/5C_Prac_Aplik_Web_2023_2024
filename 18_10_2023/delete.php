<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
          $id3 = $_POST['id3'];

          $host="localhost";
          $user="root";
          $pass="";
          $db="prognoza";

          $connection= mysqli_connect($host,$user,$pass,$db);

          $statement = "DELETE FROM `pogoda` WHERE `id` = $id3";

          $result = mysqli_query($connection,$statement);
          
          mysqli_close($connection);
    ?>
</body>
</html>