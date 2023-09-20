function initMap() {
        const myLatLng = { lat: 28.1461, lng: 82.7568  };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: myLatLng,
        });

        new google.maps.Marker({
            position: myLatLng,
            map,
            title: "3rdPartySolutions",
        });
    }

window.initMap = initMap;
