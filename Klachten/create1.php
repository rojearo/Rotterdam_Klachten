<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet.css">
</head>
<body>

<header>

    <div class="navbar">
        <img src="Images/Logo-gemeente-Rotterdam.png" alt="Rotterdam_logo">
    </div>

</header>

<form action="create2.php" method="POST">
    <label for = "soort">Soort:</label>
    <input type="text" name="Soort Klacht">

    <label for = "beschrijving">Beschrijving:</label>
    <input type="text" name="beschrijving">

    <input type="submit" value="Klacht toevoegen">
</form>
</body>
</html>

