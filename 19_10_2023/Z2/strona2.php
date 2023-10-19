<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
    <style>
        p
        {
            height:50%; 
            width:50%; 
            margin-left:auto;
            margin-right:auto;
            margin-top:50px;
            border:2px dashed red;
        }
    </style>
</head>
<body>
    <?php
         $bgcolor = $_POST['bgcolor'];
         $txtcolor = $_POST['txtcolor'];

         if( strlen($bgcolor)!=6||strlen($txtcolor)!=6)
         {
            echo "Długość liczb niepoprawna, powinna wynosić 6";
         }else
         {
         $bgcolor="#".$bgcolor;
         $txtcolor="#".$txtcolor;

         echo "<p style='background-color:$bgcolor; color:$txtcolor;'>
         Maksymilian Zarzycki
         </p>";
         }

    ?>
</body>
</html>