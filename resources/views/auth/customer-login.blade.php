<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhurr - Home Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- =======custome css======== -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <!-- ================= fav icon ======================= -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/image/logo/Bhurr-New-Logo.png')}}" type="image/x-icon"> 
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
    <section class="navigation">
        <nav class="navbar navbar-expand-lg d-lg-block d-none" style="z-index: 100; ">
            <div class="container">
                <a class="navbar-brand py-0 d-flex align-items-center" href="/">
                    <img src="{{asset('new-layouts/assets/image/logo/bhurr_logo_315x90.png')}}" width="150px" alt="" />
                </a>
                <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex flex-column px-0" id="navbarNav">
                    <ul class="navbar-nav ml-auto top__header">
                        <li class="nav-item ">
                            <a class="nav-link" href="#"><i class="fa-solid mr-1 fa-house"></i> Home<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid mr-1 fa-headphones"></i> Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="customer-login2" class="btn nav-link">
                                <span class="login__icon"><i class="fa-solid fa-user"></i></span> Sign In
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto bottom__header">
                        <li class="nav-item active">
                            <a class="nav-link" href="profile">Book & Manage <span class="sr-only">(current)</span></a>
                        </li>
                         <li class="nav-item">
								<a class="nav-link" href="special-bookings">Special Bookings</a>
							  </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Prepare To Travel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </section>
    <section class="mobile__menu_car__listing d-lg-none d-block" id="mobile__menu">
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-12 d-flex justify-content-between">
                    <div class="align-items-center d-flex">
                        <p class="mb-0 toggle-btn" type="button">
                            <svg class="open-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 18V16H21V18H3ZM3 13V11H21V13H3ZM3 6V4H21V6H3Z">
                                </path>
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
                        <a href="/"><img src="../../assets/image/logo/Bhurr-New-Logo.png" alt=""></a>
                    </div>
                    <div class="align-items-center d-flex">
                        <a class="signup" href="/"><i class="fa-solid mr-1 fa-user"></i> Sign</a>
                    </div>
                </div>
                <!-- <div class="col-4 justify-content-end d-flex">
                <a class=" text-dark" href="#"><i class="fa-solid mr-1 fa-user"></i> Sign</a>
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
                                <a class="nav-link" href="/">Sign In</a>
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
    <section class="login__container py-md-5 py-3 px-md-0 px-2 align-items-center d-flex" style="min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-md-5 card border-0 rounded-0 px-md-5 px-3 py-md-5 py-3">
                    <h3 class="mb-3  text-center heading__text__color">Sign In</h3>
                    <form id="login-form" method="POST" action="{{ route('customerdata-login') }}">
                        @csrf
                    <div class="form-row">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control input" id="mobile_number" name="mobile_number" required>
                            <label for="mobile_number" class="user__label">Mobile Number</label>
                        </div>
                        <!-- <div class="col-md-12 mb-2 form-group">
                            <input type="text" class="form-control input" id="middleName" name="middleName" required>
                            <label for="middleName" class="user__label">Password</label>
                        </div> -->
                        <!-- <div class="col-md-12 mb-3 form-group justify-content-end d-flex">
                            <a href="#">Forgot Your Password?</a>
                        </div> -->
                        <div class="col-md-12 form-group">
                            <button type="submit" class="btn btn-block common__btn h-100 w-100 py-2">
                                SEND OTP
                            </button>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="divider">
                                <h3>Or</h3>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2 form-group">
                            <span class="small pb-2">*T&C Apply</span>
                            <a href="customer-register" class="btn btn-block common__btn_two  py-2 ">
                                Sign Up
                            </a>
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                            <span>Having trouble?<a href="#">Contact Us</a></span>
                        </div>
                    </div>
                    </form>
                </div>
                <!-- <div class="col-md-5 second__card border-0 rounded-0 px-md-5 px-3 py-3  ">
                    <div class="justify-content-center d-flex mb-3">
                        <img src="../../assets/image/logo/Bhurr-New-Logo.png" alt="">
                    </div>
                    <div class="heading__text__color">
                        <h3>SIGN UP FOR YOUR BHURR ACCOUNT</h3>
                    </div>
                    <div class="my-3 px-md-4 px-3">
                        <ul class="" style="list-style:disc;">
                            <li>Earn 1000 bonus reward points* on joining our Flying Returns programme</li>
                            <li>Get Flying Returns points when you spend on Air India and Star Alliance Flights</li>
                            <li>Earn points with our Flying Returns partners</li>
                            <li>Spend reward points for flights and upgrades</li>
                            <li>Get access to 1000+ lounges, extra baggage allowance and priority services</li>
                        </ul>
                    </div>
                    <div class="mt-3">
                        <div class="col-md-12 form-group">
                            <span>*T&C Apply</span>
                            <a href="#" class="btn btn-block common__btn_two h-100 w-100 py-2 ">
                                Sign Up
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <footer class="footer-section py-md-5 py-3">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4  d-flex justify-content-md-start justify-content-center">
                    <a href="/" class="py-2 px-2">
                       <img src="{{asset('new-layouts/assets/image/logo/bhurr_logo_315x90.png')}}" width="150px" alt="" />
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="row align-items-center d-md-flex">
                        <div class="col-md-4 align-items-center justify-content-md-end justify-content-center d-flex">
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
                                     <li><a href="corporate-booking">Corporate</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Drive with us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="widget course-links-widget">
                                <ul class="courses-link-list">
                                    <li><a href="our-offerings">Our offerings</a></li>
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
                             <li><a href="grivence-resolution">Grievance Resolution</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3 col-6">
                    <div class="widget course-links-widget">
                        <ul class="courses-link-list">
                            <li><a href="#">Sitemap</a></li>
                              <li><a href="terms-condition">Terms and Conditions</a></li>
              <li><a href="privacy-policy">Privacy Policy</a></li>
				<li><a href="return-policy">Return Policy</a></li>
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
			<div class="row mt-3">
				 <p class="text-center">© 2024 Bhurr Technologies LLP. All rights reserved. </p>
			</div>
        </div>
    </footer>
    <!-- OTP Modal -->
    <div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="otpModalLabel" style="color: black">OTP sent on your mobile number</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="otp-form" method="POST" action="{{ route('verify-otp') }}">
                        @csrf
                        {{--<div class="form-group">
                            <label for="otp">OTP</label>
                            <input type="text" class="form-control" id="otp" name="otp" required>
                            <input type="hidden" id="hidden_mobile_number" name="mobile_number">
                            <input type="hidden" id="enquiry_id" name="enquiry_id" value="{{$_GET['id']}}">

                        </div>--}}
						 <div class="form-row d-flex justify-content-center align-items-center">
                            <div class="col-6 form-group d-flex">
                                <label class="mt-2" for="otp">OTP: &nbsp;&nbsp;</label>
                                <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" required>
								<input type="hidden" id="hidden_mobile_number" name="mobile_number">
                            	<input type="hidden" id="enquiry_id" name="enquiry_id" value="{{$_GET['id']}}">
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center align-items-center">
                        	<button type="submit" class="btn common__btn">Verify OTP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	 <div id="loader" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.7); z-index: 9999;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
            <img src="{{asset('new-layouts/assets/image/logo/bhurr_logo_315x90.png')}}" alt="Loader" style="width: 100%; height: 50px;">
            {{-- <p style="font-size: 16px; font-weight: bold; margin-top: 10px;">Verification code sending...</p> --}}
        </div>
        <div style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
            <p style="font-size: 16px; font-weight: bold; margin-top: 10px;">Verification code sending...</p>
        </div>
    </div>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
		function showLoader() {
        $('#loader').show(); // Assuming your loader has an id="loader"
    }
        $('#login-form').on('submit', function (e) {
            e.preventDefault();
			 showLoader()
            var mobile_number = $('#mobile_number').val();
           
           
            $.ajax({
                type: 'POST',
                url: '{{ route("customerdata-login") }}',
                data: $(this).serialize(),
                success: function (response) {
                    if (response.status === 'otp_required') {
                        $('#hidden_mobile_number').val(mobile_number);
                        $('#otpModal').modal('show');
                        $('#loader').hide();
                    } else {
                        alert(response.message);
                    }
                }
            });
        });
    </script>
</body>