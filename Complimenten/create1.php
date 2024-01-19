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
            <a href="/Rotterdam_Klachten/index.php"><img
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

<h1 class="header-title">Complimenten</h1>

<main class="main-form">
    <div class="form-container">
        <form action="create2.php" method="POST">
            <label for="Soort">Soort Complimenten:</label>
            <input type="text" placeholder="SoortComplimenten" name="Soort">

            <label for="Beschrijving">Beschrijving:</label>
            <input type="text" placeholder="Beschrijving" name="Beschrijving">

            <input type="hidden" id="latitude" name="latitude">

            <input type="hidden" id="longitude" name="longitude">

            <input type="submit" value="Klacht toevoegen">
        </form>

    </div>

</main>
<script>
    const successCallback = (position) => {
        console.log(position.coords.latitude);
        document.getElementById("latitude").value = position.coords.latitude
        console.log(position.coords.longitude);
        document.getElementById("longitude").value = position.coords.longitude
    };

    const errorCallback = (error) => {
        console.log(error);
    };

    navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
</script>

</body>
</html>

