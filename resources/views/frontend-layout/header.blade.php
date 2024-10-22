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
                    <a class="nav-link" href="{{ url('contact-us') }}"><i class="fa-solid mr-1 fa-headphones"></i> Contact Us</a>
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
                    <a class="nav-link" href="{{ url('prepare-to-travel')}}">Prepare To Travel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogs">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about-us') }}">About</a>
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
                            <a class="nav-link" href="{{ url('prepare-to-travel') }}">Prepare To Travel</a>
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