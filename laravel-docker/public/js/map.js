// public/js/map.js

document.addEventListener("DOMContentLoaded", function() {
    // Initialize the map and set its view to the desired location and zoom level
    const map = L.map('map').setView([14.5535, 121.0236], 15); // Adjust coordinates as needed

    // Load and display the tile layer (map visuals) from OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add a marker to the map at the specified location
    L.marker([14.5535, 121.0236]).addTo(map)
        .bindPopup('<b>Tiño Suits & Tailoring</b><br>Herco Center, 114 Benavidez Street, Makati')
        .openPopup();
});
