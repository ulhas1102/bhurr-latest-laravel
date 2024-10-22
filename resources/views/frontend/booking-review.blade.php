@extends('frontend-layout.app')
@section('title', 'Review Details - page')
@section('inline-css')
    <style>

    </style>

</head>

<body>
  @endsection
  @section('content')

 
    <section id="navigation">
       
        <section class="process__tabs pt-3  d-md-block d-none">
            <div class="container">
                <iv class="row">

                    <div class="col-md-4 active   d-flex justify-content-center">
                        <h5 class=""><span>1</span>Cars</h5>
                    </div>
                    <div class="col-md-4 active d-flex justify-content-center">
                        <h5 class=""><span>2</span>Passenger Details</h5>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center active">
                        <h5 class=""><span><i class="fa-solid fa-check"></i></span>Review & Payment</h5>
                    </div>
                </iv>
            </div>
        </section>
        <!-- content -->
        <section>
            <section class="departure__card ">
                <div class="container">
                    <div class="row py-2">
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
                                {{-- <span><small>THU, 27 JUN 24</small></span><br> --}}
                                <Span class="h5 mb-0">{{ limit_words($_GET['from'], 1) }}</Span>

                            </div>
                            <div class="">
                                <span class="d-flex align-items-center"><img
                                        src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}"
                                        class="d-md-block d-none" width="40px" alt="">
                                    <!-- <p class="mb-0">departure</p> -->
                                    <p class="mb-0 d-md-block d-none">...........................................</p>
                                    <img src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}" width="40px"
                                        alt="">
                                </span>
                            </div>
                            <div class="">
                                {{-- <span><small>FRI, 28 JUN 24</small></span><br> --}}
                                <Span class="h5 mb-0">{{ limit_words($toLocation, 1) }}</Span>

                            </div>
                        </div>
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-2   d-md-flex flex-column">
                            <h6 class="mb-1"><small>Base Fare</small></h6>
                            <div class="d-flex justify-content-between h5"><span>INR</span> <span>{{$enquiries->total_amount}}</span></div>
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0 text__red booking__summery">Booking Summary </h6><span><i
                                        class="fa-solid fa-angle-down text__red"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="summary-content row justify-content-between my-3 p-3" style="display:none; ">
                                <div class="col-md-5  ">
                                    <div
                                        class="row d-flex justify-content-between align-items-start  p-3 bg-white border">
                                        <div class="col-4">
                                            <span class="h3 mb-0 ">{{ limit_words($_GET['from'], 1) }}</span> <br>
                                            <span><small>THU, 27 JUN 24</small></span>

                                        </div>
                                        <div class="col-4 justify-content-center">
                                            <span class="d-flex align-items-center justify-content-center"><img
                                                    src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}"
                                                    width="40px" alt="">
                                            </span>
                                        </div>
                                        <div class=" col-4">
                                            {{-- <Span class="h3 mb-0">{{ limit_words($_GET['to'], 1) }}</Span> --}}
                                            <Span class="h5 mb-0">{{ limit_words($toLocation, 1) }}</Span>
                                            <br>
                                            <span><small>FRI, 28 JUN 24</small></span>
                                        </div>
                                        <div class="col-12 my-2">
                                            <h5>Dzire</h5>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 border p-3 bg-white">
                                    <div class="border-bottom">
                                        <h6>BOOKING FARE</h6>
                                        <p class="mb-2"><small>(INCLUDING TAXES, CHARGES AND FEES)</small></p>
                                    </div>
                                    <div class="border-bottom pb-3">
                                        <div class="">
                                            <small>Total fare for all the passengers. (A non-refundable Convenience Fee
                                                of INR
                                                399 per passenger will apply on this booking)</small>
                                        </div>
                                        <div class="justify-content-between d-flex">
                                            <span class="text-muted">1 Person</span> <span>INR 5990</span>
                                        </div>
                                        <div class="justify-content-between d-flex">
                                            <span class="text-muted">Taxes, Charges and Fees</span> <span>INR
                                                1,171</span>
                                        </div>
                                        <div class="justify-content-between d-flex">
                                            <span class="text-muted">Convenience Fee</span> <span>INR 399</span>
                                        </div>
                                    </div>
                                    <div class="justify-content-end d-flex">
                                        <span class="h4 mt-1">INR {{$enquiries->total_amount}}</span>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <span><i class="fa-solid text__red fa-angle-up h4"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <section class="py-3 booking__review__container px-md-0 px-2">
        <div class="container ">
            <div class="row mb-3 heading__text__color">
                <div class="col-12 px-md-0">
                    <h2 class="text-md-left text-center">Review Your Booking</h2>
                </div>
            </div>
            <div class="row card py-3 flex-row">
                <div class="col-md-6 col-12 d-flex justify-content-between align-items-center">
                    <div class="">
                        <span class=" mb-0 ">{{ limit_words($_GET['from'], 1) }}</span> <br>
                        {{-- <span><small>THU, 27 JUN 24</small></span> --}}

                    </div>
                    <div class="">
                        <span class="d-flex align-items-center"><img
                                src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}" width="40px" alt="">
                            <!-- <p class="mb-0">departure</p> -->
                            <p class="mb-0 d-md-block d-none">...........................................</p>
                            <img src="{{asset('frontend/assets/image/logo/istockphoto-1133431051-612x612.jpg')}}" width="40px"
                                class="d-md-block d-none" alt="">
                        </span>
                    </div>
                    <div class="">
                        {{-- <Span class=" mb-0">{{ limit_words($_GET['to'], 1) }}</Span> --}}
                        <Span class="h5 mb-0">{{ limit_words($toLocation, 1) }}</Span>

                        <br>
                        {{-- <span><small>FRI, 28 JUN 24</small></span> --}}
                    </div>
                </div>
                <div class=" col-md-6 justify-content-end d-flex align-items-center">
                    <span><i class="fa-solid fa-angle-down text__red h5 me-3"></i></span>
                </div>
                <div class="col-12 summary-content p-md-3 border-top mt-3 " style="display: none;">
                    <div class="row  m-3 py-3" style="background-color: rgba(121, 123, 125, 0.151);">
                        <div class="col-md-4">
                            <div class="">
                                <h6>Baggage/luggage <span><small>15kg</small></span></h6>
                                <h6>Seats <span><small>15kg</small></span></h6>
                                <h6>Cancel & Refund <span><small>
                                            INR4000</small></span></h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <h6>Baggage/luggage <span><small>15kg</small></span></h6>
                                <h6>Seats <span><small>15kg</small></span></h6>
                                <h6>Cancel & Refund <span><small>
                                            INR4000</small></span></h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <h6>Baggage/luggage <span><small>15kg</small></span></h6>
                                <h6>Seats <span><small>15kg</small></span></h6>
                                <h6>Cancel & Refund <span><small>
                                            INR4000</small></span></h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row my-3 justify-content-end d-flex card flex-row p-3 my-3">
                <div class="col-md-4 justify-content-end d-flex">
                    <h3><small>Estimated Fare </small>INR {{$enquiries->total_amount}}</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="booking__review__container passengers__details px-md-0 px-2">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <h3 class="px-md-0">Passenger Details</h3>
                </div>
            </div>
            <div class="row  card p-3 flex-row border-bottom">
                <div class="col-8">
                    <h4>{{$enquiries->customer_name}}</h4>
                </div>
                <div class="col-4 justify-content-end d-flex align-items-center">
                    <span><i class="fa-solid fa-angle-down text__red h5"></i></span>
                </div>
                <div class="col-12 summary-content border-top pt-3" style="display: none;">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="">
                                <small>Email</small>
                            </div>
                            <div class="">
                                <p>{{$enquiries->customer_email}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <small>Mobile Number</small>
                            </div>
                            <div class="">
                                <p>{{$enquiries->customer_mobile}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <small>Pickup Location</small>
                            </div>
                            <div class="">
                                <p>{{$enquiries->picklocation}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form action="{{ route('phonepay.checkout') }}" method="POST">
        @csrf
        <input type="hidden" value="{{$_GET['id']}}" name="enquiryId">
    <section class="booking__review__container py-3 px-md-0 px-2">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <h3>Additional Services</h3>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 px-md-0 my-2">
                    <div class="row card mx-md-2 flex-row">
                        <div class="col-md-3 px-0">
                            <div class="">
                                <img src="{{asset('frontend/assets/image/seat-optimize.png')}}" width="100%" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-9 align-items-center">
                            <div class="py-3 ">
                                <h5>Preferred Driver Language</h5>
                                <p>Choose Your Preferred Driver Language</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="Marathi" name="language[]" required>
                                    <label class="form-check-label" for="inlineCheckbox1">Marathi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="Hindi" name="language[]" required>
                                    <label class="form-check-label" for="inlineCheckbox2">Hindi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                        value="Gujarati" name="language[]">
                                    <label class="form-check-label" for="inlineCheckbox3">Gujarati</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                        value="English" name="language[]">
                                    <label class="form-check-label" for="inlineCheckbox3">English</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-md-0 my-2">
                    <div class="row card mx-md-2 flex-row">
                        <div class="col-md-3 px-0">
                            <div class="">
                                <img src="{{asset('frontend/assets/image/seat-optimize.png')}}" width="100%" alt="">
                            </div>
                        </div>
                        <div class="col-md-9 align-items-center">
                            <div class="py-3 ">
                                <h5>Baby Seat</h5>
                                <p> Subject To Availability</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineCheckbox1"
                                        value="Yes" name="babyseat">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                        value="No" name="babyseat">
                                    <label class="form-check-label" for="inlineCheckbox2">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" py-3 booking__review__container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h3 class="mb-3">Things To Know Before Booking</h3>
                    <div class="">
                        <ul>
                            <li>1. Determine Your Needs: Consider the size, type, and features of the car you
                                need for your trip.</li>
                            <li>2. Compare Prices: Check multiple car rental agencies to find the best rates and
                                deals.</li>
                            <li>3. Check for Hidden Fees: Be aware of any additional charges such as insurance,
                                fuel, or extra mileage fees.</li>
                            <li>4. Understand the Insurance Coverage: Know what is covered under the rental
                                insurance and consider additional coverage if needed.</li>
                            <li>5. Review the Rental Agreement: Carefully read the terms and conditions of the
                                rental agreement before signing.</li>
                            <li>6. Check the Fuel Policy: Understand the fuel policy (full-to-full,
                                same-to-same, etc.) to avoid extra charges.</li>
                            <li>7. Inspect the Car: Thoroughly inspect the car for any existing damage and
                                ensure it is documented before driving off.</li>
                            <li>8. Know the Return Policy: Familiarize yourself with the car return process and
                                the location to avoid last-minute hassles.</li>
                            <li>9. Verify Age Restrictions: Ensure you meet the minimum age requirement and have
                                a valid driver's license.</li>
                            <li>10. Understand Cancellation Policies: Check the cancellation policy to avoid
                                penalties if your plans change.</li>
                            <li>11. Look for Discounts: Take advantage of membership discounts, promotional
                                offers, or credit card benefits.</li>
                            <li>12. Confirm Mileage Limits: Be aware of any mileage restrictions to avoid extra
                                charges for exceeding the limit.</li>
                            <li>13. Emergency Roadside Assistance: Ensure the rental includes roadside
                                assistance in case of breakdowns or emergencies.</li>
                            <li>14. Understand the Deposit: Know the amount and conditions of the deposit
                                required by the rental agency.</li>
                            <li>15. Plan Your Route: Familiarize yourself with the driving routes, traffic
                                rules, and toll charges in your travel area.</li>
                        </ul>

                    </div>
                </div>
                <!-- <div class="col-md-12 booking__review__card   py-3">
                    <div class="justify-content-between card p-md-3  d-flex flex-row">
                        <div class="">
                            <h4>Estimated Total <small>(not include tax & charges)</small></h4>
                        </div>
                        <div>
                            <h4> INR 2000</h4>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-12 booking__review__card py-3">
                    <div class="card p-md-3 p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Estimated Total <small>(not include tax & charges)</small></h4>
                            </div>
                            <div class="col-md-6">
                                <h4>INR {{$enquiries->total_amount}}</h4>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Choose Payment Option:</label>
                                <div class="radio-group d-flex" style="gap: 10px;">
                                    <div>
                                        <input type="radio" id="payment100" name="payment" value="100" checked>
                                        <label for="payment100">100%</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="payment50" name="payment" value="50">
                                        <label for="payment50">50%</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="payment20" name="payment" value="20">
                                        <label for="payment20">20%</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <h4>Remaining Payment Total: <span id="remaining-payment">INR {{$enquiries->total_amount}}</span></h4>
                                <input type="hidden" name="amount" id="remaining-payment-input" value="{{$enquiries->total_amount}}">
                                <input type="hidden" name="customer_id" id="customer_id"value="{{ auth()->check() ? auth()->user()->id : '' }}">
                                
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3 justify-content-end d-flex">
                    <h6>For More Assistance Call Us <a href="tel:+0987654321">1234567890</a></h6>
                </div>
                <div class="col-12  d-flex justify-content-end">
                    {{-- <a href="#" class="btn common__btn px-md-5 px-3">CheckOut</a> --}}
                    {{-- <form action="{{ route('phonepay.checkout') }}" method="POST"> --}}
                       
                    <button type="submit" class="btn common__btn px-md-5 px-3">Pay Now</button>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </section>
</form>
    <!-- footer -->
 
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
 @section('inline-js')
    <script>
        document.querySelectorAll('input[name="payment"]').forEach((radio) => {
            radio.addEventListener('change', (event) => {
    
                const total = <?php echo json_encode($enquiries->total_amount); ?>;
                const paymentPercentage = parseInt(event.target.value, 10);
                const remaining = (total * (paymentPercentage / 100)).toFixed(2);
                
                // Update the span content
                document.getElementById('remaining-payment').innerText = `INR ${remaining}`;
    
                // Update the input value
                document.getElementById('remaining-payment-input').value = remaining;
            });
        });
    </script>
@endsection