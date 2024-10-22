<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhurr - Home Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- =======custome css======== -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <!-- ================= fav icon ======================= -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <!--============font awesome cdn============ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="{{asset('frontend/assets/image/logo/bhurr-fav-icon.png')}}" type="image/x-icon">
    <!-- Owl Carousel CSS -->
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- owl corousel animation css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        .noscroll {
            overflow: hidden;
        }

        .inputGroup {
            font-family: 'Segoe UI', sans-serif;
            margin: 1em 0 0.5em 0;
            /* max-width: 190px; */
            position: relative;
        }

        .inputGroup input {
            font-size: 20px;
            padding: 10px 5px 3px;
            outline: none;
            /* border: 2px solid rgb(200, 200, 200); */
            border: none;
            background-color: transparent;
            /* border-radius: 20px; */
            width: 100%;
            color: #B61032;
            font-weight: 700;
            background-color: transparent !important;
        }

        .inputGroup label {
            font-size: 20px;
            position: absolute;
            left: 0px;
            top: 13px;
            padding: 0;
            margin-left: 0;
            pointer-events: none;
            transition: all 0.3s ease;
            color: rgb(100, 100, 100);
        }

        .inputGroup :is(input:focus, input:valid)~label {
            transform: translateY(-100%) scale(.6);
            margin: 0em;
            color: #212529;

            /* margin-left: 5px; */
            /* padding: 0.4em; */
            /* background-color: #e8e8e8; */
        }

        .inputGroup :is(input:focus, input:valid) {
            border-color: rgb(150, 150, 200);
        }
    </style>
</head>

<body>

    <!-- =================main header================ -->
    <section class="navigation" id="navigation">
        <nav class="navbar navbar-expand-lg d-lg-block d-none" style="z-index: 100; ">
            <div class="container">
                <a class="navbar-brand py-0 d-flex align-items-center" href="{{url('/')}}">
                    <img src="{{asset('frontend/assets/image/logo/Bhurr-New-Logo.png')}}" width="150px" alt="">
                </a>
                <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex flex-column px-0" id="navbarNav">
                    <ul class="navbar-nav ml-auto top__header">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/')}}"><i class="fa-solid mr-1 fa-house"></i> Home<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid mr-1 fa-headphones"></i> Contact Us</a>
                        </li>
                        <li class="nav-item">
                            @if (Auth::check())
                            <a href="profile" class="btn nav-link">
                                <span class="login__icon"><i class="fa-solid fa-user"></i></span> {{ Auth::user()->name }}
                            </a>
                        @else
                            <a href="customer-login2" class="btn nav-link">
                                <span class="login__icon"><i class="fa-solid fa-user"></i></span> Sign In
                            </a>
                        @endif
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto bottom__header">
                        <li class="nav-item active">
                            <a class="nav-link" href="profile">Book & Manage <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Available Routes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Prepare To Travel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.html">About</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- =======booking form model====== -->

        <div class="container pb-2 bg-white d-lg-block d-none">
            {{-- <form action="" class=""> --}}
                <div class="row cab__booking">
                    <div class="col-md-12 border-bottom px-md-0">
                        <ul class="nav nav-pills d-flex w-100" id="pills-tab" role="tablist">
                            <li class="nav-item pb-0  " role="presentation">
                                <button class="nav-link  active   rounded-0" id="pills-home-tab" data-toggle="pill"
                                    data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">ONE
                                    WAY</button>
                            </li>
                            <li class="nav-item pb-0  " role="presentation">
                                <button class="nav-link    rounded-0" id="pills-profile-tab" data-toggle="pill"
                                    data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                    aria-selected="false">ROUND TRIP</button>
                            </li>
                            <li class="nav-item pb-0  " role="presentation">
                                <button class="nav-link    rounded-0" id="pills-contact-tab" data-toggle="pill"
                                    data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                    aria-selected="false">LOCAL</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                            <form id="oneWayForm" class="">
                                <input type="hidden" name="package_type" id="package_type" class="form-control" value="3">
                                <div class="form-row position-relative">
                                    <div class="col-md-2 pb-0  align-items-end">
                                        <div class="inputGroup mb-0">
                                            <input autocomplete="off" name="from" id="from" required="" type="text" class="form-control" placeholder="">
                                            <label for="name">FROM</label>
                                        </div>
                                    </div>
                                    <div class="left__right__arrow col-md-1">
                                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                    </div>
                                    <div class="col-md-2  pb-0 align-items-end">
                                        <div class="inputGroup mb-0">
                                            <input autocomplete="off" name="to" id="to" required="" class="form-control" type="text" placeholder="">
                                            <label for="name">TO</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 px-md-3">
                                        <label class="mb-0" for="from">DEPART DATE</label>
                                        <input type="date" class="form-control" name="pick_up" id="pick_up" placeholder="09-06-24">
                                    </div>
                                    <div class="col-md-2 px-md-3">
                                        <label class="mb-0" for="from">DEPART TIME</label>
                                        <input type="time" class="form-control" name="pick_up_at" id="pick_up_at" placeholder="12:40">
                                    </div>
                                    <div class="col-md-1 px-md-3">
                                        <label class="mb-0" for="from">Persons</label>
                                        <input type="number" class="form-control" name="no_of_person" id="no_of_person" placeholder="1">
                                    </div>
                                    <div class="col-md-2 align-items-end d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-submit btn-block common__btn px-md-4">Search</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="row">
									<form id="roundTripForm" class="d-flex">
                                    <div class="col-md-10">
                                        
                                            <input type="hidden" name="package_type" id="package_type" class="form-control" value="2">
                                        <div class="form-row ">
                                            <div class="col-md-2  align-items-end">
                                                <div class="inputGroup">
                                                    <input autocomplete="off" required="" name="from" id="roundfrom"  type="text" class="form-control" placeholder="">
                                                    <label for="name">From</label>
                                                </div>
                                            </div>
                                            <div class="left__right__arrow col-md-1">
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                            </div>
                                            <div class="col-md-2   align-items-end">
                                                <div class="inputGroup">
                                                    <input autocomplete="off" name="to" id="roundto" required="" type="text"
                                                        class="form-control" placeholder="">
                                                    <label for="name">TO</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="mb-0" for="from">DEPART DATE</label>
                                                <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="pick_up" id="pick_up">
                                            </div>
                                            <div class="col-md-2">
                                                <label class="mb-0" for="from">RETURN DATE</label>
                                                <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="round_return" id="round_return">
                                            </div>
                                            <div class="col-md-2">
                                                <label class="mb-0" for="from">DEPART TIME</label>
                                                <input type="time" class="form-control" placeholder="12:40" name="pick_up_at" id="pick_up_at">
                                            </div>
                                            <div class="col-md-1 ">
                                                <label class="mb-0" for="from">Persons</label>
                                                <input type="number" name="no_of_person" id="no_of_person" class="form-control" placeholder="1">
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-2 align-items-end d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-submit btn-block common__btn px-md-4">Search</button>
                                    </div>
										 </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <form id="localForm" class="">
                                    <input type="hidden" name="package_type" id="package_type" class="form-control" value="1">
                                <div class="form-row ">
                                    <div class="col-md-2  align-items-end">
                                        <div class="inputGroup">
                                            <input autocomplete="off" required="" type="text" class="form-control" name="from" id="Localfrom" placeholder="">
                                            <label for="name">SELECT CITY</label>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-2   align-items-end">
                                        <div class="inputGroup"> --}}
                                            {{-- <input autocomplete="off" required="" class="form-control" type="text" placeholder="8Hr/350KM" name="distance">
                                            <label for="name">SELECT PACKAGE</label> --}}
                                            <div class="col-md-2 px-md-3 align-items-end d-flex justify-content-center">
                                                <select name="distance" class="form-select form-control p-0"
                                                    aria-label="Default select example">
                                                    <option selected>SELECT PACKAGE</option>
                                                    <option value="350">8Hr/350Km</option>
                                                    <option value="308">7Hr/308Km</option>
                                                    <option value="264">6Hr/264Km</option>
                                                    <option value="220">5Hr/220Km</option>
                                                    <option value="176">4Hr/176Km</option>
                                                    <option value="132">3Hr/132Km</option>
                                                    <option value="88">2Hr/88Km</option>
                                                    <option value="44">1Hr/44Km</option>
                                                </select>
                                            </div>
                                        {{-- </div>
                                    </div> --}}
                                    <div class="col-md-2 px-md-3">
                                        <label class="mb-0" for="from">DATE</label>
                                        <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="pick_up" id="pick_up">
                                    </div>
                                    <div class="col-md-2 px-md-3">
                                        <label class="mb-0" for="from">START TIME</label>
                                        <input type="time" class="form-control" placeholder="12:40" name="pick_up_at" id="pick_up_at">
                                    </div>
                                    <div class="col-md-2 px-md-3">
                                        <label class="mb-0" for="from">Persons</label>
                                        <input type="number" class="form-control" placeholder="1" name="no_of_person" id="no_of_person">
                                    </div>
                                    <div class="col-md-2 align-items-end d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-submit btn-block common__btn px-md-4">Search</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>
        <!-- Loader HTML -->
