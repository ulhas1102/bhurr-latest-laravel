@extends('layouts.master')
@section('title', 'Add Booking')


@section('backend-page-style')
<style>
  .card-header {
      background-color: #5650ce40;
      color: black;
      font-weight: bold;
  }
  </style>
@endsection

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
    <form class="forms-sample" action="add-enquiry" method="POST">
        @csrf
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Customer Details</h4>
                </div>
              <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputUsername1">Customer name</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Customer name" name="customer_name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Customer email</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Customer email" name="customer_email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Customer mobile number</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Customer mobile number" name="customer_mobile" required>
                  </div>
                  <div class="form-group">
                    <label for="alternate_customer_mobile">Customer alternate mobile number</label>
                    <input type="text" class="form-control" id="alternate_customer_mobile" placeholder="Customer mobile number" name="alternate_customer_mobile">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Customer address</label>
                    <textarea class="form-control" id="exampleInputUsername1" placeholder="Customer address" name="customer_address" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Customer Pincode</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Customer Pincode" name="customer_pincode" required>
                  </div>
              </div>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Trip Details</h4>   
                </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="package_type">Package Type</label>
                  <select class="form-control" id="package_type" name="package_type" required>
                    <option>-- Select Tour Package --</option>
                    <option value="1">Local package</option>
                    <option value="2">Outstation package</option>
                    <option value="3">One Way</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Start Destination</label>
                    <input type="text" class="form-control" id="startDestination" placeholder="Start Destination" name="from_location" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">End Destination</label>
                    <input type="text" class="form-control" id="endDestination" placeholder="End Destination" name="to_location" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Start Date</label>
                    <input type="date" class="form-control" id="exampleInputUsername1" placeholder="Start Date" name="start_journy_date" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputUsername1">End Date</label>
                    <input type="date" class="form-control" id="exampleInputUsername1" placeholder="End Date" name="end_journy_date" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">No. of Persons</label>
                    <select class="form-control" id="numberOfPersons" name="number_of_persons">
                      <option value="">--Select Person --</option>
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                  </div>                
                  <div class="form-group">
                    <label for="exampleInputUsername1">Vehicle</label>
                    <select class="form-control" id="exampleInputUsername1" name="vehicle_name" required>
                        <option value="">-- Select Vehicle --</option>
                        @foreach($cars as $car)
                        <option value="{{$car->car_name	}}">{{$car->car_name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Vehicle Type</label>
                    <select class="form-control" id="exampleInputUsername1" name="vehicle_type" required>
                        <option value="">-- Select Vehicle Type --</option>
                        @foreach($cartypes as $cartype)
                        <option value="{{$cartype->car_type}}">{{$cartype->car_type}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Vehicle class</label>
                    <select class="form-control" id="exampleInputUsername1" name="vehicle_class" required>
                        <option value="">-- Select Vehicle Class --</option>
                        @foreach($carclasses as $carclass)
                        <option value="{{$carclass->car_class}}">{{$carclass->car_class}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Driver</label>
                    <select class="form-control" id="exampleInputUsername1" name="driver_id">
                        <option value="">-- Select Driver --</option>
                        @foreach($drivers as $driver)
                        <option value="{{$driver->driver_id}}">{{$driver->name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Vendor</label>
                    <select class="form-control" id="exampleInputUsername1" name="vendor_id" required>
                        <option value="">-- Select Vendor --</option>
                        @foreach($vendors as $vendor)
                        <option value="{{$vendor->id }}">{{$vendor->name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tripConfirmation">Trip Confiormation</label>
                    <select class="form-control" id="tripConfirmation" name="trip_confirm" required>
                        <option value="">-- Select Confirmation --</option>
                        <option value="1">Confirm</option>
                        <option value="2">Pending</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tripStatus">Trip Status</label>
                    <select class="form-control" id="tripStatus" name="trip_status" required>
                        <option value="">-- Select Status --</option>
                        <option value="1">Completed</option>
                        <option value="2">On going</option>
                        <option value="3">Cancelled</option>
                    </select>
                  </div>
                  {{-- <div class="form-group">
                    <label for="advanceAmount">Advance amount <small>(In Rupees)</small></label>
                    <input type="text" class="form-control" id="advanceAmount" placeholder="Advance amount" name="advance_amount">
                  </div> --}}
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
              </div>
            </div>
          </div>
      </div>
    </form>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUkMVVi6QljBfyIuIVsE8MbkgEzu9C0P0&libraries=places"></script>
<script>
  function initAutocomplete() {
      const startDestination = document.getElementById('startDestination');
      const endDestination = document.getElementById('endDestination');

      const autocompleteStart = new google.maps.places.Autocomplete(startDestination);
      const autocompleteEnd = new google.maps.places.Autocomplete(endDestination);

      autocompleteStart.setFields(['address_components', 'geometry', 'icon', 'name']);
      autocompleteEnd.setFields(['address_components', 'geometry', 'icon', 'name']);

      autocompleteStart.addListener('place_changed', function() {
          const place = autocompleteStart.getPlace();
          console.log('Start Place:', place);
      });
      autocompleteEnd.addListener('place_changed', function() {
          const place = autocompleteEnd.getPlace();
          console.log('End Place:', place);
      });
  }
  // Ensure that the script is executed after the API is loaded
  document.addEventListener('DOMContentLoaded', function() {
      initAutocomplete();
  });
</script>

@endsection