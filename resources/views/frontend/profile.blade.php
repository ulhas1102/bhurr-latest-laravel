<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhurr - Home Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- =======custome css======== -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <!-- ================= fav icon ======================= -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <!--============font awesome cdn============ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Owl Carousel CSS -->
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- owl corousel animation css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>

    </style>
</head>

<body>
    <section class="navigation" id="navigation">
        <nav class="navbar navbar-expand-lg d-lg-block d-none" style="z-index: 100; ">
            <div class="container">
                <a class="navbar-brand py-0 d-flex align-items-center" href="{{url('/')}}">
                     <img src="{{asset('new-layouts/assets/image/logo/bhurr_logo_315x90.png')}}" width="150px" alt="" />
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
    <section class="mobile__menu_car__listing d-lg-none d-block" id="mobile__menu">
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-12 d-flex justify-content-between">
                    <div class="align-items-center d-flex">
                        <p class="mb-0 toggle-btn" type="button">
                            <svg class="open-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 18V16H21V18H3ZM3 13V11H21V13H3ZM3 6V4H21V6H3Z">
                                </path>
                            </svg>
                            <svg class="close-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" style="display:none;">
                                <path fill-rule="evenodd"
                                    d="M18.707 4.293a1 1 0 0 1 1.414 1.414L13.414 12l6.707 6.293a1 1 0 0 1-1.414 1.414L12 13.414l-6.293 6.707a1 1 0 1 1-1.414-1.414L10.586 12 3.293 5.707a1 1 0 0 1 1.414-1.414L12 10.586l6.293-6.293z">
                                </path>
                            </svg>
                        </p>
                    </div>
                    <div class="">
                        <a href="{{url('/')}}"><img src="{{asset('frontend/assets/image/logo/Bhurr-Logo-new.png')}}" style="width: 150px;"
                                alt=""></a>
                    </div>
                    <div class="align-items-center d-flex">
                        @if (Auth::check())
                        <a href="profile" class="btn nav-link">
                            <span class="login__icon"><i class="fa-solid fa-user"></i></span> {{ Auth::user()->name }}
                        </a>
                        @else
                        <a class="signup" href="customer-login2"><i class="fa-solid mr-1 fa-user"></i> Sign</a>
                        @endif
                    </div>
                </div>
              
                <div class="col-12">
                    <!-- Offcanvas menu -->
                    <div class="offcanvas" id="offcanvas">
                        <ul class="navbar-nav ml-auto bottom__header Menu px-3 pt-4 " style="row-gap: 12px;">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Account <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bookings</a>
                            </li>
                            <li class="nav-item">
								<a class="nav-link" href="special-bookings">Special Bookings</a>
							  </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Prepare To Travel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Help & Support</a>
                            </li>
                            <li class="nav-item">
                                
                                @if (Auth::check())
                                <a href="profile" class="btn nav-link">
                                    <span class="login__icon"><i class="fa-solid fa-user"></i></span> {{ Auth::user()->name }}
                                </a>
                                @else
                                <a class="nav-link" href="customer-login2">Sign In</a>
                                @endif
                            </li>
                        </ul>
                        <div class=" d-flex mt-3 mx-3">
                            <a href="tel:+1234567890"><i class="fa-solid fa-phone mr-2"></i> 1234567890</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="min-height:100vh;">
        <div class="container-fluid profile__container py-md-5 py-3 ">
            <div class="row relative" style="min-height: 100vh;">
                <div class="col-md-2  pr-md-0">
                    <div class="list-group" id="list-tab" role="tablist"
                        style="position: -webkit-sticky; position: sticky; top:120px;">
                        <a class="list-group-item list-group-item-action px-2 active" id="list-settings-list"
                            data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i
                                class="fa-solid fa-address-card"></i> Profile</a>
                        <a class="list-group-item list-group-item-action px-2 " id="list-home-list" data-toggle="list"
                            href="#list-home" role="tab" aria-controls="home"><i class="fa-solid fa-file-invoice"></i>
                            Account Overview</a>
                        <a class="list-group-item list-group-item-action px-2" id="list-profile-list" data-toggle="list"
                            href="#list-profile" role="tab" aria-controls="profile"><i
                                class="fa-solid fa-layer-group"></i> Sheduled Booking</a>
                        <a class="list-group-item list-group-item-action px-2" id="list-messages-list"
                            data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><i
                                class="fa-regular fa-address-book"></i> Past Booking</a>
                        <a class="list-group-item list-group-item-action px-2" href="{{ route('logoutcustomer') }}" role="tab">
                                <i class="fa-solid fa-right-from-bracket"></i> Logout
                             </a>
                             
                    </div>
                </div>
                <div class="col-md-10 pl-md-0">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- profile -->
                        <div class="tab-pane fade show active mt-md-0 mt-3" id="list-settings" role="tabpanel"
                            aria-labelledby="list-settings-list">
                            <div class="container">
                                <div id="accordion" class="accordion">
                                    <div class="card mb-4">
                                        <div class="card-header align-items-center justify-content-between d-flex"
                                            id="headingOne">
                                            <h5 class="mb-0">
                                                Personal Details
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show border-bottom"
                                            aria-labelledby="headingOne">
                                            <div class="card-body">
                                                <form id="form-step-1">
                                                    @csrf
                                                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id" id="user_id">
                                                    <div class="form-row">
                                                       
                                                        <div class="form-group col-md-5">
                                                            <label for="firstname">First Name</label>
                                                            <input type="text" class="form-control" id="firstname"
                                                                name="firstname" placeholder="First Name"  value="{{ auth()->check() ? auth()->user()->firstname : '' }}">
                                                        </div>
                                                       
                                                        <div class="form-group col-md-6">
                                                            <label for="lastname">Lastname</label>
                                                            <input type="text" class="form-control" id="lastname"
                                                                name="lastname" placeholder="Enter lastname" value="{{ auth()->check() ? auth()->user()->lastname : '' }}">
                                                        </div>
                                                       

                                                        <div class="form-group col-md-12">
                                                            <label for="gender" class="mr-3">Gender</label>
                                                            <div class=" form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="male" value="male" {{ auth()->user()->gender === 'male' ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="male">
                                                                    Male
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="female" value="female" {{ auth()->user()->gender === 'female' ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="female">
                                                                    Female
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 justify-content-center d-flex ">
                                                            <button type="submit"
                                                                class="btn common__btn px-md-5 px-4">Submit</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header align-items-center justify-content-between d-flex" id="headingTwo">
                                            <h5 class="mb-0">
                                                Contact Details
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse border-bottom" aria-labelledby="headingTwo">
                                            <div class="card-body">
                                                <form id="form-step-2">
                                                    @csrf
                                                    <input type="hidden" value="{{ auth()->user()->id }}" name="user_id" id="user_id">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email"
                                                                value="{{ auth()->check() ? auth()->user()->email : '' }}" name="email" placeholder="Enter Email">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="mobileNumber">Mobile Number</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">+91</span>
                                                                </div>
                                                                <input type="text" class="form-control" id="mobileNumber"
                                                                    value="{{ auth()->check() ? auth()->user()->mobile_number : '' }}" name="mobileNumber"
                                                                    placeholder="Enter Mobile Number">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="address1">Address Line 1</label>
                                                            <input type="text" class="form-control" id="address1"
                                                                value="{{ auth()->check() ? auth()->user()->address1 : '' }}" name="address1" placeholder="Enter Address 1">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="address2">Address Line 2</label>
                                                            <input type="text" class="form-control" id="address2"
                                                                value="{{ auth()->check() ? auth()->user()->address2 : '' }}" name="address2" placeholder="Enter Address 2">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="postalCode">Postal Code</label>
                                                            <input type="text" class="form-control" id="postalCode"
                                                                value="{{ auth()->check() ? auth()->user()->postalCode : '' }}" name="postalCode" placeholder="Enter Postal">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="city">City</label>
                                                            <input type="text" class="form-control" id="city"
                                                                value="{{ auth()->check() ? auth()->user()->city : '' }}" name="city" placeholder="Enter City">
                                                        </div>
                                                        <div class="form-group col-md-6 col-md-4">
                                                            <label for="state">State</label>
                                                            <input type="text" class="form-control" id="state"
                                                                value="{{ auth()->check() ? auth()->user()->state : '' }}" name="state" placeholder="Enter State">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="nationality">Nationality</label>
                                                            <input type="text" class="form-control" id="nationality"
                                                                value="{{ auth()->check() ? auth()->user()->nationality : '' }}" name="nationality" placeholder="Enter nationality">
                                                        </div>
                                                        <div class="form-row col-md-12 d-flex justify-content-center">
                                                            <button type="submit" class="btn common__btn px-md-5 px-4">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header align-items-center justify-content-between d-flex" id="headingThree">
                                            <h5 class="mb-0">
                                                Emergency Details
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse border-bottom" aria-labelledby="headingThree">
                                            <div class="card-body">
                                                <form id="form-step-3">
                                                    @csrf
                                                    <input type="hidden" value="{{ auth()->user()->id }}" name="user_id" id="user_id">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="sameAsContactDetails">
                                                                <label class="form-check-label" for="sameAsContactDetails">
                                                                    Use same contact details for emergency details
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" name="emergency_email" placeholder="Enter Email" value="{{ auth()->check() ? auth()->user()->emergency_email : '' }}" >
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="mobileNumber">Mobile Number</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">+91</span>
                                                                </div>
                                                                <input type="text" class="form-control" id="mobileNumber" name="emergency_mobileNumber" placeholder="Enter Mobile Number" value="{{ auth()->check() ? auth()->user()->emergency_mobile_number : '' }}" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="address1">Address Line 1</label>
                                                            <input type="text" class="form-control" id="address1" name="emergency_address1" placeholder="Enter Address 1" value="{{ auth()->check() ? auth()->user()->emergency_address1 : '' }}" >
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="address2">Address Line 2</label>
                                                            <input type="text" class="form-control" id="address2" name="emergency_address2" placeholder="Enter Address 2" value="{{ auth()->check() ? auth()->user()->emergency_address2 : '' }}" >
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="postalCode">Postal Code</label>
                                                            <input type="text" class="form-control" id="postalCode" name="emergency_postalCode" placeholder="Enter Postal" value="{{ auth()->check() ? auth()->user()->emergency_postalCode : '' }}" >
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="city">City</label>
                                                            <input type="text" class="form-control" id="city" name="emergency_city" placeholder="Enter City" value="{{ auth()->check() ? auth()->user()->emergency_city : '' }}" >
                                                        </div>
                                                        <div class="form-group col-md-6 col-md-4">
                                                            <label for="state">State</label>
                                                            <input type="text" class="form-control" id="state" name="emergency_state" placeholder="Enter State" value="{{ auth()->check() ? auth()->user()->emergency_state : '' }}" >
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="country">Country</label>
                                                            <input type="text" class="form-control" id="country" name="emergency_country" placeholder="Enter Country" value="{{ auth()->check() ? auth()->user()->emergency_nationality : '' }}" >
                                                        </div>
                                                        <div class="form-row col-md-12 d-flex justify-content-center">
                                                            <button type="submit" class="btn common__btn px-md-5 px-4">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--upcomming booking -->
                        <div class="tab-pane fade past__booking" id="list-profile" role="tabpanel"
                            aria-labelledby="list-profile-list">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
									@if($sheduledenquiries->isEmpty())
											<p>No enquiries or payment history available.</p>
										@else
										@foreach($sheduledenquiries as $enquiryId => $payments)
										 @php
                                                $enquiry = $payments->first();
                                            @endphp
                                        <div class="cab__card border py-3 px-3 mb-md-3 my-3">
                                            <div class="row">
                                                <div
                                                    class="col-md-1 justify-content-center align-items-center d-flex mb-md-0 mb-2">
                                                    <div class="">
                                                        <img src="{{asset('frontend/assets/image/logo/ic_prime.png')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="ride-info">
                                                        <div class="ride-time mb-1 d-flex justify-content-between">
                                                         {{--   Wed, Sep 13, 01:47 PM --}}
															<span>{{ \Carbon\Carbon::parse($enquiry->start_journy_date)->format('D, M d') }}</span>
															 @if($enquiry->trip_status == 1)
                                                            <span class="badge badge-success mb-0">completed</span>
                                                            @elseif($enquiry->trip_status == 2)
                                                            <span class="badge badge-secondary mb-0"> On Going</span>
                                                            @elseif($enquiry->trip_status == 3)
                                                            <span class="badge badge-danger mb-0">Cancelled</span>
                                                            @else
                                                            <span class="badge badge-primary mb-0">New</span>
                                                            @endif
                                                        </div>
                                                        <div class="ride-type mb-1">
                                                             {{$enquiry->vehicle_class}}
                                                        </div>
                                                        <div class="ride-address ml-1">
                                                            <span class="pickup-point">
                                                                <span class="status-dot green-dot"></span>
                                                               {{$enquiry->from_location}}
                                                            </span>
                                                            <br>
                                                            <span class="dropoff-point">
                                                                <span class="status-dot red-dot"></span>
                                                                 {{$enquiry->to_location}}  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="col-md-2 col-6 col-6 justify-content-center align-items-center d-flex">
                                                    <div class="ride-fare">
                                                        <h4 class="mb-0"> ₹ {{$enquiry->total_amount}}</h4>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-md-2 col-6 col-6 d-flex justify-content-center align-items-center">
                                                    <div class="">
                                                        <img src="{{asset('frontend/assets/image/logo/driver_placeholder.png')}}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="cab__card__expand border py-md-4 px-md-4 py-3 px-3 mb-md-3 my-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div
                                                        class="rideDetails-header w-100 justify-content-between d-flex">
                                                        <span class="back-arrow "><i
                                                                class="fa-solid fa-arrow-left-long"></i></span>
                                                       <span
                                                            class="rideDetails-id align-items-center d-flex">Trip ID:{{$enquiry->enquiry_id}}</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 justify-content-center d-flex mb-3">
                                                    <div class="rideDetails-time">
                                                        {{ \Carbon\Carbon::parse($enquiry->start_journy_date)->format('D, M d') }}
                                                    </div>
                                                </div>
                                                <div class="col-12 py-3">
                                                    <div class="row">
                                                        <div class="col-2 d-flex align-items-center">
                                                            <img src="{{asset('frontend/assets/image/logo/ic_prime.png')}}" alt="">
                                                        </div>
                                                        <div class="ride-info col-8">
                                                            <div class="ride-type">
                                                                {{$enquiry->vehicle_class}}
                                                            </div>
                                                            <div class="ride-subtype">
                                                                White Tour {{$enquiry->vehicle_type}}
                                                            </div>
                                                        </div>
                                                        <div class="col-2 justify-content-end d-flex">
                                                            <div class="ride-fare">
                                                                ₹{{$enquiry->total_amount}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 ride-address mb-3">
                                                    <div class="ride-time-address">
                                                        <span class="status-dot green-dot"></span>
                                                        <span class="ride-time">01:51
                                                            PM</span>
                                                            {{$enquiry->from_location}}
                                                    </div>
                                                    <div class="ride-time-address">
                                                        <span class="status-dot red-dot"></span>
                                                        <span class="ride-time">03:11
                                                            PM</span>
                                                            {{$enquiry->to_location}}
                                                    </div>
                                                </div>
                                                <div class="col-12 bill__details">
                                                    <h4>Bill Details</h4>
                                                    <div class="bill__item">
                                                        <span>Your Trip</span>
                                                        <span>₹{{$enquiry->total_amount}}</span>
                                                    </div>
                                                    <div class="bill__item">
                                                        <span>Rounded Off</span>
                                                        <span>₹0.28</span>
                                                    </div>
                                                    <div class="bill__item total-bill">
                                                        <span>Total Bill</span>
                                                        <span>₹{{$enquiry->total_amount}}</span>
                                                    </div>
                                                    <div class="bill__item">
                                                        <span>Total Payable</span>
                                                        <span>₹{{$enquiry->total_amount}}</span>
                                                    </div>
                                                    
                                                    <div class="payment-details">
                                                        <h4>Recived Payment:</h4>
                                                        <div class="payment-method">
                                                            
                                                            @if ($payments->isEmpty() || $payments->first()->payment_id === null)
                                                            <p>No payment history available.</p>
                                                        @else
                                                            <div class="payment-details">
                                                                @php
                                                                    $i = 1;
                                                                @endphp
                                                                @foreach ($payments as $payment)

                                                                    @if ($payment->payment_id !== null)
                                                                        <div class="payment-entry">
                                                                            <div class="col-12 text-left">
                                                                              <h6 class="bill__item text-left">Payment {{$i++}} :</h6>
                                                                            </div>
                                                                            <div class="bill__item">
                                                                                <span>
                                                                                    Paid Amount
                                                                                </span>
                                                                                <span>
                                                                                    {{ $payment->paid_amount }}
                                                                                </span>
                                                                            </div>
                                                                            <div class="bill__item">
                                                                                <span>
                                                                                    <p>Payment Date</p>
                                                                                </span>
                                                                                <span>
                                                                                    {{ \Carbon\Carbon::parse($payment->payment_date)->format('D, M d') }}
                                                                                </span>
                                                                            </div>
                                                                            <div class="bill__item">
                                                                                <span>
                                                                                    <p>Payment Mode</p>
                                                                                </span>
                                                                                <span>
                                                                                    {{ $payment->payment_mode }}
                                                                                </span>
                                                                            </div>
                                                                            {{-- <p>Payment ID: {{ $payment->payment_id }}</p>
                                                                            <p>Amount: {{ $payment->paid_amount }}</p>
                                                                            <p>Payment Date: {{ \Carbon\Carbon::parse($payment->payment_date)->format('D, M d') }}</p>
                                                                            <p>Payment Mode: {{ $payment->payment_mode }}</p> --}}
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="bill__item">
                                                        <span>Advance Amount</span>
                                                        <span>₹{{$enquiry->advance_amount}}</span>
                                                    </div>
                                                    {{-- <div class="bill__item">
                                                        <span>Total Paid Amount</span>
                                                        <span>₹{{$enquiry->overallpaidamount}}</span>
                                                    </div> --}}
                                                    <div class="bill__item">
                                                        <span>Remaining Amount</span>
                                                        <span>₹{{$enquiry->remaining_amount}}</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 my-3">
													 @if($enquiry->trip_status == 1)
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-md-5">
                                                            <button class="btn common__btn btn-block my-md-0 my-2">Mail
                                                                Invoice</button>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <button
                                                                class="btn common__btn btn-block my-md-0 my-2">Support</button>
                                                        </div>
														 
                                                    </div>
													@elseif($enquiry->trip_status == 2)
													<div class="row d-flex justify-content-center">
                                                        <div class="col-md-4">
                                                            <button class="btn common__btn btn-block my-md-0 my-2">Mail
                                                                Invoice</button>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <button
                                                                class="btn common__btn btn-block my-md-0 my-2">Support</button>
                                                        </div>
														 <div class="col-md-4">
															 @if($enquiry->trip_status == 3)
															 <button
                                                                class="btn btn-success btn-block my-md-0 my-2">Ride Cancelled</button>
															 @else
                                                            <button
                                                                class="btn common__btn btn-block my-md-0 my-2" data-toggle="modal" data-target="#cancellationModal" data-ride-id="{{$enquiryId}}">Cancel Your Ride</button>@endif
                                                        </div>
                                                    </div>
													@else
													<div class="row d-flex justify-content-center">
                                                        <div class="col-md-4">
                                                            <button class="btn common__btn btn-block my-md-0 my-2">Mail
                                                                Invoice</button>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <button
                                                                class="btn common__btn btn-block my-md-0 my-2" >Support</button>
                                                        </div>
														 <div class="col-md-4">
                                                           @if($enquiry->trip_status == 3)<button
                                                                class="btn btn-success btn-block my-md-0 my-2">Ride Cancelled</button>
															 @else
                                                            <button
                                                                class="btn common__btn btn-block my-md-0 my-2" data-toggle="modal" data-target="#cancellationModal" data-ride-id="{{$enquiryId}}">Cancel Your Ride</button>@endif
                                                        </div>
                                                    </div>
													@endif
													
                                                </div>
                                            </div>
                                        </div>
										 <!-- Modal -->
    <div class="modal fade" id="cancellationModal" tabindex="-1" role="dialog" aria-labelledby="cancellationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="cancellationModalLabel">Are you sure want cancel your ride please read following cancellation policy.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('cancel.ride') }}" method="POST">
                    @csrf
                    <div class="modal-body">
						 <div class="form-group">
							 @if($enquiry->package_type == 2)
							 <ul type="disc">
								 <li>1). 100% refunds on paid amount within 30 mins of booking.</li>
								 <li>2). If booked by 20% advance payment 50% of the paid amount will be refunded if cancelled before 6
								hours from the time of departure.</li>
								 <li>3). If booked by 100% pre-payment 90% of the paid amount will be refunded if cancelled before 6 hours
								from the time of departure.</li>
								 <li>4). No refunds will be made if cancelled within 6 hours of departure.</li>
							 </ul>
							 @elseif($enquiry->package_type == 1)
							 <ul type="disc">
								 <li>1). 100% refunds on paid amount within 30 mins of booking.</li>
								 <li>2). 50% of the paid amount will be refunded if cancelled before 6 hours from the time of departure.</li>
								 <li>3). No refunds will be made if cancelled within 6 hours of departure.</li>
							 </ul>
							 @else
							 <ul type="disc">
								 <li>1). 100% refunds on paid amount within 30 mins of booking.</li>
								 <li>2). 50% of the paid amount will be refunded if cancelled before 6 hours from the time of departure.</li>
								 <li>3). No refunds will be made if cancelled within 6 hours of departure.</li>
							 </ul>
							 @endif
                        </div>
                        <div class="form-group">
                            <label for="ride_id">Ride ID</label>
                            <input type="text" class="form-control" id="ride_id" name="ride_id" value="" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="cancel_time">Cancellation Time</label>
                            <input type="datetime-local" class="form-control" id="cancel_time" name="cancel_time" required readonly>
                        </div>
						 <div class=" d-flex">
                            <input type="checkbox" class="" id="accept_cancellation_policy" name="accept_cancellation_policy" required>
							  <label for="accept_cancellation_policy"> Accept cancellation policy.</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
										@endforeach
                                       @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Account Overview -->
                        <div class="tab-pane fade " id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <div class="container">
                                <p>Welcome,</p>
                                <h1> {{ Auth::user()->title }}.  {{ Auth::user()->name }}</h1>
                                <p class="account-details">
                                    <span>ID -  {{ Auth::user()->id }}</span>
                                    <span class="gap">|</span>
                                    <span> {{ Auth::user()->email }}</span>
                                </p>
                            </div>
                        </div>
                        <!-- past Booking -->
                        <div class="tab-pane fade past__booking" id="list-messages" role="tabpanel"
                            aria-labelledby="list-messages-list">
                            <div class="container">
                                <div class="row">

                                    <div class="col-12">
                                        @if($enquiries->isEmpty())
                                        <p>No enquiries or payment history available.</p>
                                    @else
                                        @foreach ($enquiries as $enquiryId => $payments)
                                            @php
                                                $enquiry = $payments->first();
                                            @endphp
                                        <div class="cab__card border py-3 px-3 mb-md-3 my-3">
                                            <div class="row">
                                                <div
                                                    class="col-md-1 justify-content-center align-items-center d-flex mb-md-0 mb-2">
                                                    <div class="">
                                                        <img src="{{asset('frontend/assets/image/logo/ic_prime.png')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="ride-info">
                                                        <div class="ride-time mb-1 d-flex justify-content-between">
                                                            {{-- Wed, Sep 13, 01:47 PM --}}
                                                            <span>{{ \Carbon\Carbon::parse($enquiry->start_journy_date)->format('D, M d') }}</span>

                                                            @if($enquiry->trip_status == 1)
                                                            <span class="badge badge-success mb-0">completed</span>
                                                            @elseif($enquiry->trip_status == 2)
                                                            <span class="badge badge-secondary mb-0"> On Going</span>
                                                            @elseif($enquiry->trip_status == 3)
                                                            <span class="badge badge-danger mb-0">Cancelled</span>
                                                            @else
                                                            <span class="badge badge-primary mb-0">New</span>
                                                            @endif
                                                        </div>
                                                        <div class="ride-type mb-1">
                                                            {{-- Prime Sedan CRN7679066149 --}}
                                                            {{$enquiry->vehicle_class}}
                                                        </div>
                                                        <div class="ride-address ml-1">
                                                            <span class="pickup-point">
                                                                <span class="status-dot green-dot"></span>
                                                                {{-- FRR6+8G6, State Bank Nagar, --}}
                                                                {{-- Sramik Vasahat, Karve Nagar, --}}
                                                                {{-- Pune --}}
                                                                {{$enquiry->from_location}}
                                                            </span>
                                                            <br>
                                                            <span class="dropoff-point">
                                                                <span class="status-dot red-dot"></span>
                                                                {{-- JX22+CV3, Pune --}}
                                                                {{$enquiry->to_location}}  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="col-md-2 col-6 justify-content-center align-items-center d-flex">
                                                    <div class="ride-fare">
                                                       
                                                        <h4 class="mb-0"> ₹ {{$enquiry->total_amount}}</h4>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-md-2 col-6 d-flex justify-content-center align-items-center">
                                                    <div class="">
                                                        <img src="{{asset('frontend/assets/image/logo/driver_placeholder.png')}}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cab__card__expand border py-md-4 px-md-4 py-3 px-3 mb-md-3 my-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div
                                                        class="rideDetails-header w-100 justify-content-between d-flex">
                                                        <span class="back-arrow "><i
                                                                class="fa-solid fa-arrow-left-long"></i></span>
                                                        <span
                                                            class="rideDetails-id align-items-center d-flex">Trip ID:{{$enquiry->enquiry_id}}</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 justify-content-center d-flex mb-3">
                                                    <div class="rideDetails-time">
                                                        {{ \Carbon\Carbon::parse($enquiry->start_journy_date)->format('D, M d') }}
                                                    </div>
                                                </div>
                                                <div class="col-12 py-3">
                                                    <div class="row">
                                                        <div class="col-2 d-flex align-items-center">
                                                            <img src="{{asset('frontend/assets/image/logo/ic_prime.png')}}" alt="">
                                                        </div>
                                                        <div class="ride-info col-8">
                                                            <div class="ride-type">
                                                                {{$enquiry->vehicle_class}}
                                                            </div>
                                                            <div class="ride-subtype">
                                                                White Tour {{$enquiry->vehicle_type}}
                                                            </div>
                                                        </div>
                                                        <div class="col-2 justify-content-end d-flex">
                                                            <div class="ride-fare">
                                                                ₹{{$enquiry->total_amount}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 ride-address mb-3">
                                                    <div class="ride-time-address">
                                                        <span class="status-dot green-dot"></span>
                                                        <span class="ride-time">01:51
                                                            PM</span>
                                                            {{$enquiry->from_location}}
                                                    </div>
                                                    <div class="ride-time-address">
                                                        <span class="status-dot red-dot"></span>
                                                        <span class="ride-time">03:11
                                                            PM</span>
                                                            {{$enquiry->to_location}}
                                                    </div>
                                                </div>
                                                <div class="col-12 bill__details">
                                                    <h4>Bill Details</h4>
                                                    <div class="bill__item">
                                                        <span>Your Trip</span>
                                                        <span>₹{{$enquiry->total_amount}}</span>
                                                    </div>
                                                    <div class="bill__item">
                                                        <span>Rounded Off</span>
                                                        <span>₹0.28</span>
                                                    </div>
                                                    <div class="bill__item total-bill">
                                                        <span>Total Bill</span>
                                                        <span>₹{{$enquiry->total_amount}}</span>
                                                    </div>
                                                    <div class="bill__item">
                                                        <span>Total Payable</span>
                                                        <span>₹{{$enquiry->total_amount}}</span>
                                                    </div>
													@if($enquiry->refund_status == 1)
													<div class="bill__item">
                                                        <span>Refund Time</span>
                                                        <span>{{$enquiry->refund_amount}}</span>
                                                    </div>
													<div class="bill__item">
														<span>Total Refund</span>
                                                        <span>₹{{$enquiry->refund_time}}</span>
                                                    </div>
													<div class="bill__item">
														<span>Refund payment status</span>
														@if($enquiry->refund_paid_status == 1)
                                                        <span class="badge badge-success">Paid</span>
														@else
														<span class="badge badge-warning">Unpaid</span>
														@endif
                                                    </div>
													@else
													@endif
                                                    
                                                    <div class="payment-details">
                                                        <h4>Recived Payment:</h4>
                                                        <div class="payment-method">
                                                            
                                                            @if ($payments->isEmpty() || $payments->first()->payment_id === null)
                                                            <p>No payment history available.</p>
                                                        @else
                                                            <div class="payment-details">
                                                                @php
                                                                    $i = 1;
                                                                @endphp
                                                                @foreach ($payments as $payment)

                                                                    @if ($payment->payment_id !== null)
                                                                        <div class="payment-entry">
                                                                            <div class="col-12 text-left">
                                                                              <h6 class="bill__item text-left">Payment {{$i++}} :</h6>
                                                                            </div>
                                                                            <div class="bill__item">
                                                                                <span>
                                                                                    Paid Amount
                                                                                </span>
                                                                                <span>
                                                                                    {{ $payment->paid_amount }}
                                                                                </span>
                                                                            </div>
                                                                            <div class="bill__item">
                                                                                <span>
                                                                                    <p>Payment Date</p>
                                                                                </span>
                                                                                <span>
                                                                                    {{ \Carbon\Carbon::parse($payment->payment_date)->format('D, M d') }}
                                                                                </span>
                                                                            </div>
                                                                            <div class="bill__item">
                                                                                <span>
                                                                                    <p>Payment Mode</p>
                                                                                </span>
                                                                                <span>
                                                                                    {{ $payment->payment_mode }}
                                                                                </span>
                                                                            </div>
                                                                            {{-- <p>Payment ID: {{ $payment->payment_id }}</p>
                                                                            <p>Amount: {{ $payment->paid_amount }}</p>
                                                                            <p>Payment Date: {{ \Carbon\Carbon::parse($payment->payment_date)->format('D, M d') }}</p>
                                                                            <p>Payment Mode: {{ $payment->payment_mode }}</p> --}}
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="bill__item">
                                                        <span>Advance Amount</span>
                                                        <span>₹{{$enquiry->advance_amount}}</span>
                                                    </div>
                                                    {{-- <div class="bill__item">
                                                        <span>Total Paid Amount</span>
                                                        <span>₹{{$enquiry->overallpaidamount}}</span>
                                                    </div> --}}
                                                    <div class="bill__item">
                                                        <span>Remaining Amount</span>
                                                        <span>₹{{$enquiry->remaining_amount}}</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 my-3">
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-md-4">
                                                            <button class="btn common__btn btn-block my-md-0 my-2">Mail
                                                                Invoice</button>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <button
                                                                class="btn common__btn btn-block my-md-0 my-2">Support</button>
                                                        </div>
														 <div class="col-md-4">
                                                           @if($enquiry->trip_status == 3)<button
                                                                class="btn btn-success btn-block my-md-0 my-2">Ride Cancelled</button>
															 @else
                                                            <button
                                                                class="btn common__btn btn-block my-md-0 my-2">Your Ride Completed</button>@endif
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <div id="loader" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.7); z-index: 9999;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
            <img src="{{asset('frontend/assets/image/logo/Bhurr-New-Logo.png')}}" alt="Loader" style="width: 100%; height: 50px;">
            {{-- <p style="font-size: 16px; font-weight: bold; margin-top: 10px;">Verification code sending...</p> --}}
        </div>
        <div style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
            <p style="font-size: 16px; font-weight: bold; margin-top: 10px;">Personal Information updating...</p>
        </div>
    </div>

    {{-- model --}}
    <div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="otpModalLabel" style="color: black">Personal information updated successfully</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
            </div>
        </div>
    </div>

    {{-- MOdel Second form --}}
    <div class="modal fade" id="ContactMOdel" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="otpModalLabel" style="color: black">Contact Details updated successfully</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
            </div>
        </div>
    </div>
     {{-- MOdel Third form --}}
     <div class="modal fade" id="EmergencyContactDetailsMOdel" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="otpModalLabel" style="color: black">Emergency Contact Details updated successfully</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.accordion .card-header').click(function () {
                var target = $(this).next('.collapse');
                // Close all open accordions
                $('.accordion .collapse.show').not(target).slideUp().removeClass('show');
                $('.accordion .card-header').not(this).addClass('collapsed');
                // Toggle the clicked accordion
                target.slideToggle().toggleClass('show');
                $(this).toggleClass('collapsed');
            });
        });
    </script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.past__booking .cab__card').on('click', function () {
                // Hide all expanded cards
                $('.cab__card__expand').hide();
                // Show all main cards
                $('.cab__card').show();

                // Toggle visibility of the related expanded card and hide the clicked main card
                const $expandCard = $(this).next('.cab__card__expand');
                $expandCard.toggle();
                $(this).toggle();
            });

            $('.back-arrow').on('click', function () {
                // Hide the expanded card and show the main card
                const $expandCard = $(this).closest('.cab__card__expand');
                $expandCard.hide();
                $expandCard.prev('.cab__card').show();
            });
        });

        function showLoader() {
        $('#loader').show(); // Assuming your loader has an id="loader"
    }

        $(document).ready(function () {
    $('#form-step-1').on('submit', function (e) {
        e.preventDefault();
        showLoader()
        // Serialize form data
        var formData = $(this).serialize();
        console.log('Form Data:', formData); // Log form data to console

        // Example AJAX request
        $.ajax({
            type: 'POST',
            url: '{{ route("customer-profile") }}',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') || ''
            },
            success: function (response) {
                    $('#otpModal').modal('show');
                    $('#loader').hide();
            },
            error: function (error) {
                console.error('Error:', error);
                alert('An error occurred while processing your request. Please try again.');
            }
        });
    });
});


