@extends('driver-app.admin.layouts.app')
@section('title', 'Edit Driver')
@section('content')
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4>Edit Driver</h4>
                            <div>
                                <a class="btn btn-sm btn-success" href="{{ url('driver-admin-dashboard') }}">
                                    <i class="mdi mdi-home"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('update.driver') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="driver_id"
                                    value="{{ $driver->driver_id }}">

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name"
                                            value="{{ $driver->first_name }}" placeholder="Enter Driver First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                            value="{{ $driver->last_name }}" placeholder="Enter Driver Last Name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="driver_email">Email Address</label>
                                        <input type="email" class="form-control" id="driver_email" name="driver_email"
                                            value="{{ $driver->driver_email }}" placeholder="Enter Driver Email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="mobile_no">Mobile Number</label>
                                        <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                                            value="{{ $driver->mobile_no }}" placeholder="Enter Mobile No">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="alternate_mobile_no">Alternate Mobile Number</label>
                                        <input type="text" class="form-control" id="alternate_mobile_no"
                                            name="alternate_mobile_no" value="{{ $driver->alternate_mobile_no }}"
                                            placeholder="Enter Alternative Mobile Number">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="address1">Address1</label>
                                        <input type="text" class="form-control" id="address1" name="address1"
                                            value="{{ $driver->address1 }}" placeholder="Enter Address1">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="address2">Address2</label>
                                        <input type="text" class="form-control" id="address2" name="address2"
                                            value="{{ $driver->address2 }}" placeholder="Enter Address2">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pincode">Pin Code</label>
                                        <input type="text" class="form-control" id="pincode" name="pincode"
                                            value="{{ $driver->pincode }}" placeholder="Enter Your Pin Code">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" id="state" name="state"
                                            value="{{ $driver->state }}" placeholder="Enter Your State">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            value="{{ $driver->city }}" placeholder="Enter Your City">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="gear_type">Select Transmission</label>
                                        <select class="form-control" name="gear_type" id="gear_type">
                                            <option value="" {{ $driver->gear_type == '' ? 'selected' : '' }}>Select
                                                Transmission</option>
                                            <option value="manual"
                                                {{ $driver->gear_type == 'manual' ? 'selected' : '' }}>Manual</option>
                                            <option value="Automatic"
                                                {{ $driver->gear_type == 'Automatic' ? 'selected' : '' }}>Automatic
                                            </option>
                                            <option value="Both" {{ $driver->gear_type == 'Both' ? 'selected' : '' }}>
                                                Both</option>
                                        </select>
                                    </div>

                                    @php
                                    $carClasses = array_map('trim', explode(',', $driver->car_name));
                                    @endphp

                                    <div class="col-md-6">
                                        <label for="car_name">Car Class</label>
                                        <div id="car_class">
                                            @foreach($carclasses as $carclass)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="car_name[]"
                                                    id="carclass_{{$carclass->id}}" value="{{$carclass->carclass_name}}"
                                                    @if(in_array($carclass->carclass_name, $carClasses)) checked @endif
                                                >
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
                                        <select class="form-control" name="number_plate" id="number_plate">
                                            <option value="" {{ $driver->number_plate == '' ? 'selected' : '' }}>Select
                                                Licence Type</option>
                                            <option value="yellow"
                                                {{ $driver->number_plate == 'yellow' ? 'selected' : '' }}>Yellow
                                                (Commercial)</option>
                                            <option value="white"
                                                {{ $driver->number_plate == 'white' ? 'selected' : '' }}>White (Private)
                                            </option>
                                        </select>
                                    </div>

                                    @php
                                    $selectedContractuals = array_map('trim', explode(',', $driver->contractual));
                                    @endphp

                                    <div class="col-md-6">
                                        <label for="contractual">Are you interested in a Contractual?</label>
                                        <div id="contractual">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="contractual[]"
                                                    id="Daily" value="Daily" @if(in_array('Daily',
                                                    $selectedContractuals)) checked @endif>
                                                <label class="form-check-label" for="Daily">Daily</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="contractual[]"
                                                    id="Monthly" value="Monthly" @if(in_array('Monthly',
                                                    $selectedContractuals)) checked @endif>
                                                <label class="form-check-label" for="Monthly">Monthly</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @php
                                $selectedLanguages = array_map('trim', explode(',', $driver->driver_language));
                                @endphp

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="driver_language">Driver Language</label>
                                        <div id="driver_language">
                                            @foreach(['marathi', 'hindi', 'english', 'gujarati'] as $language)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="driver_language[]"
                                                    id="{{ $language }}" value="{{ $language }}" @if(in_array($language,
                                                    $selectedLanguages)) checked @endif>
                                                <label class="form-check-label"
                                                    for="{{ $language }}">{{ ucfirst($language) }}</label>
                                            </div>
                                            @endforeach

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="other" value="other"
                                                    @if(in_array('other', $selectedLanguages)) checked @endif
                                                    onclick="toggleOtherLanguageInput()">
                                                <label class="form-check-label" for="other">Other</label>
                                            </div>

                                            <div id="other_language_input"
                                                style="display: {{ in_array('other', $selectedLanguages) ? 'block' : 'none' }}; margin-top: 10px;">
                                                <label for="driver_language_other">Please specify:</label>
                                                <input type="text" name="driver_language_other"
                                                    id="driver_language_other" class="form-control"
                                                    placeholder="Specify other language"
                                                    value="{{ in_array('other', $selectedLanguages) ? old('driver_language_other', $driver->driver_language_other) : '' }}">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <label for="trip_type">Which Type Of Trip do you want?</label>
                                        <select class="form-control" name="trip_type" id="trip_type">
                                            <option value="">Select Option</option>
                                            <option value="Local"
                                                {{ $driver->trip_type === 'Local' ? 'selected' : '' }}>Local</option>
                                            <option value="Outstation"
                                                {{ $driver->trip_type === 'Outstation' ? 'selected' : '' }}>OutStation
                                            </option>
                                        </select>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <!-- Profile Image -->
                                    <div class="col-md-6">
                                        <label for="comment">Profile Image</label>
                                        @if($driver->profile_image != null)
                                        <div style="display: flex; align-items: center;">
                                           
                                                <img src="{{ asset('assets/driver_images/' . $driver->profile_image) }}"
                                                    style="height:100px; width:100px; object-fit:cover; border-radius:5px"
                                                    alt="Profile Image" />
                                            <br><br>
                                            <a class="btn btn-primary"
                                                href="{{ asset('assets/driver_images/' . $driver->profile_image) }}"
                                                download="Profile Image" style="margin-left: 30px;">
                                                Download
                                            </a>
                                        </div>
                                        <br>
                                        @else
                                        <p class="text-danger"><i>Photo document not uploaded yet.</i></p>
                                        @endif
                                    </div>

                                    <!-- Driving Licence Document -->
                                    <div class="col-md-6">
                                        <label for="driver_status">Driving Licence Document</label>
                                        @if($driver->driving_licence != null)
                                        <div style="display: flex; align-items: center;">
                                            <a onclick="viewImage({{ json_encode($driver->driving_licence) }})">
                                                <img src="{{ asset('assets/driver_documents/' . $driver->driving_licence) }}"
                                                    style="height:100px; width:100px; object-fit:cover; border-radius:5px"
                                                    alt="Driving Licence" />
                                            </a>
                                            <br><br>
                                            <a class="btn btn-primary"
                                                href="{{ asset('assets/driver_documents/' . $driver->driving_licence) }}"
                                                download="Driving Licence" style="margin-left: 30px;">
                                                Download
                                            </a>
                                        </div>
                                        <br>
                                        @else
                                        <p class="text-danger"><i>Licence document not uploaded yet.</i></p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- Aadhar Card Front -->
                                    <div class="col-md-6">
                                        <label for="driver_status">Aadhar Card Front</label>
                                        @if($driver->aadhar_card != null)
                                        <div style="display: flex; align-items: center;">
                                            <a onclick="viewImage({{ json_encode($driver->aadhar_card) }})">
                                                <img src="{{ asset('assets/driver_documents/' . $driver->aadhar_card) }}"
                                                    style="height:100px; width:100px; object-fit:cover; border-radius:5px"
                                                    alt="Aadhar Card Front" />
                                            </a>
                                            <br><br>
                                            <a class="btn btn-primary"
                                                href="{{ asset('assets/driver_documents/' . $driver->aadhar_card) }}"
                                                download="Aadhar Card Front" style="margin-left: 30px;">
                                                Download
                                            </a>
                                        </div>
                                        <br>
                                        @else
                                        <p class="text-danger"><i>Aadhar card document not uploaded yet.</i></p>
                                        @endif
                                    </div>

                                    <!-- Aadhar Card Back -->
                                    <div class="col-md-6">
                                        <label for="driver_status">Aadhar Card Back</label>
                                        @if($driver->aadhar_card_back != null)
                                        <div style="display: flex; align-items: center;">
                                            <a
                                                onclick="viewImage({{ json_encode($driver->aadhar_card_back) }})">
                                                <img src="{{ asset('assets/driver_documents/' . $driver->aadhar_card_back) }}"
                                                    style="height:100px; width:100px; object-fit:cover; border-radius:5px"
                                                    alt="Aadhar Card Back" />
                                            </a>
                                            <br><br>
                                            <a class="btn btn-primary"
                                                href="{{ asset('assets/driver_documents/' . $driver->aadhar_card_back) }}"
                                                download="Aadhar Card Back" style="margin-left: 30px;">
                                                Download
                                            </a>
                                        </div>
                                        <br>
                                        @else
                                        <p class="text-danger"><i>Aadhar card document not uploaded yet.</i></p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- Police Verification Report -->
                                    <div class="col-md-6">
                                        <label for="driver_status">Police Verification Report</label>
                                        @if($driver->police_verification != null)

                                        <div style="display: flex; align-items: center;">
                                            <a onclick="viewImage({{ json_encode($driver->police_verification) }})"><img
                                                    src="{{asset('assets/driver_documents'. '/'.$driver->police_verification)}}"
                                                    style="height:100px !important; width:100px !important; border-radius:0px" /></a>
                                            <br><br>
                                            <a class="btn btn-primary"
                                                href="{{asset('assets/driver_documents'. '/'.$driver->police_verification)}}"
                                                download="Police Verification Report" style="margin-left: 30px;">Download
                                            </a>
                                        </div>
                                        <br>
                                        @else
                                        <p class="text-danger"><i>Police verification report document not uploded yet
                                                ..</i></p>
                                        @endif
                                    </div>

                                    <!-- Aadhar Card Back -->
                                    <div class="col-md-6">
                                        <label for="driver_status">Current Address Electricity Bill</label>
                                        @if($driver->electricity_bill != null)
                                        <div style="display: flex; align-items: center;">
                                            <a onclick="viewImage({{ json_encode($driver->electricity_bill) }})">
                                                <img src="{{ asset('assets/driver_documents/' . $driver->electricity_bill) }}"
                                                    style="height:100px !important; width:100px !important; border-radius:0px" />
                                            </a>
                                            <a class="btn btn-primary"
                                                href="{{ asset('assets/driver_documents/' . $driver->electricity_bill) }}"
                                                download="Current Address Electricity Bill" style="margin-left: 30px;">
                                                Download
                                            </a>
                                        </div>
                                        <br>
                                        @else
                                        <p class="text-danger"><i>Current address electricity bill document not uploaded
                                                yet ..</i></p>
                                        @endif
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="comment">Comment</label>
                                        <input type="text" class="form-control" id="comment" name="comment"
                                            value="{{ $driver->comment }}" placeholder="Enter Comment">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="driver_status">Status</label>
                                        <select name="driver_status" id="driver_status" class="form-control">
                                            <option value="0" {{ $driver->driver_status == "0" ? 'selected' : '' }}>New
                                            </option>
                                            <option value="1" {{ $driver->driver_status == "1" ? 'selected' : '' }}>
                                                Pending For Verification</option>
                                            <option value="2" {{ $driver->driver_status == "2" ? 'selected' : '' }}>
                                                Verified</option>
                                            <option value="3" {{ $driver->driver_status == "3" ? 'selected' : '' }}>
                                                Available</option>
                                            <option value="4" {{ $driver->driver_status == "4" ? 'selected' : '' }}>
                                                Unavailable</option>
                                        </select>
                                    </div>


                                </div>


                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary me-2">Update Driver</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="viewImage" tabindex="-1" role="dialog" aria-labelledby="editCarclassModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCarclassModalLabel">Driver Documents</h5>
                <button type="button" class="close" onclick="closeModal('viewImage')" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editCarclassForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <div class="form-group">
                            <img id="viewImageData" src="" style="height:auto !important; width:100% !important;" />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
function viewImage(driver_documents) {
    //console.log(carclass);
    document.getElementById('viewImageData').src = `/assets/driver_documents/${driver_documents}`;


    // Show the modal
    $('#viewImage').modal('show');
}

function closeModal(modalId) {
    $('#' + modalId).modal('hide');
}
</script>

<script>
function toggleOtherLanguageInput() {
    var otherCheckbox = document.getElementById('other');
    var otherInput = document.getElementById('other_language_input');
    otherInput.style.display = otherCheckbox.checked ? 'block' : 'none';
}
</script>
@endsection