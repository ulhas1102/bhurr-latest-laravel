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
    <!-- Owl Carousel CSS -->
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- owl corousel animation css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        .Prepare__to__travel__page ul li {
            list-style: circle;
        }
        .tooltip {
            position: relative;
  display: inline-block;
  opacity: 1;
  z-index: 0;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: auto;
  background-color: black;
  color: #fff;
  border-radius: 6px;
  padding: 5px;
  font-family: monospace;
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

    </style>
</head>

<body>
    <!-- =================main header================ -->
    <section class="navigation">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="z-index: 100;">
            <div class="container">
                <a class="navbar-brand py-0 d-flex align-items-center" href="{{url('/')}}">
                    <img src="{{asset('frontend/assets/image/logo/bhurr-logo.png')}}" width="150px" alt="">
                </a>
                <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign in</a>
                        </li>
                        <!-- <li class="nav-item">
                            <button type="button" class="btn nav-link" data-toggle="modal" data-target="#loginModal">
                                <span class="login__icon"><i class="fa-solid fa-user"></i></span> Login
                            </button>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section id="navigation">
        <!-- content -->
        <section class="departure__card border-bottom">
            <div class="container ">
                <div class="row py-3 ">
                    <div class="col-md-6 col-8  justify-content-between">
                        <span class="h4 mb-0 bold"> {{$_GET['from']}}</span> <span class="d-flex align-items-center"><img
                                src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}" width="40px" alt="">
                            <!-- <p class="mb-0">departure</p> -->
                            <p class="mb-0">...........................................</p>
                            <img src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}" width="40px" alt="">
                        </span>
                        <Span class="h4 mb-0 bold"> {{$_GET['to']}}</Span>
                    </div>
                    <div class="col-md-6 col-3 justify-content-end align-items-center d-flex">
                        <div class=""> <a href="" class="btn common__btn_two px-md-5 px-3">Customize</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="car__category__list">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="row justify-content-center">
                            @foreach($carclasses as $carclass)
                            <div class="col-md-2 px-0">
                                <span class="btn w-100 car-class-btn" data-car-class-id="{{$carclass->car_class}}">
                                    {{$carclass->car_class}}
                                </span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="car__listing__container">
        <div class="container">
            <div class="row justify-content-center d-flex py-md-5 py-3">
                
                <div class="col-12">
                    <div class="row car__category__list__card">
                        <!-- Car listing content will be dynamically updated here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
    <!-- Footer -->
    <section class="snap-section py-md-0 py-0">
        <footer class="footer-section pt-md-5 pt-3">
            <div class="footer-top container mb-3">
                <div class="">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget company-intro-widget">
                                <a href="{{url('/')}}" class="site-logo py-2 px-2">
                                    <img src="{{asset('frontend/assets/image/logo/bhurr-logo.png')}}" alt="">
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's standard dummy text ever.</p>
                            </div>
                        </div><!-- widget end -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget course-links-widget">
                                <h5 class="widget-title">Pages</h5>
                                <ul class="courses-link-list">
                                    <li><a href="#">About-Us</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Refund</a></li>
                                    <!-- <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Web Development</a></li>
                        <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Apps Development</a></li> -->
                                </ul>
                            </div>
                        </div><!-- widget end -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget latest-news-widget">
                                <h5 class="widget-title">Services</h5>
                                <ul class="courses-link-list">
                                    <li><a href="#">One Way</a></li>
                                    <li><a href="#">Round Trip </a></li>
                                    <li><a href="#">Local</a></li>
                                    <li><a href="#">Airport</a></li>
                                    <!-- <li><a href="#">Refund</a></li> -->
                                    <!-- <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Web Development</a></li>
                        <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Apps Development</a></li> -->
                                </ul>
                            </div>
                        </div><!-- widget end -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget newsletter-widget">
                                <h5 class="widget-title">Newsletter</h5>
                                <div class="footer-newsletter">
                                    <ul class="company-footer-contact-list">
                                        <li><i class="fas fa-phone"></i>0123456789</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Location</li>
                                    </ul>
                                    <ul class="social__icon__list">
                                        <li><a href=""><i class="fab fa-linkedin"></i> </a>
                                        </li>
                                        <li><a embedehref=""><i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li><a href=""><i class="fab fa-facebook"></i> </a>
                                        </li>
                                        <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div><!-- widget end -->
                    </div>
                </div>
            </div>
            <div class=" footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center text-center">
                            <span class="copy-right-text">© 2024 <a href="javascript:void(0);">Webwideit.solutions</a>
                                All
                                Rights Reserved.</span>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
    </section>
    <div class="nav-buttons position-fixed d-none">
        <button class=" btn__dot mb-2" onclick="scrollToSection(1)"></button>
        <button class=" btn__dot mb-2" onclick="scrollToSection(2)"></button>
        <button class=" btn__dot mb-2" onclick="scrollToSection(3)"></button>
        <button class=" btn__dot" onclick="scrollToSection(4)"></button>
    </div>
    <a href="https://wa.me/9359668593" class="whatsapp-link" target="_blank">
        <img src="{{asset('frontend/assets/image/whatsapp.png')}}" alt="WhatsApp" class="whatsapp-icon">
    </a>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>
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
                fetchCarListings(firstCarClassId, fromLocation, toLocation,packagetype);
            }

            // Set click event listeners for car class buttons
            carClassButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const carClassId = this.getAttribute('data-car-class-id');
                    fetchCarListings(carClassId, fromLocation, toLocation,packagetype);
                });
            });
        });



        function fetchCarListings(carClassId, fromLocation, toLocation, packagetype) {
            fetch(`/get-car-listings?dataid=${carClassId}`)
                .then(response => response.json())
                .then(data => {

                    const distance = <?php echo json_encode($enquiries->total_distance); ?>;
                    

                    updateCarListings(data, distance, packagetype);
                })
                .catch(error => {
                    console.error('Error fetching car listings:', error);
                });
        }


        function updateCarListings(cars, distance, packagetype) {
            const carListContainer = document.querySelector('.car__category__list__card');
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

                    if(packagetype == 1){


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
                            Cngtotal = (2 * (bothTwoWaydistance *  parseFloat(car.local_cng_per_km_charges)) + parseFloat(car.local_base_fare)).toFixed(2);
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
                            Elctrictotal = (2 * (bothTwoWaydistance *  parseFloat(car.electric_per_km_charges)) + parseFloat(car.local_base_fare)).toFixed(2);
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
                        <div class="col-3">
                            <img src="{{ asset('class_images/${car.class_image}') }}" class="img-fluid" alt="">
                            
                        </div>
                        <div class="col-md-6 col-9">
                            <div class="car__name d-flex">
                                <div>
                                    <p class="mb-0 ">
                                        ${car.car_class}
                                    </p>
                                </div>
                                <div class="tooltip">
                                    <i class="fa-solid fa-circle-info">
                                        <span class="tooltiptext">${car.cars}</span>
                                    </i>
                                </div>
                            </div>
                            <div class="car__specification">
                                <ul class="d-flex" style="gap:30px; list-style: disc;">
                                    <li>${car.oneway_disel_per_km_charges}</li>
                                    <li>${car.luggage_capacity}</li>
                                    <li>${car.seating_capacity} Seats</li>
                                </ul>
                            </div>

                            <div class="car__facility">
                                <p class="mb-0 car__facility__label">Facility</p>
                                <div class="d-flex">
                                    <span>
                                        <i class="fa-solid fa-road"></i>
                                        Extra km
                                    </span>
                                    <span>
                                        <span class="text__bold">
                                            ₹ ${car.oneway_disel_per_km_charges}/km
                                        </span> after
                                    </span>
                                </div>
                            </div>

                            <div class="car__fuel-type d-none">
                                <p class="mb-0">vehicle Type:</p>
                                <div class="d-flex" style="gap:5px;">
                                <div>
                                    <input type="radio" id="diesel" name="fuelType" value="diesel" onclick="showPriceField('diesel', '${Diseltotal}')" checked>
                                    <label for="diesel">Diesel</label>
                                </div>
                                <div>
                                    <input type="radio" id="cng" name="fuelType" value="cng" onclick="showPriceField('cng', '${Cngtotal}')">
                                    <label for="cng">CNG</label>
                                </div>
                                <div>
                                    <input type="radio" id="electric" name="fuelType" value="electric" onclick="showPriceField('electric', '${Elctrictotal}')">
                                    <label for="electric">Electric</label>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 price__container justify-content-center">
                            <div class="price d-flex justify-content-between">
                                <div id="priceFieldDiesel" class="price-field">
                                        <p class="text-center">Disel/Petrol</p>
                                        <p>₹${Diseltotal}</p>
                                </div>
                                <div id="priceFieldCng" class="price-field">
                                    <p class="text-center">CNG</p>
                                    <p> ₹${Cngtotal}</p>
                                </div>
                                <div id="priceFieldElectric" class="price-field">
                                    <p class="text-center">Electric</p>
                                    <p>₹${Elctrictotal}</p>
                                </div>
                            </div>
                            <div>
                            <p style="font-size: 12px;text-align: center;">(Total Distance : ${distance})</p>       
                            </div>
                            <div class="justify-content-center d-flex">
                                <form  class="form" action="submitcarlisting" method="POST"> 
                                    @csrf
                                    <input type="hidden" name="enquiry_id" id="enquiry_id" value="${enquiry}">
                                    <input type="hidden" name="total_amount" id="total_amount" value="${Diseltotal}">
                                    <input type="hidden" name="car_class" id="car_class" value="${car.car_class}">
                                    <input type="hidden" name="vehicle_type" id="fule_type" value="diesel">
                                    <button type="submit"
                                    class="btn common__btn px-md-5 px-3 btn-block mx-md-3">Book
                                    </button>
                                </form>
                            </div>
                            <div class="justify-content-center d-flex my-3 read__more">
                                <button class="btn common__btn_two px-md-5 px-3 btn-block mx-md-3"> View More </button>
                            </div>
                        </div>
                    `;
                    carListContainer.insertAdjacentHTML('beforeend', carCard);
                }else if(packagetype == 2){

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
                            Cngtotal = (2 * (bothTwoWaydistance *  parseFloat(car.outstation_cng_per_km_charges)) + parseFloat(car.outstation_base_fare)).toFixed(2);
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
                            Elctrictotal = (2 * (bothTwoWaydistance *  parseFloat(car.electric_per_km_charges)) + parseFloat(car.outstation_base_fare)).toFixed(2);
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
                        <div class="col-3">
                            <img src="{{ asset('class_images/${car.class_image}') }}" class="img-fluid" alt="">
                            
                        </div>
                        <div class="col-md-6 col-9">
                            <div class="car__name d-flex">
                                <div>
                                    <p class="mb-0 ">
                                        ${car.car_class}
                                    </p>
                                </div>
                                <div class="tooltip">
                                    <i class="fa-solid fa-circle-info">
                                        <span class="tooltiptext">${car.cars}</span>
                                    </i>
                                </div>
                            </div>
                            <div class="car__specification">
                                <ul class="d-flex" style="gap:30px; list-style: disc;">
                                    <li>${car.oneway_disel_per_km_charges}</li>
                                    <li>${car.luggage_capacity}</li>
                                    <li>${car.seating_capacity} Seats</li>
                                </ul>
                            </div>

                            <div class="car__facility">
                                <p class="mb-0 car__facility__label">Facility</p>
                                <div class="d-flex">
                                    <span>
                                        <i class="fa-solid fa-road"></i>
                                        Extra km fare
                                    </span>
                                    <span>
                                        <span class="text__bold">
                                            ₹ ${car.oneway_disel_per_km_charges}/km
                                        </span> after
                                    </span>
                                </div>
                            </div>

                            <div class="car__fuel-type d-none">
                                <p class="mb-0">vehicle Type:</p>
                                <div class="d-flex" style="gap:5px;">
                                <div>
                                    <input type="radio" id="diesel" name="fuelType" value="diesel" onclick="showPriceField('diesel', '${Diseltotal}')" checked>
                                    <label for="diesel">Diesel</label>
                                </div>
                                <div>
                                    <input type="radio" id="cng" name="fuelType" value="cng" onclick="showPriceField('cng', '${Cngtotal}')">
                                    <label for="cng">CNG</label>
                                </div>
                                <div>
                                    <input type="radio" id="electric" name="fuelType" value="electric" onclick="showPriceField('electric', '${Elctrictotal}')">
                                    <label for="electric">Electric</label>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 price__container justify-content-center">
                             <div class="price d-flex justify-content-between">
                                <div id="priceFieldDiesel" class="price-field">
                                        <p class="text-center">Disel/Petrol</p>
                                        <p>₹${Diseltotal}</p>
                                </div>
                                <div id="priceFieldCng" class="price-field">
                                    <p class="text-center">CNG</p>
                                    <p> ₹${Cngtotal}</p>
                                </div>
                                <div id="priceFieldElectric" class="price-field">
                                    <p class="text-center">Electric</p>
                                    <p>₹${Elctrictotal}</p>
                                </div>
                            </div>
                            <div>
                            <p style="font-size: 12px;text-align: center;">(Total Distance : ${distance})</p>       
                            </div>
                            <div class="justify-content-center d-flex">
                               <form  class="form" action="submitcarlisting" method="POST"> 
                                    @csrf
                                    <input type="hidden" name="enquiry_id" id="enquiry_id" value="${enquiry}">
                                    <input type="hidden" name="total_amount" id="total_amount" value="${Diseltotal}">
                                    <input type="hidden" name="car_class" id="car_class" value="${car.car_class}">
                                    <input type="hidden" name="vehicle_type" id="fule_type" value="diesel">
                                    <button type="submit"
                                    class="btn common__btn px-md-5 px-3 btn-block mx-md-3">Book
                                    </button>
                                    </form>
                                    
                                    </div>
                            <div class="justify-content-center d-flex my-3 read__more">
                                <button class="btn common__btn_two px-md-5 px-3 btn-block mx-md-3"> View More </button>
                            </div>
                        </div>
                    `;
                    carListContainer.insertAdjacentHTML('beforeend', carCard);


                    }else if(packagetype == 3){

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
                                Cngtotal = (2 * (bothTwoWaydistance *  parseFloat(car.oneway_cng_per_km_charges)) + parseFloat(car.oneway_base_fare)).toFixed(2);
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
                                Elctrictotal = (2 * (bothTwoWaydistance *  parseFloat(car.electric_per_km_charges)) + parseFloat(car.oneway_base_fare)).toFixed(2);
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
                        <div class="col-3">
                            <img src="{{ asset('class_images/${car.class_image}') }}" class="img-fluid" alt="">
                        
                        </div>
                        <div class="col-md-6 col-9">
                            <div class="car__name d-flex">
                                <div>
                                    <p class="mb-0 ">
                                        ${car.car_class}
                                    </p>
                                </div>
                                <div class="tooltip">
                                    <i class="fa-solid fa-circle-info">
                                        <span class="tooltiptext">${car.cars}</span>
                                    </i>
                                </div>
                            </div>
                            <div class="car__specification">
                                <ul class="d-flex" style="gap:30px; list-style: disc;">
                                    <li>${car.oneway_disel_per_km_charges}</li>
                                    <li>${car.luggage_capacity}</li>
                                    <li>${car.seating_capacity} Seats</li>
                                </ul>
                            </div>

                            <div class="car__facility">
                                <p class="mb-0 car__facility__label">Facility</p>
                                <div class="d-flex">
                                    <span>
                                        <i class="fa-solid fa-road"></i>
                                        Extra km fare
                                    </span>
                                    <span>
                                        <span class="text__bold">
                                            ₹ ${car.oneway_disel_per_km_charges}/km
                                        </span> after
                                    </span>
                                </div>
                            </div>

                            <div class="car__fuel-type d-none">
                                <p class="mb-0">vehicle Type:</p>
                                <div class="d-flex" style="gap:5px;">
                                <div>
                                    <input type="radio" id="diesel" name="fuelType" value="diesel" onclick="showPriceField('diesel','${Diseltotal}')" checked>
                                    <label for="diesel">Diesel</label>
                                </div>
                                <div>
                                    <input type="radio" id="cng" name="fuelType" value="cng" onclick="showPriceField('cng', '${Cngtotal}')">
                                    <label for="cng">CNG</label>
                                </div>
                                <div>
                                    <input type="radio" id="electric" name="fuelType" value="electric" onclick="showPriceField('electric', '${Elctrictotal}')">
                                    <label for="electric">Electric</label>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 price__container justify-content-center">
                            <div class="price d-flex justify-content-between">
                                <div id="priceFieldDiesel" class="price-field">
                                        <p class="text-center">Disel/Petrol</p>
                                        <p>₹${Diseltotal}</p>
                                </div>
                                <div id="priceFieldCng" class="price-field">
                                    <p class="text-center">CNG</p>
                                    <p> ₹${Cngtotal}</p>
                                </div>
                                <div id="priceFieldElectric" class="price-field">
                                    <p class="text-center">Electric</p>
                                    <p>₹${Elctrictotal}</p>
                                </div>
                            </div>
                            <div>
                            <p style="font-size: 12px;text-align: center;">(Total Distance : ${distance})</p>       
                            </div>
                            <div class="justify-content-center d-flex">
                                <form  class="form" action="submitcarlisting" method="POST"> 
                                    @csrf
                                    <input type="hidden" name="enquiry_id" id="enquiry_id" value="${enquiry}">
                                    <input type="hidden" name="total_amount" id="total_amount" value="${Diseltotal}">
                                    <input type="hidden" name="car_class" id="car_class" value="${car.car_class}">
                                    <input type="hidden" name="vehicle_type" id="fule_type" value="diesel">
                                    <button type="submit"
                                    class="btn common__btn px-md-5 px-3 btn-block mx-md-3">Book
                                    </button>
                                    </form>
                                    
                                    </div>
                            <div class="justify-content-center d-flex my-3 read__more">
                                <button class="btn common__btn_two px-md-5 px-3 btn-block mx-md-3"> View More </button>
                            </div>
                        </div>
                    `;
                    carListContainer.insertAdjacentHTML('beforeend', carCard);


                }
                
                
                });
            }
        }
                // function showPriceField(fuelType, totalAmount) {
                //     document.getElementById('priceFieldDiesel').style.display = 'none';
                //     document.getElementById('priceFieldCng').style.display = 'none';
                //     document.getElementById('priceFieldElectric').style.display = 'none';
                   
                //     if (fuelType === 'diesel') {
                //         document.getElementById('priceFieldDiesel').style.display = 'block';
                        
                //     } else if (fuelType === 'cng') {
                //         document.getElementById('priceFieldCng').style.display = 'block';
                       
                //     } else if (fuelType === 'electric') {
                //         document.getElementById('priceFieldElectric').style.display = 'block';
                        
                //     }
                //     document.getElementById('total_amount').value = totalAmount;

                //     document.getElementById('fule_type').value = fuelType;

                // }
                // showPriceField('diesel');

    </script>
</body>