@extends('layouts.master')
@section('title', 'Booking Details')

@section('backend-page-style')
<style>
    .card-header {
        background-color: #5650ce40;
        color: black;
        font-weight: bold;
    }
	.badge-danger{
		cursor:pointer;
	}
    </style>
@endsection
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
		@if($enquiries->refund_status == 1)
		<div class="row">
			<div class="card">
				<div class="col-md-12 text-center">
					<h2 class="text-danger">Ride Cancelled</h2>
						@if($enquiries->refund_paid_status == 1)
						<p class="badge badge-success  text-white">Paid</p>
						@else
						<p class="badge badge-danger text-white">Unpaid</p>
						@endif
				</div>
			</div>
		</div>
		@endif
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 style="background-color: #5650ce40;padding:10px;"><b>Customer Details:-</b></h3>
                            <div class="row mt-4">
                                <label><b>Customer Name:</b></label>
                                <p>{{ $enquiries->customer_name }}</p>
                            </div>
                            <div class="row">
                                <label><b>Customer Email:</b></label>
                                <p>{{ $enquiries->customer_email }}</p>
                            </div>
                            <div class="row">
                                <label><b>Customer Mobile:</b></label>
                                <p>{{ $enquiries->customer_mobile }}</p>
                            </div>
                            <div class="row">
                                <label><b>Customer alternate mobile:</b></label>
                                <p>{{ $enquiries->alternate_customer_mobile }}</p>
                            </div>
                            <div class="row">
                                <label><b>Customer Address:</b></label>
                                <p>{{ $enquiries->customer_address }}</p>
                            </div>
                            <div class="row">
                                <label><b>Customer Pincode:</b></label>
                                <p>{{ $enquiries->customer_pincode }}</p>
                            </div>
                            <div class="row">
                                <label><b>Start Destination:</b></label>
                                <p>{{ $enquiries->from_location }}</p>
                            </div>
                            <div class="row">
                                <label><b>End Destination:</b></label>
                                <p>{{ $enquiries->to_location }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h3 style="background-color: #5650ce40;padding:10px;"><b>Journey Details:-</b></h3>
                           
                            <div class="row">
                                <label><b>Journey Start Date:</b></label>
                                <p>{{ $enquiries->start_journy_date }}</p>
                            </div>
                            <div class="row">
                                <label><b>Total Distance:</b></label>
                                <p>{{ $enquiries->total_distance }} Km/m</p>
                            </div>
                            <div class="row">
                                <label><b>Trip Amount<small>(Total Distance start dstination to end destination * per km charges)</small></b></label>
                                <p>{{ $enquiries->total_amount }} Rs.</p>
                            </div>
                            <div class="row">
                                <label><b>Advance Amount:</b></label>
                                <p>
                                    {{ $enquiries->advance_amount }} Rs.
                                </p>
                            </div>
                            <div class="row">
                                <label><b>Extra Hours:</b></label>
                                <p>
                                    @if($enquiries->extra_hours != 0)
                                    {{ $enquiries->extra_hours }} Hr.
                                    @else
                                        <i class="text-danger">No Extra Hours</i>
                                    @endif
                                </p>
                            </div>

                            @if($enquiries->extra_hours != 0)
                            <div class="row">
                                <label><b>Extra Hours Charges<small>(Extra Hours * per Hour charges)</small></b></label>
                                <p>
                                    {{ $enquiries->extra_hours_amount }} Rs.
                                </p>
                            </div>
                            @endif

                            <div class="row">
                                <label><b>Remaining Amount:</b></label>
                                <p>
                                    {{ $enquiries->remaining_amount }} Rs.
                                </p>
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <h3 style="background-color: #5650ce40;padding:10px;"><b>Vehicle/Driver Details:-</b></h3>
                            <div class="row mt-4">
                                <label><b>Vehicle Name:</b></label>
                                <p>{{ $enquiries->vehicle_name }}</p>
                            </div>
                            <div class="row">
                                <label><b>Vehicle Type:</b></label>
                                <p>{{ $enquiries->vehicle_type }}</p>
                            </div>
                            <div class="row">
                                <label><b>Vehicle Class:</b></label>
                                <p>{{ $enquiries->vehicle_class }}</p>
                            </div>
                            @if ($driver)
                            <div class="row">
                                <label><b>Driver Name:</b></label>
                                <p>
                                    {{ $driver->name }}
                                </p>
                            </div>
                            <div class="row">
                                <label><b>Driver Email:</b></label>
                                <p>{{ $driver->email }}</p>
                            </div>
                            <div class="row">
                                <label><b>Driver Contact number:</b></label>
                                <p>{{ $driver->mobile_number }}</p>
                            </div>
                            @else
                                <p class="text-danger"><b>No driver assigned</b></p>
                            @endif
                           
                        </div>
                    </div>
                    <div class="d-flex mt-3 justify-content-between">
                        <form id="phonePayForm" method="POST" action="{{ route('generate.phonepay.request') }}">
                            @csrf
                            <input type="hidden" name="amount" value="{{ $enquiries->total_amount }}">
                            <input type="hidden" name="customer_mobile" value="{{ $enquiries->customer_mobile }}">
                            <button type="button" onclick="submitPhonePayForm()" class="btn btn-primary">Generate Phone Pay Request Amount</button>
                        </form>
                        
                        <a href="{{ route('generate.invoice', $enquiries->enquiry_id) }}" class="btn btn-primary" style="padding-left: 18px; padding-right: 18px; padding-bottom: 3px; height: 36.333334px;" target="_blank">Preview Invoice</a>

                        <a href="{{ route('download.invoice', $enquiries->enquiry_id) }}" class="btn btn-primary" style="padding-left: 18px; padding-right: 18px; padding-bottom: 3px; height: 36.333334px;"  target="_blank">Download Invoice</a>


                        <a href="{{ URL::previous() }}" class="btn btn-primary" style="
                        padding-left: 18px;
                        padding-right: 18px;
                        padding-bottom: 3px;
                        height: 36.333334px;" >Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header d-flex  justify-content-between p-3">
                  <h4>Payment History</h4>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paymentHistoryModal">Add Payment History</button>
                </div>
                  
                  <div class="card-body">
                      <table class="table display" style="width:100%" id="example">
                        <thead>
                          <tr>
                            <th>Sr.No</th>
                              <th>Payment Mode</th>
                              <th>Payment Date</th>
                              <th>Paid Amount</th>
                              <th>Comment</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;   
                         @endphp
                          @foreach($paymentHistorys as $paymentHistory)
                          <tr>
                          <td>{{$i++}}.</td>
                          <td>{{$paymentHistory->payment_mode}}</td>
                          <td>{{$paymentHistory->payment_date}}</td>
                          <td>{{$paymentHistory->paid_amount}}</td>
                          <td>{{$paymentHistory->comment}}</td>
                          <td class="d-flex  justify-content-between">
                            
                            <button type="button" class="btn btn-primary" style="
                            padding-left: 18px;
                            padding-right: 18px;
                            padding-bottom: 3px;
                            height: 36.333334px;" 
                            onclick="editPaymentHistory({{ json_encode($paymentHistory) }})">
                            Edit
                        </button>

                              <form action="deletepaymentHistory" method="POST">
                                  @csrf
                                  <input type="hidden" name="payment_history_id" value="{{$paymentHistory->payment_history_id}}">
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                          </td>      
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
              </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header d-flex  justify-content-between p-3">
                  <h4>Extra Hours</h4>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Hoursmodel">Add Extra Hours</button>
                </div>
                  
                  <div class="card-body">
                      <table class="table display" style="width:100%" id="example2">
                        <thead>
                          <tr>
                            <th>Sr.No</th>
                              <th>Hours</th>
                              <th>Date</th>
                              <th>Start Time</th>
                              <th>End Time</th>
                              <th>Comment</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                           $i = 1;   
                          @endphp
                          @foreach($extraHours as $extraHour)
                          <tr>
                          <td>{{$i++}}.</td>
                          <td>{{$extraHour->extra_hours}}</td>
                          <td>{{$extraHour->date}}</td>
                          <td>{{$extraHour->start_time}}</td>
                          <td>{{$extraHour->end_time}}</td>
                          <td>{{$extraHour->comment}}</td>
                          <td class="d-flex  justify-content-between">
                            
                            <button type="button" class="btn btn-primary" style="
                                padding-left: 18px;
                                padding-right: 18px;
                                padding-bottom: 3px;
                                height: 36.333334px;" 
                                onclick="editExtraHours({{ json_encode($extraHour) }})">
                                Edit
                            </button>

                              <form action="deleteExtraHours" method="POST">
                                  @csrf
                                  <input type="hidden" name="extra_hours_id" value="{{$extraHour->extra_hours_id }}">
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                          </td>      
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
              </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header d-flex  justify-content-between p-3">
                  <h4>Extra Kilometers</h4>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Kilometersmodel">Add Extra Kilometers</button>
                </div>
                  
                  <div class="card-body">
                      <table class="table display" style="width:100%" id="example2">
                        <thead>
                          <tr>
                            <th>Sr.No</th>
                              <th>Kilometers</th>
                              <th>Date</th>
                              <th>Comment</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                           $i = 1;   
                          @endphp
                          @foreach($extraKilometers as $extraKilometer)
                          <tr>
                          <td>{{$i++}}.</td>
                          <td>{{$extraKilometer->kilometers}}</td>
                          <td>{{$extraKilometer->date}}</td>
                          <td>{{$extraKilometer->comment}}</td>
                          <td class="d-flex  justify-content-between">
                            
                            <button type="button" class="btn btn-primary" style="
                                padding-left: 18px;
                                padding-right: 18px;
                                padding-bottom: 3px;
                                height: 36.333334px;" 
                                onclick="editExtraKilometers({{ json_encode($extraKilometer) }})">
                                Edit
                            </button>

                              <form action="deleteExtrakilometers" method="POST">
                                  @csrf
                                  <input type="hidden" name="extra_kilometers_id" value="{{$extraKilometer->extra_kilometers_id }}">
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                          </td>      
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
              </div>
        </div>
		<div class="row">
            <div class="card">
                <div class="card-header d-flex  justify-content-between p-3">
                  <h4>Extra Expence</h4>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Expencesmodel">Add Extra Expence</button>
                </div>
                  
                  <div class="card-body">
                      <table class="table display" style="width:100%" id="example2">
                        <thead>
                          <tr>
                            <th>Sr.No</th>
                              <th>Date</th>
                              <th>Time</th>
							  <th>Amount</th>
                              <th>Comment</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                           $i = 1;   
                          @endphp
                          @foreach($extraExpences as $extraExpence)
                          <tr>
                          <td>{{$i++}}.</td>
                          <td>{{$extraExpence->date}}</td>
                          <td>{{$extraExpence->time}}</td>
						  <td>{{$extraExpence->amount}}</td>
                          <td>{{$extraExpence->comment}}</td>
                          <td class="d-flex  justify-content-between">
                           {{-- <button type="button" class="btn btn-primary" style="
                                padding-left: 18px;
                                padding-right: 18px;
                                padding-bottom: 3px;
                                height: 36.333334px;" 
                                onclick="editExtraExpences({{ json_encode($extraExpence) }})">
                                Edit
                            </button>--}}

                              <form action="deleteExtraExpence" method="POST">
                                  @csrf
                                  <input type="hidden" name="extra_kilometers_id" value="{{$extraExpence->extra_expence_id }}">
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                          </td>      
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
              </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="paymentHistoryModal" tabindex="-1" role="dialog" aria-labelledby="paymentHistoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentHistoryModalLabel">Add Payment History</h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="paymentHistoryForm" method="POST" action="{{ route('add.payment.history') }}">
                @csrf
                <input type="hidden" name="enquiry_id" value="{{ $enquiries->enquiry_id }}">
                <div class="modal-body">
                    <div class="form-group">
                        <p><b>Remaining amount:
                            {{ $enquiries->remaining_amount }} Rs.
                            </b></p>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" placeholder="Enter Amount" class="form-control" id="amount" name="paid_amount" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="payment_date" required>
                    </div>
                    <div class="form-group">
                        <label for="mode">Mode of Payment</label>
                        <select class="form-control" id="mode" name="payment_mode" required>
                            <option value="Credit Card">Credit Card</option>
                            <option value="Debit Card">Debit Card</option>
                            <option value="Net Banking">Net Banking</option>
                            <option value="UPI">UPI</option>
                            <option value="Cash">Cash</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" id="comment" name="comment" placeholder="Enter comment"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Extra hours Model -->
<div class="modal fade" id="Hoursmodel" tabindex="-1" role="dialog" aria-labelledby="HoursmodelModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="HoursmodelModalLabel">Add Extra Hours</h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="HoursForm" method="POST" action="{{ route('add.extra.hours') }}">
                @csrf
                <input type="hidden" name="enquiry_id" value="{{ $enquiries->enquiry_id }}">
                <div class="modal-body">
                   
                    <div class="form-group">
                        <label for="amount">Hours</label>
                        <input type="text" placeholder="Enter Amount" class="form-control" id="hours" name="extra_hours" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="start_time">Start Time</label>
                        <input type="time" class="form-control" id="start_time" name="start_time" required>
                    </div>
                    <div class="form-group">
                        <label for="end_time">End Time</label>
                        <input type="time" class="form-control" id="end_time" name="end_time" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" id="comment" name="comment" placeholder="Enter comment"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- End Extra hours model -->

<!--Extra Kilometers model -->

<div class="modal fade" id="Kilometersmodel" tabindex="-1" role="dialog" aria-labelledby="KilometermodelModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="KilometermodelModalLabel">Add Extra Kilometers</h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="KilometersForm" method="POST" action="{{ route('add.extra.kilometers') }}">
                @csrf
                <input type="hidden" name="enquiry_id" value="{{ $enquiries->enquiry_id }}">
                <div class="modal-body">
                   
                    <div class="form-group">
                        <label for="amount">Kilometers</label>
                        <input type="text" placeholder="Enter Kilometer" class="form-control" id="kilometers" name="kilometers" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" id="comment" name="comment" placeholder="Enter comment"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Extra kilometers model  -->
<!-- Edit payment history modal -->
<div class="modal fade" id="editPaymentHistoryModal" tabindex="-1" role="dialog" aria-labelledby="editPaymentHistoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPaymentHistoryModalLabel">Edit Payment History</h5>
                <button type="button" class="close" onclick="closeModal('editPaymentHistoryModal')" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editPaymentHistoryForm" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="enquiry_id" id="ediEnquiryId">
                    <div class="form-group">
                        <label for="editPaymentMode">Payment Mode</label>
                        <input type="text" class="form-control" id="editPaymentMode" name="payment_mode" required>
                    </div>
                    <div class="form-group">
                        <label for="editPaymentDate">Payment Date</label>
                        <input type="date" class="form-control" id="editPaymentDate" name="payment_date" required>
                    </div>
                    <div class="form-group">
                        <label for="editPaidAmount">Paid Amount</label>
                        <input type="text" class="form-control" id="editPaidAmount" name="paid_amount" required>
                    </div>
                    <div class="form-group">
                        <label for="editcomment">Comment</label>
                        <textarea class="form-control" id="editcomment" name="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Extra Hours Model -->

<!--Extra Expence model -->

<div class="modal fade" id="Expencesmodel" tabindex="-1" role="dialog" aria-labelledby="ExpencesmodelModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ExpencesmodelModalLabel">Add Extra Expence</h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="KilometersForm" method="POST" action="{{ route('add.extra.expence') }}">
                @csrf
                <input type="hidden" name="enquiry_id" value="{{ $enquiries->enquiry_id }}">
                <div class="modal-body">
                   
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" placeholder="Enter Amount" class="form-control" id="amount" name="amount" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
					 <div class="form-group">
                        <label for="date">Time</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" id="comment" name="comment" placeholder="Enter comment"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Extra Expence model  -->

<div class="modal fade" id="editExtraHoursModal" tabindex="-1" role="dialog" aria-labelledby="editExtraHoursModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editExtraHoursModalLabel">Edit Extra Hours</h5>
                <button type="button" class="close" onclick="closeModal('editExtraHoursModal')" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editExtraHoursModalForm" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="enquiry_id" id="ediExtraHoursEnquiryId">
                    <div class="form-group">
                        <label for="editHours">Hours</label>
                        <input type="text" class="form-control" id="editHours" name="extra_hours" required>
                    </div>
                    <div class="form-group">
                        <label for="editDate">Date</label>
                        <input type="date" class="form-control" id="editDate" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="editStartTime">Start Time</label>
                        <input type="text" class="form-control" id="editStartTime" name="start_time" required>
                    </div>
                    <div class="form-group">
                        <label for="editEndTime">End Time</label>
                        <input type="text" class="form-control" id="editEndTime" name="end_time" required>
                    </div>
                    <div class="form-group">
                        <label for="editExtraHourscomment">Comment</label>
                        <textarea class="form-control" id="editExtraHourscomment" name="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- End Edit Extra houers model -->
<!-- Edit Extra Kilometers Model -->

<div class="modal fade" id="editExtraKilometersModal" tabindex="-1" role="dialog" aria-labelledby="editExtrakilometersModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editExtrakilometersModalLabel">Edit Extra Hours</h5>
                <button type="button" class="close" onclick="closeModal('editExtraKilometersModal')" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editExtrakilometersModalForm" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="enquiry_id" id="ediExtraKilometerEnquiryId">
                    <div class="form-group">
                        <label for="editKilometer">Kilometer</label>
                        <input type="text" class="form-control" id="editKilometer" name="kilometers" required>
                    </div>
                    <div class="form-group">
                        <label for="editKmDate">Date</label>
                        <input type="date" class="form-control" id="editKmDate" name="date" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="editExtraKilometercomment">Comment</label>
                        <textarea class="form-control" id="editExtraKilometercomment" name="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Extra Kilometers Model -->

<div class="modal fade" id="editExtraExpencesModal" tabindex="-1" role="dialog" aria-labelledby="editExtraExpencesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editExtraExpencesModalLabel">Edit Extra Expence</h5>
                <button type="button" class="close" onclick="closeModal('editExtraExpencesModal')" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editExtraExpencesModalForm" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="enquiry_id" id="editExtraExpencesEnquiryId">
                    <div class="form-group">
                        <label for="editAmount">Amount</label>
                        <input type="text" class="form-control" id="editAmount" name="amount" required>
                    </div>
                    <div class="form-group">
                        <label for="editExDate">Date</label>
                        <input type="date" class="form-control" id="editExDate" name="date" required>
                    </div>
					<div class="form-group">
                        <label for="editExTime">Time</label>
                        <input type="time" class="form-control" id="editExTime" name="time" required>
                    </div>
                    <div class="form-group">
                        <label for="editExtraExpencecomment">Comment</label>
                        <textarea class="form-control" id="editExtraExpencecomment" name="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- End Edit Extra Kilometers model -->
<!-- End Edit Extra Kilometers model -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function submitPhonePayForm() {
        // Optional: You can add client-side validation or confirmation here

        // Submit the form
        document.getElementById("phonePayForm").submit();
    }
</script>
<script>
    function editPaymentHistory(paymentHistory) {
       // console.log(paymentHistory);

        // Populate the form fields in the modal
        document.getElementById('editPaymentMode').value = paymentHistory.payment_mode;
        document.getElementById('editPaymentDate').value = paymentHistory.payment_date;
        document.getElementById('editPaidAmount').value = paymentHistory.paid_amount;
        document.getElementById('editcomment').value = paymentHistory.comment;
        document.getElementById('ediEnquiryId').value = paymentHistory.enquiry_id;
        document.getElementById('editPaymentHistoryForm').action = `./edit-paymentHistory/${paymentHistory.payment_history_id}`;

        // Show the modal
        $('#editPaymentHistoryModal').modal('show');
    }
</script>
<script>
    function editExtraHours(extraHour) {
       // console.log(paymentHistory);

        // Populate the form fields in the modal
        document.getElementById('editHours').value = extraHour.extra_hours;
        document.getElementById('editDate').value = extraHour.date;
        document.getElementById('editStartTime').value = extraHour.start_time;
        document.getElementById('editEndTime').value = extraHour.end_time;
        document.getElementById('editExtraHourscomment').value = extraHour.comment;
        document.getElementById('ediExtraHoursEnquiryId').value = extraHour.enquiry_id;
        document.getElementById('editExtraHoursModalForm').action = `./edit-Extrahours/${extraHour.	extra_hours_id}`;

        // Show the modal
        $('#editExtraHoursModal').modal('show');
    }
</script>

<script>
    function editExtraKilometers(extraKilometer) {
       // console.log(paymentHistory);

        // Populate the form fields in the modal
        document.getElementById('editKilometer').value = extraKilometer.kilometers;
        document.getElementById('editKmDate').value = extraKilometer.date;
        document.getElementById('editExtraKilometercomment').value = extraKilometer.comment;
        document.getElementById('ediExtraKilometerEnquiryId').value = extraKilometer.enquiry_id;
        document.getElementById('editExtrakilometersModalForm').action = `./edit-ExtraKilometers/${extraKilometer.extra_kilometers_id}`;

        // Show the modal
        $('#editExtraKilometersModal').modal('show');
    }
	
	function editExtraExpences(extraExpence) {
       // console.log(paymentHistory);
        // Populate the form fields in the modal
        document.getElementById('editAmount').value = extraExpence.amount;
        document.getElementById('editExDate').value = extraExpence.date;
		document.getElementById('editExTime').value = extraExpence.time;
        document.getElementById('editExtraExpencecomment').value = extraExpence.comment;
        document.getElementById('editExtraExpencesEnquiryId').value = extraExpence.enquiry_id;
        document.getElementById('editExtraExpencesModalForm').action = `./edit-ExtraExpences/${extraExpence.extra_expence_id}`;

        // Show the modal
        $('#editExtraExpencesModal').modal('show');
    }
</script>

<script>
    function closeModal(modalId) {
        $('#' + modalId).modal('hide');
    }
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

@endsection
