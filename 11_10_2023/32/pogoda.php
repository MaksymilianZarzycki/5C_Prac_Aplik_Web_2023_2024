<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header id="hleft">
        <img src="logo.png"alt="meteo"/>
    </header>
    <header id="hcenter">
        <h1>Prognoza dla wrocławia</h1>
    </header>
    <header id="hright">
        <p>maj, 2019</p>
    </header>
    <main>
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY[mm/h]</th>
                <th>CIŚNIENIE[hPa]</th>
            </tr>
            <?php
                $host="localhost";
                $user="root";
                $pass="";
                $db="prognoza";

                $connection= mysqli_connect($host,$user,$pass,$db);

                $statement = "SELECT * FROM `pogoda` WHERE `miasta_id`=1 ORDER BY `data_prognozy` ASC;";

                $result = mysqli_query($connection,$statement);

                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$row['data_prognozy']."</td>";
                    echo "<td>".$row['temperatura_noc']."</td>";
                    echo "<td>".$row['temperatura_dzien']."</td>";
                    echo "<td>".$row['opady']."</td>";
                    echo "<td>".$row['cisnienie']."</td>";
                    echo "</tr>";
                }
                mysqli_close($connection);
            ?>
        </table>
    </main>
    <section id="sleft">
        <img src="obraz.jpg" alt="Polska, Wrocław"/>
    </section>
    <section id="sright">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </section>
    <footer>
        <p>Stronę wykonał: 32</p>
    </footer>

</body>
</html>