<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad2</title>
</head>
<body>
        <form method="post" action="kolory.php">
            <label for="bgcolor">Kolor tła(hex): </label>
            <input type="text" name="bgcolor" minlenght="6" maxlenght="6">
            <label for="txtcolor">Kolor tekstu(hex): </label>
            <input type="text" name="txtcolor" minlenght="6" maxlenght="6">
            <input type="submit" value="Wyślij">
        </form>
</body>
</html>