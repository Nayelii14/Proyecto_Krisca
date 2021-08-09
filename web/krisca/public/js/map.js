let mymap = L.map('mapid').setView([-33.941956, -71.736604], 15);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 20,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    size: 12,
    accessToken: 'pk.eyJ1IjoiY29ueTU2NyIsImEiOiJja3MybHY1NHoxN3BvMm9xZ3JyaTB4ODF3In0.3Rn7T2HbQ92KK9Y4xUBVKw'
}).addTo(mymap);



L.marker([-33.941956, -71.736604]).addTo(mymap)
    .bindPopup("<b>Nuestra ubicación</b><br />").openPopup();


var popup = L.popup();
