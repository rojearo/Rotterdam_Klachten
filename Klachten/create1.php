<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet.css">
</head>
<body>

<form action="create2.php" method="POST">
    <label for="Soort">Soort:</label>
    <input type="text" name="Soort">

    <label for="Beschrijving">Beschrijving:</label>
    <input type="text" name="Beschrijving">

    <input type="hidden" id="latitude" name="latitude">

    <input type="hidden" id="longitude" name="longitude">

    <input type="submit" value="Klacht toevoegen">
</form>

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

