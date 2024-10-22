@extends('frontend-layout.app')
@section('title', 'Review Booking - page')
@section('inline-css')
<style>
.section-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 15px;
}

.trip-info,
.payment-info {
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    background-color: #f8f9fa;
}

.highlight {
    font-weight: bold;
}

.extend-trip {
    background-color: #e9ecef;
    padding: 15px;
    border-radius: 8px;
    margin-top: 20px;
}

.pay-now-btn {
    display: flex;
    justify-content: center;
}
</style>
</head>

<body class="driver__page__container">
    @endsection

    @section('content')

    <section id="navigation">
        <section class="process__tabs pt-3 d-md-block d-none">
            <div class="container">
                <iv class="row">
                    <div class="col-md-4 active d-flex justify-content-center">
                        <h5 class=""><span>1</span>Cars</h5>
                    </div>
                    <div class="col-md-4 active d-flex justify-content-center">
                        <h5 class=""><span>2</span>Passenger Details</h5>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center active">
                        <h5 class="">
                            <span><i class="fa-solid fa-check"></i></span>Review & Payment
                        </h5>
                    </div>
                </iv>
            </div>
        </section>
        <!-- content -->
        <section>
            <section class="departure__card">
                <div class="container">
                    <div class="row py-2">
                        <div class="col-md-6 col-12 d-flex justify-content-between align-items-center">
                            <div class="">
                                <span class="h5 mb-0">{{ $driverEnquiry->pickup_location }}</span>
                            </div>
                            <div class="">
                                <span class="d-flex align-items-center"><img
                                        src="{{asset('new-layouts/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}"
                                        class="d-md-block d-none" width="40px" alt="" />
                                    <!-- <p class="mb-0">departure</p> -->
                                    <p class="mb-0 d-md-block d-none">
                                        ...........................................
                                    </p>
                                    <img src="{{asset('new-layouts/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}"
                                        width="40px" alt="" />
                                </span>
                            </div>

                        </div>
                        <div class="col-md-6 mt-md-0 mt-3 justify-content-end align-items-center d-flex">
                            <span class="h5 mb-0">{{ $driverEnquiry->drop_location }}</span>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <section class="py-md-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Review and Payment</h2>
                </div>
                <div class="col-12 py-3 review__booking_driver">
                    <div class="summary-content row justify-content-between" style="">
                        <div class="col-md-6">
                            <div class="row d-flex justify-content-between align-items-start p-md-3 bg-white border">
                                <div class="col-5">
                                    <p>
                                        <span class=" mb-0"><b>From</b></span> <br />
                                        <span>
                                            {{ $driverEnquiry->pickup_location }}
                                        </span>
                                        <span><br /><small>{{ $driverEnquiry->pickup_date}},
                                                {{ $driverEnquiry->pickup_time}}</small></span>
                                    </p>
                                </div>
                                <div class="col-2 justify-content-center">
                                    <span class="d-flex align-items-center justify-content-center"><img
                                            src="{{asset('new-layouts/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}"
                                            width="40px" alt="" />
                                    </span>
                                </div>
                                <div class="col-5">
                                    <p><span class="mb-0"><b>To</b></span> <br />
                                        <span>
                                            {{ $driverEnquiry->drop_location }}
                                        </span>
                                        {{-- <span><br /><small>FRI, 28 JUN 24</small></span> --}}
                                    </p>
                                </div>
                                <div class="col-12 my-2 border-top p-3">
                                    <p class="d-flex justify-content-between pb-0">
                                        <span><b>Duration</b><br />Don’t let the fun stop extend the
                                            trip as long as you
                                            like</span><span><b>{{ $driverEnquiry->total_hours }}Hrs</b></span>
                                    </p>
                                    <p class="mb-1"><b>Car Details</b></p>
                                    <p class="d-flex justify-content-between mb-1">
                                        <span>Vehicle Class:-</span> <span>{{ $driverEnquiry->vehicle_class}}</span>
                                    </p>
                                    <p class="d-flex justify-content-between mb-1">
                                        <span>Transmission type:-</span> <span>{{ $driverEnquiry->vehicle_type}}</span>
                                    </p>
                                    <p class="d-flex justify-content-between mb-1">
                                        <span>Registration type:-</span>
                                        <span>
                                            @if($driverEnquiry->registration_type == 'white')
                                            White (Private Number Plate)
                                            @elseif($driverEnquiry->registration_type == 'yellow')
                                            Yellow (Commercial Number Plate)
                                            @else
                                            {{ $driverEnquiry->registration_type }}
                                            @endif
                                        </span>



                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 border review__booking_driver p-3 bg-white">

                            <div class="border-bottom">
                                <h3>Booking Fare</h3>
                                <p class="mb-2"></p>
                            </div>
                            <div class="py-3 border-bottom">
                                <p class="d-flex justify-content-between">
                                    <span><b>Driver Charges:</b><br />Daily driving charges
                                        including food and stay</span>
                                    <span><b>-</b></span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span><b>Return Charges:</b><br />Driver charges for return
                                        journey @ 3₹ per km</span>
                                    <span><b>-</b></span>
                                </p>



                                <p class="d-flex justify-content-between">
                                    <span><b>Total Bill:</b><br />Includes Driver charges, return
                                        charges and GST</span>
                                    <span><b>{{ $driverEnquiry->total_amount }}</b></span>
                                </p>
                            </div>
                            <form id=""
                                action="{{ route('book.driver', ['enquiry_id' => $driverEnquiry->enquiry_id]) }}"
                                method="POST">
                                @csrf
                                <div class="col-12 justify-content-end mt-3 d-flex ">
                                    <button type="submit" class="btn common__btn px-md-5 px-5 text">
                                        Pay Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="https://wa.me/9359668593" class="whatsapp" target="_blank">
        <img src="{{asset('new-layouts/assets/image/whatsapp.png')}}" alt="WhatsApp" class="whatsapp-icon" />
    </a>

    @endsection
    @section('inline-js')
    <!-- Bootstrap JS, Popper.js, and jQuery -->

    <script>
    document.querySelectorAll('input[name="payment"]').forEach((radio) => {
        radio.addEventListener("change", (event) => {
            const total = 2000;
            const paymentPercentage = parseInt(event.target.value, 10);
            const remaining = total * (paymentPercentage / 100);
            document.getElementById(
                "remaining-payment"
            ).innerText = `INR ${remaining}`;
        });
    });
    </script>
    @endsection