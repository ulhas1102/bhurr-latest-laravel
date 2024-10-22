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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>

    </style>
</head>

<body>
    <section class="navigation">
        <nav class="navbar navbar-expand-lg d-lg-block d-none" style="z-index: 100; ">
            <div class="container">
                <a class="navbar-brand py-0 d-flex align-items-center" href="{{url('/')}}">
                     <img src="{{asset('new-layouts/assets/image/logo/bhurr_logo_315x90.png')}}" width="150px" alt="" />
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
                            <a class="nav-link" href="customer-login2"><i class="fa-solid mr-1 fa-user"></i> Sign In</a>
                            @endif
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
                        <a href="{{url('/')}}"><img src="{{asset('frontend/assets/image/logo/Bhurr-New-Logo.png')}}" alt=""></a>
                    </div>
                    <div class="align-items-center d-flex">
                        <a href="customer-login2" class="btn nav-link">
                            <span class="login__icon"><i class="fa-solid fa-user"></i></span> Sign In
                        </a>
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
                                <a class="nav-link" href="customer-login2">Sign In</a>
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
    <section class="login__container align-items-center d-flex" style="min-height:70vh;">
        <div class="container my-md-5 my-3 p-3" style="min-height: 60vh; background-color:#fff">
            <div class="row px-md-5 px-3 py-3">
                <div id="step-1" class="progress__bar col-6 py-3 text-center active" role="progressbar"
                    aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"><span>1
                        PERSONAL INFO</span></div>
                <div id="step-2" class="progress__bar col-6 py-3 text-center" role="progressbar" aria-valuenow="33"
                    aria-valuemin="0" aria-valuemax="100">
                    <span>2 CONTACT INFO</span>
                </div>
                {{-- <div id="step-3" class="progress__bar col-4 py-3 text-center" role="progressbar" aria-valuenow="33"
                    aria-valuemin="0" aria-valuemax="100">
                    <span>3 CREATE PASSWORD</span>
                </div> --}}
            </div>
            <div class="row justify-content-center d-flex  py-3">
                <div class="col-md-10">
                    <form id="form-step-1" class="step active">
                        @csrf
                        <p class="tab__content mb-2">
                            <i class="fa fa-question-circle"></i> If you already have a Flying Returns account, please reach
                            out to our customer service team to initiate the process of resetting your account credentials.
                        </p>
                        <div class="row justify-content-md-between d-flex">
                           
                            <div class="col-md-3 form-group">
                                <input type="text" class="form-control input" id="firstname" name="firstname" required>
                                <label for="firstname" class="user__label">First Name *</label>
                            </div>
                            
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control input" id="lastname" name="lastname" required>
                                <label for="lastname" class="user__label">Last Name *</label>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control input" id="email" name="email" required>
                                <label for="email" class="user__label">Email</label>
                            </div>
                           
                           
                            <div class="col-md-12 form-group justify-content-end d-flex">
                                <button type="submit" class="btn common__btn mx-2 px-md-5 px-3 mt-3"
                                >Continue</button>
								 <a href="customer-login2" class="btn common__btn mx-2 px-md-5 px-3 mt-3"
                                >Sign In</a>
                            </div>
                        </div>
                    </form>
                    <form id="form-step-2" class="step">
                        @csrf
                        <p class="tab__content mb-2">
                            <i class="fa mr-2 fa-exclamation-circle"></i> For security purposes, we will confirm both your email address and
                            mobile number as you create your Flying Returns account.
                        </p>
                        <p class="tab__content mb-2">
                            <i class="fa mr-2 fa-exclamation-circle"></i> Your email address will serve as both your username and your login ID
                            for this account.
                        </p>
                        <p class="tab__content mb-2">
                            <i class="fa mr-2 fa-exclamation-circle"></i> Temporary email IDs are not accepted
                        </p>
                        <div class="row">
                            <input type="hidden" name="user_id" id="user-id" value="">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control input" id="mobile" name="mobile" required>
                                <label for="mobile" class="user__label">Mobile number</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control input" id="confirmmobile" name="confirmmobile" required>
                                <label for="confirmmobile" class="user__label">Confirm Mobile number</label>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="button" class="btn common__btn_two" onclick="sendVerificationCode()">Send Verification Code</button>
                            </div>
                            {{-- <div class="col-md-12 form-group">
                                <input type="text" class="form-control input" id="mobileNumber" name="mobileNumber" required>
                                <label for="mobileNumber" class="user__label">Enter Mobile Number</label>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="button" class="btn common__btn_two" onclick="sendOTP()">Send One Time Password</button>
                            </div> --}}
                            <div class="col-md-12 form-group justify-content-end d-flex">
                                <button type="button" class="btn common__btn mx-2 px-md-5 px-3 mt-3" onclick="backStep(2)">Back</button>
                                <button type="button" class="btn d-none common__btn mx-2 px-md-5 px-3 mt-3" onclick="nextStep(2)">Continue</button>
                            </div>
                        </div>
                    </form>
                    
                    <form id="form-step-3" class="step">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control input" id="firstName" name="firstName" required>
                                <label for="firstName" class="user__label">Password</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control input" id="firstName" name="firstName" required>
                                <label for="firstName" class="user__label">Confirm Password</label>
                            </div>
                            <div class="col-md-12">
                                <p class="tab__content mb-2">
                                    <i class="fa-solid fa-circle-check mr-2"></i> 8-16 characters
                                </p>
                                <p class="tab__content mb-2">
                                    <i class="fa-solid fa-circle-check mr-2"></i>A combination of lowercase and
                                    uppercase
                                    letters
                                </p>
                                <p class="tab__content mb-2">
                                    <i class="fa-solid fa-circle-check mr-2"></i>At least one number (0-9)
                                </p>
                                <p class="tab__content mb-2">
                                    <i class="fa-solid fa-circle-check mr-2"></i>One or more of the following symbols: @
                                    # $
                                    %
                                    ^
                                </p>
                            </div>
                            <div class="col-md-12 form-group justify-content-end d-flex">
                                <button type="button" class="btn common__btn mx-2 px-md-5 px-3 mt-3"
                                    onclick="backStep(3)">Back</button>
                                <button type="submit" class="btn common__btn mx-2 px-md-5 px-3 mt-3">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
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
			 <p>© 2024 Bhurr Technologies LLP. All rights reserved. </p>
		</div>
        </div>
    </footer>
     <!-- OTP Modal -->
     <div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="otpModalLabel" style="color: black">Enter OTP sent on your mobile number</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <form id="otp-form" method="POST" action="{{ route('verify-otp-login') }}"> --}}
                    <form id="otp-form">
                        @csrf
                        <div class="form-row d-flex justify-content-center align-items-center">
                            <div class="col-6 form-group d-flex">
                                <label class="mt-2" for="otp">OTP: &nbsp;&nbsp;</label>
                                <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" required>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#form-step-1').on('submit', function (e) {
                e.preventDefault();
    
                // Serialize form data
                var formData = $(this).serialize();
                console.log('Form Data:', formData); // Log form data to console
    
                // Example AJAX request
                $.ajax({
                    type: 'POST',
                    url: '{{ route("register-user") }}',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.status === 200) {
                            // Handle success, e.g., show OTP modal
                            nextStep(1)
                            id = response.id;
                            document.getElementById('user-id').value = id;
                        } else {
                            // Handle other responses
                            alert(response.message);
                        }
                    },
                    error: function (error) {
                        console.error('Error:', error);
                    }
                });

                // sign up form 
                function nextStep(step) {
                    // Hide current step
                    document.getElementById('form-step-' + step).classList.remove('active');
                    // document.getElementById('step-' + step).classList.remove('active')
                    // Show next step
                    document.getElementById('form-step-' + (step + 1)).classList.add('active');
                    document.getElementById('step-' + (step + 1)).classList.add('active')
                }
                function backStep(step) {
                    console.log('btn click');
                    // Hide current step
                    document.getElementById('form-step-' + step).classList.remove('active');
                    document.getElementById('step-' + step).classList.remove('active')

                    // Show previous step
                    document.getElementById('form-step-' + (step - 1)).classList.add('active');
                    document.getElementById('step-' + (step - 1)).classList.add('active')

                }

            });
        });

        function showLoader() {
        $('#loader').show(); // Assuming your loader has an id="loader"
    }

