let updateInterval;

function afficherHeures() {
    const departureCitySelect = document.getElementById('departureCity');
    const arrivalCitySelect = document.getElementById('arrivalCity');

    const departureTimezone = departureCitySelect.value;
    const arrivalTimezone = arrivalCitySelect.value;

    const timeContainer = document.getElementById('timeContainer');
    timeContainer.innerHTML = '';

    const maintenant = moment();

    const departureTime = maintenant.tz(departureTimezone).format('YYYY-MM-DD HH:mm:ss');
    const arrivalTime = maintenant.tz(arrivalTimezone).format('YYYY-MM-DD HH:mm:ss');

    const departureDiv = document.createElement('div');
    departureDiv.style.marginBottom = '10px';
    departureDiv.innerHTML = `Heure à ${departureCitySelect.options[departureCitySelect.selectedIndex].text} : ${departureTime}`;
    timeContainer.appendChild(departureDiv);

    const arrivalDiv = document.createElement('div');
    arrivalDiv.style.marginBottom = '10px';
    arrivalDiv.innerHTML = `Heure à ${arrivalCitySelect.options[arrivalCitySelect.selectedIndex].text} : ${arrivalTime}`;
    timeContainer.appendChild(arrivalDiv);
}

function startUpdatingTimes() {
    if (updateInterval) {
        clearInterval(updateInterval);
    }
    afficherHeures(); // Affiche les heures immédiatement
    updateInterval = setInterval(afficherHeures, 1000); // Actualise les heures toutes les secondes
}

document.addEventListener('DOMContentLoaded', function() {
    fetch('fetch_cities.php')
        .then(response => response.json())
        .then(data => {
            const cityTimezoneMap = {
                'Alger': 'Africa/Algiers',
                'Paris': 'Europe/Paris',
                'Tokyo': 'Asia/Tokyo',
                'Washington': 'America/New_York',
                'Le Caire': 'Africa/Cairo',
                'Istanbul': 'Europe/Istanbul',
                'Doha': 'Asia/Qatar',
                'Sydney': 'Australia/Sydney',
                'Genève': 'Europe/Zurich',
                'Bejaia': 'Africa/Algiers',
                'Izmir': 'Europe/Istanbul'
            };

            const departureCitySelect = document.getElementById('departureCity');
            const arrivalCitySelect = document.getElementById('arrivalCity');

            data.forEach(city => {
                if (cityTimezoneMap[city.city]) {
                    const option = document.createElement('option');
                    option.value = cityTimezoneMap[city.city];
                    option.text = city.city;
                    departureCitySelect.appendChild(option.cloneNode(true));
                    arrivalCitySelect.appendChild(option);
                }
            });
        })
        .catch(error => console.error('Error fetching city data:', error));
});