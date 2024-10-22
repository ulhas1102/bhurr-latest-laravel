<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhurr - Booking review</title>
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
                    <img src="{{asset('frontend/assets/image/logo/bhurr-logo.png')}}s" width="150px" alt="">
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
                            <span class="h3 mb-0 ">Pune</span> <span class="d-flex align-items-center"><img
                                    src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}s" width="40px"
                                    alt="">
                                   <!-- <p class="mb-0">departure</p> -->
                                <p class="mb-0">...........................................</p>
                                <img src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}" width="40px"
                                    alt="">
                            </span>
                            <Span class="h3 mb-0">Mumbai</Span>
                        </div>
                        <div class="col-md-6 col-3 justify-content-end align-items-center d-md-flex d-none">
                            <img src="{{asset('frontend/assets/image/logo/sedan.jpg')}}" height="50px" width="70px" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <section class="py-md-5 py-3 booking__review__container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-md-5 my-3">
                    <h3>Things To Know Before Booking</h3>
                    <div class="">
                        <ul>
                            <li>1. Determine Your Needs: Consider the size, type, and features of the car you
                                need for your trip.</li>
                            <li>2. Compare Prices: Check multiple car rental agencies to find the best rates and
                                deals.</li>
                            <li>3. Check for Hidden Fees: Be aware of any additional charges such as insurance,
                                fuel, or extra mileage fees.</li>
                            <li>4. Understand the Insurance Coverage: Know what is covered under the rental
                                insurance and consider additional coverage if needed.</li>
                            <li>5. Review the Rental Agreement: Carefully read the terms and conditions of the
                                rental agreement before signing.</li>
                            <li>6. Check the Fuel Policy: Understand the fuel policy (full-to-full,
                                same-to-same, etc.) to avoid extra charges.</li>
                            <li>7. Inspect the Car: Thoroughly inspect the car for any existing damage and
                                ensure it is documented before driving off.</li>
                            <li>8. Know the Return Policy: Familiarize yourself with the car return process and
                                the location to avoid last-minute hassles.</li>
                            <li>9. Verify Age Restrictions: Ensure you meet the minimum age requirement and have
                                a valid driver's license.</li>
                            <li>10. Understand Cancellation Policies: Check the cancellation policy to avoid
                                penalties if your plans change.</li>
                            <li>11. Look for Discounts: Take advantage of membership discounts, promotional
                                offers, or credit card benefits.</li>
                            <li>12. Confirm Mileage Limits: Be aware of any mileage restrictions to avoid extra
                                charges for exceeding the limit.</li>
                            <li>13. Emergency Roadside Assistance: Ensure the rental includes roadside
                                assistance in case of breakdowns or emergencies.</li>
                            <li>14. Understand the Deposit: Know the amount and conditions of the deposit
                                required by the rental agency.</li>
                            <li>15. Plan Your Route: Familiarize yourself with the driving routes, traffic
                                rules, and toll charges in your travel area.</li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-12 booking__review__card   py-3">
                    <div class="justify-content-between card p-md-3  d-flex flex-row">
                        <div class="">
                            <h4>Booking Total</h4>
                        </div>
                        <div>
                            <h4> INR {{$enquiries->total_amount}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3 justify-content-end d-flex">
                    <h6>For More Assistance Call Us <a href="tel:+0987654321">1234567890</a></h6>
                </div>
                <div class="col-12  d-flex justify-content-end">
                    <form action="{{ route('phonepay.checkout') }}" method="POST">
                        @csrf
                    <button type="submit" class="btn common__btn px-md-5 px-3">CheckOut</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <section class="snap-section py-md-0 py-0">
        <footer class="footer-section pt-md-5 pt-3">
            <div class="footer-top container mb-3">
                <div class="">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget company-intro-widget">
                                <a href="/" class="site-logo py-2 px-2">
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