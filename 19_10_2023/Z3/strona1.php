<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad3</title>
</head>
<body>
        <form method="post" action="koszt.php">
            <label for="fuel">Koszt benzyny(zł/l): </label>
            <input type="text" name="fuel">
            <br>
            <label for="distance">Odległość (km): </label>
            <input type="number" name="distance">
            <br>
            <label for="average">Średnie spalanie(l/100km): </label>
            <input type="text" name="average">
            <br>
            <input type="submit" value="Wyślij">
        </form>
</body>
</html>