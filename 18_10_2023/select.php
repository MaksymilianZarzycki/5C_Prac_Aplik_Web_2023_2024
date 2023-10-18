<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
          $id2 = $_POST['id2'];

          $host="localhost";
          $user="root";
          $pass="";
          $db="prognoza";

          $connection= mysqli_connect($host,$user,$pass,$db);

          $statement = "SELECT * FROM `pogoda` WHERE `id` = $id2";

          $result = mysqli_query($connection,$statement);
          
          echo"<table>
                        <tr>
                        <th>ID</th>
                        <th>ID MIASTA</th>
                        <th>DATA PROGNOZY</th>
                        <th>TEMPERATURA NOC</th>
                        <th>TEMPERATURA DZIEŃ</th>
                        <th>OPADY[mm/h]</th>
                        <th>CIŚNIENIE[hPa]</th>
                    <tr>";
          while($row=mysqli_fetch_row($result))
                {
                    echo "<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "<td>$row[4]</td>";
                    echo "<td>$row[5]</td>";
                    echo "<td>$row[6]</td>";
                    echo "</tr>";
                }
            echo"</table>";
          mysqli_close($connection);
    ?>
</body>
</html>