<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Filmy</title>
</head>
<body>
    <?php
        $host="localhost";
        $user="root";
        $pass="";
        $db="baza_filmow_5cmz";

        $polaczenie=mysqli_connect($host,$user,$pass,$db);

        $zapytania="SELECT * FROM filmy";

        $wynik=mysqli_query($polaczenie,$zapytania);

        while($wiersz_danych=mysqli_fetch_row($wynik))
        {
            for($i=0;$i<count($wiersz_danych);$i++)
            print $wiersz_danych[$i]." ";
        print "<br>";
        }

    ?>
    <table>
        <tr>
            <td>ID</td>
            <td>Tytuł</td>
            <td>Reżyser</td>
            <td>Czas</td>
        </tr>
        <?php
        $host="localhost";
        $user="root";
        $pass="";
        $db="baza_filmow_5cmz";

        $polaczenie=mysqli_connect($host,$user,$pass,$db);

        $zapytania="SELECT * FROM filmy";

        $wynik=mysqli_query($polaczenie,$zapytania);

        while($row=mysqli_fetch_row($wynik))
        {
            echo"<tr>";
            echo"<td>$row[0]</td>";
            echo"<td>$row[1]</td>";
            echo"<td>$row[2]</td>";
            echo"<td>$row[3]</td>";
            echo"</tr>";
        }
        ?>
    </table>
</body>
</html>