<div id="loader" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.7); z-index: 9999;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
        <img src="{{asset('frontend/assets/image/logo/Bhurr-New-Logo.png')}}" alt="Loader" style="width: 100%; height: 50px;">
        <p style="font-size: 16px; font-weight: bold; margin-top: 10px;">Serching cars...</p>
    </div>
</div>
              
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script>
    $(document).ready(function () {
        function getFormData(form) {
            var unindexed_array = form.serializeArray();
            var indexed_array = {};

            $.map(unindexed_array, function (n, i) {
                indexed_array[n['name']] = n['value'];
            });

            return indexed_array;
        }
        // Function to show the loader
    function showLoader() {
        $('#loader').show(); // Assuming your loader has an id="loader"
    }
        function openModal() {
            // Implement your modal opening code here
            alert('Form submitted successfully!');
        }

        // One Way Form
        $('#oneWayForm').on('submit', function (e) {
            e.preventDefault();
            showLoader();
            var data = getFormData($(this));
            console.log(data);
            fetch('{{ route("submit.form") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data),
            })
            .then(response => response.json())
            .then(response => {
                console.log(response.message);
               // openModal();
                setTimeout(function () {
                    var id = response.id;
                    var baseUrl = "{{ url('car-listing') }}";
                    var params = new URLSearchParams();
                    params.append('id', id);
                    for (const key in data) {
                        if (data.hasOwnProperty(key)) {
                            const value = data[key];
                            if (value.trim() !== '') {
                                params.append(key, value);
                            }
                        }
                    }
                    var url = baseUrl + '?' + params.toString();
                    window.location.href = url;

                }, 1000);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });

        // Round Trip Form
        $('#roundTripForm').on('submit', function (e) {
            e.preventDefault();
			showLoader();
            var data = getFormData($(this));
            console.log(data);
            fetch('{{ route("submit.form") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data),
            })
            .then(response => response.json())
            .then(response => {
                console.log(response.message);
                //openModal();
                setTimeout(function () {
                    var id = response.id;
                    var baseUrl = "{{ url('car-listing') }}";
                    var params = new URLSearchParams();
                    params.append('id', id);
                    for (const key in data) {
                        if (data.hasOwnProperty(key)) {
                            const value = data[key];
                            if (value.trim() !== '') {
                                params.append(key, value);
                            }
                        }
                    }
                    var url = baseUrl + '?' + params.toString();
                    window.location.href = url;

                }, 1000);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });

        // Local Form
        $('#localForm').on('submit', function (e) {
            e.preventDefault();
			showLoader();
            var data = getFormData($(this));
            console.log(data);
            fetch('{{ route("submit.form") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data),
            })
            .then(response => response.json())
            .then(response => {
                console.log(response.message);
                //openModal();
                setTimeout(function () {
                    var id = response.id;
                    var baseUrl = "{{ url('car-listing') }}";
                    var params = new URLSearchParams();
                    params.append('id', id);
                    for (const key in data) {
                        if (data.hasOwnProperty(key)) {
                            const value = data[key];
                            if (value.trim() !== '') {
                                params.append(key, value);
                            }
                        }
                    }
                    var url = baseUrl + '?' + params.toString();
                    window.location.href = url;

                }, 1000);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
        });
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACiii2Kp1VXRckQoTy_MYZcLkS0wEKhBE&libraries=places"></script>
<script>
        function initAutocomplete() {
    const startDestination = document.getElementById('from');
    const endDestination = document.getElementById('to');

    const roundStartDestination = document.getElementById('roundfrom');
    const roundEndDestination = document.getElementById('roundto');

    const localStartDestination = document.getElementById('Localfrom');
    const localEndDestination = document.getElementById('Localto');

    const autocompleteStart = new google.maps.places.Autocomplete(startDestination);
    const autocompleteEnd = new google.maps.places.Autocomplete(endDestination);

    const autocompleteRoundStart = new google.maps.places.Autocomplete(roundStartDestination);
    const autocompleteRoundEnd = new google.maps.places.Autocomplete(roundEndDestination);

    const autocompleteLocalStart = new google.maps.places.Autocomplete(localStartDestination);
    const autocompleteLocalEnd = new google.maps.places.Autocomplete(localEndDestination);

    autocompleteStart.setFields(['address_components', 'geometry', 'icon', 'name']);
    autocompleteEnd.setFields(['address_components', 'geometry', 'icon', 'name']);

    autocompleteStart.addListener('place_changed', function() {
        const place = autocompleteStart.getPlace();
        const address = getAddressComponents(place);
        console.log('Start Place:', address);
    });

    autocompleteEnd.addListener('place_changed', function() {
        const place = autocompleteEnd.getPlace();
        const address = getAddressComponents(place);
        console.log('End Place:', address);
    });
}

function getAddressComponents(place) {
    const addressComponents = place.address_components;
    let address = {
        street: '',
        city: '',
        state: '',
        country: '',
        postal_code: ''
    };

    addressComponents.forEach(component => {
        const types = component.types;
        if (types.includes('street_number')) {
            address.street = component.long_name + ' ' + address.street;
        }
        if (types.includes('route')) {
            address.street += component.long_name;
        }
        if (types.includes('locality')) {
            address.city = component.long_name;
        }
        if (types.includes('administrative_area_level_1')) {
            address.state = component.long_name;
        }
        if (types.includes('country')) {
            address.country = component.long_name;
        }
        if (types.includes('postal_code')) {
            address.postal_code = component.long_name;
        }
    });

    return address;
}

// Ensure that the script is executed after the API is loaded
document.addEventListener('DOMContentLoaded', function() {
    initAutocomplete();
});

        </script>
    </section>
    <section class="mobile__menu d-lg-none d-block" id="mobile__menu">
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-12 d-flex justify-content-between">
                    <div class="align-items-center d-flex">
                        <p class="mb-0 toggle-btn" type="button">
                            <svg class="open-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 18V16H21V18H3ZM3 13V11H21V13H3ZM3 6V4H21V6H3Z"></path>
                            </svg>
                            <svg class="close-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" style="display:none;">
                                <path fill-rule="evenodd"
                                    d="M18.707 4.293a1 1 0 0 1 1.414 1.414L13.414 12l6.707 6.293a1 1 0 0 1-1.414 1.414L12 13.414l-6.293 6.707a1 1 0 1 1-1.414-1.414L10.586 12 3.293 5.707a1 1 0 0 1 1.414-1.414L12 10.586l6.293-6.293z">
                                </path>
                            </svg>
                        </p>
                    </div>
                    <div class="">
                    <a href="{{url('/')}}"><img src="{{asset('frontend/assets/image/logo/Bhurr-Logo-new.png')}}" alt="" style="width: 150px;"></a>
                    </div>
                    <div class="align-items-center d-flex">
                        @if (Auth::check())
                        <a href="profile" class="btn nav-link">
                            <span class="login__icon"><i class="fa-solid fa-user"></i></span> {{ Auth::user()->name }}
                        </a>
                    @else
                    <a href="customer-login2" class="btn nav-link">
                        <span class="login__icon"><i class="fa-solid fa-user"></i></span> Sign In
                    </a>
                        @endif
                    </div>
                </div>
                <!-- <div class="col-4 justify-content-end d-flex">
                    <a class=" text-dark" href="signup.html"><i class="fa-solid mr-1 fa-user"></i> Sign</a>
                </div> -->
                <div class="col-12">
                    <!-- Offcanvas menu -->
                    <div class="offcanvas" id="offcanvas">
                        <ul class="navbar-nav ml-auto bottom__header Menu px-3 pt-4 " style="row-gap: 12px;">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Account <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bookings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Available Routes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Prepare To Travel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Help & Support</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">Sign In</a>
                                @if (Auth::check())
                                <a href="profile" class="btn nav-link">
                                    <span class="login__icon"><i class="fa-solid fa-user"></i></span> {{ Auth::user()->name }}
                                </a>
                                @else
                                {{-- <a href="customer-login2" class="btn nav-link">
                                    <span class="login__icon"><i class="fa-solid fa-user"></i></span> Sign In
                                </a> --}}
                                <a class="nav-link" href="customer-login2">Sign In</a>
                                    @endif
                            </li>
                        </ul>
                        <div class=" d-flex mt-3 mx-3">
                            <a href="tel:+1234567890"><i class="fa-solid fa-phone mr-2"></i> 1234567890</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="content">
        <section class="home w-100">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-controls">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                        <li data-target="#carousel" data-slide-to="3"></li>
                        <li data-target="#carousel" data-slide-to="4"></li>
                        <li data-target="#carousel" data-slide-to="5"></li>
                        <li data-target="#carousel" data-slide-to="6"></li>
                        <li data-target="#carousel" data-slide-to="7"></li>
                        <!-- <li data-target="#carousel" data-slide-to="8"></li> -->
                    </ol>
                    <!-- <button id="carouselPlayPause" class="custom-control play">P</button> -->
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <img src="{{asset('frontend/assets/image/banner/left-arrow.svg')}}" alt="Prev">
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <img src="{{asset('frontend/assets/image/banner/right-arrow.svg')}}" alt="Next">
                    </a>
                    <a class="play__pause__btn carousel-control-prev" id="carouselPlayPause" role="button">
                        <i class="fa-solid fa-pause"></i>
                    </a>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active"
                        style="background-image: url('{{asset('frontend/assets/image/banner/hero__banner5.jpg')}}');">
                        <div class="container d-flex align-items-center justify-content-center"
                          >
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>OUR SERVICES</h1>
                                    <p>local trips, round trips, corporate trips</p>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url('{{asset('frontend/assets/image/banner/hero__banner2.jpg')}}');">
                        <div class="container d-flex align-items-center justify-content-center"
                          >
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>LIMITLESS TRAVEL</h1>
                                    <p>flexibility, convenience, affordability, peace of mind</p>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url('{{asset('frontend/assets/image/banner/hero__banner3.jpg')}}');">
                        <div class="container d-flex align-items-center justify-content-center"
                          >
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>KEEP ROLLIN</h1>
                                    <p>our special feature DAILY SETTLEMENTS</p>
                                    <a href="#" class="btn common__btn px-md-4 px-3 mt-md-3 mt-2 fade-up">Know More</a>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url('{{asset('frontend/assets/image/banner/hero__banner4.jpg')}}');">
                        <div class="container d-flex align-items-center justify-content-center"
                          >
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>OUR PROMISE</h1>
                                    <p>on time, friendly chauffeurs, expert drivers</p>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url('{{asset('frontend/assets/image/banner/hero__banner5.jpg')}}');">
                        <div class="container d-flex align-items-center justify-content-center"
                          >
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>EXPERIENCE THE FUTURE OF TRAVEL</h1>
                                    <p>World's First Daily Bill Settlements</p>
                                    <a href="#" class="btn common__btn px-md-4 px-3 mt-md-3 mt-2 fade-up">Know More</a>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url('{{asset('frontend/assets/image/banner/hero__banner6.jpg')}}');">
                        <div class="container d-flex align-items-center justify-content-center"
                          >
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>CHOOSE PREFERED DRIVER LANGUAGE</h1>
                                    <a href="#" class="btn common__btn px-md-4 px-3 mt-md-3 mt-2 fade-up">Know More</a>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url('{{asset('frontend/assets/image/banner/hero__banner7.jpg')}}');">
                        <div class="container d-flex align-items-center justify-content-center"
                          >
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>BOOK CAB ACCORDING TO YOUR LANGUAGE</h1>
                                    <a href="#" class="btn common__btn px-md-4 px-3 mt-md-3 mt-2 fade-up">Know More</a>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url('{{asset('frontend/assets/image/banner/hero__banner8.jpg')}}');">
                        <div class="container d-flex align-items-center justify-content-center"
                          >
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>BOOK 10 DAYS BEFORE</h1>
                                    <a href="#" class="btn common__btn px-md-4 px-3 mt-md-3 mt-2 fade-up">Know More</a>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="carousel-item"
                        style="background-image: url('{{asset('frontend/assets/image/banner/hero__banner1.jpg')}}');">
                        <div class="container d-flex align-items-center justify-content-center" style="min-height:calc(100vh - 200px);">
                            <div class="row align-self-center w-100">
                                <div class="col-md-6">
                                    <h1>BOOK 10 DAYS BEFORE</h1>
                                    <a href="#" class="btn common__btn px-md-4 px-3 mt-md-3 mt-2 fade-up">Know More</a>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <a class="carousel-control-prev d-none" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next d-none" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- Tabs Content -->
        <div class="outer__tab__container tab-content d-lg-none ">
            <!-- Search Cab Tab -->
            <div id="searchTab" class="tab-pane outer__tab__content fade active show">
                <div class="tab-pane-header px-2">
                    <h2 class="tab-pane-title">Search Cab</h2>
                    <span class="close-tab" data-target="#searchTab"><i class="fa-solid fa-x"></i></span>
                </div>
                <div class="container px-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified d-flex mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link w-100 active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">One Way</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link w-100" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Round Trip</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link w-100" id="messages-tab" data-toggle="tab" href="#messages" role="tab"
                                aria-controls="messages" aria-selected="false">Local</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content inner__tab__container">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container px-0">
                                <form id="oneWayFormMobile" class="">
                                    <input type="hidden" name="package_type" id="package_type" class="form-control" value="3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mobileFrom" placeholder=" " required name="from">
                                        <label for="fromLocation">From</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mobileto" name="to" placeholder=" " required>
                                        <label for="toLocation">To</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="pick_up" name="pick_up" placeholder=" " required>
                                        <label for="travelDate">Depart Date</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="time" class="form-control" id="pick_up_at" placeholder=" " required name="pick_up_at">
                                        <label for="pick_up_at">Depart Time</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="no_of_person" placeholder=" " required name="no_of_person">
                                        <label for="no_of_person">Persons</label>
                                    </div>
                                    <div class="justify-content-center d-flex"><button type="submit"
                                        class="btn common__btn px-5">Search</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="container px-0">
                                <form id="roundTripFormMobile" class="">
                                    <input type="hidden" name="package_type" id="package_type" class="form-control" value="2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mobilefromLocation" placeholder=" " required name="from">
                                        <label for="fromLocation">From</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mobiletoLocation" placeholder=" " required name="to">
                                        <label for="toLocation">To</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="pick_up" placeholder=" " required name="pick_up">
                                        <label for="pick_up">Depart Date</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="round_return" placeholder=" " required name="round_return">
                                        <label for="round_return">Return Date</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="time" class="form-control" id="pick_up_at" placeholder=" " required name="pick_up_at">
                                        <label for="pick_up_at">Depart Time</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="numPeople" placeholder=" " required name="no_of_persons">
                                        <label for="numPeople">Persons</label>
                                    </div>
                                    <div class="justify-content-center d-flex">
                                        <button type="submit" class="btn common__btn px-5">Search</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                            <div class="container px-0">
                                <form id="localFormMobile" class="">
                                    <input type="hidden" name="package_type" id="package_type" class="form-control" value="1">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="LocalfromLocation" placeholder=" " required name="from">
                                        <label for="fromLocation">Select City</label>
                                        
                                    </div>
                                    <div class="form-floating">
                                        {{-- <input type="text" class="form-control" id="toLocation" placeholder=" " required name="distance"> --}}
                                        <label for="toLocation">Select Package</label>
                                        <select id="toLocation" name="distance" class="form-control"
                                                    aria-label="Default select example">
                                                    <option selected>SELECT PACKAGE</option>
                                                    <option value="350">8Hr/350Km</option>
                                                    <option value="308">7Hr/308Km</option>
                                                    <option value="264">6Hr/264Km</option>
                                                    <option value="220">5Hr/220Km</option>
                                                    <option value="176">4Hr/176Km</option>
                                                    <option value="132">3Hr/132Km</option>
                                                    <option value="88">2Hr/88Km</option>
                                                    <option value="44">1Hr/44Km</option>
                                                </select>
                                    </div>
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="pick_up" placeholder=" " required name="pick_up">
                                        <label for="pick_up">Date</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="time" class="form-control" id="pick_up_at" placeholder=" " required name="pick_up_at">
                                        <label for="pick_up_at">Start Time:</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="no_of_person" placeholder=" " required name="no_of_person">
                                        <label for="no_of_person">Persons</label>
                                    </div>
                                    <div class="justify-content-center d-flex"><button type="submit"
                                        class="btn common__btn px-5">Search</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACiii2Kp1VXRckQoTy_MYZcLkS0wEKhBE&libraries=places"></script>
            <script>
                $(document).ready(function () {
                    function getFormData(form) {
                        var unindexed_array = form.serializeArray();
                        var indexed_array = {};
        
                        $.map(unindexed_array, function (n, i) {
                            indexed_array[n['name']] = n['value'];
                        });
        
                        return indexed_array;
                    }
    
                    function showLoader() {
                        $('#loader').show(); // Assuming your loader has an id="loader"
                    }
        
                    function openModal() {
                        // Implement your modal opening code here
                        alert('Form submitted successfully!');
                    }
        
                    // One Way Form
                    $('#oneWayFormMobile').on('submit', function (e) {
                        e.preventDefault();
                        showLoader();
                        var data = getFormData($(this));
                        console.log(data);
                        fetch('{{ route("submit.form.data") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify(data),
                        })
                        .then(response => response.json())
                        .then(response => {
                            console.log(response.message);
                            // openModal();
                            setTimeout(function () {
                                var id = response.id;
                                var baseUrl = "{{ url('car-listing') }}";
                                var params = new URLSearchParams();
                                params.append('id', id);
                                for (const key in data) {
                                    if (data.hasOwnProperty(key)) {
                                        const value = data[key];
                                        if (value !== null) {
                                            params.append(key, value);
                                        }
                                    }
                                }
                                window.location.href = baseUrl + '?' + params.toString();
                            }, 1000);
                        })
                        .catch(error => console.log(error));
                    });
        
                    // Round Trip Form
                    $('#roundTripFormMobile').on('submit', function (e) {
                        e.preventDefault();
                        showLoader();
                        var data = getFormData($(this));
                        console.log(data);
                        fetch('{{ route("submit.form.data") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify(data),
                        })
                        .then(response => response.json())
                        .then(response => {
                            console.log(response.message);
                            // openModal();
                            setTimeout(function () {
                                var id = response.id;
                                var baseUrl = "{{ url('car-listing') }}";
                                var params = new URLSearchParams();
                                params.append('id', id);
                                for (const key in data) {
                                    if (data.hasOwnProperty(key)) {
                                        const value = data[key];
                                        if (value !== null) {
                                            params.append(key, value);
                                        }
                                    }
                                }
                                window.location.href = baseUrl + '?' + params.toString();
                            }, 1000);
                        })
                        .catch(error => console.log(error));
                    });
        
                    // Local Form
                    $('#localFormMobile').on('submit', function (e) {
                        e.preventDefault();
                        showLoader();
                        var data = getFormData($(this));
                        console.log(data);
                        fetch('{{ route("submit.form.data") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify(data),
                        })
                        .then(response => response.json())
                        .then(response => {
                            console.log(response.message);
                            // openModal();
                            setTimeout(function () {
                                var id = response.id;
                                var baseUrl = "{{ url('car-listing') }}";
                                var params = new URLSearchParams();
                                params.append('id', id);
                                for (const key in data) {
                                    if (data.hasOwnProperty(key)) {
                                        const value = data[key];
                                        if (value !== null) {
                                            params.append(key, value);
                                        }
                                    }
                                }
                                window.location.href = baseUrl + '?' + params.toString();
                            }, 1000);
                        })
                        .catch(error => console.log(error));
                    });
        
                    // Initialize Google Places Autocomplete
                    var options = {
                        types: ['(cities)'],
                        componentRestrictions: { country: 'in' }
                    };
        
                    var fromInput1 = document.getElementById('mobileFrom');
                    var toInput1 = document.getElementById('mobileto');
                    var autocompleteFrom1 = new google.maps.places.Autocomplete(fromInput1, options);
                    var autocompleteTo1 = new google.maps.places.Autocomplete(toInput1, options);
        
                    var fromInput2 = document.getElementById('mobilefromLocation');
                    var toInput2 = document.getElementById('mobiletoLocation');
                    var autocompleteFrom2 = new google.maps.places.Autocomplete(fromInput2, options);
                    var autocompleteTo2 = new google.maps.places.Autocomplete(toInput2, options);
        
                    var localFromInput = document.getElementById('LocalfromLocation');
                    var autocompleteLocalFrom = new google.maps.places.Autocomplete(localFromInput, options);
                });
            </script>
            <!-- Manage Booking Tab -->
            <div id="manageBookingTab" class="tab-pane fade outer__tab__content">
                <div class="tab-pane-header px-2">
                    <h2 class="tab-pane-title">Manage Booking</h2>
                    <span class="close-tab" data-target="#manageBookingTab"><i class="fa-solid fa-x"></i></span>
                </div>
                <div class="container">
                    <p>Content for Manage Booking tab.</p>
                </div>
            </div>

            <!-- Available Routes Tab -->
            <div id="availableRoutesTab" class="tab-pane fade outer__tab__content">
                <div class="tab-pane-header px-2">
                    <h2 class="tab-pane-title">Available Routes</h2>
                    <span class="close-tab" data-target="#availableRoutesTab"><i class="fa-solid fa-x"></i></span>
                </div>
                <div class="container">
                    <p>Content for Available Routes tab.</p>
                </div>
            </div>

            <!-- Help & Support Tab -->
            <div id="helpSupportTab" class="tab-pane fade outer__tab__content">
                <div class="tab-pane-header px-2">
                    <h2 class="tab-pane-title">Help & Support</h2>
                    <span class="close-tab" data-target="#helpSupportTab"><i class="fa-solid fa-x"></i></span>
                </div>
                <div class="container">
                    <p>Content for Help & Support tab.</p>
                </div>
            </div>
        </div>
        <div class="fixed-bottom-bar  d-lg-none d-flex pt-2 pb-1">
            <ul class="nav nav-justified nav-tab d-flex w-100">
                <li class="nav-item   p-0 active">
                    <a class="nav-link mobile-nav-link active" data-toggle="tab" href="#searchTab"><i
                            class="fa-solid fa-magnifying-glass"></i><br>Search Cab</a>
                </li>
                <li class="nav-item  p-0">
                    <a class="nav-link" data-toggle="tab" href="#manageBookingTab"><i
                            class="fa-solid fa-folder"></i><br>Manage Booking</a>
                </li>
                <li class="nav-item  p-0">
                    <a class="nav-link" data-toggle="tab" href="#availableRoutesTab"><i
                            class="fa-solid fa-road"></i><br>Available Routes</a>
                </li>
                <li class="nav-item  p-0">
                    <a class="nav-link" data-toggle="tab" href="#helpSupportTab"><i
                            class="fa-solid fa-headset"></i><br>Help
                        & Support</a>
                </li>
            </ul>
        </div>
        <section class="snap-section py-md-5 py-3 gallery__section">
            <div class="container px-md-0">
                <div class="row">
                    <div class="col-12 mb-md-4 mb-3">
                        <h2 class="mb-0 pl-md-3  text-md-left text-center">A CLASS APART. IT’S THE NEW STANDARD</h2>
                        <p class="mb-0 pl-md-3 text-md-left text-center">Discover our world of exclusive offers and
                            services that change the way you
                            travel.</p>
                    </div>
                </div> <!-- Missing closing tag added here -->
            </div>
            <div class="image-container d-md-none d-block">
                <div class="image-wrapper">
                    <img src="{{asset('frontend/assets/image/stack/stack_1.webp')}}" alt="Image 1">
                    <div class="image-content ">
                        <h2>Popular destinations</h2>
                    </div>
                    <div class="para__btn__section">
                        <p>Popular destinations near Pune</p>
                        <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn px-md-4 px-3">
                            Explore More
                        </a>
                    </div>
                </div>
                <div class="image-wrapper">
                    <img src="{{asset('frontend/assets/image/stack/stack_2.webp')}}" alt="Image 2">
                    <div class="image-content ">
                        <h2>
                            Refer and earn
                        </h2>
                    </div>
                    <div class="para__btn__section">
                        <p>Contact us to become a partner</p>
                        <a href=" " target="_blank" rel="noopener noreferrer"
                            class="btn common__btn px-md-4 px-3">Contact Us</a>
                    </div>
                </div>
                <div class="image-wrapper">
                    <img src="{{asset('frontend/assets/image/stack/stack_3.webp')}}" alt="Image 3">
                    <div class="image-content ">
                        <h2>
                            Road less travelled
                        </h2>
                    </div>
                    <div class="para__btn__section">
                        <p>Hidden gems in India</p>
                        <a href=" " target="_blank" rel="noopener noreferrer"
                            class="btn common__btn px-md-4 px-3">Explore</a>
                    </div>
                </div>
                <div class="image-wrapper">
                    <img src="{{asset('frontend/assets/image/stack/stack_4.webp')}}" alt="Image 4">
                    <div class="image-content ">
                        <h2>Corporate services</h2>
                    </div>
                    <div class="para__btn__section">
                        <p>Contact us for specialised services</p>
                        <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn">Contact
                            Us</a>
                    </div>
                </div>
                <div class="image-wrapper">
                    <img src="{{asset('frontend/assets/image/stack/stack_5.webp')}}" alt="Image 5">
                    <div class="image-content ">
                        <h2>Talk to us</h2>
                    </div>
                    <div class="para__btn__section">
                        <p>Talk to us</p>
                        <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn">Contact
                            Us</a>
                    </div>
                </div>
            </div>
            <div class="d-md-block d-none px-0">
                <div class="col-12 px-0">
                    <div class="gallery">
                        <div class="img__box">
                            <!-- <img src="{{asset('frontend/assets/image/stack/stack_1.webp')}}" alt=""> -->
                            <h3 class="">Popular destinations</h3>
                            <p>Popular destinations near Pune</p>
                            <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn px-md-4 px-3">
                                Explore More
                            </a>
                        </div>
                        <div class="img__box">
                            <h3 class="">Refer and earn</h3>
                            <p>Contact us to become a partner</p>
                            <a href=" " target="_blank" rel="noopener noreferrer"
                                class="btn common__btn px-md-4 px-3">Contact Us</a>
                        </div>
                        <div class="img__box">
                            <h3 class="">Road less travelled</h3>
                            <p>Hidden gems in India</p>
                            <a href=" " target="_blank" rel="noopener noreferrer"
                                class="btn common__btn px-md-4 px-3">Explore</a>
                        </div>
                        <div class="img__box">
                            <h3 class="">Corporate services</h3>
                            <p>Contact us for specialised services</p>
                            <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn">Contact
                                Us</a>
                        </div>
                        <div class="img__box">
                            <h3 class="">Talk to us</h3>
                            <p>Talk to us</p>
                            <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="py-md-5 py-3 car__category__section ">
            <div class="container">
                <div class="row justify-content-center  ">
                    <div class="col-md-4 align-items-center d-flex ">
                        <div class="col-12 pl-md-0 ">
                            <h2 class="heading__text__color text-md-left text-center">
                                EXPLORE CAR CATEGORIES
                            </h2>
                            <p class="subheading__text__color text-md-left text-center">Find the perfect car for your
                                journey, whether it's for a
                                family trip or a solo
                                adventure.
                            </p>
                            <!-- <a href="javaScript:Void(0);" class="btn common__btn my-2 px-4 px-3">Read More</a> -->

                        </div>
                    </div>
                    <div class="col-md-8 rightCarCategory">
                        <!-- <div class=" ">
                            <h2 class="heading__text__color">
                                Explore Car Categories
                            </h2>
                            <p class="subheading__text__color">Find the perfect car for your journey, whether it's for a
                                family trip or a solo
                                adventure.
                            </p>
                        </div> -->
                        <div class="owl-carousel car__category__corousel owl-theme">
                            <div class="item" data-aos="fade-up">
                                <a href="">
                                    <img src="{{asset('frontend/assets/image/toyato.webp')}}" alt="Sedan" class="img-fluid"
                                        loading="lazy">
                                </a>
                                <div class="carCategoryItemsCont">
                                    <h5>Hatchback</h5>
                                    <p>a small vehicle boasting affordability, convenience and lesser
                                        carbon emission suitable for shorter trips.</p>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up">
                                <a href="">
                                    <img src="{{asset('frontend/assets/image/toyato.webp')}}" alt="SUV" class="img-fluid"
                                        loading="lazy">
                                </a>
                                <div class="carCategoryItemsCont">
                                    <h5>Sedan</h5>
                                    <p>a long vehicle with extra boot space and legroom suitable for long
                                        journeys.</p>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up">
                                <a href="">
                                    <img src="{{asset('frontend/assets/image/toyato.webp')}}" alt="Sports Car" class="img-fluid"
                                        loading="lazy">
                                </a>
                                <div class="carCategoryItemsCont">
                                    <h5>Mpv</h5>
                                    <p>multipurpose vehicles featuring unmatched comfort best suited for grand
                                        family vacations. We don’t sell mpvs as suvs</p>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up">
                                <a href="">
                                    <img src="{{asset('frontend/assets/image/toyato.webp')}}" alt="Truck" class="img-fluid"
                                        loading="lazy">
                                </a>
                                <div class="carCategoryItemsCont">
                                    <h5>Suv</h5>
                                    <p>The epitome of land travel, experience the luxury of traveling in comfort,
                                        style and class. Best suited for the longest adventures.</p>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up">
                                <a href="">
                                    <img src="{{asset('frontend/assets/image/toyato.webp')}}" alt="Convertible" class="img-fluid"
                                        loading="lazy">
                                </a>
                                <div class="carCategoryItemsCont">
                                    <h5>Tempo traveller</h5>
                                    <p>A long vehicle featuring large number of seats and storage
                                        space, suitable for large families, group tours, for short to longest of
                                        outings.</p>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up">
                                <a href="">
                                    <img src="{{asset('frontend/assets/image/toyato.webp')}}" alt="Electric Car" class="img-fluid"
                                        loading="lazy">
                                </a>
                                <div class="carCategoryItemsCont">
                                    <h5>Busses</h5>
                                    <p>special offers on busses.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-9 rightCarCategory">
                        <div class="row" id="carCategoryContainer">
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="">
                                        <img src="{{asset('frontend/assets/image/New Project (3).webp')}}" alt="category"
                                            class="img-fluid" loading="lazy">
                                    </a>
                                    <div class="carCategoryItemsCont">
                                        <h5>Category Name</h5>
                                        <p>Category Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="">
                                        <img src="{{asset('frontend/assets/image/New Project (3).webp')}}" alt="category"
                                            class="img-fluid" loading="lazy">
                                    </a>
                                    <div class="carCategoryItemsCont">
                                        <h5>Category Name</h5>
                                        <p>Category Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="">
                                        <img src="{{asset('frontend/assets/image/New Project (3).webp')}}" alt="category"
                                            class="img-fluid" loading="lazy">
                                    </a>
                                    <div class="carCategoryItemsCont">
                                        <h5>Category Name</h5>
                                        <p>Category Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <div class="col-6">
                                <div class="progress__bar"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-12">
                        <div class="progress__bar"></div>
                    </div> -->
                </div>
            </div>
        </section>
        <section class="position-relative overflow-hidden">
            <div class="container-fluid px-0  position-relative">
                <div class=" py-lg-0 py-4 fixed__width__container ">
                    <div class="fix__width">
                        <div class="inner__fix__width">
                            <h2 class="testimonial-heading mb-0 heading__text__color text-md-left text-center">PREPARE
                                <br class="mobile-hide"> TO TRAVEL
                            </h2>
                            <p class="testimonial-subheading mb-0 subheading__text__color text-md-left text-center">
                                Helpful hints for everything
                                from packing to
                                paperwork, so you are fully prepared.</p>
                            <div class="justify-content-md-left justify-content-center d-flex">
                                <a href="javaScript:Void(0);" class="btn common__btn my-2 px-4 px-3">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row Prepare__to__travel__bg">
                    <div class="col-lg-4  d-lg-block d-none">

                    </div>
                    <div class="col-lg-8  pl-0 gl-0">
                        <!-- <div class="col-12 text-center mb-3 ">
                            <h2 class="testimonial-heading mb-0">Popular locations</h2>
                            <p class="testimonial-subheading mb-0">Get ready for your next adventure </p>
                        </div> -->
                        <div class="owl-carousel locations owl-theme">
                            <div class="item">
                                <div class="slideritem">
                                    <img src="{{asset('frontend/assets/image/popular-location.webp')}}" class="img-fluid" alt="Dubai">
                                    <div class="placePrice">
                                        <div class="lft">
                                            <img src="{{asset('frontend/assets/image/logo/download.png')}}"
                                                style="width: 80px; height: 80px;" alt="">
                                        </div>
                                    </div>
                                    <div class="expore__btn__section">
                                        <a href="" class="btn common__btn">Explore</a>
                                    </div>
                                    <div class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slideritem">
                                    <img src="{{asset('frontend/assets/image/New Project (3).png')}}" class="img-fluid" alt="London">
                                    <div class="placePrice">
                                        <div class="lft">
                                            <img src="{{asset('frontend/assets/image/logo/download.png')}}"
                                                style="width: 80px; height: 80px;" alt="">
                                        </div>
                                    </div>
                                    <div class="expore__btn__section">
                                        <a href="" class="btn common__btn">Explore</a>
                                    </div>
                                    <div class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slideritem">
                                    <img src="{{asset('frontend/assets/image/New Project (4).png')}}" class="img-fluid"
                                        alt="San Francisco">
                                    <div class="placePrice">
                                        <div class="lft">
                                            <img src="{{asset('frontend/assets/image/logo/download.png')}}"
                                                style="width: 80px; height: 80px;" alt="">
                                        </div>
                                    </div>
                                    <div class="expore__btn__section">
                                        <a href="" class="btn common__btn">Explore</a>
                                    </div>
                                    <div class="progress-bar"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="snap-section testimonial__section py-md-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 testimonial-header mb-3">
                        <h2 class="testimonial-heading mb-0 heading__text__color text-md-left text-center">What Our
                            Client's Say</h2>
                        <p class="testimonial-subheading subheading__text__color text-md-left text-center mb-0">Hear
                            from our happy customers</p>
                    </div>
                    <div class="col-12">
                        <div class="nonstopSlider">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="slideritem">
                                        <div class="card testimonial-card">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Excellent Service!</h5>
                                                <p class="card-text text-center"> <i
                                                        class="fas fa-quote-left fa-quote mr-3"></i>Lorem ipsum dolor
                                                    sit
                                                    amet,
                                                    consectetur
                                                    adipiscing elit.
                                                    Nulla
                                                    commodo turpis nec tortor semper, a tincidunt libero fringilla. Duis
                                                    sit
                                                    amet sapien
                                                    nec magna convallis commodo.<i
                                                        class="fas fa-quote-right fa-quote ml-3"></i>
                                                </p>
                                                <div class="text-center">
                                                    <div class="author-info">
                                                        <p class="author-name">John Doe</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slideritem">
                                        <div class="card testimonial-card">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Excellent Service!</h5>
                                                <p class="card-text text-center"> <i
                                                        class="fas fa-quote-left fa-quote mr-3"></i>Lorem ipsum dolor
                                                    sit
                                                    amet,
                                                    consectetur
                                                    adipiscing elit.
                                                    Nulla
                                                    commodo turpis nec tortor semper, a tincidunt libero fringilla. Duis
                                                    sit
                                                    amet sapien
                                                    nec magna convallis commodo.<i
                                                        class="fas fa-quote-right fa-quote ml-3"></i>
                                                </p>
                                                <div class="text-center">
                                                    <div class="author-info">
                                                        <p class="author-name">John Doe</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slideritem">
                                        <div class="card testimonial-card">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Excellent Service!</h5>
                                                <p class="card-text text-center"> <i
                                                        class="fas fa-quote-left fa-quote mr-3"></i>Lorem ipsum dolor
                                                    sit
                                                    amet,
                                                    consectetur
                                                    adipiscing elit.
                                                    Nulla
                                                    commodo turpis nec tortor semper, a tincidunt libero fringilla. Duis
                                                    sit
                                                    amet sapien
                                                    nec magna convallis commodo.<i
                                                        class="fas fa-quote-right fa-quote ml-3"></i>
                                                </p>
                                                <div class="text-center">
                                                    <div class="author-info">
                                                        <p class="author-name">John Doe</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slideritem">
                                        <div class="card testimonial-card">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Excellent Service!</h5>
                                                <p class="card-text text-center"> <i
                                                        class="fas fa-quote-left fa-quote mr-3"></i>Lorem ipsum dolor
                                                    sit
                                                    amet,
                                                    consectetur
                                                    adipiscing elit.
                                                    Nulla
                                                    commodo turpis nec tortor semper, a tincidunt libero fringilla. Duis
                                                    sit
                                                    amet sapien
                                                    nec magna convallis commodo.<i
                                                        class="fas fa-quote-right fa-quote ml-3"></i>
                                                </p>
                                                <div class="text-center">
                                                    <div class="author-info">
                                                        <p class="author-name">John Doe</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slideritem">
                                        <div class="card testimonial-card">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Excellent Service!</h5>
                                                <p class="card-text text-center"> <i
                                                        class="fas fa-quote-left fa-quote mr-3"></i>Lorem ipsum dolor
                                                    sit
                                                    amet,
                                                    consectetur
                                                    adipiscing elit.
                                                    Nulla
                                                    commodo turpis nec tortor semper, a tincidunt libero fringilla. Duis
                                                    sit
                                                    amet sapien
                                                    nec magna convallis commodo.<i
                                                        class="fas fa-quote-right fa-quote ml-3"></i>
                                                </p>
                                                <div class="text-center">
                                                    <div class="author-info">
                                                        <p class="author-name">John Doe</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slideritem">
                                        <div class="card testimonial-card">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Excellent Service!</h5>
                                                <p class="card-text text-center"> <i
                                                        class="fas fa-quote-left fa-quote mr-3"></i>Lorem ipsum dolor
                                                    sit
                                                    amet,
                                                    consectetur
                                                    adipiscing elit.
                                                    Nulla
                                                    commodo turpis nec tortor semper, a tincidunt libero fringilla. Duis
                                                    sit
                                                    amet sapien
                                                    nec magna convallis commodo.<i
                                                        class="fas fa-quote-right fa-quote ml-3"></i>
                                                </p>
                                                <div class="text-center">
                                                    <div class="author-info">
                                                        <p class="author-name">John Doe</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer-section py-md-5 py-3">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-4  d-flex justify-content-md-start justify-content-center">
                        <a href="/" class="py-2 px-2">
                            <img src="{{asset('frontend/assets/image/logo/Bhurr-New-Logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="row align-items-center d-md-flex">
                            <div
                                class="col-md-4 align-items-center justify-content-md-end justify-content-center d-flex">
                                <h6 class="mb-md-0  text-md-end text-center">COMING SOON</h6>
                            </div>
                            <div class="col-md-8 justify-content-md-start justify-content-center d-flex">
                                <div class="">
                                    <img src="{{asset('frontend/assets/image/logo/430X70.png')}}" alt="" style="height: 40px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom pb-3">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="widget-title">ABOUT US</h5>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="widget course-links-widget">
                                    <ul class="courses-link-list">
                                        <li><a href="#">About Bhurr</a></li>
                                        <li><a href="#">Corporate</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Drive with us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="widget course-links-widget">
                                    <ul class="courses-link-list">
                                        <li><a href="#">Our offerings</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 pt-md-0 pt-3">
                        <div class="widget course-links-widget">
                            <h5 class="widget-title">BOOK & MANAGE</h5>
                            <ul class="courses-link-list">
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Manage Bookings</a></li>
                                <li><a href="#">Refer & Earn</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 pt-md-0 pt-3">
                        <div class="widget course-links-widget">
                            <h5 class="widget-title">SUPPORT</h5>
                            <ul class="courses-link-list">
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Grievance Resolution</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3 col-6">
                        <div class="widget course-links-widget">
                            <ul class="courses-link-list">
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="widget course-links-widget">
                            <ul class="courses-link-list">
                                <li><a href="#">Cookie Policy</a></li>
                                <li><a href="#">GST</a></li>
                                <li><a href="#">Passenger Rights</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-md-center justify-content-left d-flex">
                        <div class="widget newsletter-widget">
                            <div class="footer-newsletter">
                                <ul class="social__icon__list">
                                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-threads"></i></a></li>
                                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Footer -->
    </div>



    <a href="https://wa.me/9359668593" class=" whatsapp" target="_blank">
        <img src="{{asset('frontend/assets/image/whatsapp.png')}}" alt="WhatsApp" class="whatsapp-icon">
    </a>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <!-- aos js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('frontend/assets/js/script.js')}}  "></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      @if(session('success'))
      <script>
          Swal.fire({
              title: 'Thank you!',
              text: '{{ session('success') }}',
              icon: 'success',
              confirmButtonText: 'OK'
          });
      </script>
      @endif
</body>

</html>