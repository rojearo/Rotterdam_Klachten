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
        <div class="navbar-images">
            <a href="/Rotterdam_Klachten/indedx.php"><img
                        src="/Rotterdam_Klachten/Images/Logo-gemeente-Rotterdam.png " alt="Rotterdam_logo"></a>
        </div>

        <div style="width: 500px">
            <div class="navbar-links">
                <ul>
                    <li><a href="/Rotterdam_Klachten/Klachten/create1.php">Klachten</a></li>
                    <li><a href="/Rotterdam_Klachten/Complimenten/create1.php">Complimenten</a></li>
                    <li><a href="/Rotterdam_Klachten/index.php">Login</a></li>
                </ul>
            </div>
        </div>
    </div>

</header>
<main class="main-form">
    <div class="form-container">
        <form action="delete2.php" method="post">
            <label for="id">id:</label>
            <input type="text" id="id" name="id">
            <input type="submit">
            <br>
        </form>
    </div>
</main>
</body>
</html>