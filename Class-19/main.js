
document.addEventListener("DOMContentLoaded", function () {
    var map = L.map(document.querySelector(".map")).setView([23.8103, 90.4125], 6);

    
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

   
    var locations = [
        { lat: 23.7296, lng: 90.4135, name: "Baitul Mukarram National Mosque", address: "Dhaka, Kakrail, Paltan, Dhaka" },
        { lat: 23.7158, lng: 90.4015, name: "Star Mosque (Tara Masjid)", address: "Dhaka, Chunnigoli, Armanitola, Old Dhaka" },
        { lat: 24.9173, lng: 88.6241, name: "Central Mosque, SUST", address: "Sylhet, Shah Jalal University Campus" },
        { lat: 22.8451, lng: 89.5402, name: "Baitul Aman Mosque", address: "Khulna, City Center" },
        { lat: 23.8103, lng: 90.4125, name: "Jatiyo Sangsad Bhaban Mosque", address: "Dhaka, National Parliament Complex" }, 
        { lat: 22.3412, lng: 91.8151, name: "Chittagong Central Mosque", address: "Chittagong, Central Market Area" }, 
        { lat: 23.8100, lng: 90.3563, name: "Motijheel Mosque", address: "Dhaka, Motijheel" }, 
        { lat: 24.3017, lng: 88.7032, name: "Kishoreganj Mosque", address: "Kishoreganj, City Center" }, 
        { lat: 22.7261, lng: 90.3682, name: "Baitul Falah Mosque", address: "Barisal, City Center" },


        { lat: 22.3870, lng: 91.8149, name: "Foy’s Lake Mosque", address: "Chittagong, Foy’s Lake" } 
    ];

90.41354

    
    locations.forEach(function(location) {
        L.marker([location.lat, location.lng]) 
            .addTo(map)
            .bindPopup("<b>" + location.name + "</b><br>" + location.address); 
    });
});




