<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
    <style>
        #map { height: 600px; }
    </style>
    <title>Document</title>
</head>
<body>
<?php
require "../Klachten/klachten.php";
$Soort = get_Soort();
$Beschrijving = get_Beschrijving();
?>
<div id="map">
</div>
<script>
    var map = L.map('map').setView([51.9500,4.5518], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker(["longitude","latitude"]).addTo(map)
        .bindPopup( <?php echo $Soort; ?> </br> <?php echo $Beschrijving; ?>)
    .openPopup();

    getText("../Klachten/get_klachten.php");

    async function getText(file) {
        let myObject = await fetch(file);
        let complaints = await myObject.text();
        console.log(complaints);
    }
</script>
</html>