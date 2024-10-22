<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb5Q5f4fYZL5T5dA9Y5F5D5F5S9yX5/SQ+3Xy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <title>Profile Page</title>
    <style>
    </style>
</head>

<body>
    <section class="navigation" id="navigation">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="z-index: 100;">
            <div class="container">
                <a class="navbar-brand py-0 d-flex align-items-center" href="#">
                    <img src="{{asset('frontend/assets/image/logo/bhurr-logo.png')}}" width="150px" alt="">
                </a>
                <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end    " id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <div class=" background-image">
        <div class="container signUp-section">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center signin-section">
                    <h2 class="text-danger">SIGN IN</h2>
                    <form class="w-75">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <a href="#" class="d-block mb-3 text-left forgot-password">Forgot
                            Your Password?</a>
                        <button type="submit" class="btn btn-danger btn-block rounded-0 w-100">Sign
                            In</button>
                        <hr>
                        <button type="button" class="btn btn-req-outline-danger btn-block rounded-0 w-100">Request
                            Verification Code On Email</button>
                        <div class="mt-3 text-left">
                            Having trouble? <a href="#" class="contact-us">Contact Us</a>
                        </div>
                    </form>
                </div>
                <div
                    class="col-md-6 d-flex flex-column justify-content-center align-items-center signup-section text-white p-5">
                    <div class="image-container text-center mb-4">
                        <img src="{{asset('frontend/assets/image/logo/Bhurr-New-Logo.png')}}" class="image-fluid "
                            alt="Image description">
                    </div>
                    <h1 class>Sign up for your Bhurr Account</h1>
                    <ul>
                        <li>Earn 1000 bonus reward points* on joining
                            our Flying Returns programme</li>
                        <li>Get Flying Returns points when you spend on
                            Air India and Star Alliance Flights</li>
                        <li>Earn points with our Flying Returns
                            partners</li>
                        <li>Spend reward points for flights and
                            upgrades</li>
                        <li>Get access to 1000+ lounges, extra baggage
                            allowance and priority services</li>
                    </ul>
                    <p class="mt-3 text-start">*T&C Apply</p>
                    <a href="userdetails.html" class="btn btn-outline-light w-100">Sign Up</a>
                </div>

            </div>
        </div>
    </div>

    <footer class="footer-section py-md-5 py-3">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4 align-items-center">
                    <a href="/" class="py-2 px-2">
                        <img src="{{asset('frontend/assets/image/logo/Bhurr-New-Logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-md-8 align-items-center d-flex justify-content-center">
                    <div class="d-flex align-items-center">
                        <h6 class="mx-3 mb-0">COMING SOON</h6>
                        <img src="{{asset('frontend/assets/image/logo/430X70.png')}}" alt="" style="height: 40px;">
                    </div>
                </div>
            </div>
            <div class="row border-bottom pb-3">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="widget-title">ABOUT US</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="widget course-links-widget">
                                <ul class="courses-link-list">
                                    <li><a href="#">About Bhurr</a></li>
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Drive with us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="widget course-links-widget">
                                <ul class="courses-link-list">
                                    <li><a href="#">Our offerings</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget course-links-widget">
                        <h5 class="widget-title">BOOK & MANAGE</h5>
                        <ul class="courses-link-list">
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Manage Bookings</a></li>
                            <li><a href="#">Refer & Earn</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
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
                <div class="col-md-3">
                    <div class="widget course-links-widget">
                        <ul class="courses-link-list">
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget course-links-widget">
                        <ul class="courses-link-list">
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">GST</a></li>
                            <li><a href="#">Passenger Rights</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 justify-content-center d-flex">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>
</body>

</html>