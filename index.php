<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css">
<body>

<header>

    <div class="navbar">
        <img src="Images/Logo-gemeente-Rotterdam.png" alt="Rotterdam_logo">
    </div>

    <div class="slider-container">
        <div class="slider">
            <img src="image1.jpg" alt="Image 1">
            <img src="image2.jpg" alt="Image 2">
            <img src="image3.jpg" alt="Image 3">
        </div>
        <button class="prev" onclick="changeSlide(-1)">Previous</button>
        <button class="next" onclick="changeSlide(1)">Next</button>
    </div>
    <script src="script.js"></script>

</header>

<main>

    <div class="container">

        <div class="Aanmelden">

            <h2>Aanmelden</h2>

            <div class="Aanmelden_form">

                <form method="POST" action="#">

                    <label for="Naam">Naam</label>

                    <input type="text" placeholder="Naam">

                    <label for="password">Wachtwoord</label>

                    <input type="password" placeholder="Wachtwoord">

                    <label for="Herhaal_password">Herhaal Wachtwoord</label>

                    <input type="password" placeholder="Herhaal Wactwoord">

                    <div class="Button">

                        <input type="submit" value="Aanmelden" style="border-radius: 12px;
background: #C93675;">

                        <input type="button" value="Reset" style="border-radius: 12px;
background: #404B4F;">

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

                        <input type="submit" value="Inloggen" style="border-radius: 12px;
background: #C93675;">

                        <input type="button" value="Reset" style="border-radius: 12px;
background: #404B4F;">

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