function sendVerificationCode() {
            showLoader()
    var mobile = $('#mobile').val();
    var confirmmobile = $('#confirmmobile').val();
    var user_id = $('#user-id').val();
    console.log(user_id);
    
    // Perform validation (client-side) to ensure mobile number and confirmmobile number match
    if (mobile !== confirmmobile) {
        alert('Mobile number and Confirm Mobile number must match.');
        $('#loader').hide();
        return;
    }

    // Example AJAX request to send verification code
    $.ajax({
        type: 'POST',
        url: '{{ route("send-verification-code") }}', // Adjust route name as needed
        data: {
            mobile: mobile,
            user_id: user_id,
            _token: '{{ csrf_token() }}' // Include CSRF token
        },
        success: function(response) {
            // Assuming response handling involves showing a modal for verification
            $('#otpModal').modal('show');
            $('#loader').hide();
        },
        error: function(xhr) {
            // Extract the error message from the response
            var errorMessage = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'An error occurred';
            alert(errorMessage);
        }
    });
}

$(document).ready(function () {
    $('#otp-form').on('submit', function (e) {
        e.preventDefault();

        // Serialize form data
        var formData = $(this).serialize();
        console.log('Form Data:', formData); // Log form data to console

        // Example AJAX request
        $.ajax({
            type: 'POST',
            url: '{{ route("verify-otp-register") }}',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.status === 200) {
                    var id = response.id;
                    document.getElementById('user-id').value = id;
                    window.location.href = 'https://www.bhurr.co.in/';
                } else {
                    alert(response.message);
                }
            },
            error: function (xhr) {
                var errorMessage = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'An error occurred';
                alert(errorMessage);
            }
        });

        // sign up form 
        function nextStep(step) {
            // Hide current step
            document.getElementById('form-step-' + step).classList.remove('active');
            // document.getElementById('step-' + step).classList.remove('active')
            // Show next step
            document.getElementById('form-step-' + (step + 1)).classList.add('active');
            document.getElementById('step-' + (step + 1)).classList.add('active');
        }

        function backStep(step) {
            console.log('btn click');
            // Hide current step
            document.getElementById('form-step-' + step).classList.remove('active');
            document.getElementById('step-' + step).classList.remove('active');

            // Show previous step
            document.getElementById('form-step-' + (step - 1)).classList.add('active');
            document.getElementById('step-' + (step - 1)).classList.add('active');
        }
    });
});

    </script>
</body>

</html>