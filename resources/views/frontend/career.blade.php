@extends('frontend-layout.app')
@section('title', 'Join Bhurr - Careers in Rideshare And Outstation Travel')
@section('description', 'Explore exciting career opportunities at Bhurr. Be part of a dynamic team shaping the future of rideshare and outstation travel!')
@section('inline-css')

  <style>
    .career-banner {
      background-image: url("{{asset('new-layouts/assets/image/banner/careers-page.webp')}}");
      background-size: cover;
      background-position: center;
      height: 400px;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .career-banner::before {
      position: absolute;
      content: "";
      width: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #00000096;
    }

    .banner-text .careers__heading {
      font-weight: bold;
      overflow: hidden;
      white-space: nowrap;
      animation: typing 4s steps(30, end) forwards;
      margin: 0;
      color: white;
    }

    @media (max-width: 768px) {
      .career-banner {
        height: 300px;
      }

      .banner-text .careers__heading {
        font-size: 1.5rem;
        animation: typing 3s steps(25, end) forwards;
      }

      .banner-text .careers__subheading {
        font-size: 1.2rem;
        margin-top: 8px;
        animation: spaceInDown 1s ease-in-out 3s forwards;
      }

      /* -------------------- */
      .details__people {
        display: flex;
        justify-content: space-around;
        align-items: center;
      }

      .details__people .details__people__career {
        flex: 1;
        max-width: 100%;
        text-align: center;
      }

      /* Hide the dotted lines on mobile */
      .career__dots {
        display: none;
      }
    }

    /* =================service css================= */
    .career-service-card {
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      border-radius: 15px;
    }

    .career-service-icon {
      font-size: 2rem;
      color: #f00;
    }

    /* =========================why choose car =======================*/

    .career__dots {
      display: inline-block;
      height: 0;
      width: 60px;
      border-bottom: 2px dotted #0b0f2e;
    }
  </style>

</head>

<body class="driver__page__container">
  @endsection
  @section('content')

 
 
  <!-- career code -->
  <div class="career-banner">
    <div class="container">
      <div class="row">
        <div class="col-12 text-white">
          <h1>Your Journey to Hiring Drivers</h1>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid py-md-5 py-3 d-none">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h2 class="mb-4 text-justify text-md-center">
              Why choose Career Driver?
            </h2>
            <p class="text-justify">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Nostrum quas rerum illo, minus, delectus provident nemo iste
              dolores soluta quod, dolore dignissimos qui hic exercitationem
              necessitatibus beatae animi error veniam.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
          </div>
        </div>

        <!-- Row for images and headings (one line layout) -->
        <div
          class="row text-center mt-2 mt-md-5 justify-content-between align-items-center details__people">
          <!-- Image 1 - Drivers -->
          <div class="col-4 col-md-3 details__people__career">
            <div class="image-wrapper">
              <img
                src="{{asset('new-layouts/assets/image/driver/cars/driver (1).png')}}"
                alt="Drivers"
                class="img-fluid" />
            </div>
            <h4 class="mt-3">Career Driver</h4>
          </div>

          <!-- Dotted Line for Desktop -->
          <div class="col-md-1 d-none d-md-block text-center">
            <span class="career__dots"></span>
          </div>

          <!-- Image 2 - Career Driver -->
          <div class="col-4 col-md-3 details__people__career">
            <div class="image-wrapper">
              <img
                src="{{asset('new-layouts/assets/image/driver/cars/driver (1).png')}}"
                alt="Career Driver"
                class="img-fluid" />
            </div>
            <h4 class="mt-3">Career Driver</h4>
          </div>

          <!-- Dotted Line for Desktop -->
          <div class="col-md-1 d-none d-md-block text-center">
            <span class="career__dots"></span>
          </div>

          <!-- Image 3 - Fleet Owners -->
          <div class="col-4 col-md-3 details__people__career">
            <div class="image-wrapper">
              <img
                src="{{asset('new-layouts/assets/image/driver/cars/driver (1).png')}}"
                alt="Fleet Owners"
                class="img-fluid" />
            </div>
            <h4 class="mt-3">Career Driver</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #faf7f4">
    <div class="container-fluid py-md-5 py-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h2 class="mb-2 text-justify text-md-center">Join Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
          </div>
        </div>

        <!-- Row for images and headings (one line layout) -->
        <div
          class="row text-center justify-content-around align-items-center">
          <div class="col-12 passenger__details__container">
            <form>
              <div class="row justify-content-md-between d-flex">
                <!-- First Name and Last Name in one row -->
                <div class="col-md-6 form-group">
                  <input
                    type="text"
                    class="form-control input"
                    id="firstName"
                    name="firstName"
                    required />
                  <label for="firstName" class="user__label">First Name *</label>
                </div>
                <div class="col-md-6 form-group">
                  <input
                    type="text"
                    class="form-control input"
                    id="lastName"
                    name="lastName"
                    required />
                  <label for="lastName" class="user__label">Last Name *</label>
                </div>

                <!-- Email and Mobile in one row -->
                <div class="col-md-6 form-group">
                  <input
                    type="email"
                    class="form-control input"
                    id="email"
                    name="email"
                    required />
                  <label for="email" class="user__label">Email *</label>
                </div>
                <div class="col-md-6 form-group">
                  <input
                    type="tel"
                    class="form-control input"
                    id="mobile"
                    name="mobile"
                    required />
                  <label for="mobile" class="user__label">Mobile *</label>
                </div>

                <!-- Description field in a single row -->
                <div class="col-md-12 form-group">
                  <textarea
                    class="form-control input"
                    id="description"
                    name="description"
                    rows="1"
                    required></textarea>
                  <label for="description" class="user__label">Description *</label>
                </div>

                <!-- Continue Button -->
                <div class="col-md-12 form-group">
                  <div class="row justify-content-center">
                    <div class="col-md-6">
                      <button
                        type="button"
                        class="btn common__btn btn-block"
                        onclick="">
                        Continue
                      </button>
                    </div>
                  </div>
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