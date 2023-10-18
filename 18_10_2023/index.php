<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona główna</title>
    <style>
        table
        {
            border-collapse: collapse;
        }
        th,td
        {
            border:1px solid black;
        }
    </style>
</head>
<body>
    <form method="post" action="insert.php">  
         <div>
            INSERT
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

    <form method="post" action="strona2.php">  
        <div>
            SELECT
        </div>
    </form>

    <form method="post" action="strona2.php">  
        <div>
            DELETE
        </div>
    </form>

    <form method="post" action="strona2.php">  
        <div>
            EDIT
        </div>
    </form>
   
</body>
</html>