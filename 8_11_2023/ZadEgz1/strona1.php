<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body>
    <form method="post" action="strona1.php">
        <label for="pl">Kwota w zł: </label>
        <input type="number" id="pl" name="sum" required>
        <br>
        <input type="radio" id="euro" name="currency" value="euro" required>
        <label for="euro">Euro</label>
        <br>
        <input type="radio" id="dolar" name="currency" value="dolar" required>
        <label for="dolar">Dolar</label>
        <br>
        <input type="radio" id="frank" name="currency" value="frank" required>
        <label for="frank">Frank</label>
        <br>
        <input type="submit" value="Wyślij">
    </form>

    <br>

    <?php
        if(isset($_POST['sum'])&&$_POST['currency'])
        {
            $sum = $_POST['sum'];
            $currency = $_POST['currency'];
   
            define("EURO",4.32);
            define("DOLAR",3.21);
            define("FRANK",3.98);
   
            switch($currency)
            {
               case "euro":
                   echo $sum/EURO."euro";
               break;
               case "dolar":
                   echo $sum/DOLAR."dolarów";
               break;
               case "frank":
                   echo $sum/FRANK."franków";
               break;
               default:
                   echo 0;
            }
        }
    ?>
</body>
</html>