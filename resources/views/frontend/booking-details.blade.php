@extends('frontend-layout.app')
@section('title', 'Booking Details - page')
@section('inline-css')


</head>

<body>
  @endsection
  @section('content')

  
   
    <section id="navigation">
        <section class="process__tabs pt-3  d-md-block d-none">
            <div class="container">
                <iv class="row">
                    <div class="col-md-4 active d-flex justify-content-center">
                        <h5 class=""><span>1</span>Cars</h5>
                    </div>
                    <div class="col-md-4 active d-flex justify-content-center">
                        <h5 class=""><span><i class="fa-solid fa-check"></i></span>Passenger Details</h5>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center non__active">
                        <h5 class=""><span>3</span>Review & Payment</h5>
                    </div>
                </iv>
            </div>
        </section>
        <!-- content -->
        <section>
            <section class="departure__card border-bottom">
                <div class="container ">
                    <div class="row py-3 ">
                        <div class="col-md-6 col-12 d-flex justify-content-between align-items-center">
                            <div class="">
                                @php
                                $toLocation = isset($_GET['to']) ? $_GET['to'] : 'None';
                                function limit_words($string, $wordLimit)
                                {
                                    $words = explode(' ', $string);
                                    if (count($words) <= $wordLimit) {
                                        return $string;
                                    }
                                    
                                    return implode(' ', array_slice($words, 0, $wordLimit)) . '...';
                                }
                            @endphp
                                <span><small>THU, 27 JUN 24</small></span><br>
                                <Span class="h5 mb-0">{{ limit_words($_GET['from'], 1) }}</Span>
                            </div>
                            <div class="">
                                <span class="d-flex align-items-center">
									<img
                                        src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}" width="40px"
                                        alt="">
                                    <!-- <p class="mb-0">departure</p> -->
                                    <p class="mb-0 d-md-block d-none">.....................................</p>
                                    <img src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}"
                                        class="d-md-block d-none" width="40px" alt="">
                                </span>
                            </div>
                            <div class="">
                                <span><small>FRI, 28 JUN 24</small></span><br>
                                {{-- <Span class="h5 mb-0">{{ limit_words($_GET['to'], 1) }}</Span> --}}
                                <span class="h5 mb-0">{{ limit_words($toLocation, 1) }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-end align-items-center d-flex mt-md-0 mt-3">
                            <div class=""> <a href="" class="btn common__btn_two px-md-5 px-3">Modify</a></div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <section class="passenger__details__container py-md-5 py-3 px-md-0 px-2">
        <div class="container">
            <form action="{{route('postBookingDetails')}}" method="POST">
                @csrf
                <input type="hidden" name="enquiry_id" id="enquiry_id" value="{{$_GET['id']}}">
            <div class="row">
                <div class="col-md-12 px-0">
                    <h2 class="font-weight-bold heading__text__color px-0 text-md-left text-center">PASSENGER DETAILS
                    </h2>
                </div>
                <div class="col-12 card px-md-5 px-3 py-3 my-3">
                    <h5 class="info"><span><i class="fa-solid fa-circle-info"></i></span> INFO</h5>
                    <ul class="pl-3" style="list-style: disc;">
                        <li>Fields with an asterisk (*) are mandatory to fill in.</li>
                        <li>Please provide your full name as per government photo id</li>
                    </ul>
                </div>
                <div class="col-12 card px-md-5 px-3 py-3 my-3">
                    <h3 class="mb-3 text-md-left text-center">Please Enter Passenger Details</h3>
                    <div class="form-row">
                       
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control input" id="firstName" name="firstname" 
                                   value="{{ auth()->check() ? auth()->user()->firstname : '' }}" 
                                    required>
                            <label for="firstName" class="user__label">First Name*</label>
                        </div>
                       
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control input" id="lastName" name="lastname" 
                                   value="{{ auth()->check() ? auth()->user()->lastname : '' }}" 
                                   required>
                            <label for="lastName" class="user__label">Last Name*</label>
                        </div>
                       
                    </div>
                    
                </div>
                <div class="col-12 my-3 card px-md-5 px-3 py-3 ">
                    <h3 class="mb-3 text-md-left text-center">Contact Details</h3>
                    <div class="form-row">
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control input" id="email" name="contactemail" value="{{ auth()->check() ? auth()->user()->email : '' }}" required>
                            <label for="email" class="user__label">Enter Email*</label>
                        </div>
                        <div class="col-md-4 form-group" id="additionalMobileNumbers">
                            <input type="text" class="form-control input" id="mobno" name="customer_mobile" value="{{ auth()->check() ? auth()->user()->mobile_number : '' }}" required>
                            <label for="mobno" class="user__label">Enter Mobile Number*</label>
                        </div>
                        <div class="col-md-4 form-group">
                            <button id="addMobileNumberBtn" class="btn btn-block common__btn h-100 w-100">
                                Alternate mobile number
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3 card px-md-5 px-3 py-3">
                    <h3 class="mb-3 text-md-left text-center">Pickup Locations</h3>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control input" id="from" name="picklocation"
                                required placeholder=" ">
                            <label for="picklocation" class="user__label">Pick Up Locations*</label>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control input" id="pickupLocation" name="address"
                                required >
                            <label for="pickupLocation" class="user__label">Enter Your Address</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3 card px-md-5 px-3 py-3">
                    <div class="form-row">
                        <div class="col-12 form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="t&c" required>
                            <label class="form-check-label ml-5" for="flexCheckDefault">
                                <span>I Agree To - <a href="privacy-policy" target="">Privacy Policy ,
                                        T&C</a></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 px-md-5 px-3 py-3">
                    <div class="form-row justify-content-md-end justify-content-center">
                        <div class="col-4 justify-content-md-end justify-content-center d-flex">
                            {{-- <a href="#" class="btn common__btn px-md-5 px-4">Confirm</a
                                href="#"> --}}
                                <button type="submit" class="btn common__btn px-md-5 px-4">Confirm</button>

                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
	
	@endsection
	@section('inline-js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACiii2Kp1VXRckQoTy_MYZcLkS0wEKhBE&libraries=places"></script>
<script>
        function initAutocomplete() {
    const startDestination = document.getElementById('from');
    const endDestination = document.getElementById('to');
    const autocompleteStart = new google.maps.places.Autocomplete(startDestination);
    const autocompleteEnd = new google.maps.places.Autocomplete(endDestination);

    autocompleteStart.setFields(['address_components', 'geometry', 'icon', 'name']);
    autocompleteEnd.setFields(['address_components', 'geometry', 'icon', 'name']);

    autocompleteStart.addListener('place_changed', function() {
        const place = autocompleteStart.getPlace();
        const address = getAddressComponents(place);
        console.log('Start Place:', address);
    });

    autocompleteEnd.addListener('place_changed', function() {
        const place = autocompleteEnd.getPlace();
        const address = getAddressComponents(place);
        console.log('End Place:', address);
    });
}

function getAddressComponents(place) {
    const addressComponents = place.address_components;
    let address = {
        street: '',
        city: '',
        state: '',
        country: '',
        postal_code: ''
    };

    addressComponents.forEach(component => {
        const types = component.types;
        if (types.includes('street_number')) {
            address.street = component.long_name + ' ' + address.street;
        }
        if (types.includes('route')) {
            address.street += component.long_name;
        }
        if (types.includes('locality')) {
            address.city = component.long_name;
        }
        if (types.includes('administrative_area_level_1')) {
            address.state = component.long_name;
        }
        if (types.includes('country')) {
            address.country = component.long_name;
        }
        if (types.includes('postal_code')) {
            address.postal_code = component.long_name;
        }
    });

    return address;
}

// Ensure that the script is executed after the API is loaded
document.addEventListener('DOMContentLoaded', function() {
    initAutocomplete();
});

</script>
</section>
    <!-- Footer -->
 
    <div class="nav-buttons position-fixed d-none">
        <button class=" btn__dot mb-2" onclick="scrollToSection(1)"></button>
        <button class=" btn__dot mb-2" onclick="scrollToSection(2)"></button>
        <button class=" btn__dot mb-2" onclick="scrollToSection(3)"></button>
        <button class=" btn__dot" onclick="scrollToSection(4)"></button>
    </div>
    <a href="https://wa.me/9359668593" class="whatsapp" target="_blank">
        <img src="{{asset('frontend/assets/image/whatsapp.png')}}" alt="WhatsApp" class="whatsapp-icon">
    </a>
   @endsection