@extends('frontend-layout.app')
@section('title', 'Passenger Details - page')
@section('inline-css')
    <style>
    .Prepare__to__travel__page ul li {
        list-style: circle;
    }

    .car__categories_tab {
        flex-wrap: nowrap;
        overflow-x: auto;
        -ms-overflow-style: none;
        /* Internet Explorer 10+ */
        scrollbar-width: none;
        /* Firefox */
    }

    .car__categories_tab::-webkit-scrollbar {
        display: none;
        /* Safari and Chrome */
    }

    .car__categories_tab .nav-item {
        flex: 0 0 auto;
    }
	.car__li__active {
		border: 2px solid #007bff;
		background-color: #f0f8ff;
	}


    @media (max-width: 768px) {
        .car__categories_tab {
            white-space: nowrap;
        }
    }
    </style>
</head>
<body class="driver__page__container">
  @endsection

@section('content')
    <section id="navigation" class="">
        <section class="process__tabs pt-3 d-md-block d-none">
            <div class="container">
                <iv class="row">
                    <div class="col-md-4 active d-flex justify-content-center">
                        <h5 class=""><span>1</span>Driver</h5>
                    </div>
                    <div class="col-md-4 active d-flex justify-content-center">
                        <h5 class="">
                            <span><i class="fa-solid fa-check"></i></span>Passenger Details
                        </h5>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center non__active">
                        <h5 class=""><span>3</span>Review & Payment</h5>
                    </div>
                </iv>
            </div>
        </section>
        <!-- content -->
        <section class="departure__card border-bottom">
            <div class="container">
                <div class="row py-3">
                    <div class="col-md-6 col-12 d-flex justify-content-between align-items-center px-md-0">
                        <div class="">
                            <span><small>{{ session('pickup_date') }}, {{ session('pickup_time') }}</small></span><br />
                            <span class="h5 mb-0">{{ $driverEnquiry->pickup_location }}</span>
                        </div>
                        <div class="">
                            <span class="d-flex align-items-center"><img
                                    src="{{asset('new-layouts/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}"
                                    class="d-md-flex d-none" width="40px" alt="" />
                                <!-- <p class="mb-0">departure</p> -->
                                <p class="mb-0 d-md-flex d-none">
                                    ...........................................
                                </p>
                                <img src="{{asset('new-layouts/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}" width="40px"
                                    alt="" />
                            </span>
                        </div>
                     
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3 justify-content-end align-items-center d-flex">
                        <div class="">
                           {{ $driverEnquiry->drop_location }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="py-md-5 py-3 passenger__details__container bg-transparent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <form id="" action="{{ route('store.passenger.details', ['enquiry_id' => $driverEnquiry->enquiry_id]) }}"
                        method="POST">
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
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Select Vehicle Class:</label>

                                <div class="col-md-12 px-0">
                                    <ul class="car__li list-unstyled d-flex mb-0">
                                        @foreach($carclasses as $carclass)
                                        <li class="car_item" data-car-name="{{ $carclass->carclass_name }}">
                                            <div class="car_img">
                                                <center>
                                                    <img src="{{ asset('assets/carclass_images/' . $carclass->carclass_image) }}"
                                                        alt="Driver in Pune" style="width:65px;">
                                                </center>
                                            </div>
                                            <div class="car__name">
                                                <center>
                                                    <span>{{ $carclass->carclass_name }}</span>
                                                </center>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <input type="hidden" name="vehicle_class" id="vehicle_class" value="Hatchback" />
                                </div>

                            </div>
                            <!-- Transmission Type Section -->
                            <div class="form-group col-md-5">
                                <label>Transmission Type:</label><br />
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vehicle_type" id="manual"
                                        value="manual" checked />
                                    <label class="form-check-label" for="manual">Manual</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vehicle_type" id="automatic"
                                        value="automatic" />
                                    <label class="form-check-label" for="automatic">Automatic</label>
                                </div>
                            </div>
                            <!-- Registration Type Section -->
                            <div class="form-group col-md-7">
                                <label>Registration Type:</label><br />
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="registration_type[]" id="whitePlate"
                                        id="danger-outlined" value="white" checked />
                                    <label class="form-check-label" for="whitePlate">Private [White Number
                                        Plate]</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="registration_type[]"
                                        id="yellowPlate" value="yellow" />
                                    <label class="form-check-label" for="yellowPlate">Commercial [Yellow Number
                                        Plate]</label>
                                </div>
                            </div>
                            <!-- Driver Language Section -->
                            <div class="form-group col-md-6">
                                <label>Prefered Driver Language:</label><br />
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="driver_language[]" id="hindi" value="hindi" checked/>
                                    <label class="form-check-label" for="english">Hindi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="driver_language[]" id="english" value="english" />
                                    <label class="form-check-label" for="hindi">English</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="driver_language[]" id="marathi" value="marathi" />
                                    <label class="form-check-label" for="marathi">Marathi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="driver_language[]" id="gujarati" value="gujarati" />
                                    <label class="form-check-label" for="gujarati">Gujarati</label>
                                </div>
                                 <!-- Repeat for other languages -->
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="driver_language[]" id="other"
                                        value="other" onchange="toggleOtherLanguage(this)" />
                                    <label class="form-check-label" for="other">Other</label>
                                </div>

                                <!-- Hidden text field for custom language -->
                                <div id="otherLanguageInput" class="form-group mt-3" style="display: none;">
                                    <input type="text" class="form-control input" id="otherLanguage"
                                        placeholder="Enter language" name="otherLanguage">
                                    <label for="otherLanguage" class="user__label">Specify Language:</label>
                                </div>
                            </div>
                            <div class="col-md-6 justify-content-end d-flex align-items-end">
                                <div>
                                    <button type="submit" class="btn common__btn px-md-5 px-4">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          
        </div>
    </section>
   @endsection

   @section('inline-js')
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script>
    function showPersonalDetails() {
        var vehicleForm = document.getElementById("vehicleForm");
        if (vehicleForm.checkValidity()) {
            vehicleForm.style.display = ""; // Hide the first form
            document.getElementById("personalDetails").style.display = "block"; // Show the second form
        } else {
            vehicleForm.reportValidity(); // Show validation errors if the form is incomplete
        }
    }
    </script>
    <script>
    function toggleOtherLanguage(checkbox) {
        var otherLanguageInput = document.getElementById('otherLanguageInput');
        if (checkbox.checked) {
            otherLanguageInput.style.display = 'block';
        } else {
            otherLanguageInput.style.display = 'none';
        }
    }
    </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const carItems = document.querySelectorAll('.car_item');
        const vNameInput = document.getElementById('vehicle_class');

        // Set the default selected car (first car item)
        if (carItems.length > 0) {
            const firstCarItem = carItems[0];
            firstCarItem.classList.add('car__li__active'); // Set active class on first item
            vNameInput.value = firstCarItem.getAttribute('data-car-name'); // Set hidden input to first item
        }

        carItems.forEach(item => {
            item.addEventListener('click', function() {
                // Remove the active class from all items
                carItems.forEach(car => car.classList.remove('car__li__active'));

                // Add the active class to the clicked item
                this.classList.add('car__li__active');

                // Get the selected car name and set it in the hidden input field
                const selectedCarName = this.getAttribute('data-car-name');
                vNameInput.value = selectedCarName;
            });
        });
    });
</script>
@endsection
