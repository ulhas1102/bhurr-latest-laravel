@extends('driver-app.admin.layouts.app')
@section('title', 'Online Drivers')
@section('content')

<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4>Online Drivers List</h4>
                            <div>
                                <a class="btn btn-sm btn-success" href="{{ url('dashboard') }}">
                                    <i class="mdi mdi-home"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="map" style="width: 100%; height: 500px;"></div> <!-- Map container -->
                            <div class="table-responsive mt-4">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Profile</th>
                                            <th>Driver Name</th>
                                            <th>Driver Email</th>
                                            <th>Driver Number</th>
                                            <th>Driver Address</th>
                                            <th>Driver Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($drivers as $driver)
                                        <tr>
                                            <td>{{ $driver->driver_id }}</td>
                                            <td><img src="{{ asset('assets/driver_images/' . $driver->profile_image) }}" alt="Driver Image" /></td>
                                            <td>{{ $driver->first_name }}</td>
                                            <td>{{ $driver->driver_email }}</td>
                                            <td>{{ $driver->mobile_no }}</td>
                                            <td>{{ $driver->address1 }}</td> <!-- Updated for full address -->
                                            <td>
                                                @if($driver->driver_status == 3)
                                                <span class="badge badge-primary">Online</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Google Maps API with key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACiii2Kp1VXRckQoTy_MYZcLkS0wEKhBE&callback=initMap" async defer></script>
<script>
    function initMap() {
        var mapCenter = { lat: 18.5204, lng: 73.8567 }; // Default to Pune, India (adjust as needed)
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: mapCenter
        });

        var geocoder = new google.maps.Geocoder();
        var drivers = @json($drivers); // Fetch drivers data from the controller

        drivers.forEach(function(driver) {
            geocodeAddress(geocoder, map, driver);
        });
    }

    function geocodeAddress(geocoder, map, driver) {
        // Use full address for better accuracy
        var fullAddress = driver.address1;
        
        geocoder.geocode({ 'address': fullAddress }, function(results, status) {
            if (status === 'OK') {
                var carIcon = {
                    url: "{{ asset('assets/icons/car.jpeg') }}", // Path to the car icon image
                    scaledSize: new google.maps.Size(40, 40), // Scale the icon
                    origin: new google.maps.Point(0, 0), // Origin point of the icon
                    anchor: new google.maps.Point(20, 40) // Anchor point of the icon
                };

                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    title: driver.first_name,
                    icon: carIcon // Custom car icon
                });

                var infowindow = new google.maps.InfoWindow({
                    content: '<strong>' + driver.first_name + '</strong><br>' +
                             'Email: ' + driver.driver_email + '<br>' +
                             'Phone: ' + driver.mobile_no
                });

                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            } else {
                console.error('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
</script>

@endsection
