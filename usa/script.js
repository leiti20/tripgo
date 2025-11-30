const map = L.map('map').setView([37.0902, -95.7129], 4); // USA center and zoom level
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
      "Los Angeles": { lat: 34.0522, lng: -118.2437 },
      "New York": { lat: 40.7128, lng: -74.0060 },
      "Boston": { lat: 42.3601, lng: -71.0589 },
      "Las Vegas": { lat: 36.1699, lng: -115.1398 },
      "Washington": { lat: 38.9072, lng: -77.0369 },
      "Miami": { lat: 25.7617, lng: -80.1918 }
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