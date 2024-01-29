<div id="map" style="height: 600px;"></div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin="">
</script>
<script>
    var map = L.map('map').setView([51.9500,4.5518], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    fetch("get_klachten.php")
        .then(response => response.json())
        .then(data => {
            data.forEach(item => {
                var marker = L.marker([item.latitude, item.longitude]).addTo(map);
                marker.bindPopup(`Soort: ${item.Soort}<br>Beschrijving: ${item.Beschrijving}`);
            });
        })
        .catch(error => console.error('Error:', error));
</script>
