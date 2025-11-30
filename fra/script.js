// Initialiser la carte Leaflet
var map = L.map('map').setView([46.603354, 1.888334], 6); // Centre sur la France

// Ajouter les tuiles OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
}).addTo(map);

// Ajouter des marqueurs pour les villes
var cities = [
    { name: 'Paris', coordinates: [48.8566, 2.3522] },
    { name: 'Marseille', coordinates: [43.2965, 5.3698] },
    { name: 'Nice', coordinates: [43.7102, 7.2620] },
    { name: 'Lyon', coordinates: [45.7640, 4.8357] },
    { name: 'Toulouse', coordinates: [43.6047, 1.4442] },
    { name: 'Strasbourg', coordinates: [48.5734, 7.7521] },
    { name: 'Lille', coordinates: [50.6292, 3.0573] },
    { name: 'Lourdes', coordinates: [43.0954, -0.0455] },
    { name: 'Cannes', coordinates: [43.5528, 7.0174] }
];

cities.forEach(function(city) {
    var marker = L.marker(city.coordinates).addTo(map).bindPopup(city.name);
    
    // Ajouter un gestionnaire d'événements 'mouseover' à chaque marqueur
    marker.on('mouseover', function() {
        marker.bindTooltip(city.name, { permanent: true }).openTooltip();
    });
    
    // Retirer l'étiquette lorsque le curseur quitte le marqueur
    marker.on('mouseout', function() {
        marker.unbindTooltip();
    });
    
    // Ajouter un gestionnaire d'événements 'click' à chaque marqueur
    marker.on('click', function() {
        map.setView(city.coordinates, 12); // Zoomer sur la ville
    });
});