//form 2

$(document).ready(function () {
    $('#form-step-2').on('submit', function (e) {
        e.preventDefault();
        showLoader()
        // Serialize form data
        var formData = $(this).serialize();
        console.log('Form Data:', formData); // Log form data to console

        // Example AJAX request
        $.ajax({
            type: 'POST',
            url: '{{ route("contact-details") }}',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') || ''
            },
            success: function (response) {
                    $('#ContactMOdel').modal('show');
                    $('#loader').hide();
            },
            error: function (error) {
                console.error('Error:', error);
                alert('An error occurred while processing your request. Please try again.');
            }
        });
    });
});


$(document).ready(function () {
    $('#form-step-3').on('submit', function (e) {
        e.preventDefault();
        showLoader()
        // Serialize form data
        var formData = $(this).serialize();
        console.log('Form Data:', formData); // Log form data to console

        // Example AJAX request
        $.ajax({
            type: 'POST',
            url: '{{ route("emergency-contact-details") }}',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') || ''
            },
            success: function (response) {
                    $('#EmergencyContactDetailsMOdel').modal('show');
                    $('#loader').hide();
            },
            error: function (error) {
                console.error('Error:', error);
                alert('An error occurred while processing your request. Please try again.');
            }
        });
    });
});

$(document).ready(function () {
    $('#sameAsContactDetails').change(function () {
        if (this.checked) {
            $('#collapseThree #email').val($('#collapseTwo #email').val());
            $('#collapseThree #mobileNumber').val($('#collapseTwo #mobileNumber').val());
            $('#collapseThree #address1').val($('#collapseTwo #address1').val());
            $('#collapseThree #address2').val($('#collapseTwo #address2').val());
            $('#collapseThree #postalCode').val($('#collapseTwo #postalCode').val());
            $('#collapseThree #city').val($('#collapseTwo #city').val());
            $('#collapseThree #state').val($('#collapseTwo #state').val());
            $('#collapseThree #country').val($('#collapseTwo #nationality').val());
        } else {
            $('#collapseThree #email').val('');
            $('#collapseThree #mobileNumber').val('');
            $('#collapseThree #address1').val('');
            $('#collapseThree #address2').val('');
            $('#collapseThree #postalCode').val('');
            $('#collapseThree #city').val('');
            $('#collapseThree #state').val('');
            $('#collapseThree #country').val('');
        }
    });
});


    </script>
	 <script>
        // Function to set the current date and time
        function setCurrentDateTime() {
            const currentDateTime = new Date();
            const year = currentDateTime.getFullYear();
            const month = String(currentDateTime.getMonth() + 1).padStart(2, '0');
            const day = String(currentDateTime.getDate()).padStart(2, '0');
            const hours = String(currentDateTime.getHours()).padStart(2, '0');
            const minutes = String(currentDateTime.getMinutes()).padStart(2, '0');
			const seconds = String(currentDateTime.getSeconds()).padStart(2, '0');

            const formattedDateTime = `${year}-${month}-${day}T${hours}:${minutes}:${seconds}`;
            document.getElementById('cancel_time').value = formattedDateTime;
        }

        // Set the current date and time when the modal is shown
        $('#cancellationModal').on('shown.bs.modal', function (event) {
            setCurrentDateTime();
			var button = $(event.relatedTarget);
            var rideId = button.data('ride-id');
            var modal = $(this);
            modal.find('.modal-body #ride_id').val(rideId);
        });
    </script>
	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      @if(session('success'))
      <script>
          Swal.fire({
              title: 'Thank you!',
              text: '{{ session('success') }}',
              icon: 'success',
              confirmButtonText: 'OK'
          });
      </script>
      @endif
</body>