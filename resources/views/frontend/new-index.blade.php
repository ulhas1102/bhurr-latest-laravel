<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bhurr - Cab Service</title>
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
    #mainTabs {
      justify-content: center;
      width: fit-content;
      padding: 0px 20px;
      background-color: #fff;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px,
        rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
      border-radius: 10px;
      padding: 5px 20px 0;
      gap: 10px;
      /* position: absolute;
            top: -35px;
            left: 50%;
            transform: translateX(-50%);
            gap: 20px; */
    }

    #mainTabsContent {
      align-content: center;
      background-color: #ffffff;
      padding: 40px 30px;
      border-radius: 10px;
      min-height: 255px;
      /* padding-top: 50px; */
      box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 8px 3px;
    }

    #mainTabs .nav-link {
      color: #212529;
      padding: 5px 20px;
    }

    #mainTabs .nav-link.active {
      background-color: transparent;
      /* border-bottom: 3px solid #df0b0b; */
      color: #df0b0b;
      /* background-color: #fff; */
      border-bottom: 3px solid #df0b0b;
      border-radius: 0px;
    }

    #mainTabs .nav-link div {
      text-align: center;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    #mainTabs .nav-link p {
      word-wrap: break-word;
      font-size: 15px;
      font-weight: 600;
    }

    #mainTabs .nav-link img {
      width: 30px;
      /* filter: drop-shadow(10px 6px 2px #291f19); */
    }

    .navOnly {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .fixed__top {
      position: fixed;
      padding-top: 10px;
      padding-bottom: 10px;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 14;
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #fff;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px,
        rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
      animation: slideInDown 0.3s linear;
    }

    @keyframes slideInDown {
      0% {
        transform: translate3d(0, -100%, 0);
        visibility: visible;
      }

      to {
        transform: translateZ(0);
      }
    }

    .navOnly .navbar-brand {
      display: none;
    }

    .fixed__top .navbar-brand {
      display: flex;
    }

    .navOnly .outer__nav {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      position: absolute;
      top: -30px;
    }

    .fixed__top .outer__nav {
      position: relative !important;
      top: 0;
      display: flex;
      justify-content: space-between;
      width: 1140px;
      margin: 0 auto 0 auto;
      /* padding: 5px 0px 0px 0px; */
    }

    .fixed__top #mainTabs {
      box-shadow: none !important;
      background-color: transparent;
      padding: 0;
    }

    .fixed__top .navbar-brand {
      width: 130px;
    }

    .fixed__top #mainTabs .nav-link img {
      width: 30px;
      display: none;
    }

    .fixed__top .nav-pills .nav-link {
      padding: 5px 12px !important;
      color: #212529 !important;
    }

    .fixed__top #mainTabs .nav-link.active {
      background-color: transparent;
      border-bottom: 3px solid #df0b0b;
      color: #df0b0b !important;
      background-color: #fff;
      border-radius: 0;
    }

    /* btn  css*/
    .Btn {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      width: 45px;
      height: 45px;
      border: none;
      border-radius: 50%;
      cursor: pointer;
      position: relative;
      overflow: hidden;
      transition-duration: 0.3s;
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
      background-color: #df0b0b;
    }

    /* plus sign */
    .sign {
      width: 100%;
      transition-duration: 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .sign svg {
      width: 17px;
    }

    .sign svg path {
      fill: white;
    }

    /* text */
    .text {
      position: absolute;
      right: 0%;
      width: 0%;
      opacity: 0;
      color: white;
      font-size: 1.2em;
      font-weight: 600;
      transition-duration: 0.3s;
    }

    /* hover effect on button width */
    .Btn:hover {
      width: 125px;
      border-radius: 40px;
      transition-duration: 0.3s;
    }

    .Btn:hover .sign {
      width: 30%;
      transition-duration: 0.3s;
      padding-left: 20px;
    }

    /* hover effect button's text */
    .Btn:hover .text {
      opacity: 1;
      width: 70%;
      transition-duration: 0.3s;
      padding-right: 10px;
    }

    /* button click effect*/
    .Btn:active {
      transform: translate(2px, 2px);
    }

    .navOnly .Login__div {
      display: none;
    }

    .fixed__top .Login__div {
      display: flex;
      min-width: 150px;
    }

    .inputGroup {
      font-family: "Segoe UI", sans-serif;
      margin: 1.15em 0 0.5em 0;
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
      color: #b61032;
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
      transform: translateY(-100%) scale(0.6);
      margin: 0em;
      color: #212529;

      /* margin-left: 5px; */
      /* padding: 0.4em; */
      /* background-color: #e8e8e8; */
    }

    .inputGroup :is(input:focus, input:valid) {
      border-color: rgb(150, 150, 200);
    }

    .owl-carousel-location .owl-dots {
      text-align: center;
      margin-top: 10px;
    }

    .owl-carousel-location button:focus {
      outline: none;
    }

    .search__section {
      background-color: #f1f2f3;
    }

    .search__section .sec__img {
      position: absolute;
      height: 50%;
      left: 0;
      top: 0;
      width: 100%;
      right: 0;
      background-color: #f1f2f3;
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .select__route__carousel .item {
      /* border-top-left-radius: 20px;
      border-top-right-radius: 20px; */
      border-radius: 20px;
      background-color: #faf7f4;
      overflow: hidden;
      position: relative;
      min-height: 310px;
      border: 1px solid #e1e3e6;
      transition: 0.6s all;
    }

    /* .select__route__carousel .item:hover {
      box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
    } */

    .select__route__carousel img {
      width: 250px;
      height: 200px;
      object-fit: cover;
      object-position: center;
    }

    .select__route__carousel .desc {
      padding: 5px 10px;
      text-align: center;

    }

    .select__route__carousel .desc p {
      margin-bottom: 4px;
    }

    .select__route__carousel .desc .btn {
      padding: 4px 0px;
    }

    /* .select__route__carousel .book__route__btn {
      position: absolute;
      bottom: 4%;
      left: 50%;
      transform: translateX(-50%);
    } */

    .select__route__carousel .route_location {
      position: absolute;
      text-align: center;
      top: 4%;
      left: 50%;
      min-width: 60%;
      transform: translateX(-50%);
      color: #fff;
      /* background-color: #fff; */
      background-color: #00000066;
      -webkit-backdrop-filter: blur(8px);
      backdrop-filter: blur(8px);
      padding: 3px 10px;
      border-radius: 10px;
      margin-bottom: 0;
      transition: 0.8s all;
    }

    .select__route__carousel .item:hover .route_location {
      color: #000;
      background-color: #fff;
      -webkit-backdrop-filter: blur(8px);
      backdrop-filter: blur(8px);

    }
  </style>
</head>

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
  <section style="
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        display: flex;
        align-items: center;
        min-height: calc(100vh - 70px);
        vertical-align: middle;
      " class="search__section">
    <div class="sec__img"></div>
    <div class="container px-2">
      <div class="container my-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center tab__heading text-light d-md-block d-none"></h2>
          </div>
        </div>
      </div>
      <div class="container py-md-5 py-3 position-relative my-auto">
        <div class="row" style="align-items: center">
          <!-- for desktop view only -->
          <div class="col-md-12 d-md-block d-none">
            <!-- Main Tabs -->
            <div class="navOnly">
              <div class="outer__nav">
                <div>
                  <a href="#" target="_self" rel="noopener noreferrer" class="navbar-brand"><img
                      src="{{asset('new-layouts/assets/image/logo/bhurr-logo.png')}}" alt="" />
                  </a>
                </div>
                <ul class="nav nav-pills nav-justified" id="mainTabs" role="tablist">
                  <li class="nav-item" onclick="window.location.href='https://www.bhurr.co.in/cab'">
                    <a class="nav-link active" id="main-tab1" data-toggle="tab" href="#main1" role="tab"
                      aria-controls="main1" aria-selected="true">
                      <div class="">
                        <img src="{{asset('new-layouts/assets/image/driver/cars/sedan.png')}}" alt="" />
                        <p class="mb-0">Cab</p>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item" onclick="window.location.href='https://www.bhurr.co.in/driver'">
                    <a class="nav-link" id="main-tab3" data-toggle="tab" href="#main3" role="tab"
                      aria-controls="main3" aria-selected="false">
                      <div class="">
                        <img src="{{asset('new-layouts/assets/image/driver/cars/driver (1).png')}}" alt="" />
                        <p class="mb-0">Driver</p>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link hotel" id="main-tab2" data-toggle="tab" href="#main2" role="tab"
                      aria-controls="main2" aria-selected="false">
                      <div class=" ">
                        <img src="{{asset('new-layouts/assets/image/driver/cars/residential.png')}}" alt="" />
                        <p class="mb-0">Hotels</p>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="Login__div justify-content-center">
                  <!-- <button class="Btn">
                      <div class="sign">
                        <svg viewBox="0 0 512 512">
                          <path
                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"
                          ></path>
                        </svg>
                      </div>

                      <div class="text">Login</div>
                    </button> -->
                  <ul class="navbar-nav ml-auto top__header flex-row" style="gap: 15px">
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fa-solid mr-1 fa-house"></i> Home<span
                          class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fa-solid mr-1 fa-headphones"></i> Contact
                        Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fa-solid mr-1 fa-user"></i> Sign In</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-content" id="mainTabsContent">
              <div class="tab-pane fade show active" id="main1" role="tabpanel" aria-labelledby="main-tab1">
                <div class="container">
                  {{-- <form action="" class=""> --}}
                  <div class="row cab__booking">
                    <div class="col-md-12">
                      <ul class="nav nav-pills d-flex w-100 border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item pb-0" role="presentation">
                          <button class="nav-link active rounded-0" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                            ONE WAY
                          </button>
                        </li>
                        <li class="nav-item pb-0" role="presentation">
                          <button class="nav-link rounded-0" id="pills-profile-tab" data-toggle="pill"
                            data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">
                            ROUND TRIP
                          </button>
                        </li>
                        <li class="nav-item pb-0" role="presentation">
                          <button class="nav-link rounded-0" id="pills-contact-tab" data-toggle="pill"
                            data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">
                            LOCAL
                          </button>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-12">
                      <div class="tab-content" id="pills-tabContent">
                        <!-- outer cab tab one way nested tab -->
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                          aria-labelledby="pills-home-tab">
                          <form id="oneWayForm" class="">
                            <input type="hidden" name="package_type" id="package_type" class="form-control" value="3">
                            <div class="form-row position-relative">
                              <div class="col-md-2 pb-0 align-items-end d-flex">
                                <div class="inputGroup mb-0">
                                  <input autocomplete="off" required="" type="text" class="form-control" name="from" id="from" placeholder="" />
                                  <label for="name">FROM</label>
                                </div>
                              </div>
                              <div class="left__right__arrow col-md-1">
                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                              </div>
                              <div class="col-md-2 pb-0 align-items-end d-flex">
                                <div class="inputGroup mb-0">
                                  <input autocomplete="off" required="" class="form-control" type="text" name="to" id="to" placeholder="" />
                                  <label for="name">TO</label>
                                </div>
                              </div>
                              <div class="col-md-2 px-md-2">
                                <label class="mb-0" for="from">DEPART DATE</label>
                                <input type="date" required="" class="form-control" placeholder="09-06-24" name="pick_up" id="pick_up" />
                              </div>
                              <div class="col-md-2 px-md-2">
                                <label class="mb-0" for="from">DEPART TIME</label>
                                <input type="text" required="" class="form-control" placeholder="12:40" name="pick_up_at" id="pick_up_at" />
                              </div>
                              <div class="col-md-1 px-md-2">
                                <label class="mb-0" for="from">PERSONS</label>
                                <input type="number" class="form-control" placeholder="1" name="no_of_person" min="1" id="no_of_person" />
                              </div>
                              <div class="col-md-2 align-items-end d-flex justify-content-center">

                                <button type="submit"
                                  class="btn btn-submit btn-block common__btn px-md-4 rounded">Search</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- outer cab tab round-trip nested tab  -->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                          aria-labelledby="pills-profile-tab">
                          <form id="roundTripForm" class="d-flex">
                            <div class="row">
                              <div class="col-md-10">
                                <input type="hidden" name="package_type" id="package_type" class="form-control" value="2">
                                <div class="form-row">
                                  <div class="col-md-2 align-items-end">
                                    <div class="inputGroup mb-0">
                                      <input autocomplete="off" required="" type="text" class="form-control" name="from" id="roundfrom" placeholder="" />
                                      <label for="name">From</label>
                                    </div>
                                  </div>

                                  <div class="col-md-2 align-items-end">
                                    <div class="inputGroup mb-0">
                                      <input autocomplete="off" required="" type="text" class="form-control" name="to" id="roundto" placeholder="" />
                                      <label for="name">TO</label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <label class="mb-0" for="from">DEPART DATE</label>
                                    <input type="date" class="form-control depart-date" placeholder="dd-mm-yyyy" required="" name="pick_up" id="pick_up" />
                                  </div>
                                  <div class="col-md-2">
                                    <label class="mb-0" for="from">RETURN DATE</label>
                                    <input type="date" class="form-control return-date" placeholder="dd-mm-yyyy" required="" name="round_return" id="round_return" />
                                  </div>
                                  <div class="col-md-2">
                                    <label class="mb-0" for="from">DEPART TIME</label>
                                    <input type="text" class="form-control" placeholder="12:40" required="" name="pick_up_at" id="pick_up_at" />
                                  </div>
                                  <div class="col-md-2">
                                    <label class="mb-0" for="from">Persons</label>
                                    <input type="number" class="form-control" min="1" placeholder="1" name="no_of_person" id="no_of_person" />
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2 align-items-end d-flex justify-content-center">

                                <button type="submit"
                                  class="btn btn-submit btn-block common__btn px-md-4 rounded">Search</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- outer cab tab local nested tab -->
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                          aria-labelledby="pills-contact-tab">
                          <form id="localForm" class="">
                            <input type="hidden" name="package_type" id="package_type" class="form-control" value="1">
                            <div class="form-row">
                              <div class="col-md-2 pb-0 align-items-end d-flex">
                                <div class="inputGroup mb-0">
                                  <input autocomplete="off" required="" type="text" class="form-control" name="from" id="Localfrom" placeholder="" />
                                  <label for="name">FROM</label>
                                </div>
                              </div>
                              <div class="col-md-2 px-md-3 align-items-end d-flex justify-content-center">
                                <select class="form-select form-control p-0" name="distance" aria-label="Default select example" required="">
                                  <option selected>Select Package</option>
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
                              <div class="col-md-2 px-md-3">
                                <label class="mb-0" for="from">DATE</label>
                                <input type="date" class="form-control date" placeholder="dd-mm-yyyy" name="pick_up" id="pick_up" required="" />
                              </div>
                              <div class="col-md-2 px-md-3">
                                <label class="mb-0" for="from">START TIME</label>
                                <input type="text" class="form-control" placeholder="12:40" name="pick_up_at" id="pick_up_at" required="" />
                              </div>
                              <div class="col-md-2 px-md-3">
                                <label class="mb-0" for="from">Persons</label>
                                <input type="number" class="form-control" placeholder="1" name="no_of_person" id="no_of_person" min="1" />
                              </div>
                              <div class="col-md-2 align-items-end d-flex justify-content-center">
                                <button type="submit"
                                  class="btn btn-submit btn-block common__btn px-md-4 rounded">Search</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- </form> --}}
                </div>
              </div>
              <div id="loader" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.7); z-index: 9999;">
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                  <img src="{{asset('new-layouts/assets/image/logo/bhurr-logo.png')}}" alt="Loader" style="width: 100%; height: 50px;">
                  <p style="font-size: 16px; font-weight: bold; margin-top: 10px;">Serching...</p>
                </div>
              </div>

              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
              <script>
                $(document).ready(function() {
                  function getFormData(form) {
                    var unindexed_array = form.serializeArray();
                    var indexed_array = {};

                    $.map(unindexed_array, function(n, i) {
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
                  $('#oneWayForm').on('submit', function(e) {
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
                        setTimeout(function() {
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
                  $('#roundTripForm').on('submit', function(e) {
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
                        setTimeout(function() {
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
                  $('#localForm').on('submit', function(e) {
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
                        setTimeout(function() {
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
              <div class="tab-pane fade" id="main3" role="tabpanel" aria-labelledby="main-tab3">
                <div class="container">
                  <div class="row cab__booking">
                    <div class="col-12 border-bottom">
                      <ul class="nav nav-pills trip__btn justify-content-md-start justify-content-center" id="pills-tab"
                        role="tablist" style="gap: 5px">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active rounded-0 px-md-3" id="local-tab" data-toggle="pill" href="#local"
                            role="tab" aria-controls="local" aria-selected="true" fid="oneway">
                            LOCAL
                          </a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link rounded-0 px-md-3" id="pills-profile-tab" data-toggle="pill"
                            href="#round-trip" role="tab" aria-controls="round-trip" aria-selected="false"
                            fid="round-trip">
                            OUTSTATION
                          </a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link rounded-0 px-md-3" id="pills-profile-tab" data-toggle="pill"
                            href="#CONTRACTUAL" role="tab" aria-controls="CONTRACTUAL" aria-selected="false"
                            fid="CONTRACTUAL">
                            CONTRACTUAL
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-12">
                      <div class="tab-content" id="pills-tabContent">
                        <!-- outer driver tab local nested tab  -->

                        <div class="tab-pane fade show active" id="local" role="tabpanel" aria-labelledby="local-tab">
                          <form action="" method="post" id="tripForm">
                            <div>
                              <div class="form-row position-relative">
                                <div class="col-md-2 pb-0 align-items-end d-flex">
                                  <div class="inputGroup mb-0">
                                    <input autocomplete="off" required="" type="text" class="form-control" />
                                    <label for="name">FROM</label>
                                  </div>
                                </div>
                                <!-- <div class="left__right__arrow col-md-1">
                                  <i
                                    class="fa-solid fa-arrow-right-arrow-left"
                                  ></i>
                                </div> -->
                                <div class="col-md-2 pb-0 align-items-end d-flex">
                                  <div class="inputGroup mb-0">
                                    <input autocomplete="off" required="" class="form-control" type="text" />
                                    <label for="name">TO</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <label class="mb-0" for="from">DEPART DATE</label>
                                  <input type="text" class="form-control" placeholder="09-06-24" />
                                </div>
                                <div class="col-md-2">
                                  <label class="mb-0" for="from">DEPART TIME</label>
                                  <input type="text" class="form-control" placeholder="12:40" />
                                </div>
                                <div class="col-md-2">
                                  <label class="mb-0" for="from">PACKAGE</label>
                                  <select class="form-select form-control" aria-label="Default select example"
                                    name="tripType" id="tripType">
                                    <option value="oneWay">8 Hours</option>
                                    <option value="roundTrip">12 Hours</option>
                                  </select>
                                </div>
                                <div class="col-md-2 align-items-end d-flex justify-content-center">
                                  <button type="submit"
                                    class="btn btn-submit btn-block common__btn px-md-4 rounded">Search</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>

                        <!-- outer driver tab outstation nested tab  -->
                        <div class="tab-pane fade" id="round-trip" role="tabpanel" aria-labelledby="round-trip-tab">
                          <div>
                            <div class="form-row position-relative">
                              <div class="col-md-2 pb-0 align-items-end d-flex">
                                <div class="inputGroup mb-0">
                                  <input autocomplete="off" required="" type="text" class="form-control" />
                                  <label for="name">FROM</label>
                                </div>
                              </div>
                              <!-- <div class="left__right__arrow col-md-1">
                                  <i
                                    class="fa-solid fa-arrow-right-arrow-left"
                                  ></i>
                                </div> -->
                              <div class="col-md-2 pb-0 align-items-end d-flex">
                                <div class="inputGroup mb-0">
                                  <input autocomplete="off" required="" class="form-control" type="text" />
                                  <label for="name">TO</label>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <label class="mb-0" for="from">RIDE TYPE</label>
                                <select class="form-select form-control" aria-label="Default select example">
                                  <option selected>One way</option>
                                  <option value="1">Round Trip</option>
                                </select>
                              </div>
                              <div class="col-md-2">
                                <label class="mb-0" for="from">DEPART DATE</label>
                                <input type="text" class="form-control" placeholder="09-06-24" />
                              </div>
                              <div class="col-md-2">
                                <label class="mb-0" for="from">DEPART TIME</label>
                                <input type="text" class="form-control" placeholder="12:40" />
                              </div>

                              <div class="col-md-2 align-items-end d-flex justify-content-center">
                                <a type="submit" href="#"
                                  class="btn btn-submit btn-block common__btn px-md-4 rounded">Search</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- outer driver tab CONTRACTUAL nested tab  -->
                        <div class="tab-pane fade" id="CONTRACTUAL" role="tabpanel" aria-labelledby="CONTRACTUAL-tab">
                          <form action="">
                            <div class="row">
                              <div class="mb-3 col-md-2 px-1">
                                <label for="exampleFormControlInput1" class="form-label">NAME</label>
                                <input type="text" class="form-control" id="" placeholder="John Doe">
                              </div>
                              <div class="mb-3 col-md-2 px-1">
                                <label for="exampleFormControlInput1" class="form-label">EMAIL ADDRESS</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                  placeholder="name@example.com">
                              </div>
                              <div class="mb-3 col-md-2 px-1">
                                <label for="exampleFormControlInput1" class="form-label">MOBILE NUMBER</label>
                                <input type="text" class="form-control" id="" placeholder="0987654321">
                              </div>
                              <div class="mb-3 col-md-2 px-1">
                                <label for="exampleFormControlInput1" class="form-label">DURATION</label>
                                <select class="form-control " id="trip-type-local" name="trip-type" required=""
                                  style="height: 45px;">
                                  <option selected>Duration</option>
                                  <option value="">3 month</option>
                                  <option value="">6 month</option>
                                  <option value="">9 month</option>
                                  <option value="">12 month</option>
                                </select>
                              </div>

                              <div class="mb-3 col-md-2 px-1">
                                <label for="exampleFormControlTextarea1" class="form-label">MESSAGE</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                  placeholder="Write message here....."></textarea>
                              </div>
                              <div class="col-md-2 px-1 mb-3 d-flex align-items-end">
                                <a type="submit" href="#"
                                  class="btn btn-submit btn-block common__btn px-md-4 rounded">Search</a>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade h-100" id="main2" role="tabpanel" aria-labelledby="main-tab2">
                <!-- Nested Tabs -->
                <div class="container mt-5">
                  <div class="row">
                    <div class="col-md-12 align-content-center">
                      <h1 class="text-center " style="    color: transparent !important;
                      font-size: 60px;
                      font-weight: 700;
                      letter-spacing: 2px;
                      -webkit-text-stroke: 3px #dc1414;
                      text-align: center;
                      margin-bottom: 20px;">Comming Soon......</h1>
                      <!-- <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="location">Location</label>
                          <input type="text" class="form-control" id="location" placeholder="Enter location" />
                        </div>
                        <div class="form-group col-md-3">
                          <label for="date">Date</label>
                          <input type="date" class="form-control" id="date" />
                        </div>
                        <div class="form-group col-md-3 position-relative">
                          <label for="travellers">Travellers</label>
                          <input type="text" class="form-control" id="travellers" placeholder="Select travellers" />
                          <div class="dropdown-menu p-3" id="travellerDropdown" style="
                                display: none;
                                position: absolute;
                                top: 100%;
                                left: 0;
                                width: 100%;
                                z-index: 1000;
                              ">
                            <div id="roomsContainer">
                              <div class="room" data-room="1">
                                <h5>Room 1</h5>
                                <div class="counter d-flex justify-content-between">
                                  <div class="">
                                    <label>Adults:</label>
                                  </div>
                                  <div class="">
                                    <button type="button" class="btn red__btn btn-sm" onclick="decrement('adults-1')">
                                      -
                                    </button>
                                    <span id="adults-1">0</span>
                                    <button type="button" class="btn red__btn btn-sm" onclick="increment('adults-1')">
                                      +
                                    </button>
                                  </div>
                                </div>
                                <div class="counter d-flex justify-content-between">
                                  <div class="">
                                    <label>Children:</label>
                                  </div>
                                  <div class="">
                                    <button type="button" class="btn red__btn btn-sm" onclick="decrement('children-1')">
                                      -
                                    </button>
                                    <span id="children-1">0</span>
                                    <button type="button" class="btn red__btn btn-sm" onclick="increment('children-1')">
                                      +
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="text-right">
                              <h6 class="mt-2" id="addRoomButton" style="cursor: pointer">
                                Add another room
                              </h6>
                            </div>
                            <div class="text-right">
                              <button type="button" class="btn red__btn mt-2" onclick="updateTravellers()">
                                Save changes
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 align-items-end d-flex form-group justify-content-center">
                          <a type="submit" href="#" class="btn common__btn btn-block rounded"
                            style="height: 45px; align-content: center">
                            Book Now
                          </a>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- mobile search hide for desktop-->
          <div class="col-12 d-md-none d-block  shadow-5 p-3 mobile_form_nav " id="mainTabs">
            <!-- Nav tabs -->
            <ul class="nav nav-pills nav-justified mt-3 outer__nav rounded" id="bookingTabs" role="tablist"
              style="background-color: #f5ede2; overflow: hidden;">
              <li class="nav-item">
                <a class="nav-link active cab" id="cab-tab" data-toggle="tab" href="#cab" role="tab" aria-controls="cab"
                  aria-selected="true"><img src="{{asset('new-layouts/assets/image/driver/cars/sedan.png')}}" alt="" /> <br> Cab</a>
              </li>
              <li class="nav-item">
                <a class="nav-link driver" id="driver-tab" data-toggle="tab" href="#driver" role="tab"
                  aria-controls="driver" aria-selected="false"><img src="{{asset('new-layouts/assets/image/driver/cars/driver (1).png')}}"
                    alt="" /> <br> Driver</a>
              </li>
              <li class="nav-item">
                <a class="nav-link hotel" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab"
                  aria-controls="hotel" aria-selected="false"><img src="{{asset('new-layouts/assets/image/driver/cars/residential.png')}}"
                    alt="" /> <br> Hotel</a>
              </li>
            </ul>

            <!-- Tab content -->
            <div class="tab-content mt-2">
              <div class="tab-pane fade show active" id="cab" role="tabpanel" aria-labelledby="cab-tab">
                <ul class="nav nav-pills nav-justified" id="cabBookingTabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link px-2 active" id="oneway-tab" data-toggle="tab" href="#oneway" role="tab"
                      aria-controls="oneway" aria-selected="true">One Way</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-2" id="roundtrip-tab" data-toggle="tab" href="#roundtrip" role="tab"
                      aria-controls="roundtrip" aria-selected="false">Round Trip</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-2" id="localtrip-tab" data-toggle="tab" href="#localtrip" role="tab"
                      aria-controls="localtrip" aria-selected="false">Local Trip</a>
                  </li>
                </ul>

                <!-- Nested Tab content mobile -->

                <div class="tab-content mt-2 passenger__details__container">
                  <!-- One Way Form -->
                  <div class="tab-pane fade show active" id="oneway" role="tabpanel" aria-labelledby="oneway-tab">
                    <form id="oneWayFormMobile" class="">
                      <input type="hidden" name="package_type" id="package_type" class="form-control" value="3">
                      <div class="form-row">
                        <div class="col-md-3 mb-2">
                          <input type="text" class="form-control input" id="mobileFrom" placeholder=" " name="from" required="" />
                          <label for="from" class="user__label">From*</label>
                        </div>
                        <div class="col-md-3 mb-2">
                          <input type="text" class="form-control input" id="mobileto" name="to" placeholder=" " required="" />
                          <label for="to" class="user__label">To*</label>
                        </div>
                        <div class="col-md-4 mb-2">
                          <input type="date" class="form-control input" d="pick_up" name="pick_up" placeholder=" " required />
                          <label for="depart-date" class="user__label">Depart Date*</label>
                        </div>
                        <div class="col-md-4 mb-2">
                          <input type="time" class="form-control input" id="pick_up_at" placeholder=" " required name="pick_up_at" />
                          <label for="depart-date" class="user__label">Depart Time*</label>
                        </div>
                        <div class="col-md-4 mb-2">
                          <input type="number" class="form-control input" id="no_of_person" placeholder=" " required name="no_of_person" min="1" />
                          <label for="persons" class="user__label">Persons*</label>
                        </div>
                        <div class="col-md-4 mb-2">
                          <button type="submit" class="btn common__btn btn-block">
                            Search
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <!-- Round Trip Form -->
                  <div class="tab-pane fade" id="roundtrip" role="tabpanel" aria-labelledby="roundtrip-tab">
                    <form id="roundTripFormMobile" class="">
                      <input type="hidden" name="package_type" id="package_type" class="form-control" value="2">
                      <div class="form-row">
                        <div class="col-md-3 mb-2">
                          <input type="text" class="form-control input" id="mobileFrom" placeholder=" " required name="from" />
                          <label for="from" class="user__label">From*</label>
                        </div>
                        <div class="col-md-3 mb-2">
                          <input type="text" class="form-control input" id="mobileto" name="to" placeholder=" " required />
                          <label for="to" class="user__label">To*</label>
                        </div>
                        <div class="col-md-4 mb-2">
                          <input type="date" class="form-control input" id="pick_up" name="pick_up" placeholder=" " required />
                          <label for="depart-date" class="user__label">Depart Date*</label>
                        </div>
                        <div class="col-md-4 mb-2">
                          <input type="date" class="form-control input" id="round_return" placeholder=" " required name="round_return" />
                          <label for="depart-date" class="user__label">Return Date*</label>
                        </div>
                        <div class="col-md-4 mb-2">
                          <input type="time" class="form-control input" id="pick_up_at" placeholder=" " required name="pick_up_at" />
                          <label for="depart-date" class="user__label">Depart Time*</label>
                        </div>
                        <div class="col-md-4 mb-2">
                          <input type="number" class="form-control input" id="persons" name="persons" required="" min="1" />
                          <label for="persons" class="user__label">Persons*</label>
                        </div>
                        <div class="col-md-4 mb-2">
                          <button type="submit" class="btn common__btn btn-block">
                            Search
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- Local Trip Form -->
                  <div class="tab-pane fade" id="localtrip" role="tabpanel" aria-labelledby="localtrip-tab">
                    <form id="localFormMobile" class="">
                      <input type="hidden" name="package_type" id="package_type" class="form-control" value="1">
                      <div class="form-row">
                        <div class="col-md-3 mb-2">
                          <input type="text" class="form-control input" id="LocalfromLocation" placeholder=" " required name="from" />
                          <label for="from" class="user__label">From*</label>
                        </div>

                        <div class="col-md-4 mb-2">
                          <select class="form-control " id="trip-type-local" name="distance" required=""
                            style="height: 45px;">
                            <option selected="">SELECT PACKAGE</option>
                            <option value="350">8Hr/350Km</option>
                            <option value="308">7Hr/308Km</option>
                            <option value="264">6Hr/264Km</option>
                            <option value="220">5Hr/220Km</option>
                            <option value="176">4Hr/176Km</option>
                            <option value="132">3Hr/132Km</option>
                            <option value="88">2Hr/88Km</option>
                            <option value="44">1Hr/44Km</option>
                            <option value="round-trip">Round Trip</option>
                          </select>
                        </div>
                        <div class="col-md-4 mb-2">
                          <input type="date" class="form-control input" id="pick_up" placeholder=" " required name="pick_up" />
                          <label for="depart-date" class="user__label">Date*</label>
                        </div>
                        <div class="col-md-4 mb-2">
                          <input type="time" class="form-control input" id="pick_up_at" placeholder=" " required name="pick_up_at" />
                          <label for="depart-date" class="user__label">Start Time*</label>
                        </div>
                        <div class="col-md-4 mb-2">
                          <input type="number" class="form-control input" id="no_of_person" placeholder=" " required name="no_of_person" min="1" />
                          <label for="persons" class="user__label">Persons*</label>
                        </div>
                        <div class="col-md-4 mb-2">
                          <button type="submit" class="btn common__btn btn-block">
                            Search
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACiii2Kp1VXRckQoTy_MYZcLkS0wEKhBE&libraries=places"></script>
              <script>
                $(document).ready(function() {
                  function getFormData(form) {
                    var unindexed_array = form.serializeArray();
                    var indexed_array = {};

                    $.map(unindexed_array, function(n, i) {
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
                  $('#oneWayFormMobile').on('submit', function(e) {
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
                        setTimeout(function() {
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
                  $('#roundTripFormMobile').on('submit', function(e) {
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
                        setTimeout(function() {
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
                  $('#localFormMobile').on('submit', function(e) {
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
                        setTimeout(function() {
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
                    componentRestrictions: {
                      country: 'in'
                    }
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


              <!-- Driver mobile nested tab -->
              <div class="tab-pane fade" id="driver" role="tabpanel" aria-labelledby="driver-tab">
                <div class="">
                  <!-- Tabs Navigation -->
                  <ul class="nav nav-pills nav-justified" id="cabBookingTabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link px-2 active" id="local-tab" data-toggle="tab" href="#local" role="tab"
                        aria-controls="local" aria-selected="true">Local</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-2" id="outstation-tab" data-toggle="tab" href="#outstation" role="tab"
                        aria-controls="outstation" aria-selected="false">Outstation</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-2" id="contractual-tab" data-toggle="tab" href="#contractual" role="tab"
                        aria-controls="contractual" aria-selected="false">Contractual</a>
                    </li>
                  </ul>
                  <!-- Tabs Content -->
                  <div class="tab-content mt-2 passenger__details__container  ">
                    <!-- Local Form -->
                    <div class="tab-pane fade show active" id="local" role="tabpanel" aria-labelledby="local-tab">
                      <form>
                        <div class="form-row">
                          <div class="col-md-3 mb-2">
                            <input type="text" class="form-control input" id="from-local" name="from" required />
                            <label for="from-local" class="user__label">From*</label>
                          </div>
                          <div class="col-md-3 mb-2">
                            <input type="text" class="form-control input" id="to-local" name="to" required />
                            <label for="to-local" class="user__label">To*</label>
                          </div>
                          <!-- Trip Type Dropdown -->
                          <div class="col-md-4 mb-2">
                            <select class="form-control " id="trip-type-local" name="trip-type" required
                              style="height: 45px;">
                              <option selected>Package</option>
                              <option value="one-way">8 Hours</option>
                              <option value="round-trip">12 Hours</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-2">
                            <input type="" class="form-control input" id="date-local" name="date" required />
                            <label for="date-local" class="user__label">Depart Date*</label>
                          </div>
                          <div class="col-md-4 mb-2">
                            <input type="" class="form-control input" id="time-local" name="time" required />
                            <label for="time-local" class="user__label">Depart Time*</label>
                          </div>
                          <div class="col-md-4 mb-2">
                            <select class="form-control " id="trip-type-local" name="trip-type" required
                              style="height: 45px;">
                              <option selected>Vechile Class</option>
                              <option value="one-way">Hatchback</option>
                              <option value="round-trip">Sedan</option>
                              <option value="one-way">Suv</option>
                              <option value="one-way">Cuv</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-2">
                            <select class="form-control " id="trip-type-local" name="trip-type" required
                              style="height: 45px;">
                              <option selected>Transmission</option>
                              <option value="one-way">Manual</option>
                              <option value="round-trip">Automatic</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-2">
                            <select class="form-control " id="trip-type-local" name="trip-type" required
                              style="height: 45px;">
                              <option selected>Registration type</option>
                              <option value="one-way">Commercial [yellow number plate]</option>
                              <option value="round-trip">private [ white number plate]</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-2">
                            <button type="submit" class="btn common__btn btn-block">Search</button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <!-- Outstation Form -->
                    <div class="tab-pane fade" id="outstation" role="tabpanel" aria-labelledby="outstation-tab">
                      <form>
                        <div class="form-row">
                          <div class="col-md-3 mb-2">
                            <input type="text" class="form-control input" id="from-outstation" name="from" required />
                            <label for="from-outstation" class="user__label">From*</label>
                          </div>
                          <div class="col-md-3 mb-2">
                            <input type="text" class="form-control input" id="to-outstation" name="to" required />
                            <label for="to-outstation" class="user__label">To*</label>
                          </div>
                          <div class="col-md-4 mb-2">
                            <select class="form-control " id="trip-type-local" name="trip-type" required=""
                              style="height: 45px;">
                              <option selected>Trip Type</option>
                              <option value="one-way">One Way</option>
                              <option value="round-trip">Round Trip</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-2">
                            <input type="" class="form-control input" id="date-outstation" name="date" required />
                            <label for="date-outstation" class="user__label">Depart Date*</label>
                          </div>
                          <div class="col-md-4 mb-2">
                            <input type="" class="form-control input" id="time-outstation" name="time" required />
                            <label for="time-outstation" class="user__label">Depart Time*</label>
                          </div>

                          <div class="col-md-4 mb-2">
                            <select class="form-control " id="trip-type-local" name="trip-type" required
                              style="height: 45px;">
                              <option selected>Vechile Class</option>
                              <option value="one-way">Hatchback</option>
                              <option value="round-trip">Sedan</option>
                              <option value="one-way">Suv</option>
                              <option value="one-way">Cuv</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-2">
                            <select class="form-control " id="trip-type-local" name="trip-type" required
                              style="height: 45px;">
                              <option selected>Transmission</option>
                              <option value="one-way">Manual</option>
                              <option value="round-trip">Automatic</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-2">
                            <select class="form-control " id="trip-type-local" name="trip-type" required
                              style="height: 45px;">
                              <option selected>Registration type</option>
                              <option value="one-way">Commercial [yellow number plate]</option>
                              <option value="round-trip">private [ white number plate]</option>
                            </select>
                          </div>

                          <div class="col-md-4 mb-2">
                            <button type="submit" class="btn common__btn btn-block">search</button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <!-- Contractual Form -->
                    <div class="tab-pane fade" id="contractual" role="tabpanel" aria-labelledby="contractual-tab">
                      <form>
                        <div class="form-row">
                          <div class="col-md-3 mb-2">
                            <input type="text" class="form-control input" id="from-contractual" name="from" required />
                            <label for="from-contractual" class="user__label">Name*</label>
                          </div>
                          <div class="col-md-3 mb-2">
                            <input type="text" class="form-control input" id="to-contractual" name="to" required />
                            <label for="to-contractual" class="user__label">Email*</label>
                          </div>
                          <div class="col-md-4 mb-2">
                            <input type="text" class="form-control input" id="date-contractual" name="date" required />
                            <label for="date-contractual" class="user__label">Mobile*</label>
                          </div>
                          <div class="col-md-4 mb-2">
                            <select class="form-control " id="trip-type-local" name="trip-type" required=""
                              style="height: 45px;">
                              <option selected>Duration</option>
                              <option value="">3 month</option>
                              <option value="">6 month</option>
                              <option value="">9 month</option>
                              <option value="">12 month</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-2">
                            <textarea name="" class="form-control" id="" rows="2"
                              placeholder=" Write Message here.."></textarea>
                          </div>
                          <div class="col-md-4 mb-2">
                            <button type="submit" class="btn common__btn btn-block">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                <!-- Hotel Booking Form -->
                <div class="row">
                  <div class="col-12">
                    <h2 style="    color: transparent !important;
                  font-size: 60px;
                  font-weight: 600;
                  letter-spacing: 1.5px;
                  -webkit-text-stroke: 3px #c91919;
                  text-align: center;
                  margin-bottom: 20px;">Comming Soon....</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cab__content" style="display: none">
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
            <img src="{{asset('new-layouts/assets/image/banner/left-arrow.svg')}}" alt="Prev" />
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <img src="{{asset('new-layouts/assets/image/banner/right-arrow.svg')}}" alt="Next" />
          </a>
          <a class="play__pause__btn carousel-control-prev" id="carouselPlayPause" role="button">
            <i class="fa-solid fa-pause"></i>
          </a>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" style="
                background-image: url('{{asset('new-layouts/assets/image/banner-img/slider-section-1.webp')}}');
              ">
            <div class="container d-flex align-items-center justify-content-center">
              <div class="row align-self-center w-100">
                <div class="col-md-10 col-lg-8 pl-md-0">
                  <h1>OUR SERVICES</h1>
                  <p>One Way, Local Trips, Round Trips, Corporate Trips</p>
                </div>
                <div class="col-lg-4 col-md-2"></div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner-img/slider-section-2.webp')}}');
              ">
            <div class="container d-flex align-items-center justify-content-center">
              <div class="row align-self-center w-100">
                <div class="col-md-10 col-lg-8 pl-md-0">
                  <h1>LIMITLESS TRAVEL</h1>
                  <p>
                    Flexibility, Convenience, Affordability, Peace of Mind
                  </p>
                </div>
                <div class="col-lg-4 col-md-2"></div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner-img/slider-section-3.webp')}}');
              ">
            <div class="container d-flex align-items-center justify-content-center">
              <div class="row align-self-center w-100">
                <div class="col-md-10 col-lg-8 pl-md-0">
                  <h1>KEEP ROLLIN</h1>
                  <p>Bhurr For Everyone <br>
                    Special Plan For Every Needs</p>
                </div>
                <div class="col-lg-4 col-md-2"></div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner-img/slider-section-4.webp')}}');
              ">
            <div class="container d-flex align-items-center justify-content-center">
              <div class="row align-self-center w-100">
                <div class="col-md-10 col-lg-8 pl-md-0">
                  <h1>OUR PROMISE</h1>
                  <p>On Time, Friendly Chauffeurs, Expert Drivers</p>
                </div>
                <div class="col-lg-4 col-md-2"></div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner-img/slider-section-5.jpg')}}');
              ">
            <div class="container d-flex align-items-center justify-content-center">
              <div class="row align-self-center w-100">
                <div class="col-md-10 col-lg-8 pl-md-0">
                  <h1>EXPERIENCE THE FUTURE OF TRAVEL</h1>
                  <p>World's First Daily Bill Settlements</p>
                  <a href="#" class="btn common__btn px-md-4 px-3 mt-md-3 mt-2 fade-up">Know More</a>
                </div>
                <div class="col-lg-4 col-md-2"></div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner-img/slider-section-6.webp')}}');
              ">
            <div class="container d-flex align-items-center justify-content-center">
              <div class="row align-self-center w-100">
                <div class="col-md-10 col-lg-8 pl-md-0">
                  <h1>CHOOSE PREFERED DRIVER LANGUAGE</h1>
                </div>
                <div class="col-lg-4 col-md-2"></div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner-img/slider-section-7.webp')}}');
              ">
            <div class="container d-flex align-items-center justify-content-center">
              <div class="row align-self-center w-100">
                <div class="col-md-10 col-lg-8 pl-md-0">
                  <h1>BOOK CAB ACCORDING TO YOUR LUGGAGE</h1>
                </div>
                <div class="col-lg-4 col-md-2"></div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner-img/slider-section-8.webp')}}');
              ">
            <div class="container d-flex align-items-center justify-content-center">
              <div class="row align-self-center w-100">
                <div class="col-md-10 col-lg-8 pl-md-0">
                  <h1>BOOK UP TO 10 DAYS BEFORE</h1>

                </div>
                <div class="col-lg-4 col-md-2"></div>
              </div>
            </div>
          </div>
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
    <section class="snap-section py-md-5 py-3 gallery__section">
      <div class="container px-md-0">
        <div class="row">
          <div class="col-12 mb-md-4 mb-3">
            <h2 class="mb-0 pl-md-3 text-md-left text-center">
              A CLASS APART. IT’S THE NEW STANDARD
            </h2>
            <p class="mb-0 pl-md-3 text-md-left text-center">
              Discover our world of exclusive offers and services that change
              the way you travel.
            </p>
          </div>
        </div>
        <!-- Missing closing tag added here -->
      </div>
      <div class="image-container d-md-none d-block">
        <div class="image-wrapper">
          <img src="{{asset('new-layouts/assets/image/stack/populer-detination.webp')}}" alt="Image 1" />
          <div class="image-content">
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
          <img src="{{asset('new-layouts/assets/image/stack/stack_2.webp')}}" alt="Image 2" />
          <div class="image-content">
            <h2>Refer and earn</h2>
          </div>
          <div class="para__btn__section">
            <p>Contact us to become a partner</p>
            <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn px-md-4 px-3">Contact Us</a>
          </div>
        </div>
        <div class="image-wrapper">
          <img src="{{asset('new-layouts/assets/image/stack/road-less-travelled.webp')}}" alt="Image 3" />
          <div class="image-content">
            <h2>Road less travelled</h2>
          </div>
          <div class="para__btn__section">
            <p>Hidden gems in India</p>
            <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn px-md-4 px-3">Explore</a>
          </div>
        </div>
        <div class="image-wrapper">
          <img src="{{asset('new-layouts/assets/image/stack/corporate-services.webp')}}" alt="Image 4" />
          <div class="image-content">
            <h2>Corporate services</h2>
          </div>
          <div class="para__btn__section">
            <p>Contact us for specialised services</p>
            <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn">Contact Us</a>
          </div>
        </div>
        <div class="image-wrapper">
          <img src="{{asset('new-layouts/assets/image/stack/talk-to-us.webp')}}" alt="Image 5" />
          <div class="image-content">
            <h2>Talk to us</h2>
          </div>
          <div class="para__btn__section">
            <p>Talk to us</p>
            <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn">Contact Us</a>
          </div>
        </div>
      </div>
      <div class="d-md-block d-none px-0">
        <div class="col-12 px-0">
          <div class="gallery">
            <div class="img__box">
              <!-- <img src="../assets/image/stack/stack_1.webp" alt=""> -->
              <h3 class="">Popular destinations</h3>
              <p>Popular destinations near Pune</p>
              <a href="{{url('/popular_destination')}}" target="_blank" rel="noopener noreferrer" class="btn common__btn px-md-4 px-3">
                Explore More
              </a>
            </div>
            <div class="img__box">
              <h3 class="">Refer and earn</h3>
              <p>Contact us to become a partner</p>
              <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn px-md-4 px-3">Contact Us</a>
            </div>
            <div class="img__box">
              <h3 class="">Road less travelled</h3>
              <p>Hidden gems in India</p>
              <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn px-md-4 px-3">Explore</a>
            </div>
            <div class="img__box">
              <h3 class="">Corporate services</h3>
              <p>Contact us for specialised services</p>
              <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn">Contact Us</a>
            </div>
            <div class="img__box">
              <h3 class="">Talk to us</h3>
              <p>Talk to us</p>
              <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-md-5 py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading__text__color text-md-left text-center mb-3">Expolre Popular Packages</h2>
            <div class="owl-carousel select__route__carousel owl-theme">
              <div class="item" data-aos="fade-up">
                <img src="{{asset('new-layouts/assets/image/popular-route/nashik-panchwati.jpg')}}" alt="Sedan" class="img-fluid" loading="lazy" />
                <h5 class="route_location">Nashik</h5>
                <div class="desc">
                  <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                  <a href="{{url('/chardham')}}" class="btn  px-md-5 px-3 rounded-lg book__route__btn common__btn">Book</a>
                </div>

              </div>
              <div class="item" data-aos="fade-up">
                <img src="{{asset('new-layouts/assets/image/popular-route/shirdi.jpg')}}" alt="Sedan" class="img-fluid" loading="lazy" />
                <h5 class="route_location">Shirdi</h5>
                <div class="desc">
                  <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                  <a href="{{url('/chardham')}}" class="btn  px-md-5 px-3 rounded-lg book__route__btn common__btn">Book</a>
                </div>
              </div>
              <div class="item" data-aos="fade-up">
                <img src="{{asset('new-layouts/assets/image/popular-route/dagdusheth.png')}}" alt="Sedan" class="img-fluid" loading="lazy" />
                <h5 class="route_location">Pune</h5>
                <div class="desc">
                  <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                  <a href="{{url('/chardham')}}" class="btn  px-md-5 px-3 rounded-lg book__route__btn common__btn">Book</a>
                </div>
              </div>
              <div class="item" data-aos="fade-up">
                <img src="{{asset('new-layouts/assets/image/popular-route/jaggananth-purii.jpg')}}" alt="Sedan" class="img-fluid" loading="lazy" />
                <h5 class="route_location">Jagannth puri</h5>
                <div class="desc">
                  <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                  <a href="{{url('/chardham')}}" class="btn  px-md-5 px-3 rounded-lg book__route__btn common__btn">Book</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-md-5 py-3 car__category__section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 align-items-center d-flex">
            <div class="col-12 pl-md-0">
              <h2 class="heading__text__color text-md-left text-center">
                EXPLORE CAR CATEGORIES
              </h2>
              <p class="subheading__text__color text-md-left text-center">
                Find the perfect car for your journey, whether it's for a
                family trip or a solo adventure.
              </p>
              <!-- <a href="javaScript:Void(0);" class="btn common__btn my-2 px-4 px-3">Read More</a> -->
            </div>
          </div>
          <div class="col-md-8 rightCarCategory px-1">
            <div class="owl-carousel car__category__corousel owl-theme px-2">
              <div class="item" data-aos="fade-up">
                <a href="">
                  <img src="{{asset('new-layouts/assets/image/car-class/hatchback.webp')}}" alt="Sedan" class="img-fluid" loading="lazy" />
                </a>
                <div class="carCategoryItemsCont">
                  <h5>Hatchback</h5>
                  <p>
                    A small vehicle boasting affordability, convenience and
                    lesser carbon emission suitable for shorter trips.
                  </p>
                </div>
              </div>
              <div class="item" data-aos="fade-up">
                <a href="">
                  <img src="{{asset('new-layouts/assets/image/car-class/sedan.webp')}}" alt="SUV" class="img-fluid" loading="lazy" />
                </a>
                <div class="carCategoryItemsCont">
                  <h5>Sedan</h5>
                  <p>
                    A long vehicle with extra boot space and legroom suitable
                    for long journeys.
                  </p>
                </div>
              </div>
              <div class="item" data-aos="fade-up">
                <a href="">
                  <img src="{{asset('new-layouts/assets/image/car-class/mpv.webp')}}" alt="Sports Car" class="img-fluid" loading="lazy" />
                </a>
                <div class="carCategoryItemsCont">
                  <h5>MPV</h5>
                  <p>
                    Multipurpose vehicles featuring unmatched comfort best
                    suited for grand family vacations. We don’t sell mpvs as
                    suvs
                  </p>
                </div>
              </div>
              <div class="item" data-aos="fade-up">
                <a href="">
                  <img src="{{asset('new-layouts/assets/image/car-class/suv.webp')}}" alt="Truck" class="img-fluid" loading="lazy" />
                </a>
                <div class="carCategoryItemsCont">
                  <h5>SUV</h5>
                  <p>
                    The epitome of land travel, experience the luxury of
                    traveling in comfort, style and class. Best suited for the
                    longest adventures.
                  </p>
                </div>
              </div>

              <div class="item" data-aos="fade-up">
                <a href="">
                  <img src="{{asset('new-layouts/assets/image/car-class/Bussines_class.webp')}}" alt="Convertible" class="img-fluid" loading="lazy" />
                </a>
                <div class="carCategoryItemsCont">
                  <h5>Business Class</h5>
                  <p>
                    Rugged and powerful endeavour, perfect for business trips requiring strength and comfort.
                  </p>
                </div>
              </div>
              <div class="item" data-aos="fade-up">
                <a href="">
                  <img src="{{asset('new-layouts/assets/image/car-class/tempo_traveller.webp')}}" alt="Convertible" class="img-fluid" loading="lazy" />
                </a>
                <div class="carCategoryItemsCont">
                  <h5>Tempo traveller</h5>
                  <p>
                    A long vehicle featuring large number of seats and storage
                    space, suitable for large families, group tours, for short
                    to longest of outings.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-md-5 py-3">
      <div class="container">
        <div class="row">
          <div class="col-12 testimonial-header mb-3">
            <h2
              class="testimonial-heading mb-0 heading__text__color text-md-left text-center">
              Cities We Serve: Your Destination, Our Services
            </h2>
          </div>
          <div class="col-12">
            <div class="">
              <div
                class="owl-carousel owl-theme cab__cities_We_Serve__carousel">
                <div class="item">
                  <div class="slideritem">
                    <a href="pune">
                      <div class="city_images">
                        <img
                          src="{{asset('new-layouts/assets/image/city-icon/cities-pune-1.webp')}}"
                          alt="Pune" />
                        <div class="img__overlay"></div>
                        <h4 class="city__name">Pune</h4>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="slideritem">
                    <a href="/mumbai">
                      <div class="city_images">
                        <img
                          src="{{asset('new-layouts/assets/image/city-icon/cities-mumbai-6.webp')}}"
                          alt="" />
                        <div class="img__overlay"></div>
                        <h4 class="city__name">Mumbai</h4>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="slideritem">
                    <a href="/thane">
                      <div class="city_images">
                        <img
                          src="{{asset('new-layouts/assets/image/city-icon/cities-thane-icon.webp')}}"
                          alt="" />
                        <div class="img__overlay"></div>
                        <h4 class="city__name">Thane</h4>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="slideritem">
                    <a href="/nashik">
                      <div class="city_images">
                        <img
                          src="{{asset('new-layouts/assets/image/city-icon/cities-nashik1-icon.webp')}}"
                          alt="" />
                        <div class="img__overlay"></div>
                        <h4 class="city__name">Nashik</h4>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="slideritem">
                    <a
                      href="/aurangabad">
                      <div class="city_images">
                        <img
                          src="{{asset('new-layouts/assets/image/city-icon/cities-aurangabad-icon.webp')}}"
                          alt="" />
                        <div class="img__overlay"></div>
                        <h4 class="city__name">Aurangabad</h4>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="slideritem">
                    <a href="/kolhapur">
                      <div class="city_images">
                        <img
                          src="{{asset('new-layouts/assets/image/city-icon/cities-kolhapur-icon.webp')}}"
                          alt="" />
                        <div class="img__overlay"></div>
                        <h4 class="city__name">Kolhapur</h4>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="slideritem">
                    <a href="/satara">
                      <div class="city_images">
                        <img
                          src="{{asset('new-layouts/assets/image/city-icon/cities-satara-3.webp')}}"
                          alt="" />
                        <div class="img__overlay"></div>
                        <h4 class="city__name">Satara</h4>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="slideritem">
                    <a href="/ahmednagar">
                      <div class="city_images">
                        <img
                          src="{{asset('new-layouts/assets/image/city-icon/cities-ahmednagar-icon.webp')}}"
                          alt="" />
                        <div class="img__overlay"></div>
                        <h4 class="city__name">Ahmadnagar</h4>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="slideritem">
                    <a href="/Jalgaon">
                      <div class="city_images">
                        <img
                          src="{{asset('new-layouts/assets/image/city-icon/cities-jalgaon-icon.webp')}}"
                          alt="" />
                        <div class="img__overlay"></div>
                        <h4 class="city__name">Jalgaon</h4>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="slideritem">
                    <a href="/dhule">
                      <div class="city_images">
                        <img
                          src="{{asset('new-layouts/assets/image/city-icon/cities-dhule-icon.webp')}}"
                          alt="" />
                        <div class="img__overlay"></div>
                        <h4 class="city__name">Dhule</h4>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="slideritem">
                    <a href="/sangli">
                      <div class="city_images">
                        <img
                          src="{{asset('new-layouts/assets/image/city-icon/cities-sanghli-4.webp')}}"
                          alt="" />
                        <div class="img__overlay"></div>
                        <h4 class="city__name">Sangali</h4>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="position-relative overflow-hidden">
      <div class="container-fluid px-0 position-relative">
        <div class="py-lg-0 py-4 fixed__width__container">
          <div class="fix__width">
            <div class="inner__fix__width">
              <h2 class="testimonial-heading mb-0 heading__text__color text-md-left text-center">
                PREPARE <br class="mobile-hide" />
                TO TRAVEL
              </h2>
              <p class="testimonial-subheading mb-0 subheading__text__color text-md-left text-center">
                Helpful hints for everything from packing to paperwork, so you
                are fully prepared.
              </p>
              <div class="d-flex">
                <a href="{{ url('prepare-to-travel') }}" class="btn common__btn my-2 mx-md-0 mx-auto  px-4 px-3">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row Prepare__to__travel__bg">
          <div class="col-lg-4 d-lg-block d-none"></div>
          <div class="col-lg-8 pl-0 gl-0" style="z-index: 4;">
            <div class="owl-carousel locations owl-theme">
              <div class="item">
                <div class="slideritem">
                  <img src="{{asset('new-layouts/assets/image/popular-location.webp')}}" class="img-fluid" alt="Dubai" />
                  <div class="placePrice">
                    <div class="lft">
                      <img src="{{asset('new-layouts/assets/image/logo/download.png')}}" style="width: 80px; height: 80px" alt="" />
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
                  <img src="{{asset('new-layouts/assets/image/New Project (3).png')}}" class="img-fluid" alt="London" />
                  <div class="placePrice">
                    <div class="lft">
                      <img src="{{asset('new-layouts/assets/image/logo/download.png')}}" style="width: 80px; height: 80px" alt="" />
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
                  <img src="{{asset('new-layouts/assets/image/New Project (4).png')}}" class="img-fluid" alt="San Francisco" />
                  <div class="placePrice">
                    <div class="lft">
                      <img src="{{asset('new-layouts/assets/image/logo/download.png')}}" style="width: 80px; height: 80px" alt="" />
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
    <section class="snap-section testimonial__section py-md-5 py-3 d-none">
      <div class="container">
        <div class="row">
          <div class="col-12 testimonial-header mb-3">
            <h2 class="testimonial-heading mb-0 heading__text__color text-md-left text-center">
              What Our Client's Say
            </h2>
            <p class="testimonial-subheading subheading__text__color text-md-left text-center mb-0">
              Hear from our happy customers
            </p>
          </div>
          <div class="col-12">
            <div class="nonstopSlider">
              <div class="owl-carousel owl-theme cab__testimonial__carousel">
                <div class="item">
                  <div class="slideritem">
                    <div class="card testimonial-card">
                      <div class="card-body">
                        <h5 class="card-title text-center">
                          Excellent Service!
                        </h5>
                        <p class="card-text text-center">
                          <i class="fas fa-quote-left fa-quote mr-3"></i>Lorem
                          ipsum dolor sit amet, consectetur adipiscing elit.
                          Nulla commodo turpis nec tortor semper, a tincidunt
                          libero fringilla. Duis sit amet sapien nec magna
                          convallis commodo.<i class="fas fa-quote-right fa-quote ml-3"></i>
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
                        <h5 class="card-title text-center">
                          Excellent Service!
                        </h5>
                        <p class="card-text text-center">
                          <i class="fas fa-quote-left fa-quote mr-3"></i>Lorem
                          ipsum dolor sit amet, consectetur adipiscing elit.
                          Nulla commodo turpis nec tortor semper, a tincidunt
                          libero fringilla. Duis sit amet sapien nec magna
                          convallis commodo.<i class="fas fa-quote-right fa-quote ml-3"></i>
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
                        <h5 class="card-title text-center">
                          Excellent Service!
                        </h5>
                        <p class="card-text text-center">
                          <i class="fas fa-quote-left fa-quote mr-3"></i>Lorem
                          ipsum dolor sit amet, consectetur adipiscing elit.
                          Nulla commodo turpis nec tortor semper, a tincidunt
                          libero fringilla. Duis sit amet sapien nec magna
                          convallis commodo.<i class="fas fa-quote-right fa-quote ml-3"></i>
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
                        <h5 class="card-title text-center">
                          Excellent Service!
                        </h5>
                        <p class="card-text text-center">
                          <i class="fas fa-quote-left fa-quote mr-3"></i>Lorem
                          ipsum dolor sit amet, consectetur adipiscing elit.
                          Nulla commodo turpis nec tortor semper, a tincidunt
                          libero fringilla. Duis sit amet sapien nec magna
                          convallis commodo.<i class="fas fa-quote-right fa-quote ml-3"></i>
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
                        <h5 class="card-title text-center">
                          Excellent Service!
                        </h5>
                        <p class="card-text text-center">
                          <i class="fas fa-quote-left fa-quote mr-3"></i>Lorem
                          ipsum dolor sit amet, consectetur adipiscing elit.
                          Nulla commodo turpis nec tortor semper, a tincidunt
                          libero fringilla. Duis sit amet sapien nec magna
                          convallis commodo.<i class="fas fa-quote-right fa-quote ml-3"></i>
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
                        <h5 class="card-title text-center">
                          Excellent Service!
                        </h5>
                        <p class="card-text text-center">
                          <i class="fas fa-quote-left fa-quote mr-3"></i>Lorem
                          ipsum dolor sit amet, consectetur adipiscing elit.
                          Nulla commodo turpis nec tortor semper, a tincidunt
                          libero fringilla. Duis sit amet sapien nec magna
                          convallis commodo.<i class="fas fa-quote-right fa-quote ml-3"></i>
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
  </section>
  <section class="driver__content" style="display: none">
    <section class="py-md-5 py-3 monthly_vechile__type__section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h6 class="section__subheading_color">Pay Monthly</h6>
            <h4 class="section__heading_color">For Business Users</h4>
          </div>
        </div>
        <div class="row mt-md-4 mt-3">
          <div class="col-lg-2 col-md-4 col-6">
            <div class="card vechile__Type px-4 py-md-4 py-3">
              <div class="card-img text-center">
                <img src="{{asset('new-layouts/assets/image/driver/vechileType/car-driver.png')}}" alt="" class="img-fluid" />
              </div>
              <div class="card__description">
                <h6 class="text-center">Car Driver</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <div class="card vechile__Type px-4 py-md-4 py-3">
              <div class="card-img text-center">
                <img src="{{asset('new-layouts/assets/image/driver/vechileType/truck.png')}}" alt="" class="img-fluid" />
              </div>
              <div class="card__description">
                <h6 class="text-center">Truck Driver</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <div class="card vechile__Type px-4 py-md-4 py-3">
              <div class="card-img text-center">
                <img src="{{asset('new-layouts/assets/image/driver/vechileType/tour-bus.png')}}" alt="" class="img-fluid" />
              </div>
              <div class="card__description">
                <h6 class="text-center">Bus Driver</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <div class="card vechile__Type px-4 py-md-4 py-3">
              <div class="card-img text-center">
                <img src="{{asset('new-layouts/assets/image/driver/vechileType/bus.png')}}" alt="" class="img-fluid" />
              </div>
              <div class="card__description">
                <h6 class="text-center">School Bus</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <div class="card vechile__Type px-4 py-md-4 py-3">
              <div class="card-img text-center">
                <img src="{{asset('new-layouts/assets/image/driver/vechileType/van.png')}}" alt="" class="img-fluid" />
              </div>
              <div class="card__description">
                <h6 class="text-center">Van Driver</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <div class="card vechile__Type px-4 py-md-4 py-3">
              <div class="card-img text-center">
                <img src="{{asset('new-layouts/assets/image/driver/vechileType/valet.png')}}" alt="" class="img-fluid" />
              </div>
              <div class="card__description">
                <h6 class="text-center">Valet Parking</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-md-5 py-3 features__section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h6 class="section__subheading_color">Quality & Trust</h6>
            <h4 class="section__heading_color">Why Hire Team Drivars?</h4>
          </div>
        </div>
        <div class="row pt-4">
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card bg-light p-3">
              <span class="text-center h1 py-3"><i class="fa-solid fa-check"></i></span>
              <div class="card-body p-0 text-center">
                <h5>Hassle Free Booking</h5>
                <p class="">
                  Book car driver online in Pune. To anywhere in india
                </p>
              </div>
              <span class="bg__icon text-center">
                <i class="fa-solid fa-check"></i>
              </span>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card bg-light p-3">
              <span class="text-center h1 py-3"><i class="fa-solid fa-thumbs-up"></i></span>
              <div class="card-body p-0 text-center">
                <h5>Transparent Pricing</h5>
                <p class="">
                  No hidden charges. Enjoy the most affordable rates
                </p>
              </div>
              <span class="bg__icon text-center">
                <i class="fa-solid fa-thumbs-up"></i>
              </span>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card bg-light p-3">
              <span class="text-center h1 py-3"><i class="fa-solid fa-keyboard"></i></span>
              <div class="card-body p-0 text-center">
                <h5>Real Time Tracking</h5>
                <p class="">
                  Track your driver movement across the Pune with our app.
                </p>
              </div>
              <span class="bg__icon text-center">
                <i class="fa-solid fa-keyboard"></i>
              </span>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card bg-light p-3">
              <span class="text-center h1 py-3"><i class="fa-solid fa-award"></i></span>
              <div class="card-body p-0 text-center">
                <h5>Safe & Reliable Team</h5>
                <p class="">
                  Superior safety ensured by our professional partners.
                </p>
              </div>
              <span class="bg__icon text-center">
                <i class="fa-solid fa-award"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="owl__carousel py-md-5 py-3">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h6 class="section__subheading_color">Find Out Most</h6>
            <h4 class="section__heading_color">
              Popular Destination Packages
            </h4>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-12">
            <div class="owl-carousel owl-carousel-location owl-theme">
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658653241mumbai.jpg')}}" alt="Image 1" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Mumbai, Maharashtra, India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658824071satara.jpg')}}" alt="Image 2" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Satara, Maharashtra, India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658824999Mahabaleshwar.jpg')}}" alt="Image 3" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Mahabaleshwar, Maharashtra,
                      India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658826795solapur.jpg')}}" alt="Image 1" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Solapur, Maharashtra, India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658827015nashik.jpg')}}" alt="Image 2" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Nashik, Maharashtra, India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658827393lonavla.jpg')}}" alt="Image 3" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Lonavla, Maharashtra, India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658827746indore.jpg')}}" alt="Image 2" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Indore, Maharashtra, India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658827891ratnagiri.jpg')}}" alt="Image 3" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Ratnagiri, Maharashtra,
                      India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658653241mumbai.jpg')}}" alt="Image 1" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Mumbai, Maharashtra, India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658824071satara.jpg')}}" alt="Image 2" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Satara, Maharashtra, India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658824999Mahabaleshwar.jpg')}}" alt="Image 3" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Mahabaleshwar, Maharashtra,
                      India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658826795solapur.jpg')}}" alt="Image 1" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Solapur, Maharashtra, India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658827015nashik.jpg')}}" alt="Image 2" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Nashik, Maharashtra, India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658827393lonavla.jpg')}}" alt="Image 3" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Lonavla, Maharashtra, India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658827746indore.jpg')}}" alt="Image 2" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Indore, Maharashtra, India</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="popular__destination__img__container">
                  <img src="{{asset('new-layouts/assets/image/driver/popular-location/1658827891ratnagiri.jpg')}}" alt="Image 3" />
                  <div class="img__overlay"></div>
                  <div class="content">
                    <a href="javascript:void(0);" class="title text-white h4 title-dark">Ratnagiri, Maharashtra,
                      India</a>
                  </div>
                </div>
              </div>
              <!-- Add more items as needed -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="team__section py-md-5 py-3">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h4 class="section__heading_color">Meet Our Awesome Team</h4>
            <p class="section__subheading_color">
              We are available in 4 Categories to serve you in better and
              professional way.
            </p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-12">
            <div class="row justify-content-center d-flex">
              <div class="col-md-8">
                <ul class="nav nav-pills mb-3 d-flex justify-content-center nav-justified bg-light px-2 py-1 rounded"
                  id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-captain-tab" data-toggle="pill" href="#pills-captain"
                      role="tab" aria-controls="pills-captain" aria-selected="true">Captain</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-chauffeurs-tab" data-toggle="pill" href="#pills-chauffeurs" role="tab"
                      aria-controls="pills-chauffeurs" aria-selected="false">Chauffeurs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-driver-tab" data-toggle="pill" href="#pills-driver" role="tab"
                      aria-controls="pills-driver" aria-selected="false">Driver</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-valet-tab" data-toggle="pill" href="#pills-valet" role="tab"
                      aria-controls="pills-valet" aria-selected="false">Valet</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="tab-content mt-md-4" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-captain" role="tabpanel"
                aria-labelledby="pills-captain-tab">
                <div class="row">
                  <div class="col-md-6 my-md-0 my-3 align-items-center d-flex">
                    <div class="">
                      <h4 class="mb-3">Hire Captain on Ride Basis in Pune</h4>
                      <p>
                        Captain is a car driver. Which is available to drive
                        cars for personal or businesses 24/7. You can book a
                        captain for outstation or incity rides. Its easy to
                        book a captain just select your locations, time and
                        vehicle.
                      </p>
                      <button class="btn red__btn">Book Now</button>
                    </div>
                  </div>
                  <div class="col-md-6 my-md-0 my-3 border rounded-lg">
                    <div>
                      <img src="{{asset('new-layouts/assets/image/driver/our-team/download.png')}}" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-chauffeurs" role="tabpanel" aria-labelledby="pills-chauffeurs-tab">
                <div class="row">
                  <div class="col-md-6 my-md-0 my-3 align-items-center d-flex">
                    <div class="">
                      <h4 class="mb-3">
                        Hire Chauffeur for Personal Car or Business in Pune
                      </h4>
                      <p>
                        Chauffeur are available for personal and commercial
                        vehicles on monthly basis. They are fully verified and
                        professionals. You can book for home or business in
                        just a call.
                      </p>
                      <button class="btn red__btn">Book Now</button>
                    </div>
                  </div>
                  <div class="col-md-6 my-md-0 my-3 border rounded-lg">
                    <div>
                      <img src="{{asset('new-layouts/assets/image/driver/our-team/download.png')}}" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-driver" role="tabpanel" aria-labelledby="pills-driver-tab">
                <div class="row">
                  <div class="col-md-6 my-md-0 my-3 align-items-center d-flex">
                    <div class="">
                      <h4 class="mb-3">
                        Hire Driver For Heavy Vehicles School Bus and Truck in
                        Pune
                      </h4>
                      <p>
                        Drivers are available to drive heavy vehicles like
                        school buses and trucks. They are available on monthly
                        basis. They are trained and verified professional and
                        can be tracked any time on the rides.
                      </p>
                      <button class="btn red__btn">Book Now</button>
                    </div>
                  </div>
                  <div class="col-md-6 my-md-0 my-3 border rounded-lg">
                    <div>
                      <img src="{{asset('new-layouts/assets/image/driver/our-team/download.png')}}" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-valet" role="tabpanel" aria-labelledby="pills-valet-tab">
                <div class="row">
                  <div class="col-md-6 my-md-0 my-3 align-items-center d-flex">
                    <div class="">
                      <h4 class="mb-3">Hire Valet for Car Parking in Pune</h4>
                      <p>
                        Valets are available to park all type of vehicles.
                        they are available for events or businesses. Our valet
                        team is verified and professional. You can book them
                        in just a call.
                      </p>
                      <button class="btn red__btn">Book Now</button>
                    </div>
                  </div>
                  <div class="col-md-6 my-md-0 my-3 border rounded-lg" style="">
                    <div class="">
                      <img src="{{asset('new-layouts/assets/image/driver/our-team/download.png')}}" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="testimonial__section py-md-5 py-3">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-7 col-md-6">
            <h4 class="mb-4 section__heading_color">
              Whats our clients said <br />
              about services
            </h4>
            <p class="mb-0 section__subheading_color">
              Start working with Bhurr that can provide you affordable
              services.
            </p>
            <div class="owl-carousel owl-carousel-testimonial owl-theme mt-4">
              <div class="item">
                <div class="testimonial__section__card">
                  <div class="">
                    <ul class="list-unstyled d-flex" style="gap: 4px">
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                    </ul>
                  </div>
                  <div class="">
                    <p>
                      "Lorem ipsum dolor sit amet consectetur adipisicing
                      elit. Voluptate, obcaecati nemo. Officia consequatur
                      tenetur exercitationem aliquam similique inventore
                      nostrum suscipit."
                    </p>
                  </div>
                  <div class="">
                    <h6 class="text-primary">
                      - John Doe <small class="text-muted">Traveler</small>
                    </h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial__section__card">
                  <div class="">
                    <ul class="list-unstyled d-flex" style="gap: 4px">
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                    </ul>
                  </div>
                  <div class="">
                    <p>
                      "Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Quod ullam tempore unde magni aut voluptatem
                      quidem autem quae quo neque."
                    </p>
                  </div>
                  <div class="">
                    <h6 class="text-primary">
                      - John Doe <small class="text-muted">Traveler</small>
                    </h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial__section__card">
                  <div class="">
                    <ul class="list-unstyled d-flex" style="gap: 4px">
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                    </ul>
                  </div>
                  <div class="">
                    <p>
                      "Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Quod ullam tempore unde magni aut voluptatem
                      quidem autem quae quo neque."
                    </p>
                  </div>
                  <div class="">
                    <h6 class="text-primary">
                      - John Doe <small class="text-muted">Traveler</small>
                    </h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial__section__card">
                  <div class="">
                    <ul class="list-unstyled d-flex" style="gap: 4px">
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-star"></i></span>
                      </li>
                    </ul>
                  </div>
                  <div class="">
                    <p>
                      "Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Quod ullam tempore unde magni aut voluptatem
                      quidem autem quae quo neque."
                    </p>
                  </div>
                  <div class="">
                    <h6 class="text-primary">
                      - John Doe <small class="text-muted">Traveler</small>
                    </h6>
                  </div>
                </div>
              </div>
              <!-- Add more items as needed -->
            </div>
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="">
              <img src="{{asset('new-layouts/assets/image/driver/our-team/custo.png')}}" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
  <section class="hotel__content py-md-5" style="display: none">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-4">
          <h2>Discover your new favourite stay</h2>
        </div>
        <div class="col-12">
          <div class="owl-carousel owl-theme image-slider1">
            <div class="item">
              <div class="popular__destination__img__container">
                <img src="{{asset('new-layouts/assets/image/hotel/stay-type/stay-type-01.webp')}}" />
                <div class="stay__text">
                  <h5>Apartment</h5>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="popular__destination__img__container">
                <img src="{{asset('new-layouts/assets/image/hotel/stay-type/stay-type-02.webp')}}" />
                <div class="stay__text">
                  <h5>Apart Hotel</h5>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="popular__destination__img__container">
                <img src="{{asset('new-layouts/assets/image/hotel/stay-type/stay-type-03.webp')}}" />
                <div class="stay__text">
                  <h5>Pet friendly</h5>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="popular__destination__img__container">
                <img src="{{asset('new-layouts/assets/image/hotel/stay-type/stay-type-04.webp')}}" />
                <div class="stay__text">
                  <h5>All inclusive</h5>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="popular__destination__img__container">
                <img src="{{asset('new-layouts/assets/image/hotel/stay-type/stay-type-05.webp')}}" />
                <div class="stay__text">
                  <h5>Houseboat</h5>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="popular__destination__img__container">
                <img src="{{asset('new-layouts/assets/image/hotel/stay-type/stay-type-06.webp')}}" />
                <div class="stay__text">
                  <h5>Villa</h5>
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
        <div class="col-md-4 d-flex justify-content-md-start justify-content-center">
          <a href="/" class="py-2 px-2">
            <img src="{{asset('new-layouts/assets/image/logo/bhurr-logo.png')}}" alt="" />
          </a>
        </div>
        <div class="col-md-8 d-flex align-content-center justify-content-center">
          <div class="row align-items-center d-md-flex">
            <div class="col-md-4 align-items-center justify-content-md-end justify-content-center d-flex">
              <h5 class="mb-md-0 text-md-end text-center">COMING SOON</h5>
            </div>
            <div class="col-md-8 justify-content-md-start justify-content-center d-flex">
              <div class="d-flex align-items-center justify-content-md-left justify-content-center">
                <img src="{{asset('new-layouts/assets/image/logo/googleplay.png')}}" alt="google-play"
                  width="150px" class="mx-1 img-fluid" />
                <img src="{{asset('new-layouts/assets/image/logo/app-store.png')}}" alt="app-store"
                  width="150px" class="mx-1 img-fluid" />
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
        <div class="col-md-6 justify-content-md-center justify-content-center d-flex">
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
        <div class="col-md-12 text-center">
          <p>© 2024 Bhurr Technologies LLP. All rights reserved. </p>
        </div>
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
  <script>
    $(document).ready(function() {
      $(window).on("scroll", function() {
        if ($(window).scrollTop() > 200) {
          $(".navOnly").addClass("fixed__top");
          // $('fixed__top').removeClass('navOnly')
        } else {
          $(".navOnly").removeClass("fixed__top");
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Function to scroll tab content into view
      function scrollToTabContent() {
        var targetSection = $(".search__section");
        if (targetSection.length) {
          var offset = 120; // Adjust this value based on your header height
          var scrollPosition = targetSection.offset().top - offset;
          $("html, body").animate({
              scrollTop: scrollPosition,
            },
            500
          ); // Adjust animation speed as needed
        }
      }

      // Event listener for main tabs
      $("#mainTabs a.nav-link").on("shown.bs.tab", function(e) {
        var target = $(e.target).attr("href"); // Get the target tab pane ID
        console.log(target);
        scrollToTabContent();
      });

      // // Event listener for nested tabs
      // $('#nestedTabs a.nav-link').on('shown.bs.tab', function (e) {
      //     var target = $(e.target).attr("href"); // Get the target tab pane ID
      //     scrollToTabContent(target);
      // });
    });
  </script>
  <script>
    $(document).ready(function() {
      $(".owl-carousel-location").owlCarousel({
        loop: true,
        autoplay: true,
        margin: 25,

        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 5,
          },
        },
      });
    });
    $(document).ready(function() {
      $(".owl-carousel-testimonial").owlCarousel({
        loop: true,
        autoplay: true,
        margin: 25,

        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Initially hide all content sections
      // $('.driver__content, .cab__content, .hotel__content').hide();

      // Show the default content and background when the page loads
      if ($(".outer__nav .nav-link.driver").hasClass("active")) {
        $(".tab__heading").html("Hire a Professional Driver");
        $(".driver__content").show();
        $(".sec__img").css(
          "background-image",
          "url('{{asset('new-layouts/assets/image/driver/bg/driver-bg.png')}}')"
        );
      } else if ($(".outer__nav .nav-link.cab").hasClass("active")) {
        $(".tab__heading").html("Book Your Cab");
        $(".cab__content").show();
        $(".sec__img").css(
          "background-image",
          "url('{{asset('new-layouts/assets/image/search-bg/search-section-Background-Image.webp')}}')"
        );
      } else if ($(".outer__nav .nav-link.hotel").hasClass("active")) {
        $(".tab__heading").html("Find Your Perfect Stay");
        $(".hotel__content").show();
        $(".sec__img").css(
          "background-image",
          "url('{{asset('new-layouts/assets/image/driver/bg/hotel-bg.png')}}')"
        );
      }

      // Event handler for clicking on tabs
      $(".outer__nav .nav-link").click(function() {
        // Hide all content sections initially
        $(".driver__content, .cab__content, .hotel__content").hide();

        // Check which tab was clicked and show the corresponding content
        if ($(this).hasClass("driver")) {
          $(".driver__content").show();
          $(".tab__heading").html("Hire a Professional Driver");
          $(".sec__img").css(
            "background-image",
            "url('{{asset('new-layouts/assets/image/driver/bg/driver-bg.png')}}')"
          );
        } else if ($(this).hasClass("cab")) {
          $(".cab__content").show();
          $(".tab__heading").html("Book Your Cab");
          $(".sec__img").css(
            "background-image",
            "url('{{asset('new-layouts/assets/image/search-bg/search-section-Background-Image.webp')}}')"
          );
        } else if ($(this).hasClass("hotel")) {
          $(".hotel__content").show();
          $(".tab__heading").html("Find Your Perfect Stay");
          $(".sec__img").css(
            "background-image",
            "url('{{asset('new-layouts/assets/image/driver/bg/hotel-bg.png')}}')"
          );
        }
      });
    });



    console.log(`navbar height is ${$(".navbar-expand-lg").height()}`);
  </script>
  <script>
    document
      .getElementById("travellers")
      .addEventListener("click", function() {
        document.getElementById("travellerDropdown").style.display = "block";
      });

    let roomCount = 1;

    function increment(id) {
      let element = document.getElementById(id);
      let value = parseInt(element.innerText);
      element.innerText = value + 1;
    }

    function decrement(id) {
      let element = document.getElementById(id);
      let value = parseInt(element.innerText);
      if (value > 0) {
        element.innerText = value - 1;
      }
    }

    function updateTravellers() {
      let rooms = document.querySelectorAll(".room");
      let totalAdults = 0;
      let totalChildren = 0;
      let validRooms = 0;

      rooms.forEach((room) => {
        const roomNumber = room.dataset.room;
        const adults = parseInt(
          document.getElementById(`adults-${roomNumber}`).innerText
        );
        const children = parseInt(
          document.getElementById(`children-${roomNumber}`).innerText
        );

        if (adults > 0 || children > 0) {
          validRooms++;
          totalAdults += adults;
          totalChildren += children;
        }
      });

      if (validRooms === 0) {
        alert("Please select at least one adult or child in any room.");
        return;
      }

      const totalTravellers = totalAdults + totalChildren;
      document.getElementById(
        "travellers"
      ).value = `${totalTravellers} Travellers, ${validRooms} Room(s)`;
      document.getElementById("travellerDropdown").style.display = "none";
    }

    document
      .getElementById("addRoomButton")
      .addEventListener("click", function() {
        roomCount++;
        const roomDiv = document.createElement("div");
        roomDiv.classList.add("room");
        roomDiv.setAttribute("data-room", roomCount);
        roomDiv.innerHTML = `
            <div class="d-flex justify-content-between">
                <h5>Room ${roomCount}</h5>
                ${roomCount > 1
            ? `<button type="button" class="btn btn-danger btn-sm mt-3" onclick="removeRoom(${roomCount})">Remove Room</button>`
            : ""
          }
            </div>
            <div class="counter d-flex justify-content-between">
                <div class="">
                    <label>Adults:</label>
                </div>
                <div class="">
                    <button type="button" class="btn red__btn btn-sm" onclick="decrement('adults-${roomCount}')">-</button>
                    <span id="adults-${roomCount}">0</span>
                    <button type="button" class="btn red__btn btn-sm" onclick="increment('adults-${roomCount}')">+</button>
                </div>
            </div>
            <div class="counter d-flex justify-content-between">
                <div class="">
                    <label>Children:</label>
                </div>
                <div class="">
                    <button type="button" class="btn red__btn btn-sm" onclick="decrement('children-${roomCount}')">-</button>
                    <span id="children-${roomCount}">0</span>
                    <button type="button" class="btn red__btn btn-sm" onclick="increment('children-${roomCount}')">+</button>
                </div>
            </div>
        `;
        document.getElementById("roomsContainer").appendChild(roomDiv);
      });

    function removeRoom(roomNumber) {
      const room = document.querySelector(`.room[data-room="${roomNumber}"]`);
      if (room) {
        room.remove();
      }
      updateTravellers();
    }

    // Close the dropdown when clicking outside
    window.addEventListener("click", function(e) {
      if (
        !document.getElementById("travellers").contains(e.target) &&
        !document.getElementById("travellerDropdown").contains(e.target)
      ) {
        document.getElementById("travellerDropdown").style.display = "none";
      }
    });
  </script>
  <script>
    $(".image-slider1").owlCarousel({
      margin: 20,
      loop: true,
      autoplay: false,
      dots: false,
      nav: true,
      navText: ["←", "→"],
      responsive: {
        0: {
          items: 2,
        },
        600: {
          items: 3,
          merge: true,
        },
        1000: {
          items: 5,
        },
      },
    });
  </script>
  <script>
    document.getElementById('tripForm').addEventListener('submit', function(e) {
      e.preventDefault();

      // Get the selected trip type
      const selectedTripType = document.getElementById('tripType').value;

      // Store the trip type in localStorage (or pass it via URL)
      localStorage.setItem('tripType', selectedTripType);

      // Redirect to the next page
      window.location.href = "#";
    });
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
    flatpickr("#pick_up", {
      dateFormat: "d-m-Y", // Change this to any format you want
    });
    flatpickr("#round_return", {
      dateFormat: "d-m-Y", // Change this to any format you want
    });

    const currentDate = new Date();

    // Format date as dd-mm-yy
    const day = String(currentDate.getDate()).padStart(2, '0');
    const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Months are zero-based
    const year = String(currentDate.getFullYear()); // Last two digits of the year

    const formattedDate = `${day}-${month}-${year}`;

    document.getElementById('pick_up').placeholder = formattedDate;
    const returnDateElement = document.getElementsByClassName('return-date')[0];
    if (returnDateElement) {
      returnDateElement.placeholder = formattedDate;
    }
    const departDateElement = document.getElementsByClassName('depart-date')[0];
    if (departDateElement) {
      departDateElement.placeholder = formattedDate;
    }
    const dateDateElement = document.getElementsByClassName('date')[0];
    if (dateDateElement) {
      dateDateElement.placeholder = formattedDate;
    }
    flatpickr("#pick_up_at", {
      enableTime: true,
      noCalendar: true, // Disable date selection
      dateFormat: "H:i", // Format for 24-hour format
      defaultDate: "12:40", // Set default time if needed
      time_24hr: true, // 24-hour format
      theme: "material_blue" // Flatpickr theme applied
    });
  </script>
  <!-- explore popular route  -->
  <!-- <script>
    $(document).ready(function() {
      $(".select__route__carousel").owlCarousel({
        loop: true,
        margin: '10',
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },

          1000: {
            items: 5
          }
        }

      });
    });
  </script> -->
  <script>
    $(document).ready(function() {
      $(".select__route__carousel").owlCarousel({
        loop: true, // Infinite looping
        margin: 10, // Space between items
        // nav: true,             // Show next/prev buttons
        dots: false, // Show dots navigation
        autoplay: true, // Auto play
        autoplayTimeout: 5000, // Delay for auto play
        responsive: { // Settings for different screen sizes
          0: {
            items: 1 // 1 item for small screens
          },
          600: {
            items: 2 // 2 items for medium screens
          },
          1000: {
            items: 4 // 3 items for large screens
          }
        }
      });
    });
  </script>
</body>

</html>