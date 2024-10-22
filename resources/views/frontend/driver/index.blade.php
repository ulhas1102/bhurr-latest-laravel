@extends('frontend-layout.app')
@section('title', 'Index - page')
@section('inline-css')
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
</style>
</head>

<body class="driver__page__container">
    @endsection

    @section('content')

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
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center tab__heading text-light d-md-block d-none"></h2>
                </div>
            </div>
            <div class="container py-md-5 py-3 position-relative my-auto px-md-0">
                <div class="row" style="align-items: center">
                    <!-- for desktop view only -->
                    <div class="col-md-12 d-md-block d-none">
                        <!-- Main Tabs -->
                        <div class="navOnly">
                            <div class="outer__nav">
                                <div>
                                    <a href="#" target="_self" rel="noopener noreferrer" class="navbar-brand"><img
                                            src="{{asset('new-layouts/assets/image/logo/bhurr-logo.png')}}"
                                            alt="" />
                                    </a>
                                </div>
                                <ul class="nav nav-pills nav-justified" id="mainTabs" role="tablist">
                                    <li class="nav-item" onclick="window.location.href='https://www.bhurr.co.in/cab'">
                                        <a class="nav-link" id="main-tab1" data-toggle="tab" href="#main1" role="tab"
                                            aria-controls="main1" aria-selected="true">
                                            <div class="">
                                                <img src="{{asset('new-layouts/assets/image/driver/cars/sedan.png')}}"
                                                    alt="" />
                                                <p class="mb-0">Cab</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item"
                                        onclick="window.location.href='https://www.bhurr.co.in/driver'">
                                        <a class="nav-link active" id="main-tab3" data-toggle="tab" href="#main3"
                                            role="tab" aria-controls="main3" aria-selected="false">
                                            <div class="">
                                                <img src="{{asset('new-layouts/assets/image/driver/cars/driver (1).png')}}"
                                                    alt="" />
                                                <p class="mb-0">Driver</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link hotel" id="main-tab2" data-toggle="tab" href="#main2"
                                            role="tab" aria-controls="main2" aria-selected="false">
                                            <div class=" ">
                                                <img src="{{asset('new-layouts/assets/image/driver/cars/residential.png')}}"
                                                    alt="" />
                                                <p class="mb-0">Hotels</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="Login__div justify-content-center">

                                    <ul class="navbar-nav ml-auto top__header flex-row" style="gap: 15px">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fa-solid mr-1 fa-house"></i>
                                                Home<span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fa-solid mr-1 fa-headphones"></i>
                                                Contact
                                                Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="customer-login2"><i
                                                    class="fa-solid mr-1 fa-user"></i>
                                                Sign In</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="mainTabsContent">
                            <div class="tab-pane fade" id="main1" role="tabpanel" aria-labelledby="main-tab1">
                                <div class="container">
                                    <form action="" class="">
                                        <div class="row cab__booking">
                                            <div class="col-md-12">
                                                <ul class="nav nav-pills d-flex w-100 border-bottom" id="pills-tab"
                                                    role="tablist">
                                                    <li class="nav-item pb-0" role="presentation">
                                                        <button class="nav-link rounded-0" id="pills-home-tab"
                                                            data-toggle="pill" data-target="#pills-home" type="button"
                                                            role="tab" aria-controls="pills-home" aria-selected="true">
                                                            ONE WAY
                                                        </button>
                                                    </li>
                                                    <li class="nav-item pb-0" role="presentation">
                                                        <button class="nav-link active rounded-0" id="pills-profile-tab"
                                                            data-toggle="pill" data-target="#pills-profile"
                                                            type="button" role="tab" aria-controls="pills-profile"
                                                            aria-selected="false">
                                                            ROUND TRIP
                                                        </button>
                                                    </li>
                                                    <li class="nav-item pb-0" role="presentation">
                                                        <button class="nav-link rounded-0" id="pills-contact-tab"
                                                            data-toggle="pill" data-target="#pills-contact"
                                                            type="button" role="tab" aria-controls="pills-contact"
                                                            aria-selected="false">
                                                            LOCAL
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="tab-content" id="pills-tabContent">
                                                    <!-- outer cab tab one way nested tab -->
                                                    <div class="tab-pane fade show active" id="pills-home"
                                                        role="tabpanel" aria-labelledby="pills-home-tab">
                                                        <div class="form-row position-relative">
                                                            <div class="col-md-2 pb-0 align-items-end d-flex">
                                                                <div class="inputGroup mb-0">
                                                                    <input autocomplete="off" required="" type="text"
                                                                        class="form-control" />
                                                                    <label for="name">FROM</label>
                                                                </div>
                                                            </div>
                                                            <div class="left__right__arrow col-md-1">
                                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                            </div>
                                                            <div class="col-md-2 pb-0 align-items-end d-flex">
                                                                <div class="inputGroup mb-0">
                                                                    <input autocomplete="off" required=""
                                                                        class="form-control" type="text" />
                                                                    <label for="name">TO</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 px-md-2">
                                                                <label class="mb-0" for="from">DEPART DATE</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="09-06-24" />
                                                            </div>
                                                            <div class="col-md-2 px-md-2">
                                                                <label class="mb-0" for="from">DEPART TIME</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="12:40" />
                                                            </div>
                                                            <div class="col-md-1 px-md-2">
                                                                <label class="mb-0" for="from">PERSONS</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="1" />
                                                            </div>
                                                            <div
                                                                class="col-md-2 align-items-end d-flex justify-content-center">
                                                                <a type="submit" href="../car-listing.html"
                                                                    class="btn btn-submit btn-block common__btn px-md-4 rounded">Search</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- outer cab tab round-trip nested tab  -->
                                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                        aria-labelledby="pills-profile-tab">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <div class="form-row">
                                                                    <div class="col-md-2 align-items-end">
                                                                        <div class="inputGroup mb-0">
                                                                            <input autocomplete="off" required=""
                                                                                type="text" class="form-control" />
                                                                            <label for="name">FROM</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2 align-items-end">
                                                                        <div class="inputGroup mb-0">
                                                                            <input autocomplete="off" required=""
                                                                                type="text" class="form-control" />
                                                                            <label for="name">TO</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label class="mb-0" for="from">DEPART
                                                                            DATE</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="dd-mm-yyyy" />
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label class="mb-0" for="from">RETURN
                                                                            DATE</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="dd-mm-yyyy" />
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label class="mb-0" for="from">DEPART
                                                                            TIME</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="12:40" />
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label class="mb-0" for="from">PERSONS</label>
                                                                        <input type="number" class="form-control"
                                                                            placeholder="1" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-md-2 align-items-end d-flex justify-content-center">
                                                                <a type="submit" href="../car-listing.html"
                                                                    class="btn btn-submit btn-block common__btn px-md-4 rounded">Search</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- outer cab tab local nested tab -->
                                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                                        aria-labelledby="pills-contact-tab">
                                                        <div class="form-row">
                                                            <div class="col-md-2 pb-0 align-items-end d-flex">
                                                                <div class="inputGroup mb-0">
                                                                    <input autocomplete="off" required="" type="text"
                                                                        class="form-control" />
                                                                    <label for="name">FROM</label>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-md-2 px-md-3 align-items-end d-flex justify-content-center">
                                                                <select class="form-select form-control p-0"
                                                                    aria-label="Default select example">
                                                                    <option selected>Select Package</option>
                                                                    <option value="1">One Way</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2 px-md-3">
                                                                <label class="mb-0" for="from">DATE</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="dd-mm-yyyy" />
                                                            </div>
                                                            <div class="col-md-2 px-md-3">
                                                                <label class="mb-0" for="from">START TIME</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="12:40" />
                                                            </div>
                                                            <div class="col-md-2 px-md-3">
                                                                <label class="mb-0" for="from">PERSONS</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="1" />
                                                            </div>
                                                            <div
                                                                class="col-md-2 align-items-end d-flex justify-content-center">
                                                                <a type="submit" href="car-listing.html"
                                                                    class="btn btn-submit btn-block common__btn px-md-4 rounded">Search</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="main3" role="tabpanel"
                                aria-labelledby="main-tab3">
                                <div class="container">
                                    <div class="row cab__booking">
                                        <div class="col-12 border-bottom">
                                            <ul class="nav nav-pills trip__btn justify-content-md-start justify-content-center"
                                                id="pills-tab" role="tablist" style="gap: 5px">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active rounded-0 px-md-3" id="local-tab"
                                                        data-toggle="pill" href="#local" role="tab"
                                                        aria-controls="local" aria-selected="true" fid="oneway">
                                                        LOCAL
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link rounded-0 px-md-3" id="outstation-tab"
                                                        data-toggle="pill" href="#outstation" role="tab"
                                                        aria-controls="outstation" aria-selected="false"
                                                        fid="outstation">
                                                        OUTSTATION
                                                    </a>
                                                </li>

                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link rounded-0 px-md-3" id="contractual-tab"
                                                        data-toggle="pill" href="#contractual" role="tab"
                                                        aria-controls="contractual" aria-selected="false"
                                                        fid="contractual">
                                                        CONTRACTUAL
                                                    </a>
                                                </li>
                                            </ul>


                                        </div>
                                        <div class="col-md-12">
                                            <div class="tab-content" id="pills-tabContent">
                                                <!-- outer driver tab local nested tab  -->


                                                <div class="tab-pane fade show active" id="local" role="tabpanel"
                                                    aria-labelledby="local-tab">
                                                    <form action="{{ route('add.driver.enquiry') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="driver_trip_type"
                                                            id="driver_trip_type" value="local" />
                                                        <div>
                                                            <div class="form-row position-relative">
                                                                <div class="col-md-2 pb-0 align-items-end d-flex">
                                                                    <div class="inputGroup mb-0">
                                                                        <input autocomplete="off" required=""
                                                                            type="text" class="form-control"
                                                                            id="pickup_location" name="pickup_location"
                                                                            placeholder="" />
                                                                        <label for="name">FROM</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2 pb-0 align-items-end d-flex">
                                                                    <div class="inputGroup mb-0">
                                                                        <input autocomplete="off" required=""
                                                                            type="text" class="form-control"
                                                                            id="drop_location" name="drop_location"
                                                                            placeholder="" />
                                                                        <label for="name">TO</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label class="mb-0" for="from">DEPART DATE</label>
                                                                    <input type="date" class="form-control"
                                                                        name="pickup_date" placeholder="09-06-24" />
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label class="mb-0" for="from">DEPART TIME</label>
                                                                    <input type="time" class="form-control"
                                                                        name="pickup_time" placeholder="12:40" />
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label class="mb-0" for="from">PACKAGE</label>
                                                                    <select class="form-select form-control"
                                                                        aria-label="Default select example"
                                                                        name="package" id="package">
                                                                        <option value="8">8 Hours</option>
                                                                        <option value="12">
                                                                            12 Hours
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div
                                                                    class="col-md-2 align-items-end d-flex justify-content-center">
                                                                    <button type="submit"
                                                                        class="btn btn-submit btn-block common__btn px-md-4 rounded">
                                                                        Search
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- outer driver tab outstation nested tab  -->
                                                <div class="tab-pane fade" id="outstation" role="tabpanel"
                                                    aria-labelledby="outstation-tab">
                                                    <form action="{{ route('add.driver.enquiry') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="driver_trip_type"
                                                            id="driver_trip_type" value="outstation" />
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <div class="form-row position-relative">
                                                                    <div class="col-md-3 pb-0 align-items-end d-flex"
                                                                        id="from-field">
                                                                        <div class="inputGroup mb-0">
                                                                            <input autocomplete="off" required=""
                                                                                type="text" class="form-control"
                                                                                id="outstation_pickup_location"
                                                                                name="pickup_location" placeholder="" />
                                                                            <label for="name">FROM</label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3 pb-0 align-items-end d-flex"
                                                                        id="to-field">
                                                                        <div class="inputGroup mb-0">
                                                                            <input autocomplete="off" required=""
                                                                                type="text" class="form-control"
                                                                                id="outstation_drop_location"
                                                                                name="drop_location" placeholder="" />
                                                                            <label for="name">TO</label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-2">
                                                                        <label class="mb-0" for="ride-type">RIDE
                                                                            TYPE</label>
                                                                        <select class="form-select form-control"
                                                                            id="ride-type" name="ride_type"
                                                                            aria-label="Ride Type">
                                                                            <option value="one-way" selected>
                                                                                One Way
                                                                            </option>
                                                                            <option value="round-trip">
                                                                                Round Trip
                                                                            </option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-2">
                                                                        <label class="mb-0" for="depart-date">DEPART
                                                                            DATE</label>
                                                                        <input type="date" class="form-control"
                                                                            id="depart-date" placeholder="09-06-24"
                                                                            name="pickup_date" />
                                                                    </div>

                                                                    <div class="col-md-2">
                                                                        <label class="mb-0" for="depart-time">DEPART
                                                                            TIME</label>
                                                                        <input type="time" class="form-control"
                                                                            id="depart-time" placeholder="12:40"
                                                                            name="pickup_time" />
                                                                    </div>

                                                                    <!-- Return Date Field (Initially hidden using Bootstrap class d-none) -->
                                                                    <div class="col-md-2 d-none" id="return-date-field">
                                                                        <label class="mb-0" for="return-date">RETURN
                                                                            DATE</label>
                                                                        <input type="date" class="form-control"
                                                                            id="return-date" placeholder="10-06-24"
                                                                            name="drop_date" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="col-md-2 align-items-end d-flex justify-content-center">
                                                                <button type="submit"
                                                                    class="btn btn-submit btn-block common__btn px-md-4 rounded">Search</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- outer driver tab CONTRACTUAL nested tab  -->
                                                <div class="tab-pane fade" id="contractual" role="tabpanel"
                                                    aria-labelledby="contractual-tab">
                                                    <form action="{{ route('add.consensual.enquiry') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="driver_trip_type"
                                                            id="driver_trip_type" value="contractual" />
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <div class="row">
                                                                    <div class="mb-3 col-md-2 px-1">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">NAME</label>
                                                                        <input type="text" class="form-control" id=""
                                                                            name="name" placeholder="Enter Name" />
                                                                    </div>
                                                                    <div class="mb-3 col-md-2 px-1">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">EMAIL ADDRESS</label>
                                                                        <input type="text" class="form-control"
                                                                            id="exampleFormControlInput1" name="email"
                                                                            placeholder="Enter Email" />
                                                                    </div>
                                                                    <div class="mb-3 col-md-2 px-1">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">MOBILE NUMBER</label>
                                                                        <input type="text" class="form-control" id=""
                                                                            name="mobile_no" placeholder="Enter Mobile Number" />
                                                                    </div>
                                                                    <div class="mb-3 col-md-2 px-1">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">DURATION</label>
                                                                        <select class="form-control"
                                                                            id="trip-type-local" name="duration"
                                                                            required="" style="height: 45px">
                                                                            <option selected>Duration</option>
                                                                            <option value="1">1 month</option>
                                                                            <option value="3">3 month</option>
                                                                            <option value="6">6 month</option>
                                                                            <option value="9">9 month</option>
                                                                            <option value="12">12 month</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3 col-md-2 px-1">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Registration Type</label>
                                                                        <select class="form-control"
                                                                            id="registration-type-local"
                                                                            name="registration_type" required=""
                                                                            style="height: 45px">
                                                                            <option selected>
                                                                                Registration Type
                                                                            </option>
                                                                            <option value="commercial">
                                                                                Commercial (yellow number plate)
                                                                            </option>
                                                                            <option value="private">
                                                                                Private (white number plate)
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3 col-md-2 px-1">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label">MESSAGE</label>
                                                                        <textarea class="form-control"
                                                                            id="exampleFormControlTextarea1" rows="3"
                                                                            name="comment"
                                                                            placeholder="Write message here....."></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 px-1 mb-3 d-flex align-items-end">
                                                                <button type="submit"
                                                                    class="btn btn-submit btn-block common__btn px-md-4 rounded">Submit
                                                                    </button>
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
                                            <h1 class="text-center" style="
                            color: transparent !important;
                            font-size: 60px;
                            font-weight: 700;
                            letter-spacing: 2px;
                            -webkit-text-stroke: 3px #dc1414;
                            text-align: center;
                            margin-bottom: 20px;
                          ">
                                                Comming Soon......
                                            </h1>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- mobile search hide for desktop-->
                    <div class="col-12 d-md-none d-block shadow-5 p-3 mobile_form_nav" id="mainTabs">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills nav-justified mt-3 outer__nav rounded" id="bookingTabs" role="tablist"
                            style="background-color: #f5ede2; overflow: hidden">
                            <li class="nav-item">
                                <a class="nav-link cab" id="cab-tab" data-toggle="tab" href="#cab" role="tab"
                                    aria-controls="cab" aria-selected="true"><img
                                        src="{{asset('new-layouts/assets/image/driver/cars/sedan.png')}}" alt="" />
                                    <br />
                                    Cab</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active  driver" id="driver-tab" data-toggle="tab" href="#driver"
                                    role="tab" aria-controls="driver" aria-selected="false"><img
                                        src="{{asset('new-layouts/assets/image/driver/cars/driver (1).png')}}" alt="" />
                                    <br />
                                    Driver</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hotel" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab"
                                    aria-controls="hotel" aria-selected="false"><img
                                        src="{{asset('new-layouts/assets/image/driver/cars/residential.png')}}"
                                        alt="" />
                                    <br />
                                    Hotel</a>
                            </li>
                        </ul>

                        <!-- Tab content -->
                        <div class="tab-content mt-2">
                            <div class="tab-pane fade " id="cab" role="tabpanel" aria-labelledby="cab-tab">
                                <ul class="nav nav-pills nav-justified" id="cabBookingTabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link px-2 active" id="oneway-tab" data-toggle="tab" href="#oneway"
                                            role="tab" aria-controls="oneway" aria-selected="true">One Way</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-2" id="roundtrip-tab" data-toggle="tab" href="#roundtrip"
                                            role="tab" aria-controls="roundtrip" aria-selected="false">Round Trip</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-2" id="localtrip-tab" data-toggle="tab" href="#localtrip"
                                            role="tab" aria-controls="localtrip" aria-selected="false">Local Trip</a>
                                    </li>
                                </ul>

                                <!-- Nested Tab content mobile -->

                                <div class="tab-content mt-2 passenger__details__container">
                                    <!-- One Way Form -->
                                    <div class="tab-pane fade show active" id="oneway" role="tabpanel"
                                        aria-labelledby="oneway-tab">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-3 mb-2">
                                                    <input type="text" class="form-control input" id="from" name="from"
                                                        required="" />
                                                    <label for="from" class="user__label">From*</label>
                                                </div>
                                                <div class="col-md-3 mb-2">
                                                    <input type="text" class="form-control input" id="to" name="to"
                                                        required="" />
                                                    <label for="to" class="user__label">To*</label>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <input type="text" class="form-control input" id="depart-date"
                                                        name="depart-date" required="" />
                                                    <label for="depart-date" class="user__label">Depart Date*</label>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <input type="text" class="form-control input" id="depart-date"
                                                        name="depart-date" required="" />
                                                    <label for="depart-date" class="user__label">Depart Time*</label>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <input type="text" class="form-control input" id="persons"
                                                        name="persons" required="" />
                                                    <label for="persons" class="user__label">Persons</label>
                                                </div>

                                                <div class="col-md-4 mb-2">
                                                    <button type="button" class="btn common__btn btn-block">
                                                        Search
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Round Trip Form -->
                                    <div class="tab-pane fade" id="roundtrip" role="tabpanel"
                                        aria-labelledby="roundtrip-tab">
                                        <div class="form-row">
                                            <div class="col-md-3 mb-2">
                                                <input type="text" class="form-control input" id="from" name="from"
                                                    required="" />
                                                <label for="from" class="user__label">From*</label>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <input type="text" class="form-control input" id="to" name="to"
                                                    required="" />
                                                <label for="to" class="user__label">To*</label>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <input type="text" class="form-control input" id="depart-date"
                                                    name="depart-date" required="" />
                                                <label for="depart-date" class="user__label">Depart Date*</label>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <input type="text" class="form-control input" id="depart-date"
                                                    name="depart-date" required="" />
                                                <label for="depart-date" class="user__label">Return Date*</label>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <input type="text" class="form-control input" id="depart-date"
                                                    name="depart-date" required="" />
                                                <label for="depart-date" class="user__label">Depart Time*</label>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <input type="text" class="form-control input" id="persons"
                                                    name="persons" required="" />
                                                <label for="persons" class="user__label">Persons*</label>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <button type="button" class="btn common__btn btn-block">
                                                    Search
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Local Trip Form -->
                                    <div class="tab-pane fade" id="localtrip" role="tabpanel"
                                        aria-labelledby="localtrip-tab">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-3 mb-2">
                                                    <input type="text" class="form-control input" id="from" name="from"
                                                        required="" />
                                                    <label for="from" class="user__label">From*</label>
                                                </div>

                                                <div class="col-md-4 mb-2">
                                                    <select class="form-control" id="trip-type-local" name="trip-type"
                                                        required="" style="height: 45px">
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
                                                    <input type="text" class="form-control input" id="depart-date"
                                                        name="depart-date" required="" />
                                                    <label for="depart-date" class="user__label">Date*</label>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <input type="text" class="form-control input" id="depart-date"
                                                        name="depart-date" required="" />
                                                    <label for="depart-date" class="user__label">Start Time*</label>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <input type="text" class="form-control input" id="persons"
                                                        name="persons" required="" />
                                                    <label for="persons" class="user__label">Persons*</label>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <button type="button" class="btn common__btn btn-block">
                                                        Search
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Driver mobile nested tab -->
                            <div class="tab-pane fade show active" id="driver" role="tabpanel"
                                aria-labelledby="driver-tab">
                                <div class="">
                                    <!-- Tabs Navigation -->
                                    <ul class="nav nav-pills nav-justified" id="cabBookingTabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link px-2 active" id="local-tab" data-toggle="tab"
                                                href="#local" role="tab" aria-controls="local"
                                                aria-selected="true">Local</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-2" id="outstation-tab" data-toggle="tab"
                                                href="#outstation" role="tab" aria-controls="outstation"
                                                aria-selected="false">Outstation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-2" id="contractual-tab" data-toggle="tab"
                                                href="#contractual" role="tab" aria-controls="contractual"
                                                aria-selected="false">Contractual</a>
                                        </li>
                                    </ul>
                                    <!-- Tabs Content -->
                                    <div class="tab-content mt-2 passenger__details__container">
                                        <!-- Local Form -->
                                        <div class="tab-pane fade show active" id="local" role="tabpanel"
                                            aria-labelledby="local-tab">
                                            <form>
                                                <div class="form-row">
                                                    <div class="col-md-3 mb-2">
                                                        <input type="text" class="form-control input" id="from-local"
                                                            name="from" required />
                                                        <label for="from-local" class="user__label">From*</label>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <input type="text" class="form-control input" id="to-local"
                                                            name="to" required />
                                                        <label for="to-local" class="user__label">To*</label>
                                                    </div>
                                                    <!-- Trip Type Dropdown -->
                                                    <div class="col-md-4 mb-2">
                                                        <select class="form-control" id="trip-type-local"
                                                            name="trip-type" required style="height: 45px">
                                                            <option selected>Package</option>
                                                            <option value="one-way">8 Hours</option>
                                                            <option value="round-trip">12 Hours</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <input type="" class="form-control input" id="date-local"
                                                            name="date" required />
                                                        <label for="date-local" class="user__label">Depart Date*</label>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <input type="" class="form-control input" id="time-local"
                                                            name="time" required />
                                                        <label for="time-local" class="user__label">Depart Time*</label>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <select class="form-control" id="trip-type-local"
                                                            name="trip-type" required style="height: 45px">
                                                            <option selected>Vechile Class</option>
                                                            <option value="one-way">Hatchback</option>
                                                            <option value="round-trip">Sedan</option>
                                                            <option value="one-way">Suv</option>
                                                            <option value="one-way">Cuv</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <select class="form-control" id="trip-type-local"
                                                            name="trip-type" required style="height: 45px">
                                                            <option selected>Transmission</option>
                                                            <option value="one-way">Manual</option>
                                                            <option value="round-trip">Automatic</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <select class="form-control" id="trip-type-local"
                                                            name="trip-type" required style="height: 45px">
                                                            <option selected>Registration type</option>
                                                            <option value="one-way">
                                                                Commercial [yellow number plate]
                                                            </option>
                                                            <option value="round-trip">
                                                                Private [white number plate]
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <button type="submit" class="btn common__btn btn-block">
                                                            Search
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Outstation Form -->
                                        <div class="tab-pane fade" id="outstation" role="tabpanel"
                                            aria-labelledby="outstation-tab">
                                            <form>
                                                <div class="form-row">
                                                    <div class="col-md-3 mb-2">
                                                        <input type="text" class="form-control input"
                                                            id="from-outstation" name="from" required />
                                                        <label for="from-outstation" class="user__label">From*</label>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <input type="text" class="form-control input" id="to-outstation"
                                                            name="to" required />
                                                        <label for="to-outstation" class="user__label">To*</label>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <select class="form-control" id="trip-type-outstation"
                                                            name="trip-type" required="" style="height: 45px">
                                                            <option selected="">Trip Type</option>
                                                            <option value="one-way">One Way</option>
                                                            <option value="round-trip">Round Trip</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <input type="" class="form-control input" id="date-outstation"
                                                            name="date" required />
                                                        <label for="date-outstation" class="user__label">Depart
                                                            Date*</label>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <input type="" class="form-control input" id="time-outstation"
                                                            name="time" required />
                                                        <label for="time-outstation" class="user__label">Depart
                                                            Time*</label>
                                                    </div>
                                                    <div class="col-md-4 mb-2 return-date" id="return-date-outstation"
                                                        style="display:none;">
                                                        <input type="text" class="form-control input"
                                                            id="return-date-outstation" name="return-date">
                                                        <label for="return-date-outstation" class="user__label">Return
                                                            Date*</label>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <select class="form-control" id="trip-type-local"
                                                            name="trip-type" required style="height: 45px">
                                                            <option selected>Vechile Class</option>
                                                            <option value="one-way">Hatchback</option>
                                                            <option value="round-trip">Sedan</option>
                                                            <option value="one-way">Suv</option>
                                                            <option value="one-way">Cuv</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <select class="form-control" id="trip-type-local"
                                                            name="trip-type" required style="height: 45px">
                                                            <option selected>Transmission</option>
                                                            <option value="one-way">Manual</option>
                                                            <option value="round-trip">Automatic</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <select class="form-control" id="trip-type-local"
                                                            name="trip-type" required style="height: 45px">
                                                            <option selected>Registration type</option>
                                                            <option value="one-way">
                                                                Commercial[yellow number plate]
                                                            </option>
                                                            <option value="round-trip">
                                                                Private [white number plate]
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 mb-2">
                                                        <button type="submit" class="btn common__btn btn-block">
                                                            search
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Contractual Form -->
                                        <div class="tab-pane fade" id="contractual" role="tabpanel"
                                            aria-labelledby="contractual-tab">
                                            <form>
                                                <div class="form-row">
                                                    <div class="col-md-3 mb-2">
                                                        <input type="text" class="form-control input"
                                                            id="from-contractual" name="from" required />
                                                        <label for="from-contractual" class="user__label">Name*</label>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <input type="text" class="form-control input"
                                                            id="to-contractual" name="to" required />
                                                        <label for="to-contractual" class="user__label">Email*</label>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <input type="text" class="form-control input"
                                                            id="date-contractual" name="date" required />
                                                        <label for="date-contractual"
                                                            class="user__label">Mobile*</label>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <select class="form-control" id="trip-type-local"
                                                            name="trip-type" required="" style="height: 45px">
                                                            <option selected>Duration</option>
                                                            <option value="">1 month</option>
                                                            <option value="">3 month</option>
                                                            <option value="">6 month</option>
                                                            <option value="">9 month</option>
                                                            <option value="">12 month</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <select class="form-control" id="trip-type-local"
                                                            name="trip-type" required style="height: 45px">
                                                            <option selected>Registration type</option>
                                                            <option value="one-way">
                                                                Commercial [yellow number plate]
                                                            </option>
                                                            <option value="round-trip">
                                                                Private [white number plate]
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <!-- <div class="mb-3 col-md-4 px-1">
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write message here....."></textarea>
                              <label for="exampleFormControlTextarea1" class="user__label">MESSAGE</label>
                            </div> -->
                                                    <div class="col-md-4 mb-2">
                                                        <textarea name="" class="form-control" id="" rows="2"
                                                            placeholder=" Write Message here.."></textarea>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <button type="submit" class="btn common__btn btn-block">
                                                            Submit
                                                        </button>
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
                                        <h2 style="
                          color: transparent !important;
                          font-size: 60px;
                          font-weight: 600;
                          letter-spacing: 1.5px;
                          -webkit-text-stroke: 3px #c91919;
                          text-align: center;
                          margin-bottom: 20px;
                        ">
                                            Comming Soon....
                                        </h2>
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
                background-image: url('{{asset('new-layouts/assets/image/banner/hero__banner5.jpg')}}');
              ">
                        <div class="container d-flex align-items-center justify-content-center">
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>OUR SERVICES</h1>
                                    <p>local trips, round trips, corporate trips</p>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner/hero__banner2.jpg')}}');
              ">
                        <div class="container d-flex align-items-center justify-content-center">
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>LIMITLESS TRAVEL</h1>
                                    <p>
                                        flexibility, convenience, affordability, peace of mind
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner/hero__banner3.jpg')}}');
              ">
                        <div class="container d-flex align-items-center justify-content-center">
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>KEEP ROLLIN</h1>
                                    <p>our special feature DAILY SETTLEMENTS</p>
                                    <a href="#" class="btn common__btn px-md-4 px-3 mt-md-3 mt-2 fade-up">Know More</a>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner/hero__banner4.jpg')}}');
              ">
                        <div class="container d-flex align-items-center justify-content-center">
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>OUR PROMISE</h1>
                                    <p>on time, friendly chauffeurs, expert drivers</p>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner/hero__banner5.jpg')}}');
              ">
                        <div class="container d-flex align-items-center justify-content-center">
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>EXPERIENCE THE FUTURE OF TRAVEL</h1>
                                    <p>World's First Daily Bill Settlements</p>
                                    <a href="#" class="btn common__btn px-md-4 px-3 mt-md-3 mt-2 fade-up">Know More</a>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner/hero__banner6.jpg')}}');
              ">
                        <div class="container d-flex align-items-center justify-content-center">
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>CHOOSE PREFERED DRIVER LANGUAGE</h1>
                                    <a href="#" class="btn common__btn px-md-4 px-3 mt-md-3 mt-2 fade-up">Know More</a>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner/hero__banner7.jpg')}}');
              ">
                        <div class="container d-flex align-items-center justify-content-center">
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>BOOK CAB ACCORDING TO YOUR LANGUAGE</h1>
                                    <a href="#" class="btn common__btn px-md-4 px-3 mt-md-3 mt-2 fade-up">Know More</a>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="
                background-image: url('{{asset('new-layouts/assets/image/banner/hero__banner8.jpg')}}');
              ">
                        <div class="container d-flex align-items-center justify-content-center">
                            <div class="row align-self-center w-100">
                                <div class="col-md-10 col-lg-6 pl-md-0">
                                    <h1>BOOK 10 DAYS BEFORE</h1>
                                    <a href="#" class="btn common__btn px-md-4 px-3 mt-md-3 mt-2 fade-up">Know More</a>
                                </div>
                                <div class="col-lg-6 col-md-2"></div>
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
                    <img src="{{asset('new-layouts/assets/image/stack/stack_1.webp')}}" alt="Image 1" />
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
                        <a href=" " target="_blank" rel="noopener noreferrer"
                            class="btn common__btn px-md-4 px-3">Contact Us</a>
                    </div>
                </div>
                <div class="image-wrapper">
                    <img src="{{asset('new-layouts/assets/image/stack/stack_3.webp')}}" alt="Image 3" />
                    <div class="image-content">
                        <h2>Road less travelled</h2>
                    </div>
                    <div class="para__btn__section">
                        <p>Hidden gems in India</p>
                        <a href=" " target="_blank" rel="noopener noreferrer"
                            class="btn common__btn px-md-4 px-3">Explore</a>
                    </div>
                </div>
                <div class="image-wrapper">
                    <img src="{{asset('new-layouts/assets/image/stack/stack_4.webp')}}" alt="Image 4" />
                    <div class="image-content">
                        <h2>Corporate services</h2>
                    </div>
                    <div class="para__btn__section">
                        <p>Contact us for specialised services</p>
                        <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn">Contact Us</a>
                    </div>
                </div>
                <div class="image-wrapper">
                    <img src="{{asset('new-layouts/assets/image/stack/stack_5.webp')}}" alt="Image 5" />
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
                            <h3 class="">Popular destinations</h3>
                            <p>Popular destinations near Pune</p>
                            <a href=" " target="_blank" rel="noopener noreferrer" class="btn common__btn px-md-4 px-3">
                                Explore More
                            </a>
                        </div>
                        <div class="img__box">
                            <h3 class="">Refer and earn</h3>
                            <p>Contact us to become a partner</p>
                            <a href=" " target="_blank" rel="noopener noreferrer"
                                class="btn common__btn px-md-4 px-3">Contact Us</a>
                        </div>
                        <div class="img__box">
                            <h3 class="">Road less travelled</h3>
                            <p>Hidden gems in India</p>
                            <a href=" " target="_blank" rel="noopener noreferrer"
                                class="btn common__btn px-md-4 px-3">Explore</a>
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
                    <div class="col-md-8 rightCarCategory">

                        <div class="owl-carousel car__category__corousel owl-theme px-2">
                            <div class="item" data-aos="fade-up">
                                <a href="">
                                    <img src="{{asset('new-layouts/assets/image/toyato.webp')}}" alt="Sedan"
                                        class="img-fluid" loading="lazy" />
                                </a>
                                <div class="carCategoryItemsCont">
                                    <h5>Hatchback</h5>
                                    <p>
                                        a small vehicle boasting affordability, convenience and
                                        lesser carbon emission suitable for shorter trips.
                                    </p>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up">
                                <a href="">
                                    <img src="{{asset('new-layouts/assets/image/toyato.webp')}}" alt="SUV"
                                        class="img-fluid" loading="lazy" />
                                </a>
                                <div class="carCategoryItemsCont">
                                    <h5>Sedan</h5>
                                    <p>
                                        a long vehicle with extra boot space and legroom suitable
                                        for long journeys.
                                    </p>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up">
                                <a href="">
                                    <img src="{{asset('new-layouts/assets/image/toyato.webp')}}" alt="Sports Car"
                                        class="img-fluid" loading="lazy" />
                                </a>
                                <div class="carCategoryItemsCont">
                                    <h5>Mpv</h5>
                                    <p>
                                        multipurpose vehicles featuring unmatched comfort best
                                        suited for grand family vacations. We don’t sell mpvs as
                                        suvs
                                    </p>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up">
                                <a href="">
                                    <img src="{{asset('new-layouts/assets/image/toyato.webp')}}" alt="Truck"
                                        class="img-fluid" loading="lazy" />
                                </a>
                                <div class="carCategoryItemsCont">
                                    <h5>Suv</h5>
                                    <p>
                                        The epitome of land travel, experience the luxury of
                                        traveling in comfort, style and class. Best suited for the
                                        longest adventures.
                                    </p>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up">
                                <a href="">
                                    <img src="{{asset('new-layouts/assets/image/toyato.webp')}}" alt="Convertible"
                                        class="img-fluid" loading="lazy" />
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
                            <div class="item" data-aos="fade-up">
                                <a href="">
                                    <img src="{{asset('new-layouts/assets/image/toyato.webp')}}" alt="Electric Car"
                                        class="img-fluid" loading="lazy" />
                                </a>
                                <div class="carCategoryItemsCont">
                                    <h5>Busses</h5>
                                    <p>special offers on busses.</p>
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
                                <a href="javaScript:Void(0);" class="btn common__btn my-2 px-4 px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row Prepare__to__travel__bg">
                    <div class="col-lg-4 d-lg-block d-none"></div>
                    <div class="col-lg-8 pl-0 gl-0">

                        <div class="owl-carousel locations owl-theme">
                            <div class="item">
                                <div class="slideritem">
                                    <img src="{{asset('new-layouts/assets/image/popular-location.webp')}}"
                                        class="img-fluid" alt="Dubai" />
                                    <div class="placePrice">
                                        <div class="lft">
                                            <img src="{{asset('new-layouts/assets/image/logo/download.png')}}"
                                                style="width: 80px; height: 80px" alt="" />
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
                                    <img src="{{asset('new-layouts/assets/image/New Project (3).png')}}"
                                        class="img-fluid" alt="London" />
                                    <div class="placePrice">
                                        <div class="lft">
                                            <img src="{{asset('new-layouts/assets/image/logo/download.png')}}"
                                                style="width: 80px; height: 80px" alt="" />
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
                                    <img src="{{asset('new-layouts/assets/image/New Project (4).png')}}"
                                        class="img-fluid" alt="San Francisco" />
                                    <div class="placePrice">
                                        <div class="lft">
                                            <img src="{{asset('new-layouts/assets/image/logo/download.png')}}"
                                                style="width: 80px; height: 80px" alt="" />
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
        <section class="snap-section testimonial__section py-md-5 py-3">
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
                                <img src="{{asset('new-layouts/assets/image/driver/vechileType/car-driver.png')}}"
                                    alt="" class="img-fluid" />
                            </div>
                            <div class="card__description">
                                <h6 class="text-center">Car Driver</h6>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="card vechile__Type px-4 py-md-4 py-3">
                            <div class="card-img text-center">
                                <img src="{{asset('new-layouts/assets/image/driver/vechileType/tour-bus.png')}}" alt=""
                                    class="img-fluid" />
                            </div>
                            <div class="card__description">
                                <h6 class="text-center">Bus Driver</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="card vechile__Type px-4 py-md-4 py-3">
                            <div class="card-img text-center">
                                <img src="{{asset('new-layouts/assets/image/driver/vechileType/bus.png')}}" alt=""
                                    class="img-fluid" />
                            </div>
                            <div class="card__description">
                                <h6 class="text-center">School Bus</h6>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="card vechile__Type px-4 py-md-4 py-3">
                            <div class="card-img text-center">
                                <img src="{{asset('new-layouts/assets/image/driver/vechileType/valet.png')}}" alt=""
                                    class="img-fluid" />
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
                        <h4 class="section__heading_color">Why Hire Team Drivers?</h4>
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
                                <h5>Prefered Driver Language</h5>
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
        <section class="py-md-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 testimonial-header mb-3">
                        <h4 class="testimonial-heading mb-0 heading__text__color text-md-left text-center">
                          	Popular Destinations Near Pune
                        </h4>
                    </div>
                    <div class="col-12">
                        <div class="">
                            <div class="owl-carousel owl-theme cab__cities_We_Serve__carousel">
                                <div class="item">
                                    <div class="slideritem">
                                        <a href="pune">
                                            <div class="city_images">
                                                <img src="{{asset('new-layouts/assets/image/city-icon/cities-pune-1.webp')}}"
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
                                                <img src="{{asset('new-layouts/assets/image/city-icon/cities-mumbai-6.webp')}}"
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
                                                <img src="{{asset('new-layouts/assets/image/city-icon/cities-thane-icon.webp')}}"
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
                                                <img src="{{asset('new-layouts/assets/image/city-icon/cities-nashik1-icon.webp')}}"
                                                    alt="" />
                                                <div class="img__overlay"></div>
                                                <h4 class="city__name">Nashik</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slideritem">
                                        <a href="/aurangabad">
                                            <div class="city_images">
                                                <img src="{{asset('new-layouts/assets/image/city-icon/cities-aurangabad-icon.webp')}}"
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
                                                <img src="{{asset('new-layouts/assets/image/city-icon/cities-kolhapur-icon.webp')}}"
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
                                                <img src="{{asset('new-layouts/assets/image/city-icon/cities-pune-1.webp')}}"
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
                                                <img src="{{asset('new-layouts/assets/image/city-icon/cities-ahmednagar-icon.webp')}}"
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
                                                <img src="{{asset('new-layouts/assets/image/city-icon/cities-jalgaon-icon.webp')}}"
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
                                                <img src="{{asset('new-layouts/assets/image/city-icon/cities-dhule-icon.webp')}}"
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
                                                <img src="{{asset('new-layouts/assets/image/city-icon/cities-sanghli-4.webp')}}"
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

        <section class="py-md-0 py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 px-0">
                        <img src="{{asset('new-layouts/assets/image/banner/driver-app-layout-img.png')}}" alt="" />
                    </div>
                    <div class="col-md-5 pt-md-0 pt-3 d-flex align-items-center">
                        <div class="text-md-left text-center">
                            <h2>Simplify Car Ownership</h2>
                            <p class="text-muted">
                                Download the DriveU app on iOS / Android phones for a seamless
                                car ownership experience. Track all your bookings and get
                                rewarded for every transaction.
                            </p>

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
   
    @endsection
    @section('inline-js')
    <script src="{{asset('new-layouts/assets/js/driver.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACiii2Kp1VXRckQoTy_MYZcLkS0wEKhBE&libraries=places">
    </script>

    <script>
    function initAutocomplete() {
        const pickupInput = document.getElementById('pickup_location');
        const dropInput = document.getElementById('drop_location');

        const oustationPickupInput = document.getElementById('outstation_pickup_location');
        const outstationDropInput = document.getElementById('outstation_drop_location');

        const pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput);
        const dropAutocomplete = new google.maps.places.Autocomplete(dropInput);

        const outstationPickupAutocomplete = new google.maps.places.Autocomplete(oustationPickupInput);
        const outstationDropAutocomplete = new google.maps.places.Autocomplete(outstationDropInput);

        // Set the data fields to return
        pickupAutocomplete.setFields(['place_id', 'geometry', 'name']);
        dropAutocomplete.setFields(['place_id', 'geometry', 'name']);

        // Set the data fields to return
        outstationPickupAutocomplete.setFields(['place_id', 'geometry', 'name']);
        outstationDropAutocomplete.setFields(['place_id', 'geometry', 'name']);
    }



    // Call initAutocomplete when the window loads
    window.onload = initAutocomplete;
    </script>

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
                "url('{{asset('new-layouts/assets/image/driver/bg/cab-bg2.png')}}')"
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
                    "url('{{asset('new-layouts/assets/image/driver/bg/cab-bg2.png')}}')"
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
                ${
                  roomCount > 1
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
    document
        .getElementById("ride-type")
        .addEventListener("change", function() {
            var rideType = this.value;
            var returnDateField = document.getElementById("return-date-field");

            if (rideType === "round-trip") {
                returnDateField.classList.remove("d-none");
                adjustColumnWidths(false); // Set columns for round-trip
            } else {
                returnDateField.classList.add("d-none");
                adjustColumnWidths(true); // Set columns for one-way
            }
        });

    function adjustColumnWidths(isOneWay) {
        var fromField = document.getElementById("from-field");
        var toField = document.getElementById("to-field");

        // Adjust the widths of 'FROM' and 'TO' fields based on the ride type
        if (isOneWay) {
            fromField.classList.replace("col-md-2", "col-md-3");
            toField.classList.replace("col-md-2", "col-md-3");
        } else {
            fromField.classList.replace("col-md-3", "col-md-2");
            toField.classList.replace("col-md-3", "col-md-2");
        }
    }
    </script>
    <script>
    document.getElementById('trip-type-outstation').addEventListener('change', function() {
        var returnDateField = document.getElementById('return-date-outstation');
        if (this.value === 'round-trip') {
            returnDateField.style.display = 'block'; // Show Return Date
        } else {
            returnDateField.style.display = 'none'; // Hide Return Date
        }
    });
    </script>


@endsection
