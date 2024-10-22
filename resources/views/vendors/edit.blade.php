@extends('layouts.master')
@section('title', 'Edit Vendor')

@section('backend-page-style')
<style>
    .card-header {
        background-color: #5650ce40;
        color: black;
        font-weight: bold;
    }
    .alert-error {
      background-color: red;
      color: white;
    }
</style>
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        @if (session('message'))
          <div class="alert alert-{{ session('alert-type', 'info') }}">
              {{ session('message') }}
          </div>
      @endif
        <div class="row justify-content-center mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Vendor</h4>
                </div>
                <div class="card-body">
                    <form id="carDetailsForm" action="{{ route('vendor.update', $vendor->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name of Person</label>
                            <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" value="{{ $vendor->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="contact_no">Contact No.</label>
                            <input type="text" class="form-control" placeholder="Enter contact number" id="contact_no" name="contact_no" value="{{ $vendor->contact_no }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alternate_contact_no">Alternate Contact No.</label>
                            <input type="text" class="form-control" placeholder="Enter alternate contact number" id="alternate_contact_no" name="alternate_contact_no" value="{{ $vendor->alternate_contact_no }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" value="{{ $vendor->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="company_name">Company Name (if any)</label>
                            <input type="text" class="form-control" placeholder="Enter company name" id="company_name" name="company_name" value="{{ $vendor->company_name }}">
                        </div>
                        <div class="form-group">
                            <label for="no_of_cars">No. of Cars Operated</label>
                            <input type="number" class="form-control" id="no_of_cars" placeholder="No of cars" name="no_of_cars" value="{{ $vendor->no_of_cars }}" required>
                        </div>
                        <div class="form-group">
                            <label for="owner_drives">Does Owner Drive Himself?</label>
                            <select id="owner_drives" class="form-control" name="owner_drives" required>
                                <option value="yes" {{ $vendor->owner_drives == 'yes' ? 'selected' : '' }}>Yes</option>
                                <option value="no" {{ $vendor->owner_drives == 'no' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="is_interested">Is Interested in Joining?</label>
                            <select id="is_interested" class="form-control" name="is_interested" required>
                                <option value="yes" {{ $vendor->is_interested == 'yes' ? 'selected' : '' }}>Yes</option>
                                <option value="no" {{ $vendor->is_interested == 'no' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
						  <div class="form-group">
                            <label for="no_of_cars">Pan Number</label>
                            <input type="text" class="form-control" id="pan_number" placeholder="Pan Card Number" name="pan_number" value="{{ $vendor->pan_number }}" required>
                        </div>
						  <div class="form-group">
                            <label for="no_of_cars">Aadhar Number</label>
                            <input type="number" class="form-control" id="aadhar_number" placeholder="Aadhar Card Number" name="aadhar_number" value="{{ $vendor->aadhar_number }}" required>
                        </div>
						<div class="form-group">
                              <label>Photo</label>
                              <input type="file" name="photo" class="file-upload-default">
                              <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload photo" required>
                                <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                              </div>
                          </div>

                          <div class="form-group">
                            @if($vendor->photo != null)
                            <img src="{{asset('vendor_documents'. '/'.$vendor->photo)}}" height="150px" width="150px"/>
                            @else
                            <p class="text-danger"><i>Photo document not uploded yet</i></p>
                            @endif
                        </div>

                            <div class="form-group">
                                <label>Licence Document</label>
                                <input type="file" name="licence_photo" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Licence Document" @if($vendor->licence_photo == null) required @endif>
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                            </div>
                            <div class="form-group">
                                @if($vendor->licence_photo != null)
                                <img src="{{asset('vendor_documents'. '/'.$vendor->licence_photo)}}" height="150px" width="150px"/>
                                @else
                                <p class="text-danger"><i>Licence document not uploded yet</i></p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Pan Card Document</label>
                                <input type="file" name="pancard_photo" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Pan Card Document"  @if($vendor->pancard_photo == null) required @endif>
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                            </div>
                            <div class="form-group">
                                @if($vendor->pancard_photo != null)
                                <img src="{{asset('vendor_documents'. '/'.$vendor->pancard_photo)}}" height="150px" width="150px"/>
                                @else
                                <p class="text-danger"><i>Pan card document not uploded yet</i></p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Aadhar card Front Document</label>
                                <input type="file" name="aadhar_card_front" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Aadhar card Document" @if($vendor->aadhar_card_front == null) required @endif>
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                            </div>

                            <div class="form-group">
                                @if($vendor->aadhar_card_front != null)
                                <img src="{{asset('vendor_documents'. '/'.$vendor->aadhar_card_front)}}" height="150px" width="150px"/>
                                @else
                                <p class="text-danger"><i>Aadhar card document not uploded yet</i></p>
                                @endif
                            </div>
						<div class="form-group">
                                <label>Aadhar card Back Document</label>
                                <input type="file" name="aadhar_card_back" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Aadhar card Document" @if($vendor->aadhar_card_back == null) required @endif>
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                            </div>

                            <div class="form-group">
                                @if($vendor->aadhar_card_back != null)
                                <img src="{{asset('vendor_documents'. '/'.$vendor->aadhar_card_back)}}" height="150px" width="150px"/>
                                @else
                                <p class="text-danger"><i>Aadhar card document not uploded yet</i></p>
                                @endif
                            </div>
                            <div class="form-group">
                              <label>Current addres electricity Bill</label>
                              <input type="file" name="electricity_bill" class="file-upload-default">
                              <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Current addres electricity Bill" required>
                                <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                              </div>
                          </div>

                          <div class="form-group">
                            @if($vendor->electricity_bill != null)
                            <img src="{{asset('vendor_documents'. '/'.$vendor->electricity_bill)}}" height="150px" width="150px"/>
                            @else
                            <p class="text-danger"><i>Current addres electricity bill document not uploded yet</i></p>
                            @endif
                        </div>

                          <div class="form-group">
                            <label>Police Verification Report</label>
                            <input type="file" name="police_verification_report" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Police Verification Report" required>
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                        </div>

                        <div class="form-group">
                          @if($vendor->police_verification_report != null)
                          <img src="{{asset('vendor_documents'. '/'.$vendor->police_verification_report)}}" height="150px" width="150px"/>
                          @else
                          <p class="text-danger"><i>Police rerification report document not uploded yet</i></p>
                          @endif
                      </div>

                        <div id="carDetailsContainer">
                            @foreach($car_details as $index => $carDetail)
                            <div class="car-details">
                                <h4 class="card-header">Car Details</h4>
                                <div class="form-group mt-3">
                                    <input type="hidden" name="[]" value="{{ $carDetail->id }}">
                                    <!-- Ensure 'name' attribute is an array for multiple values -->
                                </div>
                                <div class="form-group mt-3">
                                    <label for="car_name">Car Name</label>
                                    <input type="text" class="form-control" placeholder="Enter car name" name="car_name[{{ $index }}]" value="{{ $carDetail->car_name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="car_type">Type of Vehicle</label>
                                    <select name="car_type[{{ $index }}]" class="form-control" required>
                                        <option value="">-- Select car type --</option>
                                        @foreach($cartypes as $cartype)
                                        <option value="{{ $cartype->car_type }}" {{ $carDetail->car_type == $cartype->car_type ? 'selected' : '' }}>{{ $cartype->car_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="car_class">Class</label>
                                    <select name="car_class[{{ $index }}]" class="form-control" required>
                                        <option value="">-- Select car class --</option>
                                        @foreach($carclasses as $carclass)
                                        <option value="{{ $carclass->car_class }}" {{ $carDetail->car_class == $carclass->car_class ? 'selected' : '' }}>{{ $carclass->car_class }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="car_registration">Registration Number</label>
                                    <input type="text" class="form-control" placeholder="Enter registration number" name="car_registration[{{ $index }}]" value="{{ $carDetail->car_registration }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_of_cars_quantity">No. of Cars</label>
                                    <input type="number" class="form-control" id="no_of_cars_quantity" placeholder="No of cars" name="no_of_cars_quantity[{{ $index }}]" value="{{ $carDetail->no_of_cars_quantity }}" required>
                                </div>
                                <button type="button" class="removeCarDetails mb-3 btn btn-danger">Remove</button>
                            </div>
                            @endforeach
                        </div>
                        
                        <button type="button" id="addCarDetails" class="btn btn-primary">Add More Car Details</button>
                        <br><br>
						
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://webwideit.solutions/" target="_blank">Web wide It solution Pune </a>2024</span>
            </div>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>

        $('#addCarDetails').click(function() {
            var index = $('.car-details').length;
            var carDetails = `
            <div class="car-details">
                <div class="form-group">
                    <label for="car_name">Car Name</label>
                    <input type="text" class="form-control" placeholder="Enter car name" name="car_name[${index}]" required>
                </div>
                <div class="form-group">
                    <label for="car_type">Type of Vehicle</label>
                    <select name="car_type[${index}]" class="form-control" required>
                        <option value="">-- Select car type --</option>
                        @foreach($cartypes as $cartype)
                        <option value="{{ $cartype->car_type }}">{{ $cartype->car_type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="car_class">Class</label>
                    <select name="car_class[${index}]" class="form-control" required>
                        <option value="">-- Select car class --</option>
                        @foreach($carclasses as $carclass)
                        <option value="{{ $carclass->car_class }}">{{ $carclass->car_class }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="car_registration">Registration Number</label>
                    <input type="text" class="form-control" placeholder="Enter registration number" name="car_registration[${index}]" required>
                </div>
                <div class="form-group">
                    <label for="no_of_cars_quantity">No. of Cars</label>
                    <input type="number" class="form-control" id="no_of_cars_quantity" placeholder="No of cars" name="no_of_cars_quantity[${index}]" required>
                </div>
                <button type="button" class="removeCarDetails mb-3 btn btn-danger">Remove</button>
            </div>
            `;
            $('#carDetailsContainer').append(carDetails);
        });

        $(document).on('click', '.removeCarDetails', function() {
            $(this).parent('.car-details').remove();
        });
   
</script>
@endsection
