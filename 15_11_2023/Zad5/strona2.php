<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad5</title>
</head>
<body>
    <?php
        $imie=$_POST["imie"];
        $nazw=$_POST["nazwisko"];
        $du=$_POST["data"];

        $connection=mysqli_connect("localhost","root","","15_11_2023");

        $insert=mysqli_query($connection,"INSERT INTO `klasa`(`Imie`, `Nazwisko`, `DataUrodzenia`) VALUES ('$imie','$nazw','$du')");

        $select=mysqli_query($connection,"SELECT * FROM `klasa` WHERE 1");

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