
const map = L.map('map').setView([26.8206, 30.8025], 6); // Egypt center and zoom level
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
  "Le Caire": { lat: 30.0444, lng: 31.2357 },
  "Charm El Cheikh": { lat: 27.9158, lng: 34.3297 },
  "Alexandrie": { lat: 31.2001, lng: 29.9187 },
  "Luxor": { lat: 25.6872, lng: 32.6396 },
  "El Gouna": { lat: 27.3944, lng: 33.6807 },
  "Gizeh": { lat: 29.9792, lng: 31.1342 }
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
