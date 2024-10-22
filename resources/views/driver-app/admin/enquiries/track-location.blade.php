@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Track Location for Enquiry #{{ $enquiry->enquiry_id }}</h2>
    <div id="map" style="width: 100%; height: 500px;"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let map, directionsService, directionsRenderer;
    const pickupLocationName = "{{ $enquiry->pickup_location }}"; // Get the pickup location name
    let pickupLocationCoordinates; // To hold the pickup location coordinates
    const driverLocation = { lat: {{ $driver->latitude }}, lng: {{ $driver->longitude }} }; // Default driver location coordinates

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: driverLocation, // Set default center
            zoom: 13,
        });

        // Add a marker for the default driver location
        const driverMarker = new google.maps.Marker({
            position: driverLocation,
            map: map,
            title: 'Driver Location', // Tooltip text for marker
        });

        directionsService = new google.maps.DirectionsService();
        directionsRenderer = new google.maps.DirectionsRenderer({
            map: map,
            polylineOptions: {
                strokeColor: 'blue',   // Route line color
                strokeOpacity: 0.7,    // Route line opacity
                strokeWeight: 3,       // Route line weight
            },
        });

        fetchPickupLocationCoordinates(pickupLocationName) // Fetch coordinates for pickup location
            .then(coordinates => {
                pickupLocationCoordinates = coordinates; // Store the coordinates
                
                // Add a marker for the pickup location
                const pickupMarker = new google.maps.Marker({
                    position: pickupLocationCoordinates,
                    map: map,
                    title: 'Pickup Location',
                });

                // Calculate and display the route after getting pickup coordinates
                calculateAndDisplayRoute(driverLocation, pickupLocationCoordinates); // Calculate route
            })
            .catch(error => console.error('Error fetching pickup location coordinates:', error));
    }

    function fetchPickupLocationCoordinates(pickupLocationName) {
        const geocoder = new google.maps.Geocoder();
        return new Promise((resolve, reject) => {
            geocoder.geocode({ address: pickupLocationName }, (results, status) => {
                if (status === google.maps.GeocoderStatus.OK) {
                    const coordinates = results[0].geometry.location; // Get the first result's location
                    resolve(coordinates); // Resolve with coordinates
                } else {
                    console.error('Geocode was not successful for the following reason: ' + status);
                    reject(status); // Reject on failure
                }
            });
        });
    }

    function calculateAndDisplayRoute(driverLocation, pickupLocationCoordinates) {
        const request = {
            origin: driverLocation,
            destination: pickupLocationCoordinates,
            travelMode: google.maps.TravelMode.DRIVING,
        };

        directionsService.route(request, (result, status) => {
            if (status === google.maps.DirectionsStatus.OK) {
                directionsRenderer.setDirections(result); // Set the directions on the renderer
            } else {
                console.error('Directions request failed due to ', status);
            }
        });
    }

    function loadScript(url, callback) {
        const script = document.createElement('script');
        script.src = url;
        script.async = true;
        script.defer = true;
        script.onload = callback;
        document.head.appendChild(script);
    }

    const googleMapsApiUrl = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyACiii2Kp1VXRckQoTy_MYZcLkS0wEKhBE&libraries=places';
    loadScript(googleMapsApiUrl, initMap);
});
</script>
@endsection
