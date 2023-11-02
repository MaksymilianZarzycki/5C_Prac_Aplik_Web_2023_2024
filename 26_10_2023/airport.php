<?php
    if(!isset($_COOKIE["visited"]))
    {
        $welcomeMessage="Dzień dobry! Sprawdź regulamin naszej strony";
    }
    else
    {
        $welcomeMessage="Miło nam, że nas znowu odwiedziłeś";
    }
    setcookie("visited",1,time()+3600);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header id="hleft">
        <h2>Odloty z lotniska</h2>
    </header>

    <header id="hright">
        <img src="zad6.png" alt="logotyp">
    </header>

    <main>
        <h4>Tabela odlotów</h4>
        <table>
            <tr>
                <th>ID</th>
                <th>NUMER REJSU</th>
                <th>CZAS</th>
                <th>KIERUNEK</th>
                <th>STATUS</th>
            </tr>
            <?php
                $sw="localhost";
                $user="root";
                $passw="";
                $db="egzamin";
            
                $connection=mysqli_connect($sw,$user,$passw,$db);
            
                $query="SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM `odloty` ORDER BY czas DESC;";
            
                $result=mysqli_query($connection,$query);

               
                while($row=mysqli_fetch_row($result))
                {
                    echo"<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "<td>$row[4]</td>";
                    echo"</tr>";
                }
                
                mysqli_close($connection);
            ?>            
        </table>
    </main>

    <footer id="fleft">
        <a href="kw1.jpg" target="_blank">Pobierz obraz</a>
    </footer>

    <footer id="fmiddle">
        <?php
        echo "<p><b>$welcomeMessage</b></p>";
        ?>
    </footer>

    <footer id="fright">
        Autor: 32
    </footer>

</body>
</html>