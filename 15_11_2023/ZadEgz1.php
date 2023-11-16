<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>ZadEgz1</title>
</head>
<body>
    <form method="post" action="ZadEgz1.php">
        <label for="birthyear">Rok urodzenia:</label>
        <input type="number" id="birthyear" name="birthyear" max="9999" value="0000">

        <fieldset>
            <legend>Płeć:</legend>
            <input type="radio" id="man" name="gender" value="man">
            <label for="man">Mężczyzna</label>
            <br>
            <input type="radio" id="woman" name="gender" value="woman">
            <label for="woman">Kobieta</label>
            <br>
            <input type="radio" id="nb" name="gender" value="non-binary" checked="checked">
            <label for="nb">Inne</label>
        </fieldset>

        <label for="review">Uwagi o stronie:</label>
        <br>
        <textarea name="review" rows="3" cols="35" maxlength="100"></textarea>
        <br>
        <input type="checkbox" name="check">
        <label for="check">Zgadzam się na udział w badaniu</label><br>
        <input type="submit" value="Wyślij">
    </form>
    <?php
        if(isset($_POST["review"]))
        {
            $by=$_POST["birthyear"];
            $gender=$_POST["gender"];
            $review=$_POST["review"];

            $connection=mysqli_connect("localhost","root","","15_11_2023");
            if(isset($_POST["check"]))
            {
                $c=true;
            }   else $c=false;
            mysqli_query($connection,"INSERT INTO `zadegz1`( `Year`, `Gender`, `Review`, `Consent`) VALUES ('$by','$gender','$review','$c')");
        }

        mysqli_close($connection);
    ?>
</body>
</html>