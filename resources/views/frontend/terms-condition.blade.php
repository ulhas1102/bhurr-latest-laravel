<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bhurr - Terms & Conditions</title>
        <!-- Bootstrap CSS -->
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            rel="stylesheet">
        <!-- =======custome css======== -->
        <link rel="stylesheet" href="{{asset('new-layouts/assets/css/style.css')}}">
        <!-- ================= fav icon ======================= -->
        <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
        <!--============font awesome cdn============ -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Owl Carousel CSS -->
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <!-- owl corousel animation css -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <style>

    </style>
    </head>

    <body>
        <section class="navigation">
            <nav class="navbar navbar-expand-lg d-lg-block d-none"
                style="z-index: 100; ">
                <div class="container">
                    <a class="navbar-brand py-0 d-flex align-items-center"
                        href="/">
                        <img src="{{asset('new-layouts/assets/image/logo/bhurr-logo.png')}}"
                            width="150px" alt>
                    </a>
                    <button class="navbar-toggler bg-dark" type="button"
                        data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse d-flex flex-column px-0"
                        id="navbarNav">
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
        </section>
        <section class="mobile__menu_car__listing d-lg-none d-block"
            id="mobile__menu">
            <div class="container">
                <div class="row align-items-center py-3">
                    <div class="col-12 d-flex justify-content-between">
                        <div class="align-items-center d-flex">
                            <p class="mb-0 toggle-btn" type="button">
                                <svg class="open-icon" width="24" height="24"
                                    viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3 18V16H21V18H3ZM3 13V11H21V13H3ZM3 6V4H21V6H3Z">
                                    </path>
                                </svg>
                                <svg class="close-icon" width="24" height="24"
                                    viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                    style="display:none;">
                                    <path fill-rule="evenodd"
                                        d="M18.707 4.293a1 1 0 0 1 1.414 1.414L13.414 12l6.707 6.293a1 1 0 0 1-1.414 1.414L12 13.414l-6.293 6.707a1 1 0 1 1-1.414-1.414L10.586 12 3.293 5.707a1 1 0 0 1 1.414-1.414L12 10.586l6.293-6.293z">
                                    </path>
                                </svg>
                            </p>
                        </div>
                        <div class>
                            <a href="/"><img
                                    src="{{asset('new-layouts/assets/image/logo/Bhurr-Logo-new.png')}}"
                                    style="width: 150px;"
                                    alt></a>
                        </div>
                        <div class="align-items-center d-flex">
                            <a class="signup" href="customer-login2"><i
                                    class="fa-solid mr-1 fa-user"></i> Sign</a>
                        </div>
                    </div>
                    <!-- <div class="col-4 justify-content-end d-flex">
                <a class=" text-dark" href="signup.html"><i class="fa-solid mr-1 fa-user"></i> Sign</a>
            </div> -->
                    <div class="col-12">
                        <!-- Offcanvas menu -->
                        <div class="offcanvas" id="offcanvas">
                            <ul
                                class="navbar-nav ml-auto bottom__header Menu px-3 pt-4 "
                                style="row-gap: 12px;">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Account <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Bookings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Available
                                        Routes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Prepare To
                                        Travel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Help &
                                        Support</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="signup.html">Sign
                                        In</a>
                                </li>
                            </ul>
                            <div class=" d-flex mt-3 mx-3">
                                <a href="tel:+1234567890"><i
                                        class="fa-solid fa-phone mr-2"></i>
                                    1234567890</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container py-md-5 py-3 text-justify">
                <div class="row">
                    <div class="col-12 ">
                        <h1 class="text-left">Terms and Conditions</h1>
                        <p>The use of this website is subject to the following
                            terms of use:</p>
                        <ul style="list-style-type: auto; padding-left: 20px;">
                            <li>This document is an electronic record in terms
                                of Information Technology Act, 2000 and rules
                                there under as applicable and the amended
                                provisions pertaining to electronic records in
                                various statutes as amended by the Information
                                Technology Act, 2000. This electronic record is
                                generated by a computer system and does not
                                require any physical or digital signatures.</li>
                            <li>This document is published in accordance with
                                the provisions of Rule 3 (1) of the Information
                                Technology (Intermediaries guidelines) Rules,
                                2011 that require publishing the rules and
                                regulations, privacy policy and Terms of Use for
                                access or usage of domain name
                                <b>https://bhurr.co.
                                    in</b> ('Website'), including the related
                                mobile
                                site and mobile application (hereinafter
                                referred to as 'Platform').</li>
                            <li>The Platform is owned by <b>Bhurr Technologies
                                    LLP</b>,
                                a company incorporated under the Companies Act,
                                1956 with its registered office at <b>Flat no
                                    D11
                                    Sno 56 14 Sada Shubh Complex Navle Bridge
                                    Narhe
                                    Pune Haveli Pune India</b> (hereinafter
                                referred to
                                as ‘Platform Owner’, 'we', 'us', 'our').. </li>
                            <li>Your use of the Platform and services and tools
                                are governed by the following terms and
                                conditions (“Terms of Use”) as applicable to the
                                Platform including the applicable policies which
                                are incorporated herein by way of reference. If
                                You transact on the Platform, You shall be
                                subject to the policies that are applicable to
                                the Platform for such transaction. By mere use
                                of the Platform, You shall be contracting with
                                the Platform Owner and these terms and
                                conditions including the policies constitute
                                Your binding obligations, with Platform Owner.
                                These Terms of Use relate to your use of our
                                website, goods (as applicable) or services (as
                                applicable) (collectively, 'Services'). Any
                                terms and conditions proposed by You which are
                                in addition to or which conflict with these
                                Terms of Use are expressly rejected by the
                                Platform Owner and shall be of no force or
                                effect. These Terms of Use can be modified at
                                any time without assigning any reason. It is
                                your responsibility to periodically review these
                                Terms of Use to stay informed of updates..</li>
                            <li>For the purpose of these Terms of Use, wherever
                                the context so requires ‘you’, 'your' or ‘user’
                                shall mean any natural or legal person who has
                                agreed to become a user/buyer on the
                                Platform..</li>
                            <li>Accessing, Browsing Or Otherwise Using The
                                Platform Indicates Your Agreement To All The
                                Terms And Conditions Under These Terms Of Use,
                                So Please Read The Terms Of Use Carefully Before
                                Proceeding.. </li>
                            <li>The use of Platform and/or availing of our
                                Services is subject to the following Terms of
                                Use:
                                <ul
                                    style="list-style-type: disc; padding-left: 20px;">
                                    <li>To access and use the Services, you
                                        agree to provide true, accurate and
                                        complete information to us during and
                                        after registration, and you shall be
                                        responsible for all acts done through
                                        the use of your registered account on
                                        the Platform..</li>
                                    <li>Neither we nor any third parties provide
                                        any warranty or guarantee as to the
                                        accuracy, timeliness, performance,
                                        completeness or suitability of the
                                        information and materials offered on
                                        this website or through the Services,
                                        for any specific purpose. You
                                        acknowledge that such information and
                                        materials may contain inaccuracies or
                                        errors and we expressly exclude
                                        liability for any such inaccuracies or
                                        errors to the fullest extent permitted
                                        by law..</li>
                                    <li>Your use of our Services and the
                                        Platform is solely and entirely at your
                                        own risk and discretion for which we
                                        shall not be liable to you in any
                                        manner. You are required to
                                        independently assess and ensure that the
                                        Services meet your requirements..</li>
                                    <li>The contents of the Platform and the
                                        Services are proprietary to us and are
                                        licensed to us. You will not have any
                                        authority to claim any intellectual
                                        property rights, title, or interest in
                                        its contents. The contents includes and
                                        is not limited to the design, layout,
                                        look and graphics..</li>
                                    <li>You acknowledge that unauthorized use of
                                        the Platform and/or the Services may
                                        lead to action against you as per these
                                        Terms of Use and/or applicable
                                        laws..</li>
                                    <li>You agree to pay us the charges
                                        associated with availing the
                                        Services..</li>
                                    <li>You agree not to use the Platform and/
                                        or Services for any purpose that is
                                        unlawful, illegal or forbidden by these
                                        Terms, or Indian or local laws that
                                        might apply to you.</li>
                                    <li>You agree and acknowledge that website
                                        and the Services may contain links to
                                        other third party websites. On accessing
                                        these links, you will be governed by the
                                        terms of use, privacy policy and such
                                        other policies of such third party
                                        websites. These links are provided for
                                        your convenience for provide further
                                        information..</li>
                                    <li>You understand that upon initiating a
                                        transaction for availing the Services
                                        you are entering into a legally binding
                                        and enforceable contract with the
                                        Platform Owner for the Services.</li>
                                    <li>You shall indemnify and hold harmless
                                        Platform Owner, its affiliates, group
                                        companies (as applicable) and their
                                        respective officers, directors, agents,
                                        and employees, from any claim or demand,
                                        or actions including reasonable
                                        attorney's fees, made by any third party
                                        or penalty imposed due to or arising out
                                        of Your breach of this Terms of Use,
                                        privacy Policy and other Policies, or
                                        Your violation of any law, rules or
                                        regulations or the rights (including
                                        infringement of intellectual property
                                        rights) of a third party.</li>
                                    <li>Notwithstanding anything contained in
                                        these Terms of Use, the parties shall
                                        not be liable for any failure to perform
                                        an obligation under these Terms if
                                        performance is prevented or delayed by a
                                        force majeure event..</li>
                                    <li>These Terms and any dispute or claim
                                        relating to it, or its enforceability,
                                        shall be governed by and construed in
                                        accordance with the laws of India..</li>
                                    <li>All disputes arising out of or in
                                        connection with these Terms shall be
                                        subject to the exclusive jurisdiction of
                                        the courts in <b>Pune and
                                            Maharashtra</b>.</li>
                                    <li>All concerns or communications relating
                                        to these Terms must be communicated to
                                        us using the contact information
                                        provided on this website</li>
                                </ul>
                            </li>
                        </ul>
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
                      target="_blank"
                      ><i class="fab fa-linkedin"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://www.instagram.com/bhurrtechnologies/"
                      target="_blank"
                      ><i class="fa-brands fa-square-instagram"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://www.threads.net/@bhurrtechnologies"
                      target="_blank"
                      ><i class="fa-brands fa-square-threads"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://www.facebook.com/bhurrtechnologies"
                      target="_blank"
                      ><i class="fab fa-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a href="https://x.com/letsgobhurr" target="_blank"
                      ><i class="fa-brands fa-square-x-twitter"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://www.youtube.com/@bhurrtechnologies"
                      target="_blank"
                      ><i class="fa-brands fa-youtube"></i
                    ></a>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Owl Carousel JS -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="{{asset('new-layouts/assets/js/script.js')}}"></script>
    </body>