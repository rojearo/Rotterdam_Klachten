<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css">
<body>

<?php include "header.php"; ?>

<main>

    <div class="container">
        <div class="Aanmelden">
            <h2>Aanmelden</h2>
            <div class="Aanmelden_form">
                <form action="register.php" method="post">
                    <label for="Naam">Naam</label>
                    <input type="text" placeholder="Naam">
                    <label for="Wachtwoord">Wachtwoord</label>
                    <input type="password" placeholder="Wachtwoord">
                    <label for="BevestigWachtwoord">Bevestig Wachtwoord</label>
                    <input type="password" placeholder="Bevestig Wachtwoord">
                    <div class="Button">
                        <input type="submit" value="Aanmelden">
                    </div>
                </form>
            </div>
        </div>
        <div class="Login">
            <h2>Login</h2>
            <div class="Aanmelden_form">
                <form>
                    <label for="Naam">Naam</label>
                    <input type="text" placeholder="Naam">
                    <label for="password">Wachtwoord</label>
                    <input type="password" placeholder="Wachtwoord">
                    <div class="Button">
                        <input type="submit" value="Inloggen">
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>

<footer>

</footer>

</body>
</html>