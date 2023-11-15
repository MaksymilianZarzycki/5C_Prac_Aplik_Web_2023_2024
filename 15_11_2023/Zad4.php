<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad4</title>
</head>
<body>
    <?php
        $connection=mysqli_connect("localhost","root","","15_11_2023");

        $result=mysqli_query($connection,"SELECT * FROM `klasa` WHERE 1");

        echo"<table>
        <tr>
        <th>ID</th>
        <th>IMIE</th>
        <th>NAZWISKO</th>
        <th>DATA URODZENIA</th>
        
        <tr>";
        while($row=mysqli_fetch_row($result))
        {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "</tr>";
        }
        echo"</table>";
    ?>
</body>
</html>