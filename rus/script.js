const map = L.map('map').setView([55.7558, 37.6173], 6); // Russia center and zoom level
const defaultLanguage = 'en';

const basemaps = {
  en: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=en&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  fr: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=fr&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  it: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=it&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  es: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=es&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  de: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=de&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  nl: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=nl&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  zh: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=zh&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  ar: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=ar&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
};

const cities = {
  "Moscow": { lat: 55.7558, lng: 37.6173 },
  "Kazan": { lat: 55.8304, lng: 49.0661 },
  "Nijni Novgorod": { lat: 56.2965, lng: 43.9361 },
  "Oulan-Oude": { lat: 51.8334, lng: 107.5845 },
  "Ekaterinbourg": { lat: 56.8389, lng: 60.6057 },
  "Vladivostok": { lat: 43.1155, lng: 131.8855 }
};

Object.keys(cities).forEach(city => {
  const marker = L.marker([cities[city].lat, cities[city].lng]).addTo(map);
  marker.bindPopup(`<b>${city}</b>`).on('click', function() {
    map.setView([cities[city].lat, cities[city].lng], 10);
  });
});

basemaps[defaultLanguage].addTo(map);

document.getElementById('languages').addEventListener('change', event => {
  const language = event.target.value;
  basemaps[language].addTo(map);
  map.removeLayer(basemaps[language === defaultLanguage ? 'en' : defaultLanguage]);
});