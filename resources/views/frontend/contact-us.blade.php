@extends('frontend-layout.app')
@section('title', 'Contact Us')
@section('inline-css')
<style>
  .social-icon {
    font-size: 25px;
    margin-right: 20px;
    transition: color 0.3s ease;
    color: black;
  }

  .social-icon.twitter:hover {
    color: #1da1f2;
  }

  .social-icon.linkedin:hover {
    color: #0077b5;
  }

  .social-icon.instagram:hover {
    color: #c13584;
  }

  .contact_details_icons {
    font-size: 18px;
    color: black;
  }

  .contact-section {
    padding: 50px 0;
  }

  .card {
    border: none;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    min-height: 275px;
  }

  .map-container {
    height: 200px;
    border-radius: 8px;
    overflow: hidden;
  }

  .social-icons i {
    font-size: 24px;
    margin: 10px;
    color: #007bff;
    transition: color 0.3s;
  }

  .social-icons i:hover {
    color: #0056b3;
  }

  .contact-section {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  .contactus-banner {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 400px;
    background-size: cover;
    background-position: center;
    text-align: center;
    background-image: url("{{asset('new-layouts/assets/image/search-bg/search-section-Background-Image.webp')}}");
    color: white !important;
  }
</style>
</head>

<body class="driver__page__container">
  @endsection

  @Section('content')
  <section class="contactus-banner">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="banner-text">
            <h1>Contact Us</h1>
            <p>
              <a href="#" class="">Home</a> /
              Contact Us
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-md-5 py-3">
    <div class="contact-section container">
      <div class="row">
        <!-- Left Column with Form -->
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <div class="passenger__details__container p-4"
            style="background-color: transparent;">
            <form action="{{ route('store.contact.form') }}" method="POST">
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
              <div class="row justify-content-md-between">
                <!-- First Name and Last Name in one row -->
                <div class="col-md-6 form-group">

                  <input
                    type="text"
                    class="form-control input"
                    id="firstName"
                    name="first_name"
                    required />
                  <label for="firstName" class="user__label">First Name
                    *</label>
                </div>
                <div class="col-md-6 form-group">

                  <input
                    type="text"
                    class="form-control input"
                    id="lastName"
                    name="last_name"
                    required />
                  <label for="lastName" class="user__label">Last Name
                    *</label>
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
                    name="mobile_no"
                    required />
                  <label for="mobile" class="user__label">Mobile *</label>
                </div>

                <!-- Description field in a single row -->
                <div class="col-md-12 form-group">

                  <textarea
                    class="form-control input"
                    id="description"
                    name="description"
                    rows="4"
                    required></textarea>
                  <label for="description" class="user__label">Description
                    *</label>
                </div>

                <!-- Continue Button with Large Bootstrap Style -->
                <div class="col-md-12 form-group">
                  <div class="d-flex justify-content-center">
                    <button
                      type="submit"
                      class="btn common__btn btn-lg ">
                      Submit
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Right Column with Contact Information and Map -->
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <div class="contact-info">
            <h2>Get in Touch</h2>
            <div>
              <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequatur ducimus quas nisi? Repellendus recusandae aliquam,
                placeat rem doloribus quidem a quaerat fuga deserunt? Culpa
                atque quo velit laborum vel deleniti.
              </p>
              <p class="address">
                <i class="fas fa-map-marker-alt mr-2"></i>
                Narhe, Pune, India.
              </p>
              <p class="email">
                <i class="fas fa-envelope mr-2"></i>
                <a href="mailto:admin@bhurr.co.in">admin@bhurr.co.in</a>
              </p>
              <p class="phone">
                <i class="fas fa-phone mr-2"></i>

                <a href="tel:+020-66892109">020-66892109</a>
              </p>
            </div>
            <h3>Follow Us On</h3>
            <div
              class="col-md-6 justify-content-md-center justify-content-left d-flex">
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
        </div>
      </div>
    </div>
  </section>
  @endsection