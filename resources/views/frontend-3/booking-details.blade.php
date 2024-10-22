<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhurr - Booking Details</title>
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
                            <a class="nav-link" href="#">{{Auth::user()->name}}</a>
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
        <section class="process__tabs pt-3  d-md-block d-none">
            <div class="container">
                <iv class="row">
                    <div class="col-md-4 active   d-flex justify-content-center">
                        <h5 class=""><span>1</span>Cars</h5>
                    </div>
                    <div class="col-md-4 active d-flex justify-content-center">
                        <h5 class=""><span><i class="fa-solid fa-check"></i></span>Passenger Details</h5>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center non__active">
                        <h5 class=""><span>3</span>Review & Payment</h5>
                    </div>
                </iv>
            </div>
        </section>
        <!-- content -->
        <section>
            <section class="departure__card ">
                <div class="container ">
                    <div class="row py-3 ">
                        <div class="col-md-6 col-12 d-flex justify-content-between align-items-center">
                            <span class="h3 mb-0 ">{{$enquiries->from_location}}</span> <span class="d-flex align-items-center"><img
                                    src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}" width="40px"
                                    alt="">
                                <!-- <p class="mb-0">departure</p> -->
                                <p class="mb-0">...........................................</p>
                                <img src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}" width="40px"
                                    alt="">
                            </span>
                            <Span class="h3 mb-0">{{$enquiries->to_location}}</Span>
                        </div>
                        <div class="col-md-6 col-3 justify-content-end align-items-center d-md-flex d-none">
                            <img src="{{ asset('class_images/' . $carclass->class_image) }}" height="50px" width="70px" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <section class="passenger__details__container py-md-5 py-3">
        <div class="container">
            <form action="{{route('postBookingDetails')}}" method="POST">
                @csrf
                <input type="hidden" name="enquiry_id" id="enquiry_id" value="{{$_GET['id']}}">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="font-weight-bold">PASSENGER DETAILS</h3>
                </div>
                <div class="col-12 card px-md-5 px-3 py-3 my-3">
                    <h5 class="info"><span><i class="fa-solid fa-circle-info"></i></span> INFO</h5>
                    <ul style="list-style: disc;">
                        <li>Fields with an asterisk (*) are mandatory to fill in.</li>
                        <li>Please provide your full name </li>
                    </ul>
                </div>
                <div class="col-12 card px-md-5 px-3 py-3 my-3">
                    <h4>Please Enter Passenger Details</h4>
                    <div class="form-row">
                        <div class="col-md-2 form-group">
                            <select class="form-select form-control" name="name_title" aria-label="Default select example" required>
                                <option value="">Title</option>
                                <option value="MR">Mr</option>
                                <option value="Mrs">Mrs</option>
                            </select>
                        </div>
                        <div class="col-md-5 form-group">
                            <input type="text" class="form-control" id="" name="firstname" placeholder="First Name*" required>
                        </div>
                        <div class="col-md-5 form-group">
                            <input type="text" class="form-control" id="" name="lastname" placeholder="Last Name*" required>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="" name="aadharnumber" placeholder="Aadhar No*" required>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="" name="companyname" placeholder="Company Name*" required>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="" name="gstno" placeholder="GST NO.*" required>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3 card px-md-5 px-3 py-3 ">
                    <h4>Contact Details</h4>
                    <div class="form-row">
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="email" name="contactemail" placeholder="Enter Email*" required>
                        </div>
                        <div class="col-md-4 form-group" id="additionalMobileNumbers">
                            <input type="text" class="form-control" id="mobno" name="customer_mobile" placeholder="Enter Mobile Number*" required>
                        </div>
                        
                        <div class="col-md-4 form-group">
                            <button id="addMobileNumberBtn" class="btn btn-block common__btn h-100 w-100">
                                Add another mobile number
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3 card px-md-5 px-3 py-3">
                    <h4>Pickup Locations</h4>
                    <div class="form-row">
                        <div class="col-12 form-group">
                            <input type="text" class="form-control" id="from" name="picklocation" placeholder="Pick Up Locations*" required>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3 card px-md-5 px-3 py-3">
                    <div class="form-row">
                        <div class="col-12 form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="t&c" id="flexCheckDefault" required>
                            <label class="form-check-label ml-5" for="flexCheckDefault">
                                <span>I Agree To - <a href="javascript:void(0);" target="">Customer Data
                                        Privacy Terms</a></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 px-md-5 px-3 py-3">
                    <div class="form-row justify-content-md-end justify-content-center">
                        <div class="col-4 justify-content-md-end justify-content-center d-flex">
                            <button type="submit" class="btn common__btn px-md-4 px-3">Confirm</button>
                            {{-- <a href="booking-review" class="btn common__btn px-md-4 px-3">Confirm</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUkMVVi6QljBfyIuIVsE8MbkgEzu9C0P0&libraries=places"></script>
        <script>
        function initAutocomplete() {
    const startDestination = document.getElementById('from');
    const endDestination = document.getElementById('to');
    const autocompleteStart = new google.maps.places.Autocomplete(startDestination);
    const autocompleteEnd = new google.maps.places.Autocomplete(endDestination);

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
</body>