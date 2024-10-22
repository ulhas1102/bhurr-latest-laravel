@extends('frontend-layout.app')
@section('title', 'Our Offering - page')
@section('inline-css')

    <style>
      .our__offerings .specialbooking-banner {
        background-image: url("{{asset('new-layouts/assets/image/banner/our-offerings-page.webp')}}");
        background-size: cover;
        background-position: center;
          min-height: 400px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
      }

      .our__offerings .banner-text .careers__heading {
        font-weight: bold;
        overflow: hidden;
        white-space: nowrap;
        width: 0;
        animation: typing 4s steps(30, end) forwards;
        margin: 0;
        color: white;
      }

      @keyframes typing {
        from {
          width: 0;
        }
        to {
          width: 100%;
        }
      }

      @media (max-width: 768px) {
        .our__offerings .career-banner {
          height: 300px;
        }

        .our__offerings .banner-text .careers__heading {
          font-size: 1.5rem;
          animation: typing 3s steps(25, end) forwards;
        }
        .our__offerings .service-card {
          min-height: 230px !important;
        }
        .our__offerings .why-card {
            transition: 0.3s;
        border:1px solid #33333341;
        border-radius: 8px;
        padding: 15px 10px;
        min-height: 300px;
        text-align: center;
        }
        .our__offerings .why-card:hover {
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
          rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        /* border: none; */
        }

        .our__offerings .why-choose-icon-wrapper {
          margin-bottom: 15px;
        }

        .our__offerings .why-content {
          padding-left: 0;
        }
      }
      /* @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: portrait),
        only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape),
        only screen and (min-device-width: 810px) and (max-device-width: 1080px) and (orientation: portrait),
        only screen and (min-device-width: 810px) and (max-device-width: 1080px) and (orientation: landscape),
        only screen and (min-device-width: 834px) and (max-device-width: 1112px) and (orientation: portrait),
        only screen and (min-device-width: 834px) and (max-device-width: 1112px) and (orientation: landscape),
        only screen and (min-device-width: 1024px) and (max-device-width: 1366px) and (orientation: portrait),
        only screen and (min-device-width: 1024px) and (max-device-width: 1366px) and (orientation: landscape) {
        .service-card {
          min-height: 270px !important;
        }
      } */
      /* =================== */
      .our__offerings .service-card {
        transition: 0.3s;
        border:1px solid #33333341;
        border-radius: 8px;
        padding: 15px 10px;
        min-height: 300px;
        text-align: center;
      }

      .our__offerings .service-card:hover {
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
          rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        /* border: none; */
      }

      .our__offerings .service-card .service__icon {
        margin-bottom: 20px;
      }
      .our__offerings .service-card .service__icon {
        font-size: 50px;
        margin-bottom: 20px;
        color: #b61032;
        transition: transform 0.6s ease;
      }
      .our__offerings .service-card:hover .service__icon {
        transform: translateY(-10px);
      }
      /* ============= */
      .our__offerings .why-card {
        position: relative;
        border: 1px solid #e6e6e6;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
      }

      .our__offerings .why-card:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      }

      .our__offerings .why-choose-icon-wrapper {
        color: #b61032;
        font-size: 40px;
        padding: 15px;
        border-radius: 50%;
        display: inline-block;
        flex-shrink: 0;
      }

      .our__offerings .why-content {
        padding-left: 20px;
      }
    </style>
</head>

<body class="our__offerings">
  @endsection
@section('content')
    <section class="specialbooking-banner text-white">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>Cab and Driver for Hire Service</h2>
            <p>
              Welcome to Bhurr! We provide reliable cab and driver services for
              all your transportation needs.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-light">
      <div class="container-fluid py-md-5 py-3">
        <div class="container">
          <div class="row justify-content-center text-center mb-4">
            <h2>Our Services</h2>
          </div>
          <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-4">
              <div class="service-card">
                <div class="service__icon">
                  <i class="fas fa-lightbulb"></i>
                </div>
                <h4>On-Demand Rides</h4>
                <p>
                  Quick and efficient rides available at a your convenience.
                  Book via our app or website.
                </p>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-4">
              <div class="service-card highlighted">
                <div class="service__icon">
                  <i class="fas fa-bullseye"></i>
                </div>
                <h4>Scheduled Rides</h4>
                <p>
                  Plan your trips in advance for airport pickups, meetings, and
                  more.
                </p>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-4">
              <div class="service-card">
                <div class="service__icon">
                  <i class="fas fa-chart-line"></i>
                </div>
                <h4>Corporate Transportation</h4>
                <p>
                  Tailored solutions for events and client pickups, ensuring
                  professionalism.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-4">
              <div class="service-card">
                <div class="service__icon">
                  <i class="fas fa-plane-departure"></i>
                </div>
                <h4>Airport Transfers</h4>
                <p>
                  Stress-free rides to and from the airport with meet-and-greet
                  services.
                </p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- Card 1 -->

            <!-- Card 2 -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-4">
              <div class="service-card highlighted">
                <div class="service__icon">
                  <i class="fas fa-glass-cheers"></i>
                </div>
                <h4>Special Event Transportation</h4>
                <p>
                  Customized transport for weddings, parties, and corporate
                  events.
                </p>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-4">
              <div class="service-card">
                <div class="service__icon">
                  <i class="fas fa-road"></i>
                </div>
                <h4>Long-Distance Rides</h4>
                <p>Comfortable travel for journeys beyond the city limits.</p>
              </div>
            </div>

            <!-- Hidden Services -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-4">
              <div class="service-card">
                <div class="service__icon">
                  <i class="fas fa-car"></i>
                </div>
                <h4>Luxury Vehicle Options</h4>
                <p>
                  Choose from premium cars and SUVs for a stylish travel
                  experience.
                </p>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-4">
              <div class="service-card highlighted">
                <div class="service__icon">
                  <i class="fas fa-bus"></i>
                </div>
                <h4>Group Transportation</h4>
                <p>Vans and minibuses available for larger parties.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container-fluid py-md-5 py-3">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mb-4">
              <h2>Why Choose Us?</h2>
            </div>
          </div>
          <div class="row justify-content-center mt-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 mb-4">
              <div class="why-card d-flex align-items-center rounded">
                <div class="why-choose-icon-wrapper rounded-circle">
                  <i class="fas fa-user-tie"></i>
                </div>
                <div class="why-content pl-3">
                  <h3>Professional Drivers</h3>
                  <p>Vetted and experienced.</p>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 mb-4">
              <div class="why-card d-flex align-items-center rounded">
                <div class="why-choose-icon-wrapper rounded-circle">
                  <i class="fas fa-calendar-check"></i>
                </div>
                <div class="why-content pl-3">
                  <h3>Easy Booking</h3>
                  <p>User-friendly app and website.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-center mt-4">
            <!-- Card 3 -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 mb-4">
              <div class="why-card d-flex align-items-center rounded">
                <div class="why-choose-icon-wrapper rounded-circle">
                  <i class="fas fa-receipt"></i>
                </div>
                <div class="why-content pl-3">
                  <h3>Transparent Pricing</h3>
                  <p>No hidden fees.</p>
                </div>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 mb-4">
              <div class="why-card d-flex align-items-center rounded">
                <div class="why-choose-icon-wrapper rounded-circle">
                  <i class="fas fa-shield-alt"></i>
                </div>
                <div class="why-content pl-3">
                  <h3>24/7 Availability</h3>
                  <p>We’re here whenever you need us.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
	
	@section('inline-js')

  @endsection