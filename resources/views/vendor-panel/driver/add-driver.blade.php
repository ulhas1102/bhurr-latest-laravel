@extends('vendor-layouts.master')
@section('title', 'Add Driver')
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
                <h4>Add Driver</h4>
            </div>
            <div class="card-body">
                    <form action="vendor-driver" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="vendor_id" id="vendor_id" value="{{Auth::guard('vendor')->user()->id}}">
                            <div class="form-group">
                                <label for="name">Name of Driver</label>
                                <input type="text"  class="form-control" placeholder="Enter name" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="contact_no">Contact No.</label>
                                <input type="text" class="form-control" placeholder="Enter contact number" id="contact_no" name="contact_no" required>
                            </div>
                            <div class="form-group">
                              <label for="alternate_contact_no">Alternate Contact No.</label>
                              <input type="text" class="form-control" placeholder="Enter alternate contact number" id="alternate_contact_no" name="alternate_contact_no">
                          </div>

                            <div class="form-group">
                                <label for="contact_no"> Email.</label>
                                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="company_name">Address</label>
                                <textarea name="address" id="address" placeholder="Enter address" class="form-control" placeholder="Address"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="pincode">Pincode</label>
                                <input type="text" class="form-control" placeholder="Enter Pincode" id="pincode" name="pincode" required>
                            </div>

                            
                            <div class="form-group">
                              <label>Select Driver Language</label>
                              <select class="js-example-basic-multiple form-control" name="driver_language[]" multiple="multiple">
                                  <option value="Marathi">Marathi</option>
                                  <option value="Hindi">Hindi</option>
                                  <option value="English">English</option>
                              </select>
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
                                <label>Licence Document</label>
                                <input type="file" name="licence_doc" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Licence Document" required>
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pan Card Document</label>
                                <input type="file" name="pancard_doc" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Pan Card Document" required>
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Aadhar card Document</label>
                                <input type="file" name="aadharcard_doc" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Aadhar card Document" required>
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
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
                          <label for="company_name">Comment</label>
                          <textarea name="comment" id="comment" placeholder="Enter comment" class="form-control" placeholder="Comment"></textarea>
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

    <!-- jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: 'Select options',
                allowClear: true,
                closeOnSelect: false
            });
        });
    </script>
  
@endsection