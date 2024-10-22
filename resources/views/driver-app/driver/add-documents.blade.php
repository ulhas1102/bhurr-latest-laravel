@extends('driver-app.driver.layouts.app')
@section('title', 'Driver Documents')
@section('content')

<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4>Add Documents</h4>
                            <div>
                                <a class="btn btn-sm btn-success" href="{{ url('/driver/dashboard') }}">
                                    <i class="mdi mdi-home"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">

                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                          <form action="{{ route('store.driver.documents') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" id="driver_id" name="driver_id"
                                    value="{{ Auth::guard('driverLogin')->user()->driver_id }}">

                                <!-- Profile Image -->
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="profile_image">Profile Image</label>
                                        <input type="file" class="form-control" id="profile_image" name="profile_image"  @if($driver->profile_image) disabled @endif>
                                        @if($driver->profile_image)
                                        <div class="mt-2">
                                            <img src="{{ asset('assets/driver_images/'.$driver->profile_image)}}"
                                                alt="Profile Image" style="max-width: 200px; max-height: 200px;">
                                        </div>
                                        @endif
                                        @if ($errors->has('profile_image'))
                                        <div class="text-danger">{{ $errors->first('profile_image') }}</div>
                                        @endif
                                    </div>

                                    <!-- Current Electricity Bill -->
                                    <div class="col-md-6">
                                        <label for="electricity_bill">Current Electricity Bill</label>
                                        <input type="file" class="form-control file-upload-info" id="electricity_bill"
                                            name="electricity_bill" placeholder="Upload Current Electricity Bill"  @if($driver->electricity_bill) disabled @endif>
                                        @if($driver->electricity_bill)
                                        <div class="mt-2">
                                            <img src="{{ asset('assets/driver_documents/'.$driver->electricity_bill)}}"
                                                alt="Electricity Bill" style="max-width: 200px; max-height: 200px;">
                                        </div>
                                        @endif
                                        @error('electricity_bill')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Driving Licence -->
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="car_name">Driving Licence Number</label>
                                        <input type="text" class="form-control file-upload-info"
                                            id="driving_licence_number" name="driving_licence_number"
                                            placeholder="Enter Driving Licence Number" value="{{$driver->driving_licence_number}}"  @if($driver->driving_licence_number) disabled @endif>
                                        @error('driving_licence_number')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
											<br><br>
										  <label for="car_name">Driving Licence Expiry Date</label>
                                        <input type="date" class="form-control"
                                            id="driving_licence_expiry_date" name="driving_licence_expiry_date" value="{{$driver->driving_licence_expiry_date}}"  @if($driver->driving_licence_expiry_date) disabled @endif>
                                        @error('driving_licence_expiry_date')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="driving_licence">Driving Licence</label>
                                        <input type="file" class="form-control file-upload-info" id="driving_licence"
                                            name="driving_licence" placeholder="Upload Driving Licence" @if($driver->driving_licence) disabled @endif>
                                        @if($driver->driving_licence)
                                        <div class="mt-2">
                                            <img src="{{ asset('assets/driver_documents/'.$driver->driving_licence)}}"
                                                alt="Driving Licence" style="max-width: 200px; max-height: 200px;">
                                        </div>
                                        @endif
                                        @error('driving_licence')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Pan Card -->
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="car_name">PAN Number</label>
                                        <input type="text" class="form-control file-upload-info" id="pan_number"
                                            name="pan_number" placeholder="Enter PAN Number" value="{{$driver->pan_number}}" @if($driver->pan_number) disabled @endif>
                                        @error('pan_number')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="pan_card">Pan Card</label>
                                        <input type="file" class="form-control file-upload-info" id="pan_card"
                                            name="pan_card" placeholder="Upload Pan Card" @if($driver->pan_card) disabled @endif>
                                        @if($driver->pan_card)
                                        <div class="mt-2">
                                            <img src="{{ asset('assets/driver_documents/'.$driver->pan_card)}}"
                                                alt="Pan Card" style="max-width: 200px; max-height: 200px;">
                                        </div>
                                        @endif
                                        @error('pan_card')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Aadhar Card -->
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="car_name">Aadhar Card Number</label>
                                        <input type="text" class="form-control file-upload-info" id="aadhar_card_number"
                                            name="aadhar_card_number" placeholder="Enter Aardha Card Number" value="{{$driver->aadhar_card_number}}" @if($driver->aadhar_card_number) disabled @endif>
                                        @error('aadhar_card_number')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="aadhar_card">Aadhar Card Front</label>
                                        <input type="file" class="form-control file-upload-info" id="aadhar_card"
                                            name="aadhar_card" placeholder="Upload Aadhar Card" @if($driver->aadhar_card) disabled @endif>
                                        @if($driver->aadhar_card)
                                        <div class="mt-2">
                                            <img src="{{ asset('assets/driver_documents/'.$driver->aadhar_card)}}"
                                                alt="Aadhar Card" style="max-width: 200px; max-height: 200px;">
                                        </div>
                                        @endif
                                        @error('aadhar_card')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Police Certification Report -->

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="aadhar_card">Aadhar Card Back</label>
                                        <input type="file" class="form-control file-upload-info" id="aadhar_card_back"
                                            name="aadhar_card_back" placeholder="Upload Aadhar Card" @if($driver->aadhar_card_back) disabled @endif>
                                        @if($driver->aadhar_card)
                                        <div class="mt-2">
                                            <img src="{{ asset('assets/driver_documents/'.$driver->aadhar_card_back)}}"
                                                alt="Aadhar Card" style="max-width: 200px; max-height: 200px;">
                                        </div>
                                        @endif
                                        @error('aadhar_card')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="police_verification">Police Verification Report</label>
                                        <input type="file" class="form-control file-upload-info"
                                            id="police_verification" name="police_verification"
                                            placeholder="Upload Police Certification Report" @if($driver->police_verification) disabled @endif>
                                        @if($driver->police_verification)
                                        <div class="mt-2">
                                            <img src="{{ asset('assets/driver_documents/'.$driver->police_verification)}}"
                                                alt="Police Verification" style="max-width: 200px; max-height: 200px;">
                                        </div>
                                        @endif
                                        @error('police_verification')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
 								 <!-- Show submit button only if documents are not fully uploaded -->
                                @if(!$driver->driving_licence || !$driver->pan_card || !$driver->aadhar_card || !$driver->aadhar_card_back)
                                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                @else
                                <div class="alert alert-info">
                                    All documents are already uploaded. If you want to update any document, click on "Request Update" button.
                                </div>
                                @endif
                            </form>
							   <!-- Request update button -->
                            <form action="{{ route('request.driver.documents.update') }}" method="POST">
                                @csrf
								    <input type="hidden" id="driver_id" name="driver_id"
                                    value="{{ Auth::guard('driverLogin')->user()->driver_id }}">
                                <button type="submit" class="btn btn-warning mt-2">Request Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection