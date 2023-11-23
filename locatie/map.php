<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locaties</title>
    <link rel="stylesheet" href="../stylesheet.css">
</head>
<body>

<div id="map"></div>
<div id="map-type-selector">
    <label for="map-type">Kies kaarttype: </label>
    <select id="map-type" onchange="changeMapType(this.value)">
        <option value="roadmap">Standaard</option>
        <option value="satellite">Satelliet</option>
    </select>
</div>

<script>
    var map;

    function initMap() {
        // Coördinaten voor het centrum van Rotterdam
        var rotterdam = { lat: 51.9225, lng: 4.47917 };

        // Maak een kaart aan met het centrum op Rotterdam
        map = new google.maps.Map(document.getElementById('map'), {
            center: rotterdam,
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP // Standaard kaarttype
        });

        // Voeg een marker toe voor het centrum van Rotterdam
        var marker = new google.maps.Marker({ position: rotterdam, map: map, title: 'Rotterdam' });

        // Voeg een click event listener toe aan de marker
        marker.addListener('click', function () {
            // Geocodeer de coördinaten naar een adres
            var geocoder = new google.maps.Geocoder;
            geocoder.geocode({ 'location': rotterdam }, function (results, status) {
                if (status === 'OK') {
                    if (results[0]) {
                        alert('Adres: ' + results[0].formatted_address);
                    } else {
                        alert('Geen adres gevonden');
                    }
                } else {
                    alert('Geocoderen mislukt vanwege: ' + status);
                }
            });
        });
    }

    function changeMapType(type) {
        if (type === 'roadmap') {
            map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
        } else if (type === 'satellite') {
            map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
        }
    }
</script>

<!-- Voeg de Google Maps JavaScript API toe zonder API-sleutel -->
<script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>

</body>
</html>
