const options = {
  // Required: Your API key
  key: 'nln8EMPeWBzFz32Gm2zReV8zxTPxnb9C',

  // Optional: Initial state of the map
  // 富津を中心に表示
  lat: 35.3,
  lon: 139.7,
  zoom: 5,
};

// Initialize Windy API
windyInit(options, windyAPI => {
    const { map } = windyAPI;
    // .map is instance of Leaflet map
});