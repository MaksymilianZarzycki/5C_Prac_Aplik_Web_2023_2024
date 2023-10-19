<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    <?php
         $username = $_POST['username'];
         $password = $_POST['password'];

         $host="localhost";
         $user="root";
         $pass="";
         $db="5cmz";

         $connection= mysqli_connect($host,$user,$pass,$db);

         $statement = "SELECT * FROM `dane_logowania` WHERE `Username`='$username'";
    
         $result = mysqli_query($connection,$statement);
         
         $row=mysqli_fetch_row($result);
        
        if($row==NULL)
        {
            echo "Dane logowania niepoprawne";
        }else if($row[2]==$password)
         {
            echo "Zalogowano";
         } else echo "Dane logowania niepoprawne";
    ?>
</body>
</html>