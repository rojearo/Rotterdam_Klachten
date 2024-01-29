<?php
// Verwerk het ingediende formulier
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang de klacht en locatiegegevens
    $klachten = $_POST["klacht"];
    $adres = $_POST["locatie"];

    // Geocodeer het adres om latitude en longitude te verkrijgen
    $geocodeUrl = "https://tile.openstreetmap.org/{z}/{x}/{y}.png" . urlencode($adres);
    $geocodeResponse = file_get_contents($geocodeUrl);
    $geocodeData = json_decode($geocodeResponse, true);

    if (!empty($geocodeData) && isset($geocodeData[0]['lat']) && isset($geocodeData[0]['lon'])) {
        $latitude = $geocodeData[0]['lat'];
        $longitude = $geocodeData[0]['lon'];

        // Opslaan van de klacht en locatiegegevens (hier wordt het eenvoudig naar de console uitgevoerd)
        echo "Klacht: $klachten<br>";
        echo "Locatie: $adres<br>";
        echo "Latitude: $latitude<br>";
        echo "Longitude: $longitude<br>";

        // Hier zou je de klacht en locatiegegevens naar de database kunnen opslaan of andere verwerking kunnen uitvoeren
    } else {
        echo "Fout bij het geocoderen van het adres.";
    }
}
?>