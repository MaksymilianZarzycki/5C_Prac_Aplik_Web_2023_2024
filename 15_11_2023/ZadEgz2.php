<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>ZadEgz2</title>
</head>
<body>
    <form method="post" action="ZadEgz2.php">
        <label for="lastname">Nazwisko:</label>
        <input type="text" id="lastname" name="lastname">

        <label for="name">Imie:</label>
        <input type="text" id="name" name="name">

        <label for="grade">Ocena:</label>
        <input type="number" id="grade" name="grade" max="6" min="1">
        
        <input type="submit" value="Wyślij">
    </form>
    <?php
        if(isset($_POST["lastname"])&&isset($_POST["name"])&&isset($_POST["grade"]))
        {
            $lastname=$_POST["lastname"];
            $name=$_POST["name"];
            $grade=$_POST["grade"];

            $connection=mysqli_connect("localhost","root","","15_11_2023");

            mysqli_query($connection,"INSERT INTO `zadegz2`(`Lastname`, `Name`, `Grade`) VALUES ('$lastname','$name','$grade')");

            $select=mysqli_query($connection,"SELECT * FROM `zadegz2` WHERE 1");

            echo"<table>
            <tr>
            <th>ID</th>
            <th>NAZWISKO</th>
            <th>IMIE</th>
            <th>OCENA</th>
            
            <tr>";
            while($row=mysqli_fetch_row($select))
            {
                echo "<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "</tr>";
            }
            echo"</table>";
            }

            
            $average= mysqli_query($connection,"SELECT AVG(Grade)  FROM `zadegz2`");
            $result=mysqli_fetch_row($average)[0];
            echo "Średnia ocen: ".$result;

            mysqli_close($connection);
    ?>
</body>
</html>