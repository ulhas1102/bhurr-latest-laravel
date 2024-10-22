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
    <style>

    </style>
</head>

<body>
    <!-- =================main header================ -->
    <section class="navigation fixed-top" id="">
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
                            <a class="nav-link" href="#">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn nav-link" data-toggle="modal" data-target="#loginModal">
                                <span class="login__icon"><i class="fa-solid fa-user"></i></span> Login
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- =======booking form model====== -->
    </section>
    <!--==================== login and registration model ================== -->
    <!-- ======Login Modal====== -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered regestration__modal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">User Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Login Form -->
                    <form>
                        <div class="">
                            <!-- <label for="loginEmail">Email address</label> -->
                            <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp"
                                placeholder="Enter email">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                         else.</small> -->
                        </div>
                        <div class="form-group">
                            <!-- <label for="loginPassword">Password</label> -->
                            <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                        </div>
                        <div class="justify-content-center d-flex align-items-end ">
                            <button type="submit" class="btn common__btn_two px-md-4 px-3"
                                style="border-radius: 12px;">Submit</button>

                        </div>
                        <div class="justify-content-end d-flex"> <a type="submit" class="text-white "
                                onclick="openRegistrationModal()">Registration</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ===regestration model==== -->
    <div class="modal fade p-0" id="registrationModal" tabindex="-1" role="dialog"
        aria-labelledby="registrationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered regestration__modal" role="document">
            <div class="modal-content">
                <!-- <div class="text-center  justify-content-center">
             <h5 class="modal-title">Regestration</h5>
         </div> -->
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationModalLabel">Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Registration Form -->
                    <form>
                        <div class="form-row ">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control " placeholder="Firstname">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control " placeholder="Lastname">
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <!-- <label for="registrationName">Name</label> -->
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="registrationName"
                                    placeholder="Mobile number">
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <!-- <label for="registrationEmail">Email address</label> -->
                            <div class="col-md-12">
                                <input type="email" class="form-control" id="registrationEmail"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                 anyone
                                 else.</small> -->
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <!-- <label for="registrationPassword">Password</label> -->
                            <div class="col-12">
                                <input type="password" class="form-control" id="registrationPassword"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <!-- <label for="registrationPassword">Password</label> -->
                            <div class="col-12">
                                <input type=" password" class="form-control" id="registrationPassword"
                                    placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <button type="submit" class="btn common__btn_two px-md-4 px-3"
                                style="border-radius: 12px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class="py-md-5 py-3 mt-5">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-md-7">
                    <div class="card contact__form">
                        <div class="card-title text-center">
                            <span>Contact Details</span>
                        </div>
                        <div class="card-body pt-0">
                            <form action="">
                                <div class="form-row form-group">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <label for="" class="mb-md-0 mb-2">First Name</label>
                                    </div>
                                    <div class="col-md-9 ">
                                        <input type="text" placeholder="First Name" id="firstName" class="form-control"
                                            name="fname">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <label for="" class="mb-md-0 mb-2">Surname</label>
                                    </div>
                                    <div class="col-md-9 ">
                                        <input type="text" placeholder="Last Name" id="lastName" class="form-control"
                                            name="lname">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <label for="" class="mb-md-0 mb-2">Email</label>
                                    </div>
                                    <div class="col-md-9 ">
                                        <input type="email" placeholder="Enter Your Email" id="email"
                                            class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <label for="" class="mb-md-0 mb-2">Your Number</label>
                                    </div>
                                    <div class="col-md-9 ">
                                        <input type="text" placeholder="Enter Your Number" id="number"
                                            class="form-control" name="number">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <label for="" class="mb-md-0 mb-2">Aadhar number</label>
                                    </div>
                                    <div class="col-md-9 ">
                                        <input type="text" placeholder="Enter Aadhar number" id="aadhar"
                                            class="form-control" name="aadhar">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <label for="" class="mb-md-0 mb-2">Date Of Birth</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="date" placeholder="Date Of Birth" id="dob" class="form-control"
                                            name="dob">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-md-3 d-flex align-items-center"></div>
                                    <div class="col-md-9 d-flex justify-content-center">
                                        <a href="#" class="common__btn px-md-5 px-3 py-2">Submit</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-md-5 mb-3">
                    <div class="card booking__details__card">
                        <div class="card-title text-center">
                            <span>Your Booking Details</span>
                        </div>
                        <div class="card-body">
                            <p class="d-flex justify-content-between"><span>Itinerary :</span> <span>Pune >
                                    Mumbai</span></p>
                            <p class="d-flex justify-content-between"><span>Pickup Date :</span> <span>15th June 2024 at
                                    7:00 AM</span></p>
                            <p class="d-flex justify-content-between"><span>Car Type :</span> <span>
                                    Toyota Etios or Equivalent</span></p>
                            <p class="d-flex justify-content-between"><span>KMs Included :</span> <span>125 km</span>
                            </p>
                            <p class="d-flex justify-content-between"><span>Total Fare :</span> <span>₹ 2630</span></p>
                        </div>
                    </div>
                    <div class="card my-md-4 my-3 booking__tabs__card">
                        
                            <ul class="nav nav-pills my-3 mx-3" id="pills-tab" role="tablist">
                                <li class="nav-item col-4 p-1" role="presentation">
                                    <a class="nav-link btn-block active text-center" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                        role="tab" aria-controls="pills-home" aria-selected="true">Inclusion</a>
                                </li>
                                <li class="nav-item col-4 p-1" role="presentation">
                                    <a class="nav-link btn-block text-center" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                        role="tab" aria-controls="pills-profile" aria-selected="false">Exclusion</a>
                                </li>
                                <li class="nav-item col-4 p-1" role="presentation">
                                    <a class="nav-link btn-block text-center" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                        role="tab" aria-controls="pills-contact" aria-selected="false">T&C</a>
                                </li>
                            </ul>
                       
                        <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti placeat excepturi
                                    ducimus corrupti repellendus tenetur.
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 12346
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    98765432345678987654323456789
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
                        <div class="col-lg-3 col-md-6 col-6">
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
                        <div class="col-lg-3 col-md-6 col-6">
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
                                <div class="footer-newsletter ">
                                    <ul class="company-footer-contact-list d-md-block d-flex justify-content-around">
                                        <li><i class="fas fa-phone"></i>0123456789</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Location</li>
                                    </ul>
                                    <ul
                                        class="social__icon__list justify-content-md-start justify-content-center d-flex flex-row">
                                        <li><a href=""><i class="fab fa-linkedin"></i> </a>
                                        </li>
                                        <li><a embedehref=""><i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li><a href=""><i class="fab fa-facebook"></i> </a>
                                        </li>
                                        <li><a href=""><i class="fas fa-times"></i></a></li>
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

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>
</body>

</html>