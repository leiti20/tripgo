const map = L.map('map').setView([39.9334, 32.8597], 6); // Turkey center and zoom level
const defaultLanguage = 'en';

const basemaps = {
  en: L.tileLayer('https://tile.jawg.io/jawg-dark/{z}/{x}/{y}.png?lang=en&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  fr: L.tileLayer('https://tile.jawg.io/jawg-dark/{z}/{x}/{y}.png?lang=fr&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  it: L.tileLayer('https://tile.jawg.io/jawg-dark/{z}/{x}/{y}.png?lang=it&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  es: L.tileLayer('https://tile.jawg.io/jawg-dark/{z}/{x}/{y}.png?lang=es&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  de: L.tileLayer('https://tile.jawg.io/jawg-dark/{z}/{x}/{y}.png?lang=de&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  nl: L.tileLayer('https://tile.jawg.io/jawg-dark/{z}/{x}/{y}.png?lang=nl&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  zh: L.tileLayer('https://tile.jawg.io/jawg-dark/{z}/{x}/{y}.png?lang=zh&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
  ar: L.tileLayer('https://tile.jawg.io/jawg-dark/{z}/{x}/{y}.png?lang=ar&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
      attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
  }),
};

const cities = {
  "Istanbul": { lat: 41.0082, lng: 28.9784 },
  "Izmir": { lat: 38.4192, lng: 27.1287 },
  "Ankara": { lat: 39.9334, lng: 32.8597 },
  "Antalya": { lat: 36.8969, lng: 30.7133 },
  "Bodrum": { lat: 37.0344, lng: 27.4305 },
  "Pamukkale": { lat: 37.9188, lng: 29.1153 }
};

Object.keys(cities).forEach(city => {
  const marker = L.marker([cities[city].lat, cities[city].lng]).addTo(map);
  marker.bindPopup(`<b>${city}</b>`).on('click', function() {
    map.setView([cities[city].lat, cities[city].lng], 12);
  });
});

basemaps[defaultLanguage].addTo(map);

document.getElementById('languages').addEventListener('change', event => {
  const language = event.target.value;
  basemaps[language].addTo(map);
  map.removeLayer(basemaps[language === defaultLanguage ? 'en' : defaultLanguage]);
});
