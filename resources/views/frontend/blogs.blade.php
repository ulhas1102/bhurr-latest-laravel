<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blogs -Page</title>
  <!-- Bootstrap CSS -->
  <link rel="shortcut icon" href="../assets/image/logo/Favicon17x17.jpg" type="image/x-icon" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <!-- =======custome css======== -->
  <link rel="stylesheet" href="{{asset('new-layouts/assets/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('new-layouts/assets/css/driver.css')}}" />
  <link rel="stylesheet" href="{{asset('new-layouts/assets/css/hotel.css')}}" />
  <!-- ================= fav icon ======================= -->
  <link rel="shortcut icon" href="{{asset('new-layouts/assets/image/logo/bhurr-favicon.jpg')}}" type="image/x-icon" />

  <!--============font awesome cdn============ -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cl  oudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <!-- Flatpickr Material Blue Theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_blue.css">


    <style>
      .blog__grid__page .card {
        transition: 0.3s;
        border-color: #33333341;
        border-radius: 8px;
      }
      .blog__grid__page .card  .card-title{
       color: black;
      }
      .blog__grid__page .card  .card-title:hover{
       color: brown;
       text-decoration: underline;
      }
      .blog__grid__page .card:hover{
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
      }
      @media (min-width: 768px) {
        .blog__grid__page .card img {
          width: 100%;
          max-height: 200px;
          object-fit: cover;
        }
      }
    </style>


