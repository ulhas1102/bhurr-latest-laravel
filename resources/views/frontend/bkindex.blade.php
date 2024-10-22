<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bhurr - Home Page</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- =======custome css======== -->
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <!-- ================= fav icon ======================= -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <!--============font awesome cdn============ -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Owl Carousel CSS -->
    <!-- Owl Carousel CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />
    <!-- owl corousel animation css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <style></style>
  </head>

  <body>
    <!-- =================main header================ -->
    <section class="navigation" id="navigation">
      <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark"
        style="z-index: 100"
      >
        <div class="container">
          <a class="navbar-brand py-0 d-flex align-items-center" href="#">
            <img
              src="../../assets/image/logo/bhurr-logo.png"
              width="150px"
              alt=""
            />
          </a>
          <button
            class="navbar-toggler bg-dark"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sign In</a>
              </li>
              <!-- <li class="nav-item">
                            <button type="button" class="btn nav-link" data-toggle="modal" data-target="#loginModal">
                                <span class="login__icon"><i class="fa-solid fa-user"></i></span> Login
                            </button>
                        </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- =======booking form model====== -->
      <div class="container py-2 bg-white">
        <form action="" class="cab__booking">
          <div class="row">
            <div class="col-md-12 border-bottom">
              <ul
                class="nav nav-pills d-flex w-100"
                id="pills-tab"
                role="tablist"
              >
                <li class="nav-item pb-0" role="presentation">
                  <button
                    class="nav-link active rounded-0"
                    id="pills-home-tab"
                    data-toggle="pill"
                    data-target="#pills-home"
                    type="button"
                    role="tab"
                    aria-controls="pills-home"
                    aria-selected="true"
                  >
                    ONE WAY
                  </button>
                </li>
                <li class="nav-item pb-0" role="presentation">
                  <button
                    class="nav-link rounded-0"
                    id="pills-profile-tab"
                    data-toggle="pill"
                    data-target="#pills-profile"
                    type="button"
                    role="tab"
                    aria-controls="pills-profile"
                    aria-selected="false"
                  >
                    ROUND TRIP
                  </button>
                </li>
                <li class="nav-item pb-0" role="presentation">
                  <button
                    class="nav-link rounded-0"
                    id="pills-contact-tab"
                    data-toggle="pill"
                    data-target="#pills-contact"
                    type="button"
                    role="tab"
                    aria-controls="pills-contact"
                    aria-selected="false"
                  >
                    LOCAL
                  </button>
                </li>
              </ul>
            </div>
            <div class="col-md-10">
              <div class="tab-content" id="pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="pills-home"
                  role="tabpanel"
                  aria-labelledby="pills-home-tab"
                >
                  <div class="form-row">
                    <div class="col-md-3 px-md-3 align-items-end">
                      <label class="mb-0" for="from">SELECT CITY</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Pune"
                      />
                    </div>
                    <div class="col-md-3 px-md-3 align-items-end">
                      <label class="mb-0" for="from">SELECT PACKAGE</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Mumbai"
                      />
                    </div>

                    <div class="col-md-2 px-md-3">
                      <label class="mb-0" for="from">PICK UP</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="09-06-24"
                      />
                    </div>

                    <div class="col-md-2 px-md-3">
                      <label class="mb-0" for="from">PICK UP AT</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="12:40"
                      />
                    </div>
                    <div class="col-md-2 px-md-3">
                      <label class="mb-0" for="from">Persons</label>
                      <input
                        type="number"
                        class="form-control"
                        placeholder="1"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-profile"
                  role="tabpanel"
                  aria-labelledby="pills-profile-tab"
                >
                  <div class="form-row">
                    <div class="col-md-2 align-items-end">
                      <label class="mb-0" for="from">SELECT CITY</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Pune"
                      />
                    </div>

                    <div class="col-md-2 align-items-end">
                      <label class="mb-0" for="from">SELECT PACKAGE</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Mumbai"
                      />
                    </div>

                    <div class="col-md-2">
                      <label class="mb-0" for="from">PICK UP</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="dd-mm-yyyy"
                      />
                    </div>
                    <div class="col-md-2 px-md-3">
                      <label class="mb-0" for="from">RETURN</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="dd-mm-yyyy"
                      />
                    </div>

                    <div class="col-md-2">
                      <label class="mb-0" for="from">PICK UP AT</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="12:40"
                      />
                    </div>
                    <div class="col-md-2">
                      <label class="mb-0" for="from">Persons</label>
                      <input
                        type="number"
                        class="form-control"
                        placeholder="1"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-contact"
                  role="tabpanel"
                  aria-labelledby="pills-contact-tab"
                >
                  <div class="form-row">
                    <div class="col-md-3 px-md-3 align-items-end">
                      <label class="mb-0" for="from">SELECT CITY</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Mumbai"
                      />
                    </div>

                    <div class="col-md-3 px-md-3 align-items-end">
                      <label class="mb-0" for="from">SELECT PACKAGE</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Pune"
                      />
                    </div>
                    <!-- <div class="col-md-3 px-md-3">
                                    <label class="mb-0" for="from">TO</label>
                                    <input type="text" class="form-control" placeholder="enter city">
                                </div> -->

                    <div class="col-md-2 px-md-3">
                      <label class="mb-0" for="from">PICK UP</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="dd-mm-yyyy"
                      />
                    </div>

                    <div class="col-md-2 px-md-3">
                      <label class="mb-0" for="from">PICK UP AT</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="12:40"
                      />
                    </div>
                    <div class="col-md-2 px-md-3">
                      <label class="mb-0" for="from">Persons</label>
                      <input
                        type="number"
                        class="form-control"
                        placeholder="1"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 justify-content-center d-flex align-items-end">
              <button
                type="submit"
                class="btn btn-submit btn-block common__btn px-md-4"
              >
                Search
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!--==================== login and registration model ================== -->
    <!-- ======Login Modal====== -->
    <div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="loginModalLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered regestration__modal"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">User Login</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Login Form -->
            <form>
              <div class="form-group">
                <!-- <label for="loginEmail">Email address</label> -->
                <input
                  type="email"
                  class="form-control"
                  id="loginEmail"
                  aria-describedby="emailHelp"
                  placeholder="Enter email"
                />
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                         else.</small> -->
              </div>
              <div class="form-group">
                <!-- <label for="loginPassword">Password</label> -->
                <input
                  type="password"
                  class="form-control"
                  id="loginPassword"
                  placeholder="Password"
                />
              </div>
              <div class="justify-content-center d-flex align-items-end">
                <button
                  type="submit"
                  class="btn common__btn_two px-md-4 px-3"
                  style="border-radius: 12px"
                >
                  Submit
                </button>
              </div>
              <div class="justify-content-end d-flex">
                <a
                  type="submit"
                  class="text-white"
                  onclick="openRegistrationModal()"
                  >Registration</a
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ===regestration model==== -->
    <div
      class="modal fade p-0"
      id="registrationModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="registrationModalLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered regestration__modal"
        role="document"
      >
        <div class="modal-content">
          <!-- <div class="text-center  justify-content-center">
             <h5 class="modal-title">Regestration</h5>
         </div> -->
          <div class="modal-header">
            <h5 class="modal-title" id="registrationModalLabel">
              Registration
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Registration Form -->
            <form>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Firstname"
                  />
                </div>
                <div class="col-md-6 form-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Lastname"
                  />
                </div>
              </div>
              <div class="form-row form-group">
                <!-- <label for="registrationName">Name</label> -->
                <div class="col-md-12">
                  <input
                    type="text"
                    class="form-control"
                    id="registrationName"
                    placeholder="Mobile number"
                  />
                </div>
              </div>
              <div class="form-row form-group">
                <!-- <label for="registrationEmail">Email address</label> -->
                <div class="col-md-12">
                  <input
                    type="email"
                    class="form-control"
                    id="registrationEmail"
                    aria-describedby="emailHelp"
                    placeholder="Enter email"
                  />
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                 anyone
                                 else.</small> -->
                </div>
              </div>
              <div class="form-row form-group">
                <!-- <label for="registrationPassword">Password</label> -->
                <div class="col-12">
                  <input
                    type="password"
                    class="form-control"
                    id="registrationPassword"
                    placeholder="Password"
                  />
                </div>
              </div>
              <div class="form-row form-group">
                <!-- <label for="registrationPassword">Password</label> -->
                <div class="col-12">
                  <input
                    type=" password"
                    class="form-control"
                    id="registrationPassword"
                    placeholder="Confirm Password"
                  />
                </div>
              </div>
              <div class="form-row justify-content-center">
                <button
                  type="submit"
                  class="btn common__btn_two px-md-4 px-3"
                  style="border-radius: 12px"
                >
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <section class="snap-section py-0">
        <div
          id="carouselExampleIndicators"
          class="carousel slide carousel-fade"
          data-ride="carousel"
        >
          <div class="d-flex">
            <a class="play__pause__btn">
              <div class="">
                <span id="pauseButton" class="text-white"
                  ><i class="fa-solid fa-pause"></i
                ></span>
              </div>
            </a>
            <div class="indicator-action__btn m-auto">
              <div class="indicator-action">
                <span>
                  <a
                    class="carousel-control-prev"
                    href="#carouselExampleIndicators"
                    role="button"
                    data-slide="prev"
                  >
                    <span
                      class="carousel-control-prev-icon"
                      aria-hidden="false"
                    ></span>
                    <span class="sr-only">Previous</span>
                  </a>
                </span>
                <span>
                  <a
                    class="carousel-control-next"
                    href="#carouselExampleIndicators"
                    role="button"
                    data-slide="next"
                  >
                    <span
                      class="carousel-control-next-icon"
                      aria-hidden="false"
                    ></span>
                    <span class="sr-only">Next</span>
                  </a>
                </span>
              </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
              </ol>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item position-relative active">
              <div class="bg__overlay"></div>
              <img
                class="d-block w-100"
                src="../../assets/image/banner/hero__banner5.jpg"
                alt="First slide"
              />
              <div class="carousel-caption d-flex align-items-center">
                <div class="">
                  <h1>
                    Our services – local trips, round trips, corporate trips
                  </h1>
                </div>
              </div>
            </div>
            <div class="carousel-item position-relative">
              <div class="bg__overlay"></div>
              <img
                class="d-block w-100"
                src="../../assets/image/banner/hero__banner7.jpg"
                alt="Second slide"
              />
              <div class="carousel-caption d-flex align-items-center">
                <div class="">
                  <h1>
                    Limitless travel- flexibility, convenience, affordability,
                    peace of mind
                  </h1>
                </div>
              </div>
            </div>
            <div class="carousel-item position-relative">
              <div class="bg__overlay"></div>
              <img
                class="d-block w-100"
                src="../../assets/image/banner/hero__banner8.jpg"
                alt="Third slide"
              />
              <div class="carousel-caption d-flex align-items-center">
                <div class="">
                  <h1>Keep rollin’- our special feature DAILY SETTLEMENTS</h1>
                  <a href="#" class="btn common__btn px-md-4 px-3">Know More</a>
                </div>
              </div>
            </div>
            <div class="carousel-item position-relative">
              <div class="bg__overlay"></div>
              <img
                class="d-block w-100"
                src="../../assets/image/banner/hero__banner4.jpg"
                alt="Fourth slide"
              />
              <div class="carousel-caption d-flex align-items-center">
                <div class="">
                  <h1>
                    Our promise- on time, friendly chauffeurs, expert drivers,
                  </h1>
                </div>
              </div>
            </div>
            <div class="carousel-item position-relative">
              <div class="bg__overlay"></div>
              <img
                class="d-block w-100"
                src="../../assets/image/banner/hero__banner6.jpg"
                alt="Fifth slide"
              />
              <div class="carousel-caption d-flex align-items-center">
                <div class="">
                  <h1>
                    Experience the Future of Travel: World's First Daily Bill
                    Settlements
                  </h1>
                  <a href="#" class="btn common__btn px-md-4 px-3">Book Now</a>
                </div>
              </div>
            </div>
            <div class="carousel-item position-relative">
              <div class="bg__overlay"></div>
              <img
                class="d-block w-100"
                src="../../assets/image/banner/hero__banner3.jpg"
                alt="six slide"
              />
              <div class="carousel-caption d-flex align-items-center">
                <div class="">
                  <h1>Prefered Driver Language</h1>
                  <a href="#" class="btn common__btn px-md-4 px-3">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section
        class="snap-section py-md-5 py-3 gallery__section overflow-hidden"
      >
        <div class="container-fluid px-0">
          <div class="row">
            <div class="col-12 mb-md-4">
              <h2 class="mb-0 pl-3">A class apart. it’s the new standard</h2>
              <p class="mb-0 pl-3">
                Discover our world of exclusive offers and services that change
                the way you travel.
              </p>
            </div>
            <div class="col-12">
              <div class="gallery">
                <div class="img__box">
                  <!-- <img src="../../assets/image/stack/stack_1.webp" alt=""> -->
                  <h3 class="">Popular destinations</h3>
                  <p>Popular destinations near Pune</p>
                  <a
                    href=" "
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn common__btn px-md-4 px-3"
                  >
                    Explore More</a
                  >
                </div>
                <div class="img__box">
                  <h3 class="">Refer and earn</h3>
                  <p>contact us to become a partner</p>
                  <a
                    href=" "
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn common__btn px-md-4 px-3"
                    >Contact Us</a
                  >
                </div>
                <div class="img__box">
                  <h3 class="">Road less travelled</h3>
                  <p>hidden gems in India</p>
                  <a
                    href=" "
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn common__btn px-md-4 px-3"
                    >Explore
                  </a>
                </div>
                <div class="img__box">
                  <h3 class="">Corporate services</h3>
                  <p>contact us for specialised services</p>
                  <a
                    href=" "
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn common__btn"
                    >Contact Us</a
                  >
                </div>
                <div class="img__box">
                  <h3 class="">Talk to us</h3>
                  <p>Talk to us</p>
                  <a
                    href=" "
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn common__btn"
                    >Contact Us</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-md-5 py-3 car__category__section">
        <div class="container">
          <div class="row justify-content-center">
            <div
              class="col-md-12 justify-content-center align-items-center d-flex"
            ></div>
            <div class="col-md-10 rightCarCategory">
              <div class=" ">
                <h2 class="heading__text__color">Explore Car Categories</h2>
                <p class="subheading__text__color">
                  Find the perfect car for your journey, whether it's for a
                  family trip or a solo adventure.
                </p>
              </div>
              <div class="owl-carousel car__category__corousel owl-theme">
                <div class="item">
                  <a href="">
                    <img
                      src="../../assets/image/toyato.webp"
                      alt="Sedan"
                      class="img-fluid"
                      loading="lazy"
                    />
                  </a>
                  <div class="carCategoryItemsCont">
                    <h5>Hatchback</h5>
                    <p>
                      a small vehicle boasting affordability, convenience and
                      lesser carbon emission suitable for shorter trips.
                    </p>
                  </div>
                </div>
                <div class="item">
                  <a href="">
                    <img
                      src="../../assets/image/toyato.webp"
                      alt="SUV"
                      class="img-fluid"
                      loading="lazy"
                    />
                  </a>
                  <div class="carCategoryItemsCont">
                    <h5>Sedan</h5>
                    <p>
                      a long vehicle with extra boot space and legroom suitable
                      for long journeys.
                    </p>
                  </div>
                </div>
                <div class="item">
                  <a href="">
                    <img
                      src="../../assets/image/toyato.webp"
                      alt="Sports Car"
                      class="img-fluid"
                      loading="lazy"
                    />
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
                <div class="item">
                  <a href="">
                    <img
                      src="../../assets/image/toyato.webp"
                      alt="Truck"
                      class="img-fluid"
                      loading="lazy"
                    />
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
                <div class="item">
                  <a href="">
                    <img
                      src="../../assets/image/toyato.webp"
                      alt="Convertible"
                      class="img-fluid"
                      loading="lazy"
                    />
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
                <div class="item">
                  <a href="">
                    <img
                      src="../../assets/image/toyato.webp"
                      alt="Electric Car"
                      class="img-fluid"
                      loading="lazy"
                    />
                  </a>
                  <div class="carCategoryItemsCont">
                    <h5>Busses</h5>
                    <p>special offers on busses.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-9 rightCarCategory">
                        <div class="row" id="carCategoryContainer">
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="">
                                        <img src="../../assets/image/New Project (3).webp" alt="category"
                                            class="img-fluid" loading="lazy">
                                    </a>
                                    <div class="carCategoryItemsCont">
                                        <h5>Category Name</h5>
                                        <p>Category Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="">
                                        <img src="../../assets/image/New Project (3).webp" alt="category"
                                            class="img-fluid" loading="lazy">
                                    </a>
                                    <div class="carCategoryItemsCont">
                                        <h5>Category Name</h5>
                                        <p>Category Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="">
                                        <img src="../../assets/image/New Project (3).webp" alt="category"
                                            class="img-fluid" loading="lazy">
                                    </a>
                                    <div class="carCategoryItemsCont">
                                        <h5>Category Name</h5>
                                        <p>Category Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <div class="col-6">
                                <div class="progress__bar"></div>
                            </div>
                        </div>
                    </div> -->
            <!-- <div class="col-md-12">
                        <div class="progress__bar"></div>
                    </div> -->
          </div>
        </div>
      </section>
      <section class="overflow-hidden">
        <div class="container-fluid px-0">
          <div class="row Prepare__to__travel__bg">
            <div class="col-md-4 align-items-center d-flex pr-0 mr-0">
              <div class="col-12">
                <h2 class="testimonial-heading mb-0 heading__text__color">
                  PREPARE TO TRAVEL
                </h2>
                <p class="testimonial-subheading mb-0 subheading__text__color">
                  Helpful hints for everything from packing to paperwork, so you
                  are fully prepared.
                </p>
                <a
                  href="javaScript:Void(0);"
                  class="btn common__btn my-2 px-4 px-3"
                  >Read More</a
                >
              </div>
            </div>
            <div class="col-md-8 pl-0 gl-0">
              <!-- <div class="col-12 text-center mb-3 ">
                            <h2 class="testimonial-heading mb-0">Popular locations</h2>
                            <p class="testimonial-subheading mb-0">Get ready for your next adventure </p>
                        </div> -->
              <div class="owl-carousel locations owl-theme">
                <div class="item">
                  <div class="slideritem">
                    <img
                      src="../../assets/image/popular-location.webp"
                      class="img-fluid"
                      alt="Dubai"
                    />
                    <div class="placePrice">
                      <div class="lft">
                        <img
                          src="../../assets/image/logo/download.png"
                          style="width: 80px; height: 80px"
                          alt=""
                        />
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
                    <img
                      src="../../assets/image/New Project (3).png"
                      class="img-fluid"
                      alt="London"
                    />
                    <div class="placePrice">
                      <div class="lft">
                        <img
                          src="../../assets/image/logo/download.png"
                          style="width: 80px; height: 80px"
                          alt=""
                        />
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
                    <img
                      src="../../assets/image/New Project (4).png"
                      class="img-fluid"
                      alt="San Francisco"
                    />
                    <div class="placePrice">
                      <div class="lft">
                        <img
                          src="../../assets/image/logo/download.png"
                          style="width: 80px; height: 80px"
                          alt=""
                        />
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
      <!-- <section class="snap-section py-md-5 py-3 Prepare__to__travel__bg">
            <div class="container">
                <div class="row">
                    <div class="cl-12 Prepare__to__travel">
                        <div class="row">
                            <div class="col-12 text-center mb-3">
                                <h2 class="travel-heading mb-0">Prepare to Travel</h2>
                                <p class="travel-subheading mb-0">Get ready for your next adventure</p>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="../../assets/image/New Project (4).webp" class="card-img-top img-fluid"
                                        alt="">
                                    <div class="card-body p-3">
                                        <h5 class="card-title mb-2">Plan Your Itinerary </h5>
                                        <p class="card-text">Learn about the culture, attractions, and local customs of
                                            your
                                            destination.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="../../assets/image/New Project (4).webp" class="card-img-top img-fluid"
                                        alt="">
                                    <div class="card-body p-3">
                                        <h5 class="card-title mb-2">Plan Your Itinerary </h5>
                                        <p class="card-text">Learn about the culture, attractions, and local customs of
                                            your
                                            destination.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="../../assets/image/New Project (4).webp" class="card-img-top img-fluid"
                                        alt="">
                                    <div class="card-body p-3">
                                        <h5 class="card-title mb-2">Plan Your Itinerary</h5>
                                        <p class="card-text">Organize your trip itinerary to make the most of your
                                            travel
                                            time.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="../../assets/image/New Project (4).webp" class="card-img-top img-fluid"
                                        alt="Pack Smart">
                                    <div class="card-body p-3">
                                        <h5 class="card-title mb-2">Pack Smart</h5>
                                        <p class="card-text">Make a packing list and pack light to ensure a hassle-free
                                            journey.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
      <section class="snap-section testimonial__section">
        <div class="container">
          <div class="row">
            <div class="col-12 testimonial-header mb-3">
              <h2 class="testimonial-heading mb-0 heading__text__color">
                What Our Client's Say
              </h2>
              <p class="testimonial-subheading subheading__text__color mb-0">
                Hear from our happy customers
              </p>
            </div>
            <div class="col-12">
              <div class="nonstopSlider">
                <div class="owl-carousel owl-theme">
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
                            convallis commodo.<i
                              class="fas fa-quote-right fa-quote ml-3"
                            ></i>
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
                            convallis commodo.<i
                              class="fas fa-quote-right fa-quote ml-3"
                            ></i>
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
                            convallis commodo.<i
                              class="fas fa-quote-right fa-quote ml-3"
                            ></i>
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
                            convallis commodo.<i
                              class="fas fa-quote-right fa-quote ml-3"
                            ></i>
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
                            convallis commodo.<i
                              class="fas fa-quote-right fa-quote ml-3"
                            ></i>
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
                            convallis commodo.<i
                              class="fas fa-quote-right fa-quote ml-3"
                            ></i>
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
      <!-- Footer -->
      <section class="snap-section py-md-0 py-0">
        <footer class="footer-section pt-md-5 pt-3">
          <div class="footer-top container mb-3">
            <div class="">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="widget company-intro-widget">
                    <a href="/" class="site-logo py-2 px-2">
                      <img
                        src="../../assets/image/logo/bhurr-logo.png"
                        alt=""
                      />
                    </a>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever.
                    </p>
                  </div>
                </div>
                <!-- widget end -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="widget course-links-widget">
                    <h5 class="widget-title">Pages</h5>
                    <ul class="courses-link-list">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Contact us</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Terms & Conditions</a></li>
                      <li><a href="#">Refund</a></li>
                      <!-- <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Web Development</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Apps Development</a></li> -->
                    </ul>
                  </div>
                </div>
                <!-- widget end -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="widget latest-news-widget">
                    <h5 class="widget-title">Services</h5>
                    <ul class="courses-link-list">
                      <li><a href="#">One Way</a></li>
                      <li><a href="#">Round Trip </a></li>
                      <li><a href="#">Local</a></li>
                      <li><a href="#">Corporate</a></li>
                      <!-- <li><a href="#">Refund</a></li> -->
                      <!-- <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Web Development</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Apps Development</a></li> -->
                    </ul>
                  </div>
                </div>
                <!-- widget end -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="widget newsletter-widget">
                    <h5 class="widget-title">Newsletter</h5>
                    <div class="footer-newsletter">
                      <ul class="company-footer-contact-list">
                        <li><i class="fas fa-phone"></i>0123456789</li>
                        <li><i class="fas fa-map-marker-alt"></i> Location</li>
                      </ul>
                      <ul class="social__icon__list">
                        <li>
                          <a href=""><i class="fab fa-linkedin"></i> </a>
                        </li>
                        <li>
                          <a embedehref=""><i class="fab fa-instagram"></i> </a>
                        </li>
                        <li>
                          <a embedehref=""
                            ><i class="fa-brands fa-threads"></i>
                          </a>
                        </li>
                        <li>
                          <a href=""><i class="fab fa-facebook"></i> </a>
                        </li>
                        <li>
                          <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- widget end -->
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 text-center text-center">
                  <span class="copy-right-text"
                    >© 2024
                    <a href="javascript:void(0);">Webwideit.solutions</a> All
                    Rights Reserved.</span
                  >
                </div>
              </div>
            </div>
          </div>
        </footer>
      </section>
    </div>
    <div class="nav-buttons position-fixed d-none">
      <button class="btn__dot mb-2" onclick="scrollToSection(1)"></button>
      <button class="btn__dot mb-2" onclick="scrollToSection(2)"></button>
      <button class="btn__dot mb-2" onclick="scrollToSection(3)"></button>
      <button class="btn__dot" onclick="scrollToSection(4)"></button>
    </div>
    <a href="https://wa.me/9359668593" class="whatsapp-link" target="_blank">
      <img
        src="../../assets/image/whatsapp.png"
        alt="WhatsApp"
        class="whatsapp-icon"
      />
    </a>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="../../assets/js/script.js  "></script>
  </body>
</html>
