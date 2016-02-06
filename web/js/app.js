$(document).foundation();



var map = L.map('map').setView([53.38159, -1.47148], 13);



L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        {
            attribution: 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
            maxZoom: 18,
            zoom: 13,
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                    '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="http://mapbox.com">Mapbox</a>',
                    id: 'mapbox.streets'
        }).addTo(map);


map.locate();

function onLocationFound(e) {
    var radius = e.accuracy / 2;

    L.marker(e.latlng).addTo(map)
            .bindPopup("You are within " + radius + " meters from this point").openPopup();

    L.circle(e.latlng, radius).addTo(map);

}

map.on('locationfound', onLocationFound);


var popup = L.popup();

function onMapClick(e) {
    popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(map);
}

map.on('click', onMapClick);


var postoffices = L.tileLayer.wms('http://52.16.129.211:8080/geoserver/sheffugees/wms',
        {
            layers: 'shefugees:postoffices',
            tiled: true,
            format: 'image/png',
            transparent: true,
            maxZoom: 18,
            minZoom: 12,
            continuousWorld: true
        }).addTo(map);
 