<body class="">
  <nav class="navbar navbar-expand-lg d-lg-block d-none" style="z-index: 100">
    <div class="container">
      <a class="navbar-brand py-0 d-flex align-items-center" href="/">
        <img src="{{asset('new-layouts/assets/image/logo/bhurr-logo.png')}}" width="150px" alt="" />
      </a>
      <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex flex-column px-0" id="navbarNav">
        <ul class="navbar-nav ml-auto top__header">
          <li class="nav-item">
            <a class="nav-link" href="/"><i class="fa-solid mr-1 fa-house"></i> Home<span
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
            <a class="nav-link" href="#">Book & Manage <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="special-bookings">Special Bookings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Prepare To Travel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blogs">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="mobile__menu_car__listing d-lg-none d-block" id="mobile__menu">
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
                xmlns="http://www.w3.org/2000/svg" style="display: none">
                <path fill-rule="evenodd"
                  d="M18.707 4.293a1 1 0 0 1 1.414 1.414L13.414 12l6.707 6.293a1 1 0 0 1-1.414 1.414L12 13.414l-6.293 6.707a1 1 0 1 1-1.414-1.414L10.586 12 3.293 5.707a1 1 0 0 1 1.414-1.414L12 10.586l6.293-6.293z">
                </path>
              </svg>
            </p>
          </div>
          <div class="">
            <a href="/"><img src="{{asset('new-layouts/assets/image/logo/bhurr-logo.png')}}" style="width: 150px"
                alt="" /></a>
          </div>
          <div class="align-items-center d-flex">
            <a class="signup" href="#"><i class="fa-solid mr-1 fa-user"></i> Sign</a>
          </div>
        </div>

        <div class="col-12">
          <!-- Offcanvas menu -->
          <div class="offcanvas" id="offcanvas">
            <ul class="navbar-nav ml-auto bottom__header Menu px-3 pt-4" style="row-gap: 12px">
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
                <a class="nav-link" href="blogs">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Help & Support</a>
              </li>
              <li class="nav-item">
                @if (Auth::check())
                <span class="login__icon"><i class="fa-solid fa-user"></i></span> {{ Auth::user()->name }}
                @else
                <a class="nav-link" href="customer-login2">Sign In</a>
                @endif
              </li>
            </ul>
            <div class="d-flex mt-3 mx-3">
              <a href="tel:+1234567890"><i class="fa-solid fa-phone mr-2"></i> 1234567890</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	
  <section>
    <div class="container py-5 blog__grid__page">
      <h1 class="text-center mb-5">Our Blogs</h1>
      <div class="row">
        <!-- Blog Post 1 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="{{asset('new-layouts/assets/image/blog/2911.jpg')}}"
              class="card-img-top"
              alt="Blog 1"
            />
            <div class="card-body">
              <a href="individual-blog">
                <h5 class="card-title">
                  The Best Road Trip Routes from Pune
                </h5></a
              >
              <p class="card-text text-muted">
                Cab booking can be confusing for beginners. Our comprehensive
                guide simplifies the process for booking local and outstation
                rides easily.
              </p>
            </div>
          </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="{{asset('new-layouts/assets/image/blog/2911.jpg')}}"
              class="card-img-top"
              alt="Blog 2"
            />
            <div class="card-body">
              <a href="individual-blog">
                <h5 class="card-title">
                  The Best Road Trip Routes from Pune
                </h5></a
              >
              <p class="card-text text-muted">
                Pune offers some of the most scenic road trip routes. Check out
                the top road trip destinations to explore with friends and
                family.
              </p>
            </div>
          </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="{{asset('new-layouts/assets/image/blog/2911.jpg')}}"
              class="card-img-top"
              alt="Blog 3"
            />
            <div class="card-body">
              <a href="individual-blog">
                <h5 class="card-title">
                  Benefits of Booking Outstation Cabs
                </h5></a
              >
              <p class="card-text text-muted">
                Discover the benefits of booking an outstation cab for a
                comfortable and stress-free travel experience.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <footer class="footer-section py-md-5 py-3">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-4 d-flex justify-content-md-start justify-content-center">
          <a href="/" class="py-2 px-2">
            <img src="{{asset('new-layouts/assets/image/logo/bhurr-logo.png')}}" alt="" />
          </a>
        </div>
        <div class="col-md-8">
          <div class="row align-items-center d-md-flex">
            <div class="col-md-4 align-items-center justify-content-md-end justify-content-center d-flex">
              <h6 class="mb-md-0 text-md-end text-center">COMING SOON</h6>
            </div>
            <div class="col-md-8 justify-content-md-start justify-content-center d-flex">
              <div class="">
                <img src="{{asset('new-layouts/assets/image/logo/430X70.png')}}" alt="" style="height: 40px" />
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
                  <li><a href="about-us">About Us</a></li>
                  <li><a href="corporate-booking">Corporate</a></li>
                  <li><a href="career">Careers</a></li>
                  <li><a href="#">Drive with us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-6">
              <div class="widget course-links-widget">
                <ul class="courses-link-list">
                  <li><a href="our-offerings">Our offerings</a></li>
                  <li><a href="blogs">Blogs</a></li>
                  <li><a href="download-vendor-app">Download Vendor App</a></li>
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
              <li><a href="refer-earn">Refer & Earn</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-6 pt-md-0 pt-3">
          <div class="widget course-links-widget">
            <h5 class="widget-title">SUPPORT</h5>
            <ul class="courses-link-list">
              <li><a href="contact-us">Contact</a></li>
              <li><a href="faq">FAQ</a></li>
              <li><a href="grivence-resolution">Grievance Resolution</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-3 col-6">
          <div class="widget course-links-widget">
            <ul class="courses-link-list">
              <li class="d-none"><a href="#">Sitemap</a></li>
              <li><a href="terms-condition">Terms and Conditions</a></li>
              <li><a href="privacy-policy">Privacy Policy</a></li>
              <li><a href="refund-policy">Refund Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="widget course-links-widget">
            <ul class="courses-link-list">
              <li><a href="#">Cookie Policy</a></li>
              <li><a href="gst">GST</a></li>
              <li><a href="passanger-rights">Passenger Rights</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 justify-content-md-center justify-content-left d-flex">
          <div class="widget newsletter-widget">
            <div class="footer-newsletter">
              <ul class="social__icon__list">
                <li>
                  <a
                    href="https://www.linkedin.com/company/bhurrtechnologies"
                    target="_blank"><i class="fab fa-linkedin"></i></a>
                </li>
                <li>
                  <a
                    href="https://www.instagram.com/bhurrtechnologies/"
                    target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                </li>
                <li>
                  <a
                    href="https://www.threads.net/@bhurrtechnologies"
                    target="_blank"><i class="fa-brands fa-square-threads"></i></a>
                </li>
                <li>
                  <a
                    href="https://www.facebook.com/bhurrtechnologies"
                    target="_blank"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="https://x.com/letsgobhurr" target="_blank"><i class="fa-brands fa-square-x-twitter"></i></a>
                </li>
                <li>
                  <a
                    href="https://www.youtube.com/@bhurrtechnologies"
                    target="_blank"><i class="fa-brands fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3 justify-content-center">
        <p>© 2024 Bhurr Technologies LLP. All rights reserved. </p>
      </div>
    </div>
  </footer>
  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="{{asset('new-layouts/assets/js/script.js')}}"></script>
  <script src="{{asset('new-layouts/assets/js/driver.js')}}"></script>

    </body>
    </html>
  