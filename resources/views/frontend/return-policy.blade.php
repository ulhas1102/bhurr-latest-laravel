@extends('frontend-layout.app')
@section('title', 'Refund Policy- page')
@section('inline-css')

</head>
<body>
    @endsection
    
    @section('content')
        <section>
            <div class="container py-md-5 py-3 text-justify">
                <div class="row">
                    <div class="col-12 ">
                        <h1 class="text-left">Cancellation Policy</h1>
                        <p>For outstation trips only -</p>
                        <ul style="list-style-type: auto; padding-left: 20px;">
                            <li>
                                <b>General Refund Policy:</b>
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li>100% refunds on paid amount within 30 minutes of booking, minus platform fee of ₹ 199 + GST and transaction charges (levied by card vendors or UPI merchant transaction fee, payment gateway charges).</li>
                                    <li>If booked with a 20% advance payment, 50% of the paid amount will be refunded if cancelled before 6 hours from the time of departure.</li>
                                    <li>If booked with a 50% advance payment, 80% of the paid amount will be refunded if cancelled before 6 hours from the time of departure.</li>
                                    <li>If booked with a 100% pre-payment, 90% of the paid amount will be refunded if cancelled before 6 hours from the time of departure.</li>
                                    <li>10% of the estimated fare will be deducted from refunds if cancelled before 6 hours from the time of departure.</li>
                                    <li>No refunds will be made if cancelled within 6 hours of departure.</li>
                                    <li>All other cancellations and refunds would be at the sole discretion of Bhurr Technologies LLP.</li>
                                </ul>
                            </li>
                            <li>
                                <b>For Local Packages:</b>
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li>100% refunds on paid amount within 30 minutes of booking, minus platform fee of ₹ 199 + GST and transaction charges (levied by card vendors or UPI merchant transaction fee, payment gateway charges).</li>
                                    <li>75% of the paid amount will be refunded if cancelled before 6 hours from the time of departure.</li>
                                    <li>No refunds will be made if cancelled within 6 hours of departure.</li>
                                    <li>All other cancellations and refunds would be at the discretion of Bhurr Technologies LLP.</li>
                                </ul>
                            </li>
                            <li>
                                <b>For One-Way Trips:</b>
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li>100% refunds on paid amount within 30 minutes of booking, minus platform fee of ₹ 199 + GST and transaction charges (levied by card vendors or UPI merchant transaction fee, payment gateway charges).</li>
                                    <li>10% of the estimated fare will be deducted from refunds if cancelled before 6 hours from the time of departure.</li>
                                    <li>No refunds will be made if cancelled within 6 hours of departure.</li>
                                    <li>All other cancellations and refunds would be at the discretion of Bhurr Technologies LLP.</li>
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </section>

@endsection
	
  @section('inline-js')

@endsection