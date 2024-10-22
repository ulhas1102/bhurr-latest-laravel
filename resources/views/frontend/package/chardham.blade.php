@extends('frontend-layout.app')
@section('title', 'chardham - page')
@section('inline-css')

<style>
    .banner {
        position: relative;
        background-image:url("{{asset('new-layouts/assets/image/popular-route/dagdushet.webp')}}");
        /* Add your banner image */
        background-size: cover;
        background-position: center;
        height: 400px;
        color: white;
    }

    .banner .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
    }

    .banner-content {
        position: relative;
        z-index: 2;
        text-align: center;
        padding-top: 150px;
    }

    .package-description {
        background-color: #f9f9f9;
    }

    .booking-form {
        /* padding: 20px; */
        background-color: #ffffff;
        border-radius: 8px;
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
    }

    .highlight__ {
        display: flex;
        align-items: center;
        margin-bottom: 15px;

    }

    .highlight__ p {
        margin-bottom: 0;
    }

    .highlight__ i {
        font-size: 24px;
        color: #b61032;
        margin-right: 10px;
    }
</style>
</head>

<body class="driver__page__container">
    @endsection

    @section('content')

    <!-- Banner Section -->
    <section class="banner">
        <div class="overlay"></div>
        <div class="banner-content">
            <h1>Choose Your Cab Package</h1>
            <p>Book the best cab packages for your routes</p>
        </div>
    </section>

    <!-- Package Description -->
    <section class="package-description py-md-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center mb-4">Our Cab Packages</h2>
                    <p>
                        Whether you're planning a one-way trip, round trip, or a local ride, we have the perfect package for you.
                        Our cab services are designed to provide you with comfort, safety, and affordability. Explore our
                        wide range of routes and select the best package that fits your needs.
                    </p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-center mb-4">Why Choose Us?</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="highlight__">
                                <i class="fas fa-car"></i>
                                <p>Wide range of vehicles: Sedans, SUVs, and Hatchbacks available.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="highlight__">
                                <i class="fas fa-map-marked-alt"></i>
                                <p>Flexible routes: Book for local, one-way, or round trips.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="highlight__">
                                <i class="fas fa-shield-alt"></i>
                                <p>Safety assured: Verified drivers and sanitized cabs for your safety.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="highlight__">
                                <i class="fas fa-clock"></i>
                                <p>24/7 Service: We are available round the clock to serve you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Booking Form -->
    <section class="booking-form-section py-md-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center mb-4">Book Your Cab Tour Package</h3>
                    <div class="booking-form passenger__details__container ">
                        <form>
                            <div class="form-row">
                                <!-- Start Address -->
                                <div class="form-group col-md-6">
                                    <input type="text" id="startAddress" class="form-control input" placeholder="" required>
                                    <label for="startAddress" class="user__label">Start Address</label>
                                </div>

                                <!-- Tour Name Selection -->
                                <div class="form-group col-md-6">
                                    <label for="tourName" class="user__label">Select Tour Package</label>
                                    <select id="tourName" class="form-control input">
                                        <option value="">Select a Tour</option>
                                        <option value="city-tour">City Tour</option>
                                        <option value="hill-station">Hill Station Tour</option>
                                        <option value="beach-trip">Beach Trip</option>
                                    </select>
                                </div>

                                <!-- Date Selection -->
                                <div class="form-group col-md-6">
                                    <input type="text" id="departDate" class="form-control input" required>
                                    <label for="departDate" class="user__label">Depart Date</label>

                                </div>

                                <!-- Time Selection -->
                                <div class="form-group col-md-6">
                                    <input type="text" id="departTime" class="form-control input" required>
                                    <label for="departTime" class="user__label">Depart Time</label>
                                </div>

                                <!-- Number of Persons -->
                                <div class="form-group col-md-12">
                                    <input type="number" id="persons" class="form-control input" min="1" max="10" placeholder="" required>
                                    <label for="persons" class="user__label">Number of Persons</label>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center col-md-12">
                                    <button type="submit" class="btn common__btn px-md-5 px-3">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection
    @section('inline-js')
    @endsection