const map = L.map('map').setView([46.8182, 8.2275], 8); // Switzerland center and zoom level
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
      "Bern": { lat: 46.948, lng: 7.4474 },
      "Genève": { lat: 46.2044, lng: 6.1432 },
      "Zurich": { lat: 47.3769, lng: 8.5417 },
      "Lausanne": { lat: 46.5197, lng: 6.6323 },
      "Bâle": { lat: 47.5596, lng: 7.5886 },
      "Neuchâtel": { lat: 46.9899, lng: 6.9293 }
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
