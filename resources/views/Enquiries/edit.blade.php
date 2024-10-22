@extends('layouts.master')
@section('title', 'Edit Booking')

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
        <form class="forms-sample" action="{{ url('edit-enquiry') }}" method="POST">
            @csrf
            <input type="hidden" name="enquiry_id" id="enquiry_id" value="{{ $enquiries->enquiry_id }}">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Customer Details</h4>
                        </div>
                        <div class="card-body">
                            <!-- Customer Details Fields -->
                            <div class="form-group">
                                <label for="customer_name">Customer Name</label>
                                <input type="text" class="form-control" id="customer_name" placeholder="Customer name" name="customer_name" value="{{ $enquiries->customer_name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="customer_email">Customer Email</label>
                                <input type="email" class="form-control" id="customer_email" placeholder="Customer email" name="customer_email" value="{{ $enquiries->customer_email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="customer_mobile">Customer Mobile Number</label>
                                <input type="text" class="form-control" id="customer_mobile" placeholder="Customer mobile number" name="customer_mobile" value="{{ $enquiries->customer_mobile }}" required>
                            </div>
                            <div class="form-group">
                                <label for="alternate_customer_mobile">Customer Alternate Mobile Number</label>
                                <input type="text" class="form-control" id="alternate_customer_mobile" placeholder="Customer alternate mobile number" name="alternate_customer_mobile" value="{{ $enquiries->alternate_customer_mobile }}">
                            </div>
                            <div class="form-group">
                                <label for="customer_address">Customer Address</label>
                                <textarea class="form-control" id="customer_address" placeholder="Customer address" name="customer_address" required>{{ $enquiries->picklocation }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="customer_pincode">Customer Pincode</label>
                                <input type="text" class="form-control" id="customer_pincode" placeholder="Customer Pincode" name="customer_pincode" value="{{ $enquiries->customer_pincode }}">
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
                            <!-- Trip Details Fields -->
                            <div class="form-group">
                                <label for="package_type">Package Type</label>
                                <select class="form-control" id="package_type" name="package_type" required>
                                    <option value="">-- Select Tour Package --</option>
                                    <option value="1" {{ $enquiries->package_type == 1 ? 'selected' : '' }}>Local Package</option>
                                    <option value="2" {{ $enquiries->package_type == 2 ? 'selected' : '' }}>Outstation Package</option>
                                    <option value="3" {{ $enquiries->package_type == 3 ? 'selected' : '' }}>One Way</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="startDestination">Start Destination</label>
                                <input type="text" class="form-control" id="startDestination" placeholder="Start Destination" name="from_location" required value="{{ $enquiries->from_location }}">
                            </div>
                            <div class="form-group">
                                <label for="endDestination">End Destination</label>
                                <input type="text" class="form-control" id="endDestination" placeholder="End Destination" name="to_location" required value="{{ $enquiries->to_location }}">
                            </div>
                            <div class="form-group">
                                <label for="start_journy_date">Start Date</label>
                                <input type="date" class="form-control" id="start_journy_date" placeholder="Start Date" name="start_journy_date" required value="{{ \Carbon\Carbon::parse($enquiries->start_journy_date)->format('Y-m-d') }}">
                            </div>
                            <div class="form-group">
                                <label for="end_journy_date">End Date</label>
                                <input type="date" class="form-control" id="end_journy_date" placeholder="End Date" name="end_journy_date" value="{{ $enquiries->end_journy_date }}">
                            </div>
                            <div class="form-group">
                                <label for="numberOfPersons">No. of Persons</label>
                                <select class="form-control" id="numberOfPersons" name="number_of_persons">
                                    <option value="">-- Select Person --</option>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}" {{ $enquiries->number_of_persons == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="vehicle_class">Vehicle Class</label>
                                <select class="form-control" id="vehicle_class" name="vehicle_class" required>
                                    <option value="">-- Select Vehicle Class --</option>
                                    @foreach($carclasses as $carclass)
                                        <option value="{{ $carclass->car_class }}" {{ $enquiries->vehicle_class == $carclass->car_class ? 'selected' : '' }}>{{ $carclass->car_class }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="vehicle_type">Vehicle Type</label>
                                <select class="form-control" id="vehicle_type" name="vehicle_type" required>
                                    <option value="">-- Select Vehicle Type --</option>
                                    @foreach($cartypes as $cartype)
                                        <option value="{{ $cartype->car_type }}" {{ $enquiries->vehicle_type == $cartype->car_type ? 'selected' : '' }}>{{ $cartype->car_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="vendor">Vendor</label>
                                <select class="form-control" id="vendor" name="vendor_id" required>
                                    <option value="">-- Select Vendor --</option>
                                    <!-- Options will be dynamically added here -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="vehicle">Vehicle</label>
                                <select class="form-control" id="vehicle" name="vehicle_name" disabled>
                                    <option value="">-- Select Vehicle --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="driver">Driver</label>
                                <select class="form-control" id="driver" name="driver_id" disabled>
                                    <option value="">-- Select Driver --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tripConfirmation">Trip Confirmation</label>
                                <select class="form-control" id="tripConfirmation" name="trip_confirm" required>
                                    <option value="">-- Select Confirmation --</option>
									<option value="2" {{ $enquiries->confirm_status == 2 ? 'selected' : '' }}>Assign</option>
                                    <option value="1" {{ $enquiries->confirm_status == 1 ? 'selected' : '' }}>Confirm</option>
                                    <option value="2" {{ $enquiries->confirm_status == 3 ? 'selected' : '' }}>Pending</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tripStatus">Trip Status</label>
                                <select class="form-control" id="tripStatus" name="trip_status" required>
                                    <option value="">-- Select Status --</option>
                                    <option value="1" {{ $enquiries->trip_status == 1 ? 'selected' : '' }}>Completed</option>
                                    <option value="2" {{ $enquiries->trip_status == 2 ? 'selected' : '' }}>On Going</option>
                                    <option value="3" {{ $enquiries->trip_status == 3 ? 'selected' : '' }}>Cancelled</option>
                                    <option value="0" {{ $enquiries->trip_status == 0 ? 'selected' : '' }}>Not Completed</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="totalAmount">Total Amount <small>(In Rupees)</small></label>
                                <input type="text" class="form-control" id="totalAmount" placeholder="Total Amount" name="total_amount" value="{{ $enquiries->total_amount }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="amountPaid">Amount Paid <small>(In Rupees)</small></label>
                                <input type="text" class="form-control" id="amountPaid" placeholder="Amount Paid" name="amount_paid" value="{{ $enquiries->amount_paid }}">
                            </div>
                            <div class="form-group">
                                <label for="amountPending">Amount Pending <small>(In Rupees)</small></label>
                                <input type="text" class="form-control" id="amountPending" placeholder="Amount Pending" name="amount_pending" value="{{ $enquiries->amount_pending }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('backend-page-script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACiii2Kp1VXRckQoTy_MYZcLkS0wEKhBE&libraries=places"></script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
    // Google Places API Autocomplete
    const startDestination = document.getElementById('startDestination');
    const endDestination = document.getElementById('endDestination');
    
    const autocompleteStart = new google.maps.places.Autocomplete(startDestination);
    const autocompleteEnd = new google.maps.places.Autocomplete(endDestination);

// Fetch and populate vendors
fetch("https://www.bhurr.co.in/api/v-vendors")
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            const vendorSelect = document.getElementById('vendor');
            data.vendors.forEach(vendor => {
                const option = document.createElement('option');
                option.value = vendor.id;
                option.textContent = vendor.name;
                option.selected = (String({{ $enquiries->vendor_id }}) === String(vendor.id));
                vendorSelect.appendChild(option);
            });

            // Trigger change event to populate vehicles and drivers based on default vendor
            const selectedVendorId = document.getElementById('vendor').value;
            if (selectedVendorId) {
                populateVehicles(selectedVendorId);
                populateDrivers(selectedVendorId);
            }
        } else {
            console.error('Failed to fetch vendors:', data.message);
        }
    })
    .catch(error => console.error('Error fetching vendors:', error));

