// Initialiser la carte Leaflet
var map = L.map('map').setView([35.6895, 139.6917], 6); // Centre sur le Japon

// Ajouter les tuiles OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
}).addTo(map);

// Ajouter des marqueurs pour les villes du Japon avec les noms en français
var cities = [
    { name: 'Tokyo', coordinates: [35.6895, 139.6917], name_fr: 'Tokyo' },
    { name: 'Kyoto', coordinates: [35.0116, 135.7681], name_fr: 'Kyoto' },
    { name: 'Osaka', coordinates: [34.6937, 135.5023], name_fr: 'Osaka' },
    { name: 'Hiroshima', coordinates: [34.3853, 132.4553], name_fr: 'Hiroshima' },
    { name: 'Nara', coordinates: [34.6851, 135.8048], name_fr: 'Nara' },
    { name: 'Sapporo', coordinates: [43.0621, 141.3544], name_fr: 'Sapporo' }
];

cities.forEach(function(city) {
    var marker = L.marker(city.coordinates).addTo(map);
    
    // Ajouter un gestionnaire d'événements 'click' à chaque marqueur
    marker.on('click', function() {
        map.setView(city.coordinates, 10); // Zoomer sur la ville
        marker.bindPopup(city.name_fr).openPopup(); // Afficher le nom de la ville dans la fenêtre contextuelle
    });
});
