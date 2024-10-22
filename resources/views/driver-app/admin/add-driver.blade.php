@extends('driver-app.admin.layouts.app')
@section('title', 'Add Driver')
@section('content')
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Driver Information</h4>

                            <form class="forms-sample" action="{{ route('store.driver') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <input type="hidden" name="latitude" id="latitude" value="">
                                <input type="hidden" name="longitude" id="longitude" value="">

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputFirstName">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputFirstName"
                                            name="first_name" placeholder="Enter Your Driver First Name"
                                            value="{{ old('first_name') }}">
                                        @if ($errors->has('first_name'))
                                        <div class="text-danger">{{ $errors->first('first_name') }}</div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label for="exampleInputLastName">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputLastName"
                                            name="last_name" placeholder="Enter Your Driver Last Name"
                                            value="{{ old('last_name') }}">
                                        @if ($errors->has('last_name'))
                                        <div class="text-danger">{{ $errors->first('last_name') }}</div>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Email Address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            name="driver_email" placeholder="Enter Your Driver Email"
                                            value="{{ old('driver_email') }}">
                                        @if ($errors->has('driver_email'))
                                        <div class="text-danger">{{ $errors->first('driver_email') }}</div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Mobile Number</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="mobile_no"
                                            placeholder="Enter Your Mobile No" value="{{ old('mobile_no') }}">
                                        @if ($errors->has('mobile_no'))
                                        <div class="text-danger">{{ $errors->first('mobile_no') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Alternate Mobile Number</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            name="alternate_mobile_no" placeholder="Enter Alternative Mobile Number"
                                            value="{{ old('alternate_mobile_no') }}">
                                        @if ($errors->has('alternate_mobile_no'))
                                        <div class="text-danger">{{ $errors->first('alternate_mobile_no') }}</div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Address1</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="address1"
                                            placeholder="Enter Address1" value="{{ old('address1') }}">
                                        @if ($errors->has('address1'))
                                        <div class="text-danger">{{ $errors->first('address1') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Address2</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="address2"
                                            placeholder="Enter Address2" value="{{ old('address2') }}">
                                        @if ($errors->has('address2'))
                                        <div class="text-danger">{{ $errors->first('address2') }}</div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">PinCode</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="pincode"
                                            placeholder="Enter Your Pin Code" value="{{ old('pincode') }}">
                                        @if ($errors->has('pincode'))
                                        <div class="text-danger">{{ $errors->first('pincode') }}</div>
                                        @endif
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">State</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="state"
                                            placeholder="Enter State" value="{{ old('state') }}">
                                        @if ($errors->has('state'))
                                        <div class="text-danger">{{ $errors->first('state') }}</div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">City</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="city"
                                            placeholder="Enter City" value="{{ old('city') }}">
                                        @if ($errors->has('city'))
                                        <div class="text-danger">{{ $errors->first('city') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="gear_type">Select Transmission</label>
                                        <select class="form-control dropdown" name="gear_type" id="gear_type">
                                            <option value="" selected="selected">Select Transmission</option>
                                            <option value="manual"> Manual</option>
                                            <option value="Automatic">Automatic </option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="car_name">Car Class</label>
                                        <div id="car_class">
                                            @foreach($carclasses as $carclass)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="car_name[]"
                                                    id="carclass_{{$carclass->id}}"
                                                    value="{{$carclass->carclass_name}}">
                                                <label class="form-check-label" for="carclass_{{$carclass->id}}">
                                                    {{$carclass->carclass_name}}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="number_plate">Select Licence Type</label>
                                        <select class="form-control dropdown" name="number_plate" id="number_plate">
                                            <option value="" selected="selected">Select Licence Type</option>
                                            <option value="commerical"> Commerical (Yellow Number Plate)</option>
                                            <option value="private"> Private (White Number Plate) </option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="contractual">Are you interested in a Contractual?</label>
                                        <div id="contractual">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="contractual[]"
                                                    id="Daily" value="Daily">
                                                <label class="form-check-label" for="Daily">Daily</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="contractual[]"
                                                    id="Monthly" value="Monthly">
                                                <label class="form-check-label" for="Monthly">Monthly</label>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="driver_language">Driver Language</label>
                                        <div id="driver_language">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="driver_language[]"
                                                    id="marathi" value="marathi">
                                                <label class="form-check-label" for="marathi">Marathi</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="driver_language[]"
                                                    id="hindi" value="hindi">
                                                <label class="form-check-label" for="hindi">Hindi</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="driver_language[]"
                                                    id="english" value="english">
                                                <label class="form-check-label" for="english">English</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="driver_language[]"
                                                    id="gujarati" value="gujarati">
                                                <label class="form-check-label" for="gujarati">Gujarati</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="other"
                                                    value="other">
                                                <label class="form-check-label" for="other">Other</label>
                                            </div>

                                            <!-- Hidden input field for specifying 'Other' language -->
                                            <div id="other_language_input" style="display:none; margin-top: 10px;">
                                                <label for="other_language">Please specify:</label>
                                                <input type="text" name="driver_language_other"
                                                    id="driver_language_other" class="form-control"
                                                    placeholder="Specify other language">
                                            </div>

                                            <!-- Div to contain additional input fields -->
                                            <div id="additional_language_inputs" style="margin-top: 10px;"></div>

                                            <!-- Add More Button -->
                                            <button type="button" id="add_more_btn" class="btn btn-primary"
                                                style="margin-top: 10px; display:none;">Add More</button>

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="trip_type">Which Type Of Trip you want?</label>
                                        <select class="form-control" name="trip_type" id="trip_type">
                                            <option value="">Select Option</option>
                                            <option value="Local">Local</option>
                                            <option value="Outstation">OutStation</option>
                                        </select>
                                    </div>


                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Comment</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="comment"
                                            placeholder="Enter Comment" value="{{ old('comment') }}">
                                        @if ($errors->has('comment'))
                                        <div class="text-danger">{{ $errors->first('comment') }}</div>
                                        @endif
                                    </div>
                                </div>


                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <a href="{{url('drivers-list')}}" class="btn btn-light">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Get current location and fill latitude and longitude fields
navigator.geolocation.getCurrentPosition(function(position) {
    document.getElementById('latitude').value = position.coords.latitude;
    document.getElementById('longitude').value = position.coords.longitude;
});
</script>
<script>
    // Toggle visibility of input field and "Add More" button when 'Other' is checked
    document.getElementById('other').addEventListener('change', function() {
        var otherInput = document.getElementById('other_language_input');
        var addMoreBtn = document.getElementById('add_more_btn');
        var otherLanguageInput = document.getElementById('driver_language_other');

        if (this.checked) {
            otherInput.style.display = 'block';
            addMoreBtn.style.display = 'block';
            // Set the name attribute to include the value when form is submitted
            otherLanguageInput.setAttribute('name', 'driver_language_other[]');
        } else {
            otherInput.style.display = 'none';
            addMoreBtn.style.display = 'none';
            // Remove the name attribute and clear the input
            otherLanguageInput.removeAttribute('name');
            otherLanguageInput.value = '';
            // Clear all dynamically added inputs
            document.getElementById('additional_language_inputs').innerHTML = '';
        }
    });

    // Add more input fields for additional languages
    document.getElementById('add_more_btn').addEventListener('click', function() {
        var newInputDiv = document.createElement('div');
        newInputDiv.style.marginTop = '10px';

        // Create the label for the new input
        var newLabel = document.createElement('label');
        newLabel.innerHTML = 'Please specify:';

        // Create the new input field
        var newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.name = 'driver_language_other[]';  // Array for multiple values
        newInput.className = 'form-control';
        newInput.placeholder = 'Specify other language';

        // Append the label and input field to the new div
        newInputDiv.appendChild(newLabel);
        newInputDiv.appendChild(newInput);

        // Append the new div to the additional language input container
        document.getElementById('additional_language_inputs').appendChild(newInputDiv);
    });
</script>


@endsection