// Fetch and populate vehicles and drivers based on selected vendor
document.getElementById('vendor').addEventListener('change', function() {
    const vendorId = this.value;
    if (vendorId) {
        populateVehicles(vendorId);
        populateDrivers(vendorId);
    } else {
        resetVehicleAndDriverOptions();
    }
});

// Function to fetch and populate vehicles
function populateVehicles(vendorId) {
    // Assume `vehicleClass` is set to the class you want to filter by
    const vehicleClass = '{{ $enquiries->vehicle_class }}'; // Adjust this to how you are passing or setting vehicle_class

    fetch(`https://www.bhurr.co.in/api/vendors-cars/${vendorId}`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const vehicleSelect = document.getElementById('vehicle');
                vehicleSelect.innerHTML = '<option value="">-- Select Vehicle --</option>'; // Clear previous options
                
                // Filter vehicles by class and populate the dropdown
                data.cars.filter(vehicle => vehicle.car_class === vehicleClass).forEach(vehicle => {
                    const option = document.createElement('option');
                    option.value = vehicle.car_name;
                    option.textContent = vehicle.car_name;
                    // Ensure this matches your requirement for pre-selecting an option
                    option.selected = (String('{{ $enquiries->vehicle_name }}') === String(vehicle.car_name));
                    vehicleSelect.appendChild(option);
                });

                vehicleSelect.disabled = false;
            } else {
                console.error('Failed to fetch vehicles:', data.message);
            }
        })
        .catch(error => console.error('Error fetching vehicles:', error));
}

// Function to fetch and populate drivers
function populateDrivers(vendorId) {
    fetch(`https://www.bhurr.co.in/api/v-drivers/${vendorId}`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const driverSelect = document.getElementById('driver');
                driverSelect.innerHTML = '<option value="">-- Select Driver --</option>'; // Clear previous options
                data.drivers.forEach(driver => {
                  console.log(driver.driver_id);
                  
                    const option = document.createElement('option');
                    option.value = driver.driver_id;
                    option.textContent = driver.name;
                    option.selected = (String('{{ $enquiries->driver_id }}') === String(driver.driver_id));
                    driverSelect.appendChild(option);
                });
                driverSelect.disabled = false;
            } else {
                console.error('Failed to fetch drivers:', data.message);
            }
        })
        .catch(error => console.error('Error fetching drivers:', error));
}

  // Function to reset vehicle and driver options
  function resetVehicleAndDriverOptions() {
      const vehicleSelect = document.getElementById('vehicle');
      vehicleSelect.innerHTML = '<option value="">-- Select Vehicle --</option>';
      vehicleSelect.disabled = true;

      const driverSelect = document.getElementById('driver');
      driverSelect.innerHTML = '<option value="">-- Select Driver --</option>';
      driverSelect.disabled = true;
  }


});

</script>
@endsection
