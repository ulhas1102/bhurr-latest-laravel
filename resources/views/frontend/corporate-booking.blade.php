@extends('frontend-layout.app')
@section('title', 'Bhurr Corporate Booking - Reliable Rideshare And Outstation Cabs')
@section('description' , 'Simplify corporate travel with Bhurr	 reliable rideshare and outstation cab services. Affordable, flexible, and tailored for business needs. Book now!')
@section('inline-css')
  <style>
    .corporate-booking .corporate-booking-banner {
      background-image: url("{{asset('/new-layouts/assets/image/banner/corporate-booking-page.webp')}}");
      background-size: cover;
      background-position: center;
      min-height: 400px;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .corporate-booking .corporate-booking-banner::before {
      position: absolute;
      content: "";
      width: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #00000096;
    }

    .corporate-booking .header-section {
      /* background: #f8f9fa; */
      padding: 40px 0;
      text-align: center;
      color: #fff;
      z-index: 1;
    }

    .corporate-booking .header-section h1 {
      font-weight: 700;
    }

    .corporate-booking .contact-section {
      background: #c40e23;
      color: #fff;
      padding: 30px;
      text-align: center;
    }

    .corporate-booking .card-icon {
      font-size: 2rem;
      color: #c40e23;
      margin-bottom: 15px;
      transition: 0.6s all;
    }

    .corporate-booking .Why_Choose_Us_Section .card {
      transition: 0.3s;
      border-color: #33333341;
      border-radius: 8px;
      text-align: center;
    }

    .corporate-booking .Why_Choose_Us_Section .card:hover {
      box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
        rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
    }

    .corporate-booking .Why_Choose_Us_Section .card:hover .card-icon {
      transform: translateY(-7px);
    }
  </style>

</head>

<body class="corporate-booking">
  @endsection
	
  @section('content')
  <section class="header-section corporate-booking-banner">
    <div class="container" style="z-index: 1;">
      <h1>Premium B2B Cab and Driver Services</h1>
      <p>
        Welcome to Bhurr, your reliable partner for efficient cab and driver
        services tailored for businesses. We offer customized transportation
        solutions for employees, clients, and corporate events. While we’re
        working on our platform to introduce cutting-edge features, we are
        committed to providing a top-notch experience from the day you onboard
        with us.
      </p>
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section class="py-md-5 py-3 Why_Choose_Us_Section">
    <div class="container">
      <h2 class="mb-4 text-center">Why Choose Us?</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <i class="fas fa-cogs card-icon"></i>
              <h5 class="card-title">Tailored Solutions</h5>
              <p class="card-text">
                Custom services to meet your unique transportation needs.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <i class="fas fa-user-shield card-icon"></i>
              <h5 class="card-title">Professional Drivers</h5>
              <p class="card-text">
                Experienced, background-checked drivers focused on safety and
                customer service.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <i class="fas fa-car card-icon"></i>
              <h5 class="card-title">Fleet Variety</h5>
              <p class="card-text">
                Choose from sedans, SUVs, vans, minibuses, and many options to
                suit any group size.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <i class="fas fa-clock card-icon"></i>
              <h5 class="card-title">24/7 Availability</h5>
              <p class="card-text">
                We’re here whenever you need us, day or night.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <i class="fas fa-calendar-check card-icon"></i>
              <h5 class="card-title">Easy Booking System</h5>
              <p class="card-text">
                Effortless scheduling with real-time tracking and invoicing.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <i class="fas fa-briefcase card-icon"></i>
              <h5 class="card-title">Corporate Accounts</h5>
              <p class="card-text">
                Enjoy special rates, simplified billing, and dedicated
                support.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<section class="py-md-5 py-3 bg-light Why_Choose_Us_Section">
    <div class="container">
      <h2 class="mb-4 text-center">Our Services</h2>
      <div class="row">
        <!-- <div class="col-md-3 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <i class="fas fa-users card-icon"></i>
              <h5 class="card-title">Employee Transportation</h5>
              <p class="card-text">Reliable rides for daily commutes.</p>
            </div>
          </div>
        </div> -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <i class="fas fa-handshake card-icon"></i>
              <h5 class="card-title">Client Pickup and Drop-off</h5>
              <p class="card-text">
                Professional transportation for clients.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <i class="fas fa-route card-icon"></i>
              <h5 class="card-title">Event Transportation</h5>
              <p class="card-text">
                Hassle-free logistics for corporate events.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <i class="fas fa-plane card-icon"></i>
              <h5 class="card-title">Airport Transfers</h5>
              <p class="card-text">
                Timely airport transportation with meet-and-greet service.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <section class="py-5 text-center">
    <div class="container">
      <h2>Get Started Today!</h2>
      <p>
        Elevate your business travel with Bhurr. Contact us for a free
        consultation!
      </p>
      <div class="row passenger__details__container bg-transparent">
        <div class="col-12  px-md-5 px-3 py-3 my-3">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input
                type="text"
                class="form-control input"
                id="firstName"
                name="firstName"
                required />
              <label for="firstName" class="user__label">First Name*</label>
            </div>
            <div class="col-md-6 form-group">
              <input
                type="text"
                class="form-control input"
                id="lastName"
                name="lastName"
                required />
              <label for="lastName" class="user__label">Last Name*</label>
            </div>
            <div class="col-md-6 form-group">
              <input
                type="text"
                class="form-control input"
                id="aadharNo"
                name="aadharNo"
                required />
              <label for="aadharNo" class="user__label">Mobile Number*</label>
            </div>
            <div class="col-md-6 form-group">
              <input
                type="text"
                class="form-control input"
                id="emial"
                name="emial"
                required />
              <label for="emial" class="user__label">Email*</label>
            </div>
            <div class="col-md-12 form-group">
              <textarea
                name
                id
                class="form-control"
                placeholder="Write Message Here..."></textarea>
            </div>
            <div class="col-md-12 form-group justify-content-center d-flex">
              <a href="javascript:void(0);"
                class="btn common__btn px-md-5 px-4">Confirm</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
	@endsection
	@section('inline-js')
	@endsection
