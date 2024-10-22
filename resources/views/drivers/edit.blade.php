@extends('layouts.master')
@section('title', 'Edit Driver')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
      <div class="row justify-content-center mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Edit Driver</h4>
            </div>
            <div class="card-body">
                    <form action="update_driver" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="driver_id" value="{{$driver->driver_id}}">
                            <div class="form-group">
                                <label for="name">Name of Driver</label>
                                <input type="text"  class="form-control" id="name" name="name" value="{{$driver->name}}" required>
                            </div>

                            <div class="form-group">
                                <label for="contact_no">Contact No.</label>
                                <input type="text" class="form-control" id="contact_no" name="contact_no"  value="{{$driver->mobile_number}}" required>
                            </div>

                            <div class="form-group">
                              <label for="alternate_contact_no">Alternate Contact No.</label>
                              <input type="text" class="form-control" placeholder="Enter alternate contact number" value="{{$driver->alternate_contact_no}}" id="alternate_contact_no" name="alternate_contact_no">
                          </div>

                            <div class="form-group">
                                <label for="contact_no"> Email.</label>
                                <input type="email" value="{{$driver->email}}" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="contact_no">Vendor</label>
                                <select class="form-control" name="vendor_id" required>
                                    <option value="">-- Choose Vendor --</option>
                                    @foreach($vendors as $vendor)
                                        <option value="{{ $vendor->id }}" {{ $driver->vendor_id == $vendor->id ? 'selected' : '' }}>{{ $vendor->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="company_name">Address</label>
                                <textarea name="address" id="address" class="form-control" placeholder="Address"> {{$driver->address}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="pincode">Pincode</label>
                                <input type="text" class="form-control" id="pincode" name="pincode" required value="{{$driver->pincode}}">
                            </div>

                            <div class="form-group">
                              <label>Select Driver Language</label>
                              <select class="js-example-basic-multiple form-control" name="driver_language[]" multiple="multiple">
                                  <option value="Marathi" {{ in_array('Marathi', explode(',', $driver->driver_language)) ? 'selected' : '' }}>Marathi</option>
                                  <option value="Hindi" {{ in_array('Hindi', explode(',', $driver->driver_language)) ? 'selected' : '' }}>Hindi</option>
                                  <option value="English" {{ in_array('English', explode(',', $driver->driver_language)) ? 'selected' : '' }}>English</option>
                              </select>
                          </div>
							<div class="form-group">
                                <label for="pincode">Aadhar Number</label>
                                <input type="number" class="form-control" id="aadhar_number" name="aadhar_number" required value="{{$driver->aadhar_number}}">
                            </div>
							<div class="form-group">
                                <label for="pincode">Pan Number</label>
                                <input type="text" class="form-control" id="pan_number" name="pan_number" required value="{{$driver->pan_number}}">
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
                            @if($driver->photo != null)
                            <img src="{{asset('driver_documents'. '/'.$driver->photo)}}" height="150px" width="150px"/>
                            @else
                            <p class="text-danger"><i>Photo document not uploded yet</i></p>
                            @endif
                        </div>

                            <div class="form-group">
                                <label>Licence Document</label>
                                <input type="file" name="licence_doc" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Licence Document" @if($driver->licence_doc == null) required @endif>
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                            </div>
                            <div class="form-group">
                                @if($driver->licence_doc != null)
                                <img src="{{asset('driver_documents'. '/'.$driver->licence_doc)}}" height="150px" width="150px"/>
                                @else
                                <p class="text-danger"><i>Licence document not uploded yet</i></p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Pan Card Document</label>
                                <input type="file" name="pancard_doc" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Pan Card Document"  @if($driver->pancard_doc == null) required @endif>
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                            </div>
                            <div class="form-group">
                                @if($driver->pancard_doc != null)
                                <img src="{{asset('driver_documents'. '/'.$driver->pancard_doc)}}" height="150px" width="150px"/>
                                @else
                                <p class="text-danger"><i>Pan card document not uploded yet</i></p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Aadhar card Front Document</label>
                                <input type="file" name="aadharcard_doc" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Aadhar card Document" @if($driver->aadharcard_doc == null) required @endif>
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                            </div>

                            <div class="form-group">
                                @if($driver->aadharcard_doc != null)
                                <img src="{{asset('driver_documents'. '/'.$driver->aadharcard_doc)}}" height="150px" width="150px"/>
                                @else
                                <p class="text-danger"><i>Aadhar card document not uploded yet</i></p>
                                @endif
                            </div>
							<div class="form-group">
                                <label>Aadhar card Back Document</label>
                                <input type="file" name="aadharcard_doc_back" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Aadhar card back Document" @if($driver->aadharcard_doc_back == null) required @endif>
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                            </div>

                            <div class="form-group">
                                @if($driver->aadharcard_doc_back != null)
                                <img src="{{asset('driver_documents'. '/'.$driver->aadharcard_doc_back)}}" height="150px" width="150px"/>
                                @else
                                <p class="text-danger"><i>Aadhar card back document not uploded yet</i></p>
                                @endif
                            </div>

                            <div class="form-group">
                              <label>Current addres electricity Bill</label>
                              <input type="file" name="current_addres_electricity_bill" class="file-upload-default">
                              <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Current addres electricity Bill" required>
                                <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                              </div>
                          </div>

                          <div class="form-group">
                            @if($driver->current_addres_electricity_bill != null)
                            <img src="{{asset('driver_documents'. '/'.$driver->current_addres_electricity_bill)}}" height="150px" width="150px"/>
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
                          @if($driver->police_verification_report != null)
                          <img src="{{asset('driver_documents'. '/'.$driver->police_verification_report)}}" height="150px" width="150px"/>
                          @else
                          <p class="text-danger"><i>Police rerification report document not uploded yet</i></p>
                          @endif
                      </div>

                      <div class="form-group">
                        <label for="company_name">Comment</label>
                        <textarea name="comment" id="comment" placeholder="Enter comment" class="form-control" placeholder="Comment">{{$driver->comment}}</textarea>
                    </div>

                        
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            placeholder: 'Select languages',
            allowClear: true,
            closeOnSelect: false
        });
    });
</script>
  
@endsection