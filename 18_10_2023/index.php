<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona główna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="insert.php">  
         <div>
         <h3>INSERT</h3>
            <table>
                    <tr>
                        <th>ID</th>
                        <th>ID MIASTA</th>
                        <th>DATA PROGNOZY</th>
                        <th>TEMPERATURA NOC</th>
                        <th>TEMPERATURA DZIEŃ</th>
                        <th>OPADY[mm/h]</th>
                        <th>CIŚNIENIE[hPa]</th>

                    <tr>
                    <tr>
                        <td><input type="number" name="id1"></td>
                        <td><input type="number" name="idm1"></td>
                        <td><input type="date" name="date1"></td>
                        <td><input type="number" name="tn1"></td>
                        <td><input type="number" name="td1"></td>
                        <td><input type="number" name="o1"></td>
                        <td><input type="number" name="c1"></td>
                    <tr>
            </table>
        </div>
        <input type="submit" value="WYŚLIJ">
    </form>

    <form method="post" action="select.php">  
        <div>
            <h3>SELECT</h3>
            ID <input type="number" name="id2"> <input type="submit" value="WYŚLIJ">
        </div>
    </form>

    <form method="post" action="delete.php">  
        <div>
            <h3>DELETE</h3>
            ID <input type="number" name="id3"> <input type="submit" value="WYŚLIJ">
        </div>
    </form>

    <form method="post" action="strona2.php">  
        <div>
            <h3>EDIT</h3>
        </div>
    </form>
   
</body>
</html>