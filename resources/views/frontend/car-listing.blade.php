@extends('frontend-layout.app')
@section('title', 'Car Listing - page')
@section('inline-css')

<style>
    .Prepare__to__travel__page ul li {
        list-style: circle;
    }

    .car__categories_tab {
        flex-wrap: nowrap;
        overflow-x: auto;
        -ms-overflow-style: none;
        /* Internet Explorer 10+ */
        scrollbar-width: none;
        /* Firefox */
    }

    .car__categories_tab::-webkit-scrollbar {
        display: none;
        /* Safari and Chrome */
    }

    .car__categories_tab .nav-item {
        flex: 0 0 auto;
        border: 1px solid #f3f4f5;
        scroll-snap-align: start;
        scroll-snap-type: X;
    }

    .scroll-right,
    .scroll-left {
        cursor: pointer;
        border-radius: 50%;
        padding: 5px 8px;
        border: 1px solid #916a3b;
    }

    @media (max-width: 768px) {
        .car__categories_tab {
            white-space: nowrap;
        }
    }
</style>

</head>

<body>
    @endsection
    @section('content')

    <section id="navigation" class="">
        <section class="process__tabs pt-3  d-md-block d-none">
            <div class="container">
                <iv class="row">
                    <div class="col-md-4 active   d-flex justify-content-center">
                        <h5 class=""><span><i class="fa-solid fa-check"></i></span>Cars</h5>
                    </div>
                    <div class="col-md-4 non__active  d-flex justify-content-center">
                        <h5 class=""><span>2</span>Passenger Details</h5>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center non__active">
                        <h5 class=""><span>3</span>Review & Payment</h5>
                    </div>
                </iv>
            </div>
        </section>
        <!-- content -->
        <section class="departure__card">
            <div class="container ">
                <div class="row py-3 ">
                    <div class="col-md-6 col-12 d-flex justify-content-between align-items-center px-md-0">
                        @php
                        $toLocation = isset($_GET['to']) ? $_GET['to'] : 'None';
                        function limit_words($string, $wordLimit)
                        {
                        $words = explode(' ', $string);
                        if (count($words) <= $wordLimit) {
                            return $string;
                            }

                            return implode(' ', array_slice($words, 0, $wordLimit)) . ' ...';
                            }
                            @endphp
                            <div class="">

                            {{-- <span><small>THU, 27 JUN 24</small></span><br> --}}
                            {{-- <span class="h5 mb-0 ">{{$_GET['from']}}</span> --}}
                            <Span class="h5 mb-0">{{ limit_words($_GET['from'], 1) }}</Span>


                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img
                            src="{{asset('new-layouts/assets/image/logo/Car-Icon (1).png')}}" class="d-md-flex d-none w-75"
                            alt="">

                        </span>
                    </div>
                    <div class="">
                        {{-- <span><small>FRI, 28 JUN 24</small></span><br> --}}
                        {{-- <Span class="h5 mb-0">{{$_GET['to']}}</Span> --}}
                        <Span class="h5 mb-0">{{ limit_words($toLocation, 1) }}</Span>

                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-3 justify-content-end align-items-center d-flex">
                    <div class=""> <a href="" class="btn common__btn_two px-md-5 px-3">Modify</a></div>
                </div>
            </div>
            </div>
        </section>


    </section>
    <section class="car__category__list  position-relative">
        <div class="container">
            <div class="row border-bottom border-top">
                <div class="col-md-1 col-1 d-flex align-items-center justify-content-center">
                    <!-- Left Arrow Icon -->
                    <i class="fas fa-chevron-left scroll-left" style="cursor:pointer;"></i>
                </div>
                <div class="col-md-10 col-10 px-md-0">
                    <ul class="nav nav-pills car__categories_tab d-flex overflow-auto" id="pills-tab" role="tablist" style="white-space: nowrap; scroll-behavior: smooth;">
                        @php $first = true; @endphp
                        @foreach($carclasses as $carclass)
                        <li class="nav-item col-md-2 col-6 px-0 text-center">
                            <a class="nav-link rounded-0 car-class-btn @if($first) active @endif"
                                id="pills-{{$carclass->car_class}}-tab"
                                data-toggle="pill" role="tab"
                                aria-controls="pills-{{$carclass->car_class}}"
                                aria-selected="{{ $first ? 'true' : 'false' }}"
                                data-car-class-id="{{ $carclass->car_class }}">
                                {{ $carclass->car_class }}
                            </a>
                        </li>
                        @php $first = false; @endphp
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-1 col-1 d-flex align-items-center justify-content-center">
                    <!-- Right Arrow Icon -->
                    <i class="fas fa-chevron-right scroll-right" style="cursor:pointer;"></i>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollContainer = document.querySelector('.car__categories_tab');
            const scrollLeft = document.querySelector('.scroll-left');
            const scrollRight = document.querySelector('.scroll-right');

            // Scroll Left
            scrollLeft.addEventListener('click', function() {
                scrollContainer.scrollBy({
                    left: -200, // Adjust the scroll distance here
                    behavior: 'smooth' // Smooth scrolling
                });
            });

            // Scroll Right
            scrollRight.addEventListener('click', function() {
                scrollContainer.scrollBy({
                    left: 200, // Adjust the scroll distance here
                    behavior: 'smooth' // Smooth scrolling
                });
            });
        });
    </script>


    <section class="car__listing__container py-md-5 py-3" style="min-height: calc(100vh - 195.5px);">
        <div class="container">
            <div class="tab-content row" id="pills-tabContent">
                <div class="tab-pane col-12 fade show active" id="suv" role="tabpanel"
                    aria-labelledby="pills-home-tab">
                    <div class="row car__category__list__card2222 justify-content-center d-flex px-md-0 px-2">
                        {{-- <div class="col-12 specific__car__card">
                                <div class="row car__category__list__card">
                                   
                                </div>
                            </div> --}}
                    </div>
                </div>

            </div>
        </div>
        {{-- <div class="row d-md-none d-flex justify-content-center">
                <div class="col-12" style="position: fixed; bottom: 0px; z-index: 10;">
                    <div class="row justify-content-end">
                        <div class="col-md-12 justify-content-end d-flex my-2">
                            <a href="#" class="btn btn-block common__btn px-md-4">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div> --}}
    </section>


    <a href="https://wa.me/9359668593" class="whatsapp" target="_blank">
        <img src="{{asset('frontend/assets/image/whatsapp.png')}}" alt="WhatsApp" class="whatsapp-icon">
    </a>
    @endsection
    @section('inline-js')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carClassButtons = document.querySelectorAll('.car-class-btn');
            const urlParams = new URLSearchParams(window.location.search);
            const fromLocation = urlParams.get('from');
            const toLocation = urlParams.get('to');
            const packagetype = urlParams.get('package_type');

            // Fetch listings for the first car class button when the page loads
            if (carClassButtons.length > 0) {
                const firstCarClassId = carClassButtons[0].getAttribute('data-car-class-id');
                fetchCarListings(firstCarClassId, fromLocation, toLocation, packagetype);
            }

            // Set click event listeners for car class buttons
            carClassButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const carClassId = this.getAttribute('data-car-class-id');
                    fetchCarListings(carClassId, fromLocation, toLocation, packagetype);
                });
            });
        });



        function fetchCarListings(carClassId, fromLocation, toLocation, packagetype) {
            const enquiry_id = <?php echo json_encode($enquiries->enquiry_id); ?>;
            fetch(`https://www.bhurr.co.in/api/get-prices?dataid=${carClassId}&from_location=${fromLocation}&enquiry_id=${enquiry_id}`)
                .then(response => response.json())
                .then(data => {
                    const distance = <?php echo json_encode($enquiries->total_distance); ?>;
                    const cars = data.formattedData;
                    updateCarListings(cars, distance, packagetype);
                    console.log('Charges data', data);
                })
                .catch(error => {
                    console.error('Error fetching car listings:', error);
                });
        }

        function updateCarListings(cars, distance, packagetype) {
            const carListContainer = document.querySelector('.car__category__list__card2222');
            const enquiry = <?php echo json_encode($enquiries->enquiry_id); ?>;
            carListContainer.innerHTML = ''; // Clear existing car listings
            if (cars.length === 0) {
                const noCarMessage = `
                    <div class="col-12 text-center">
                        <p>No cars available</p>
                    </div>
                `;
                carListContainer.insertAdjacentHTML('beforeend', noCarMessage);
            } else {
                cars.forEach(car => {

                    if (packagetype == 1) {
                        const bothTwoWaydistance = distance * 2;
                        let Diseltotal;
                        if (bothTwoWaydistance <= 300) {
                            Diseltotal = (2 * (bothTwoWaydistance * parseFloat(car.local_disel_per_km_charges)) + parseFloat(car.local_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Diseltotal}`);
                        } else if (bothTwoWaydistance > 300 && bothTwoWaydistance <= 2 * 300) {
                            // Excess distance up to 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 300;
                            Diseltotal = ((2 * (300 * parseFloat(car.local_disel_per_km_charges))) + (2 * (excessDistance * parseFloat(car.local_disel_per_km_charges))) + parseFloat(car.local_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Diseltotal}`);
                        } else if (bothTwoWaydistance > 2 * 300) {
                            // Excess distance above 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 3 * 300;
                            Diseltotal = ((3 * (300 * parseFloat(car.local_disel_per_km_charges))) + (3 * (excessDistance * parseFloat(car.local_disel_per_km_charges))) + parseFloat(car.local_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Diseltotal}`);
                        }
                        let Cngtotal;
                        if (bothTwoWaydistance <= 300) {
                            Cngtotal = (2 * (bothTwoWaydistance * parseFloat(car.local_cng_per_km_charges)) + parseFloat(car.local_base_fare)).toFixed(2);
                            //console.log(`Diesel Total: ${Cngtotal}`);
                        } else if (bothTwoWaydistance > 300 && bothTwoWaydistance <= 2 * 300) {
                            // Excess distance up to 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 300;
                            Cngtotal = ((2 * (300 * parseFloat(car.local_cng_per_km_charges))) + (2 * (excessDistance * parseFloat(car.local_cng_per_km_charges))) + parseFloat(car.local_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Cngtotal}`);
                        } else if (bothTwoWaydistance > 2 * 300) {
                            // Excess distance above 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 3 * 300;
                            Cngtotal = ((3 * (300 * parseFloat(car.local_cng_per_km_charges))) + (3 * (excessDistance * parseFloat(car.local_cng_per_km_charges))) + parseFloat(car.local_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Cngtotal}`);
                        }
                        let Elctrictotal;

                        if (bothTwoWaydistance <= 300) {
                            Elctrictotal = (2 * (bothTwoWaydistance * parseFloat(car.electric_per_km_charges)) + parseFloat(car.local_base_fare)).toFixed(2);
                            //console.log(`Diesel Total: ${Elctrictotal}`);
                        } else if (bothTwoWaydistance > 300 && bothTwoWaydistance <= 2 * 300) {
                            // Excess distance up to 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 300;
                            Elctrictotal = ((2 * (300 * parseFloat(car.electric_per_km_charges))) + (2 * (excessDistance * parseFloat(car.electric_per_km_charges))) + parseFloat(car.local_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Elctrictotal}`);
                        } else if (bothTwoWaydistance > 2 * 300) {
                            // Excess distance above 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 3 * 300;
                            Elctrictotal = ((3 * (300 * parseFloat(car.electric_per_km_charges))) + (3 * (excessDistance * parseFloat(car.electric_per_km_charges))) + parseFloat(car.local_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Elctrictotal}`);
                        }

                        const carCard = `
                        <div class="col-12 specific__car__card">
                                <div class="row car__category__list__card">
                        <div class="col-md-6  p-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="justify-content-center d-flex">
                                        <img src="{{ asset('class_images/${car.class_image}') }}" alt="" style="transform: scaleX(-1);">
                                    </div>
                                </div>
                                <div class="content pl-3 col-6">
                                     <h4>
                                    ${car.car_class} 
                                    <small>
                                        <i class="fa-solid fa-circle-info"
                                        style="font-size: 20px;" 
                                        data-toggle="tooltip" 
                                        data-html="true" 
                                        data-placement="right" 
                                        title="${car.cars}"></i>
                                    </small>
                                </h4>
                                    <ul class="d-flex" style="gap:10px">
                                        <li><i class="fa-solid fa-car-side"></i> ${car.car_class}</li>
                                        <li><i class="fa-solid fa-temperature-arrow-down"></i> AC</li>
                                        <li><i class="fa-solid fa-chair"></i> ${car.seating_capacity} seat</li>
                                    </ul>
                                    <!-- <div class="mt-3 text-center">
                                        <a href="#" class="read__more mt-3 text__red">View Details & Book</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                               <li class="nav-item col-md-4 col-4 px-0 h-100" role="presentation">
                                        <button onclick="showPriceField('cng', '${Cngtotal}')" class="nav-link btn-block car__cng border-0 rounded-0"
                                            id="pills-home-tab" data-toggle="pill" data-target="#pills-home"
                                            type="button" role="tab" aria-controls="pills-home"
                                            aria-selected="true">
                                            <div class="Car__Type">
                                                <h5>CNG</h5>
                                            </div>
                                            <div class="justify-content-between flex-row d-flex w-100">
                                                <span class="price h4">&#8377; ${Cngtotal}</span>
                                                <span class="dropdown__arrow">▼</span>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item col-md-4 col-4 px-0 h-100" role="presentation">
                                        <button onclick="showPriceField('electric', '${Elctrictotal}')" class="nav-link btn-block border-0 rounded-0 car__electric"
                                            id="pills-profile-tab" data-toggle="pill"
                                            data-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">
                                            <div class="Car__Type">
                                                <h5>Electric</h5>
                                            </div>
                                            <div class="justify-content-between flex-row d-flex w-100">
                                                <span class="price h4">&#8377; ${Elctrictotal}</span>
                                                <span class="dropdown__arrow">▼</span>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item col-md-4 col-4 px-0 h-100" role="presentation">
                                        <button onclick="showPriceField('diesel', '${Diseltotal}')" class="nav-link btn-block border-0 rounded-0 car__petrol active"
                                            id="pills-contact-tab" data-toggle="pill"
                                            data-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">
                                            <div class="Car__Type">
                                                <h5>Diesel Or<br>Petrol</h5>
                                            </div>
                                            <div class="justify-content-between flex-row d-flex w-100">
                                                <span class="price h4">&#8377; ${Diseltotal}</span>
                                                <span class="dropdown__arrow">▼</span>
                                            </div>
                                        </button>
                                    </li>
                            </ul>
                        </div>
                        <div class="col-12 ">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane mt-3 fade" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="row  px-md-3" style="">
                                        <div class="col-md-3 col-6 px-0  ">
                                            <div class="inclusion">
                                                <h4 class="car__facility__label">T&C</h4>
                                                    <ul style="list-style: disc; margin: 15px;">
                                                        <li>Free Wi-Fi</li>
                                                        <li>Complimentary breakfast</li>
                                                        <li>GPS navigation system</li>
                                                        <li>24/7 customer support</li>
                                                        <li>Comprehensive insurance coverage</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6 px-0  ">
                                                <div class="inclusion">
                                                    <h4 class="car__facility__label">T&C</h4>
                                                        <ul style="list-style: disc; margin: 15px;">
                                                            <li>Free Wi-Fi</li>
                                                            <li>Complimentary breakfast</li>
                                                            <li>GPS navigation system</li>
                                                            <li>24/7 customer support</li>
                                                            <li>Comprehensive insurance coverage</li>
                                                        </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6 px-0  ">
                                                <div class="exclusion">
                                                    <h4 class="car__facility__label">T&C</h4>
                                                        <ul style="list-style: disc; margin: 15px;">
                                                            <li>Free Wi-Fi</li>
                                                            <li>Complimentary breakfast</li>
                                                            <li>GPS navigation system</li>
                                                            <li>24/7 customer support</li>
                                                            <li>Comprehensive insurance coverage</li>
                                                        </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6 px-0  ">
                                                <div class="exclusion">
                                                    <h4 class="car__facility__label">Exclusions</h4>
                                                        <ul style="list-style: disc; margin: 15px;">
                                                            <li>Fuel costs</li>
                                                            <li>Toll charges</li>
                                                            <li>Parking fees</li>
                                                            <li>Driver's gratuity</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="tab-pane mt-3 fade" id="pills-profile" role="tabpanel"
                                                aria-labelledby="pills-profile-tab">
                                                <div class="row  px-md-3" style="">
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="inclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="inclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="exclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="exclusion">
                                                            <h4 class="car__facility__label">Exclusions</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Fuel costs</li>
                                                                <li>Toll charges</li>
                                                                <li>Parking fees</li>
                                                                <li>Driver's gratuity</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane mt-3 fade" id="pills-contact" role="tabpanel"
                                                aria-labelledby="pills-contact-tab">
                                                <div class="row  px-md-3" style="">
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="inclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="inclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="exclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="exclusion">
                                                            <h4 class="car__facility__label">Exclusions</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Fuel costs</li>
                                                                <li>Toll charges</li>
                                                                <li>Parking fees</li>
                                                                <li>Driver's gratuity</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 justify-content-end d-md-block d-none">
                                            <div class="row justify-content-end">
                                                <div class="col-md-4 justify-content-end d-flex my-2">
                                                    <form action="submitcarlisting" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="enquiry_id" id="enquiry_id" value="${enquiry}">
                                                        <input type="hidden" name="total_amount" id="total_amount" value="${Diseltotal}">
                                                        <input type="hidden" name="car_class" id="car_class" value="${car.car_class}">
                                                        <input type="hidden" name="vehicle_type" id="fule_type" value="diesel">
                                                        <button type="submit" class="btn common__btn px-md-5 px-3 btn-block mx-md-3">Next</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                     </div>
                            </div>
                            <div class="col-12 d-md-none d-flex justify-content-center"
                                        style="position: fixed; bottom: 0px; left: 0; z-index: 10; margin: 5px auto;">
                                        <div class="w-100">
                                            <form action="submitcarlisting" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="enquiry_id" id="enquiry_id" value="${enquiry}">
                                                        <input type="hidden" name="total_amount" id="total_amounts" value="${Diseltotal}">
                                                        <input type="hidden" name="car_class" id="car_class" value="${car.car_class}">
                                                        <input type="hidden" name="vehicle_type" id="fule_types" value="diesel">
                                            <button type="submit" class="btn btn-block common__btn">Next
                                                Now</button>
                                                 </form>
                                        </div>
                                    </div>
                                    
                                    `;

                        carListContainer.insertAdjacentHTML('beforeend', carCard);
                    } else if (packagetype == 2) {

                        const bothTwoWaydistance = distance * 2;

                        let Diseltotal;

                        if (bothTwoWaydistance <= 300) {
                            Diseltotal = (2 * (bothTwoWaydistance * parseFloat(car.outstation_disel_per_km_charges)) + parseFloat(car.outstation_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Diseltotal}`);
                        } else if (bothTwoWaydistance > 300 && bothTwoWaydistance <= 2 * 300) {
                            // Excess distance up to 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 300;
                            Diseltotal = ((2 * (300 * parseFloat(car.outstation_disel_per_km_charges))) + (2 * (excessDistance * parseFloat(car.outstation_disel_per_km_charges))) + parseFloat(car.outstation_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Diseltotal}`);
                        } else if (bothTwoWaydistance > 2 * 300) {
                            // Excess distance above 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 3 * 300;
                            Diseltotal = ((3 * (300 * parseFloat(car.outstation_disel_per_km_charges))) + (3 * (excessDistance * parseFloat(car.outstation_disel_per_km_charges))) + parseFloat(car.outstation_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Diseltotal}`);
                        }

                        let Cngtotal;

                        if (bothTwoWaydistance <= 300) {
                            Cngtotal = (2 * (bothTwoWaydistance * parseFloat(car.outstation_cng_per_km_charges)) + parseFloat(car.outstation_base_fare)).toFixed(2);
                            //console.log(`Diesel Total: ${Cngtotal}`);
                        } else if (bothTwoWaydistance > 300 && bothTwoWaydistance <= 2 * 300) {
                            // Excess distance up to 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 300;
                            Cngtotal = ((2 * (300 * parseFloat(car.outstation_cng_per_km_charges))) + (2 * (excessDistance * parseFloat(car.outstation_cng_per_km_charges))) + parseFloat(car.outstation_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Cngtotal}`);
                        } else if (bothTwoWaydistance > 2 * 300) {
                            // Excess distance above 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 3 * 300;
                            Cngtotal = ((3 * (300 * parseFloat(car.outstation_cng_per_km_charges))) + (3 * (excessDistance * parseFloat(car.outstation_cng_per_km_charges))) + parseFloat(car.outstation_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Cngtotal}`);
                        }

                        let Elctrictotal;

                        if (bothTwoWaydistance <= 300) {
                            Elctrictotal = (2 * (bothTwoWaydistance * parseFloat(car.electric_per_km_charges)) + parseFloat(car.outstation_base_fare)).toFixed(2);
                            //console.log(`Diesel Total: ${Elctrictotal}`);
                        } else if (bothTwoWaydistance > 300 && bothTwoWaydistance <= 2 * 300) {
                            // Excess distance up to 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 300;
                            Elctrictotal = ((2 * (300 * parseFloat(car.electric_per_km_charges))) + (2 * (excessDistance * parseFloat(car.electric_per_km_charges))) + parseFloat(car.outstation_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Elctrictotal}`);
                        } else if (bothTwoWaydistance > 2 * 300) {
                            // Excess distance above 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 3 * 300;
                            Elctrictotal = ((3 * (300 * parseFloat(car.electric_per_km_charges))) + (3 * (excessDistance * parseFloat(car.electric_per_km_charges))) + parseFloat(car.outstation_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Elctrictotal}`);
                        }

                        const carCard = `
                         <div class="col-12 specific__car__card">
                                <div class="row car__category__list__card">
                        <div class="col-md-6  p-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="justify-content-center d-flex">
                                        <img src="{{ asset('class_images/${car.class_image}') }}" alt="" style="transform: scaleX(-1);">
                                    </div>
                                </div>
                                <div class="content pl-3 col-6">
                                    <h4>
                                        ${car.car_class} 
                                        <small>
                                            <i class="fa-solid fa-circle-info"
                                            style="font-size: 20px;" 
                                            data-toggle="tooltip" 
                                            data-html="true" 
                                            data-placement="right" 
                                            title="${car.cars}"></i>
                                        </small>
                                    </h4>
                                    <ul class="d-flex" style="gap:10px">
                                        <li><i class="fa-solid fa-car-side"></i> ${car.car_class}</li>
                                        <li><i class="fa-solid fa-temperature-arrow-down"></i> AC</li>
                                        <li><i class="fa-solid fa-chair"></i> ${car.seating_capacity} seat</li>
                                    </ul>
                                    <!-- <div class="mt-3 text-center">
                                        <a href="#" class="read__more mt-3 text__red">View Details & Book</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                               <li class="nav-item col-md-4 col-4 px-0 h-100" role="presentation">
                                        <button onclick="showPriceField('cng', '${Cngtotal}')" class="nav-link btn-block car__cng border-0 rounded-0"
                                            id="pills-home-tab" data-toggle="pill" data-target="#pills-home"
                                            type="button" role="tab" aria-controls="pills-home"
                                            aria-selected="true">
                                            <div class="Car__Type">
                                                <h5>CNG</h5>
                                            </div>
                                            <div class="justify-content-between flex-row d-flex w-100">
                                                <span class="price h4">&#8377; ${Cngtotal}</span>
                                                <span class="dropdown__arrow">▼</span>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item col-md-4 col-4 px-0 h-100" role="presentation">
                                        <button onclick="showPriceField('electric', '${Elctrictotal}')" class="nav-link btn-block border-0 rounded-0 car__electric"
                                            id="pills-profile-tab" data-toggle="pill"
                                            data-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">
                                            <div class="Car__Type">
                                                <h5>Electric</h5>
                                            </div>
                                            <div class="justify-content-between flex-row d-flex w-100">
                                                <span class="price h4">&#8377; ${Elctrictotal}</span>
                                                <span class="dropdown__arrow">▼</span>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item col-md-4 col-4 px-0 h-100" role="presentation">
                                        <button onclick="showPriceField('diesel', '${Diseltotal}')" class="nav-link btn-block border-0 rounded-0 car__petrol active"
                                            id="pills-contact-tab" data-toggle="pill"
                                            data-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">
                                            <div class="Car__Type">
                                                <h5>Diesel Or<br>Petrol</h5>
                                            </div>
                                            <div class="justify-content-between flex-row d-flex w-100">
                                                <span class="price h4">&#8377; ${Diseltotal}</span>
                                                <span class="dropdown__arrow">▼</span>
                                            </div>
                                        </button>
                                    </li>
                            </ul>
                        </div>
                        <div class="col-12 ">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane mt-3 fade" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="row  px-md-3" style="">
                                        <div class="col-md-3 col-6 px-0  ">
                                            <div class="inclusion">
                                                <h4 class="car__facility__label">T&C</h4>
                                                    <ul style="list-style: disc; margin: 15px;">
                                                        <li>Free Wi-Fi</li>
                                                        <li>Complimentary breakfast</li>
                                                        <li>GPS navigation system</li>
                                                        <li>24/7 customer support</li>
                                                        <li>Comprehensive insurance coverage</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6 px-0  ">
                                                <div class="inclusion">
                                                    <h4 class="car__facility__label">T&C</h4>
                                                        <ul style="list-style: disc; margin: 15px;">
                                                            <li>Free Wi-Fi</li>
                                                            <li>Complimentary breakfast</li>
                                                            <li>GPS navigation system</li>
                                                            <li>24/7 customer support</li>
                                                            <li>Comprehensive insurance coverage</li>
                                                        </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6 px-0  ">
                                                <div class="exclusion">
                                                    <h4 class="car__facility__label">T&C</h4>
                                                        <ul style="list-style: disc; margin: 15px;">
                                                            <li>Free Wi-Fi</li>
                                                            <li>Complimentary breakfast</li>
                                                            <li>GPS navigation system</li>
                                                            <li>24/7 customer support</li>
                                                            <li>Comprehensive insurance coverage</li>
                                                        </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6 px-0  ">
                                                <div class="exclusion">
                                                    <h4 class="car__facility__label">Exclusions</h4>
                                                        <ul style="list-style: disc; margin: 15px;">
                                                            <li>Fuel costs</li>
                                                            <li>Toll charges</li>
                                                            <li>Parking fees</li>
                                                            <li>Driver's gratuity</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="tab-pane mt-3 fade" id="pills-profile" role="tabpanel"
                                                aria-labelledby="pills-profile-tab">
                                                <div class="row  px-md-3" style="">
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="inclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="inclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="exclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="exclusion">
                                                            <h4 class="car__facility__label">Exclusions</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Fuel costs</li>
                                                                <li>Toll charges</li>
                                                                <li>Parking fees</li>
                                                                <li>Driver's gratuity</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane mt-3 fade" id="pills-contact" role="tabpanel"
                                                aria-labelledby="pills-contact-tab">
                                                <div class="row  px-md-3" style="">
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="inclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="inclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="exclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="exclusion">
                                                            <h4 class="car__facility__label">Exclusions</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Fuel costs</li>
                                                                <li>Toll charges</li>
                                                                <li>Parking fees</li>
                                                                <li>Driver's gratuity</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 justify-content-end d-md-block d-none">
                                            <div class="row justify-content-end">
                                                <div class="col-md-4 justify-content-end d-flex my-2">
                                                    <form action="submitcarlisting" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="enquiry_id" id="enquiry_id" value="${enquiry}">
                                                        <input type="hidden" name="total_amount" id="total_amount" value="${Diseltotal}">
                                                        <input type="hidden" name="car_class" id="car_class" value="${car.car_class}">
                                                        <input type="hidden" name="vehicle_type" id="fule_type" value="diesel">
                                                        <button type="submit" class="btn common__btn px-md-5 px-3 btn-block mx-md-3">Next</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                      </div>
                            </div>
                            <div class="col-12 d-md-none d-flex justify-content-center"
                                        style="position: fixed; bottom: 0px; left: 0; z-index: 10; margin: 5px auto;">
                                        <div class="w-100">
                                             <form action="submitcarlisting" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="enquiry_id" id="enquiry_id" value="${enquiry}">
                                                        <input type="hidden" name="total_amount" id="total_amounts" value="${Diseltotal}">
                                                        <input type="hidden" name="car_class" id="car_class" value="${car.car_class}">
                                                        <input type="hidden" name="vehicle_type" id="fule_types" value="diesel">
                                            <button type="submit" class="btn btn-block common__btn">Book
                                                Now</button>
                                                 </form>
                                        </div>
                                    </div>
                                    `;
                        carListContainer.insertAdjacentHTML('beforeend', carCard);


                    } else if (packagetype == 3) {

                        const bothTwoWaydistance = distance * 2;

                        let Diseltotal;

                        if (bothTwoWaydistance <= 300) {
                            Diseltotal = (2 * (bothTwoWaydistance * parseFloat(car.oneway_disel_per_km_charges)) + parseFloat(car.oneway_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Diseltotal}`);
                        } else if (bothTwoWaydistance > 300 && bothTwoWaydistance <= 2 * 300) {
                            // Excess distance up to 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 300;
                            Diseltotal = ((2 * (300 * parseFloat(car.oneway_disel_per_km_charges))) + (2 * (excessDistance * parseFloat(car.oneway_disel_per_km_charges))) + parseFloat(car.oneway_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Diseltotal}`);
                        } else if (bothTwoWaydistance > 2 * 300) {
                            // Excess distance above 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 3 * 300;
                            Diseltotal = ((3 * (300 * parseFloat(car.oneway_disel_per_km_charges))) + (3 * (excessDistance * parseFloat(car.oneway_disel_per_km_charges))) + parseFloat(car.oneway_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Diseltotal}`);
                        }

                        let Cngtotal;

                        if (bothTwoWaydistance <= 300) {
                            Cngtotal = (2 * (bothTwoWaydistance * parseFloat(car.oneway_cng_per_km_charges)) + parseFloat(car.oneway_base_fare)).toFixed(2);
                            //console.log(`Diesel Total: ${Cngtotal}`);
                        } else if (bothTwoWaydistance > 300 && bothTwoWaydistance <= 2 * 300) {
                            // Excess distance up to 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 300;
                            Cngtotal = ((2 * (300 * parseFloat(car.oneway_cng_per_km_charges))) + (2 * (excessDistance * parseFloat(car.oneway_cng_per_km_charges))) + parseFloat(car.oneway_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Cngtotal}`);
                        } else if (bothTwoWaydistance > 2 * 300) {
                            // Excess distance above 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 3 * 300;
                            Cngtotal = ((3 * (300 * parseFloat(car.oneway_cng_per_km_charges))) + (3 * (excessDistance * parseFloat(car.oneway_cng_per_km_charges))) + parseFloat(car.oneway_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Cngtotal}`);
                        }

                        let Elctrictotal;

                        if (bothTwoWaydistance <= 300) {
                            Elctrictotal = (2 * (bothTwoWaydistance * parseFloat(car.electric_per_km_charges)) + parseFloat(car.oneway_base_fare)).toFixed(2);
                            //console.log(`Diesel Total: ${Elctrictotal}`);
                        } else if (bothTwoWaydistance > 300 && bothTwoWaydistance <= 2 * 300) {
                            // Excess distance up to 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 300;
                            Elctrictotal = ((2 * (300 * parseFloat(car.electric_per_km_charges))) + (2 * (excessDistance * parseFloat(car.electric_per_km_charges))) + parseFloat(car.oneway_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Elctrictotal}`);
                        } else if (bothTwoWaydistance > 2 * 300) {
                            // Excess distance above 2 times the daily limit
                            const excessDistance = bothTwoWaydistance - 3 * 300;
                            Elctrictotal = ((3 * (300 * parseFloat(car.electric_per_km_charges))) + (3 * (excessDistance * parseFloat(car.electric_per_km_charges))) + parseFloat(car.oneway_base_fare)).toFixed(2);
                            console.log(`Diesel Total: ${Elctrictotal}`);
                        }

                        const carCard = `
                             <div class="col-12 specific__car__card">
                                <div class="row car__category__list__card">
                        <div class="col-md-6  p-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="justify-content-center d-flex">
                                        <img src="{{ asset('class_images/${car.class_image}') }}" alt="" style="transform: scaleX(-1);">
                                    </div>
                                </div>
                                <div class="content pl-3 col-6">
                                     <h4>
                                        ${car.car_class} 
                                        <small>
                                            <i class="fa-solid fa-circle-info"
                                            style="font-size: 20px;" 
                                            data-toggle="tooltip" 
                                            data-html="true" 
                                            data-placement="right" 
                                            title="${car.cars}"></i>
                                        </small>
                                    </h4>
                                    <ul class="d-flex" style="gap:10px">
                                        <li><i class="fa-solid fa-car-side"></i> ${car.car_class}</li>
                                        <li><i class="fa-solid fa-temperature-arrow-down"></i> AC</li>
                                        <li><i class="fa-solid fa-chair"></i> ${car.seating_capacity} seat</li>
                                    </ul>
                                    <!-- <div class="mt-3 text-center">
                                        <a href="#" class="read__more mt-3 text__red">View Details & Book</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                               <li class="nav-item col-md-4 col-4 px-0 h-100" role="presentation">
                                        <button onclick="showPriceField('cng', '${Cngtotal}')" class="nav-link btn-block car__cng border-0 rounded-0"
                                            id="pills-home-tab" data-toggle="pill" data-target="#pills-home"
                                            type="button" role="tab" aria-controls="pills-home"
                                            aria-selected="true">
                                            <div class="Car__Type">
                                                <h5>CNG</h5>
                                            </div>
                                            <div class="justify-content-between flex-row d-flex w-100">
                                                <span class="price h4">&#8377; ${Cngtotal}</span>
                                                <span class="dropdown__arrow">▼</span>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item col-md-4 col-4 px-0 h-100" role="presentation">
                                        <button onclick="showPriceField('electric', '${Elctrictotal}')" class="nav-link btn-block border-0 rounded-0 car__electric"
                                            id="pills-profile-tab" data-toggle="pill"
                                            data-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">
                                            <div class="Car__Type">
                                                <h5>Electric</h5>
                                            </div>
                                            <div class="justify-content-between flex-row d-flex w-100">
                                                <span class="price h4">&#8377; ${Elctrictotal}</span>
                                                <span class="dropdown__arrow">▼</span>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item col-md-4 col-4 px-0 h-100" role="presentation">
                                        <button onclick="showPriceField('diesel', '${Diseltotal}')" class="nav-link btn-block border-0 rounded-0 car__petrol active"
                                            id="pills-contact-tab" data-toggle="pill"
                                            data-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">
                                            <div class="Car__Type">
                                                <h5>Diesel Or<br>Petrol</h5>
                                            </div>
                                            <div class="justify-content-between flex-row d-flex w-100">
                                                <span class="price h4">&#8377; ${Diseltotal}</span>
                                                <span class="dropdown__arrow">▼</span>
                                            </div>
                                        </button>
                                    </li>
                            </ul>
                        </div>
                        <div class="col-12 ">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane mt-3 fade" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="row  px-md-3" style="">
                                        <div class="col-md-3 col-6 px-0  ">
                                            <div class="inclusion">
                                                <h4 class="car__facility__label">T&C</h4>
                                                    <ul style="list-style: disc; margin: 15px;">
                                                        <li>Free Wi-Fi</li>
                                                        <li>Complimentary breakfast</li>
                                                        <li>GPS navigation system</li>
                                                        <li>24/7 customer support</li>
                                                        <li>Comprehensive insurance coverage</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6 px-0  ">
                                                <div class="inclusion">
                                                    <h4 class="car__facility__label">T&C</h4>
                                                        <ul style="list-style: disc; margin: 15px;">
                                                            <li>Free Wi-Fi</li>
                                                            <li>Complimentary breakfast</li>
                                                            <li>GPS navigation system</li>
                                                            <li>24/7 customer support</li>
                                                            <li>Comprehensive insurance coverage</li>
                                                        </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6 px-0  ">
                                                <div class="exclusion">
                                                    <h4 class="car__facility__label">T&C</h4>
                                                        <ul style="list-style: disc; margin: 15px;">
                                                            <li>Free Wi-Fi</li>
                                                            <li>Complimentary breakfast</li>
                                                            <li>GPS navigation system</li>
                                                            <li>24/7 customer support</li>
                                                            <li>Comprehensive insurance coverage</li>
                                                        </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6 px-0  ">
                                                <div class="exclusion">
                                                    <h4 class="car__facility__label">Exclusions</h4>
                                                        <ul style="list-style: disc; margin: 15px;">
                                                            <li>Fuel costs</li>
                                                            <li>Toll charges</li>
                                                            <li>Parking fees</li>
                                                            <li>Driver's gratuity</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="tab-pane mt-3 fade" id="pills-profile" role="tabpanel"
                                                aria-labelledby="pills-profile-tab">
                                                <div class="row  px-md-3" style="">
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="inclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="inclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="exclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="exclusion">
                                                            <h4 class="car__facility__label">Exclusions</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Fuel costs</li>
                                                                <li>Toll charges</li>
                                                                <li>Parking fees</li>
                                                                <li>Driver's gratuity</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane mt-3 fade" id="pills-contact" role="tabpanel"
                                                aria-labelledby="pills-contact-tab">
                                                <div class="row  px-md-3" style="">
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="inclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="inclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="exclusion">
                                                            <h4 class="car__facility__label">T&C</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Free Wi-Fi</li>
                                                                <li>Complimentary breakfast</li>
                                                                <li>GPS navigation system</li>
                                                                <li>24/7 customer support</li>
                                                                <li>Comprehensive insurance coverage</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6 px-0  ">
                                                        <div class="exclusion">
                                                            <h4 class="car__facility__label">Exclusions</h4>
                                                            <ul style="list-style: disc; margin: 15px;">
                                                                <li>Fuel costs</li>
                                                                <li>Toll charges</li>
                                                                <li>Parking fees</li>
                                                                <li>Driver's gratuity</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 justify-content-end d-md-block d-none">
                                            <div class="row justify-content-end">
                                                <div class="col-md-4 justify-content-end d-flex my-2">
                                                    <form action="submitcarlisting" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="enquiry_id" id="enquiry_id" value="${enquiry}">
                                                        <input type="hidden" name="total_amount" id="total_amount" value="${Diseltotal}">
                                                        <input type="hidden" name="car_class" id="car_class" value="${car.car_class}">
                                                        <input type="hidden" name="vehicle_type" id="fule_type" value="diesel">
                                                        <button type="submit" class="btn common__btn px-md-5 px-3 btn-block mx-md-3">Next</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                      </div>
                            </div>
                            <div class="col-12 d-md-none d-flex justify-content-center"
                                        style="position: fixed; bottom: 0px; left: 0; z-index: 10; margin: 5px auto;">
                                        <div class="w-100">
                                            <form action="submitcarlisting" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="enquiry_id" id="enquiry_id" value="${enquiry}">
                                                        <input type="hidden" name="total_amount" id="total_amounts" value="${Diseltotal}">
                                                        <input type="hidden" name="car_class" id="car_class" value="${car.car_class}">
                                                        <input type="hidden" name="vehicle_type" id="fule_types" value="diesel">
                                            <button type="submit" class="btn btn-block common__btn">Book
                                                Now</button>
                                                 </form>
                                        </div>
                                    </div>
                                    `;
                        carListContainer.insertAdjacentHTML('beforeend', carCard);


                    }


                });
            }
        }

        function showPriceField(fuelType, totalAmount) {
            // Hide all price fields
            // document.getElementById('priceFieldDiesel').style.display = 'none';
            // document.getElementById('priceFieldCng').style.display = 'none';
            // document.getElementById('priceFieldElectric').style.display = 'none';

            // // Show the selected price field
            // if (fuelType === 'diesel') {
            //     document.getElementById('priceFieldDiesel').style.display = 'block';
            // } else if (fuelType === 'cng') {
            //     document.getElementById('priceFieldCng').style.display = 'block';
            // } else if (fuelType === 'electric') {
            //     document.getElementById('priceFieldElectric').style.display = 'block';
            // }

            // Update the hidden fields in the form
            document.getElementById('total_amount').value = totalAmount;
            document.getElementById('fule_type').value = fuelType;

            document.getElementById('total_amounts').value = totalAmount;
            document.getElementById('fule_types').value = fuelType;
        }

        // Initial call to set default values
        showPriceField('diesel', '${Diseltotal}');
    </script>

    @endsection