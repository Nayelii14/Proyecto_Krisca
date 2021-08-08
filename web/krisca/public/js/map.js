let mymap = L.map('mapid').setView([-33.9435, -71.7378], 15);
/*
const tilesProvider = 'https://{s}/tile.openstreetmap.org/${z}/${x}/${y}.png'

let myMap= L.map('myMap').setView([51.505, -0.09], 13);

L.tileLayer(tilesProvider, {
   maxZoom: 18,
}).addTo(myMap);

L.tileLayer('https://{s}tile.openstreetmap.org/{z}/{x}/{y}.png}?access_token={accessToken}', {
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);
*/
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 20,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    size: 12,
    accessToken: 'pk.eyJ1IjoiY29ueTU2NyIsImEiOiJja3MybHY1NHoxN3BvMm9xZ3JyaTB4ODF3In0.3Rn7T2HbQ92KK9Y4xUBVKw'
}).addTo(mymap);