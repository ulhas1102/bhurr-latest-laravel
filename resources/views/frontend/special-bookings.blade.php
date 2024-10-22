@extends('frontend-layout.app')
@section('title', 'Special Booking - page')
@section('inline-css')

<style>
  .special-bookings .specialbooking-banner {
    background-image: url("{{asset('/new-layouts/assets/image/banner/special-bookings-page.webp')}}");
    background-size: cover;
    background-position: center;
    min-height: 400px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .special-bookings .specialbooking-banner-two {
    background-image: url("{{asset('/new-layouts/assets/image/banner/special-bookins-page.webp')}}");
    background-size: cover;
    background-position: center;
    min-height: 400px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .special-bookings .specialbooking-banner::before {
    position: absolute;
    content: "";
    width: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #00000096;
  }

  .special-bookings .banner-text {
    font-weight: bold;
    overflow: hidden;
    white-space: nowrap;
    margin: 0;
    z-index: 1;
    color: white;
  }

  @media (max-width: 768px) {
    .special-bookings .career-banner {
      height: 300px;
    }

    .special-bookings .banner-text .careers__heading {
      font-size: 1.5rem;
      animation: typing 3s steps(25, end) forwards;
    }
  }
</style>
</head>

<body class="special-bookings">
  @endsection

  @section('content')

  <div class="container py-md-5 py-3">
    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('/new-layouts/assets/image/banner/special-bookings-page.webp')}}" class="img-fluid" alt="">
      </div>
      <div class="col-md-6">
        <p class="mb-4 text-justify">
          While we cover most of the requirements through normal booking
          channels, sometimes those doesn’t fit for some specific needs.
          For special events or large volume bookings please feel free to
          contact us directly and a person will be provided to you to help
          and get you the best experience and prices.
        </p>
        <p>
          Meanwhile please provide us some details so we could reach you
          and co-ordinate your bookings.
        </p>

      </div>
    </div>
  </div>
  <div class="container py-md-5 py-3">
    <div class="row">
      <div class="col-md-6 order-md-2">
        <img src="{{asset('/new-layouts/assets/image/banner/special-bookins-page.webp')}}" class="img-fluid" alt="">
      </div>
      <div class="col-md-6">
        <p class="mb-4 text-justify">
          While we cover most of the requirements through normal booking
          channels, sometimes those doesn’t fit for some specific needs.
          For special events or large volume bookings please feel free to
          contact us directly and a person will be provided to you to help
          and get you the best experience and prices.
        </p>
        <p>
          Meanwhile please provide us some details so we could reach you
          and co-ordinate your bookings.
        </p>

      </div>
    </div>
  </div>

  <!-- <section style="background-color: #faf7f4">
    <div class="container-fluid py-md-5 py-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 text-center">
            <p class="mb-4 text-justify text-center">
              While we cover most of the requirements through normal booking
              channels, sometimes those doesn’t fit for some specific needs.
              For special events or large volume bookings please feel free to
              contact us directly and a person will be provided to you to help
              and get you the best experience and prices.
            </p>
            <p>
              Meanwhile please provide us some details so we could reach you
              and co-ordinate your bookings.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="specialbooking-banner-two">
    <div class="banner-text">
      <h1 class="animate-text careers__heading"></h1>
    </div>
  </div> -->
  <section style="background-color: #faf7f4">
    <div class="container-fluid py-md-5 py-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h2 class="mb-3 text-justify text-md-center">
              For Special Booking Contact Us
            </h2>
          </div>
        </div>

        <!-- Row for images and headings (one line layout) -->
        <div
          class="row text-center justify-content-around align-items-center">
          <div class="col-12 passenger__details__container">
            <form action="{{ route('store.special.booking') }}" method="POST">
              @csrf
              @if(session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
              @endif
              @if(session('error'))
              <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <div class="row justify-content-md-between d-flex">
                <!-- First Name and Last Name in one row -->
                <div class="col-md-4 form-group">
                  <input
                    type="text"
                    class="form-control input"
                    id="name"
                    name="name"
                    required />
                  <label for="name" class="user__label">Name *</label>
                </div>
                <div class="col-md-4 form-group">
                  <input
                    type="text"
                    class="form-control input"
                    id="number"
                    name="mobile_no"
                    required />
                  <label for="number" class="user__label">Mobile Number *</label>
                </div>
                <div class="col-md-4 form-group">
                  <input
                    type="email"
                    class="form-control input"
                    id="email"
                    name="email"
                    required />
                  <label for="emial" class="user__label">Email *</label>
                </div>

                <!-- Email and Mobile in a row -->
                <div class="col-md-4 form-group">
                  <input
                    type="text"
                    class="form-control input"
                    id="address"
                    name="address"
                    required />
                  <label for="address" class="user__label">Address *</label>
                </div>
                <div class="col-md-4 form-group">
                  <select class="form-control " id="car-class" name="car_class" required="" style="height: 45px;">
                    <option selected="">Select Car Class</option>
                    <option value="hatchback">Hatchback</option>
                    <option value="sedan">Sedan</option>
                    <option value="suv">Suv</option>
                    <option value="cuv">Cuv</option>
                  </select>

                </div>

                <div class="col-md-4 form-group">
                  <input
                    type="number"
                    class="form-control input"
                    id="vehiclevolume"
                    name="vehicle_volume"
                    required />
                  <label for="vehiclevolume" class="user__label">Vehicle Volume *</label>
                </div>

                <!-- Description field in a single row -->
                <div class="col-md-6 form-group">
                  <input
                    type="number"
                    class="form-control input"
                    id="companycontactnumber"
                    name="company_contact_number"
                    required />
                  <label for="companycontactnumber" class="user__label">Company Contact Number *</label>
                </div>
                <div class="col-md-6 form-group">
                  <input
                    type="email"
                    class="form-control input"
                    id="companyemail"
                    name="company_email"
                    required />
                  <label for="companyemail" class="user__label">Company Email *</label>
                </div>

                <!-- Continue Button -->
                <div
                  class="col-md-6 form-group justify-content-center d-flex mx-auto">
                  <button
                    type="submit"
                    class="btn common__btn btn-block px-md-5 px-3">
                    Submit
                  </button>
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