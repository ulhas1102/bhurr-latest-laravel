@extends('layouts.master')

@section('title', 'Vendor Details')

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
        <div class="row" style="justify-content: space-evenly">
            <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h2 class="text-success font-weight-bold">{{count($car_details)}}</h2>
                            <i class="mdi mdi-car mdi-18px text-dark"></i>
                        </div>
                    </div>
                    <canvas id="newClient"></canvas>
                    <div class="line-chart-row-title">Type of Cars</div>
                </div>
            </div>
            <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h2 class="text-danger font-weight-bold">{{count($drivers)}}</h2>
                            <i class="mdi mdi-account-outline mdi-18px text-dark"></i>
                        </div>
                    </div>
                    <canvas id="allProducts"></canvas>
                    <div class="line-chart-row-title">Total Drivers</div>
                </div>
            </div>
           
            
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Vendor Details</h4>
						@if($vendor->verified_status == 1)
						<h4><span class="badge badge-success">Verified</span></h4>
						@elseif($vendor->verified_status == 0)
						<h4><span class="badge badge-danger">Unverified</span></h4>
						@endif
						 <a href="javascript:void(0);" onclick="handleUpdateStatus({{ $vendor->id }});" class="btn btn-danger btn-icon-text"> Update Status
                          </a>
                        <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body" style="overflow-y: auto; max-height: 400px;">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$vendor->name}}</td>
                                </tr>
                                <tr>
                                    <th>Contact No</th>
                                    <td>{{$vendor->contact_no}}</td>
                                </tr>
                                <tr>
                                    <th>Alternate Contact No</th>
                                    <td>{{$vendor->alternate_contact_no}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$vendor->email}}</td>
                                </tr>
                                <tr>
                                    <th>Company Name</th>
                                    <td>{{$vendor->company_name}}</td>
                                </tr>
								<tr>
                                    <th>Address 1</th>
                                    <td>{{$vendor->address_one}}</td>
                                </tr>
								 <tr>
                                    <th>Address 2</th>
                                    <td>{{$vendor->address_two}}</td>
                                </tr>
                               {{-- <tr>
                                    <th>No. of Cars</th>
                                    <td>{{$vendor->no_of_cars}}</td>
                                </tr>--}}
								
								 
								 <tr>
                                    <th>Photo Document</th>
                                    <td>
                                         @if($vendor->photo != null) 
										<div class="d-flex flex-column align-items-start">
                                         <a onclick="viewImage({{ json_encode($vendor->photo) }})"> <img src="{{asset('vendor_documents'. '/'.$vendor->photo)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('vendor_documents'. '/'.$vendor->photo)}}" download="Photo Document">Download
                                        </a>
										<textarea class="document-comment mt-2" data-comment="photo_comment" data-vendor-id="{{ $vendor->id }}" placeholder="Enter your comment here">{{$vendor->photo_comment}}</textarea>
										 <select class="document-status mt-2" data-document="photo" data-vendor-id="{{ $vendor->id }}" style="padding:6px;">
											<option value="0" {{ $vendor->photo_status == '0' ? 'selected' : '' }}>Pending</option>
											<option value="1" {{ $vendor->photo_status == '1' ? 'selected' : '' }}>Verified</option>
											<option value="2" {{ $vendor->photo_status == '2' ? 'selected' : '' }}>Reject</option>
										</select>
											</div>
                                        @else
                                        <p class="text-danger"><i>Photo document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
								 <tr>
                                    <th>Licence Number</th>
                                    <td>{{$vendor->driving_license_numbe}}</td>
                                 </tr>
                                <tr>
                                    <th>Licence Document</th>
                                    <td>
                                         @if($vendor->licence_photo != null) 
										<div class="d-flex flex-column align-items-start">
                                         <a onclick="viewImage({{ json_encode($vendor->licence_photo) }})"><img src="{{asset('vendor_documents'. '/'.$vendor->licence_photo)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('vendor_documents'. '/'.$vendor->licence_photo)}}" download="Licence">Download</a>
										<textarea class="document-comment mt-2" data-comment="licence_comment" data-vendor-id="{{ $vendor->id }}" placeholder="Enter your comment here">{{$vendor->licence_comment}}</textarea>
										<select class="document-status mt-2" data-document="licence" data-vendor-id="{{ $vendor->id }}" style="padding:6px;">
											<option value="0" {{ $vendor->licence_status == '0' ? 'selected' : '' }}>Pending</option>
											<option value="1" {{ $vendor->licence_status == '1' ? 'selected' : '' }}>Verified</option>
											<option value="2" {{ $vendor->licence_status == '2' ? 'selected' : '' }}>Reject</option>
										</select>
											</div>
                                        @else
                                        <p class="text-danger"><i>Licence document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
								<tr>
                                    <th>Pan Card Number</th>
                                    <td>{{$vendor->pan_number}}</td>
                                 </tr>
                                <tr>
                                    <th>Pan Card Document</th>
                                    <td>
                                        @if($vendor->pancard_photo != null) 
										<div class="d-flex flex-column align-items-start">
                                        <a onclick="viewImage({{ json_encode($vendor->pancard_photo) }})"><img src="{{asset('vendor_documents'. '/'.$vendor->pancard_photo)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('vendor_documents'. '/'.$vendor->pancard_photo)}}" download="Pan card">Download
                                        </a>
										<textarea class="document-comment mt-2" data-comment="pancard_comment" data-vendor-id="{{ $vendor->id }}" placeholder="Enter your comment here">{{$vendor->pancard_comment}}</textarea>
										<select class="document-status mt-2" data-document="pancard" data-vendor-id="{{ $vendor->id }}" style="padding:6px;">
											<option value="0" {{ $vendor->pancard_status == '0' ? 'selected' : '' }}>Pending</option>
											<option value="1" {{ $vendor->pancard_status == '1' ? 'selected' : '' }}>Verified</option>
											<option value="2" {{ $vendor->pancard_status == '2' ? 'selected' : '' }}>Reject</option>
										</select>
											</div>
                                        @else
                                        <p class="text-danger"><i>Pan card document not uploded yet ..</i></p>
                                        @endif
                                        </td>
                                </tr>
								 <tr>
                                    <th>Addhar Number</th>
                                    <td>{{$vendor->aadhar_number}}</td>
                                 </tr>
                                <tr>
                                  
                                    <th>Aadhar Card Front</th>
                                    <td>
                                        @if($vendor->aadhar_card_front != null) 
										<div class="d-flex flex-column align-items-start">
                                        <a onclick="viewImage({{ json_encode($vendor->aadhar_card_front) }})"><img src="{{asset('vendor_documents'. '/'.$vendor->aadhar_card_front)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a><br><br><a class="btn btn-primary" href="{{asset('vendor_documents'. '/'.$vendor->aadhar_card_front)}}" download="Aadhar Card">Download</a>
										
										<textarea class="document-comment mt-2" data-comment="aadhar_front_comment" data-vendor-id="{{ $vendor->id }}" placeholder="Enter your comment here">{{$vendor->aadhar_front_comment}}</textarea>
										<select class="document-status mt-2" data-document="aadhar_front" data-vendor-id="{{ $vendor->id }}" style="padding:6px;">
											<option value="0" {{ $vendor->aadhar_card_front_status == '0' ? 'selected' : '' }}>Pending</option>
											<option value="1" {{ $vendor->aadhar_card_front_status == '1' ? 'selected' : '' }}>Verified</option>
											<option value="2" {{ $vendor->aadhar_card_front_status == '2' ? 'selected' : '' }}>Reject</option>
										</select>
											</div>
                                        @else
                                        <p class="text-danger"><i>Aadhar card document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
								<tr>
                                  
                                    <th>Aadhar Card Back</th>
                                    <td>
                                        @if($vendor->aadhar_card_back != null) 
										<div class="d-flex flex-column align-items-start">
                                        <a onclick="viewImage({{ json_encode($vendor->aadhar_card_back) }})"><img src="{{asset('vendor_documents'. '/'.$vendor->aadhar_card_back)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a><br><br><a class="btn btn-primary" href="{{asset('vendor_documents'. '/'.$vendor->aadhar_card_back)}}" download="Aadhar Card">Download</a>
										
										<textarea class="document-comment mt-2" data-comment="aadhar_card_back_comment" data-vendor-id="{{ $vendor->id }}" placeholder="Enter your comment here">{{$vendor->aadhar_card_back_comment}}</textarea>
										<select class="document-status mt-2" data-document="aadhar_back" data-vendor-id="{{ $vendor->id }}" style="padding:6px;">
											<option value="0" {{ $vendor->aadhar_card_back_status == '0' ? 'selected' : '' }}>Pending</option>
											<option value="1" {{ $vendor->aadhar_card_back_status == '1' ? 'selected' : '' }}>Verified</option>
											<option value="2" {{ $vendor->aadhar_card_back_status == '2' ? 'selected' : '' }}>Reject</option>
										</select>
											</div>
                                        @else
                                        <p class="text-danger"><i>Aadhar card document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Police Verification Report</th>
                                    <td>
                                         @if($vendor->police_verification_report != null) 
										<div class="d-flex flex-column align-items-start">
                                         <a onclick="viewImage({{ json_encode($vendor->police_verification_report) }})"><img src="{{asset('vendor_documents'. '/'.$vendor->police_verification_report)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('vendor_documents'. '/'.$vendor->police_verification_report)}}" download="Police Verification Report">Download
                                        </a>
										<textarea class="document-comment mt-2" data-comment="police_verification_report_comment" data-vendor-id="{{ $vendor->id }}" placeholder="Enter your comment here">{{$vendor->police_verification_report_comment}}</textarea>
										<select class="document-status mt-2" data-document="police_verification_report_status" data-vendor-id="{{ $vendor->id }}" style="padding:6px;">
											<option value="0" {{ $vendor->police_verification_report_status == '0' ? 'selected' : '' }}>Pending</option>
											<option value="1" {{ $vendor->police_verification_report_status == '1' ? 'selected' : '' }}>Verified</option>
											<option value="2" {{ $vendor->police_verification_report_status == '2' ? 'selected' : '' }}>Reject</option>
										</select>
											</div>
                                        @else
                                        <p class="text-danger"><i>Police verification report document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Current addres electricity Bill</th>
                                    <td>
                                         @if($vendor->electricity_bill != null) 
										<div class="d-flex flex-column align-items-start">
                                         <a onclick="viewImage({{ json_encode($vendor->electricity_bill) }})"> <img src="{{asset('vendor_documents'. '/'.$vendor->electricity_bill)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('vendor_documents'. '/'.$vendor->electricity_bill)}}" download="Current addres electricity Bill">Download
                                        </a>
										<textarea class="document-comment mt-2" data-comment="electricity_bill_comment" data-vendor-id="{{ $vendor->id }}" placeholder="Enter your comment here">{{$vendor->electricity_bill_comment}}</textarea>
										<select class="document-status mt-2" data-document="electricity_bill_status" data-vendor-id="{{ $vendor->id }}" style="padding:6px;">
											<option value="0" {{ $vendor->electricity_bill_status == '0' ? 'selected' : ''}}>Pending</option>
											<option value="1" {{ $vendor->electricity_bill_status == '1' ? 'selected' : ''}}>Verified</option>
											<option value="2" {{ $vendor->electricity_bill_status == '2' ? 'selected' : ''}}>Reject</option>
										</select>
											</div>
                                        @else
                                        <p class="text-danger"><i>Current addres electricity bill document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Car Details</h4>
                    </div>
                    <div class="card-body" style="overflow-y: auto; max-height: 400px;">
                        <table class="table display table-bordered" id="example2">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Car Name</th>
                                    <th>Car Type</th>
                                    <th>Car Class</th>
                                    <th>Car Registration</th>
									<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;    
                                @endphp
                                @foreach($car_details as $car_detail)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$car_detail->car_name}}</td>
                                    <td>{{$car_detail->car_type}}</td>
                                    <td>{{$car_detail->car_class}}</td>
                                    <td>{{$car_detail->car_registration}}</td>
									<td style="display: flex; justify-content: space-evenly;">
										 <a href="vendor-avilable-car-details?car_details_id={{$car_detail->id}}" class="btn btn-primary">View More</a>
										 <button type="button" class="btn btn-primary" style="padding-left: 18px;padding-right: 18px; padding-bottom: 3px; height: 36.333334px;"onclick="editUploadDocument({{ json_encode($car_detail) }})">Upload Document</button>
									</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Drivers</h4>
                    </div>
                    <div class="card-body" style="overflow-y: auto; max-height: 400px;">
                        <table class="table display table-bordered" id="example">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
									<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;    
                                @endphp
                                @foreach($drivers as $driver)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$driver->name}}</td>
                                    <td>{{$driver->email}}</td>
                                    <td>{{$driver->mobile_number}}</td>
                                    <td>{{$driver->address_one}}</td>
									<td style="display: flex; justify-content: space-evenly;">
										<a href="vendor-driver-details?driver_id={{$driver->driver_id}}" class="btn btn-success">View</a>
										<form action="deleteDriver" method="POST">
											@csrf<input type="hidden" name="driver_id" value="{{$driver->driver_id}}">
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
</div>

<div class="modal fade" id="viewImage" tabindex="-1" role="dialog" aria-labelledby="editCarclassModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCarclassModalLabel">Vendor Documents</h5>
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

 <div class="modal fade" id="editUploadDocuments" tabindex="-1" role="dialog" aria-labelledby="editUploadDocumentsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUploadDocumentsModalLabel">Document upload</h5>
                <button type="button" class="close" onclick="closeModal('editUploadDocuments')" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editUploadDocumentsForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
					 <div class="form-group">
                        <label for="car_front_image">Car Front Image</label>
                        <input type="file" class="form-control" id="car_front_image" name="car_front_image">
                        <img id="editFrontview" src="" style="height:75px !important; width:auto !important;" />
                    </div>
					 <div class="form-group">
                        <label for="car_back_image">Car Back Image</label>
                        <input type="file" class="form-control" id="car_back_image" name="car_back_image">
                        <img id="editBackview" src="" style="height:75px !important; width:auto !important;" />
                    </div>
					 <div class="form-group">
                        <label for="car_interior_image">Car Interior Image</label>
                        <input type="file" class="form-control" id="car_interior_image" name="car_interior_image">
                        <img id="editInteriorview" src="" style="height:75px !important; width:auto !important;" />
                    </div>
					
                    <div class="form-group">
                        <label for="rc_book">Rc Book</label>
                        <input type="file" class="form-control" id="rc_book" name="rc_book">
                        <img id="editRCBookImage" src="" style="height:75px !important; width:auto !important;" />
                    </div>

                    <div class="form-group">
                        <label for="insurance_policy">Insurance Policy</label>
                        <input type="file" class="form-control" id="insurance_policy" name="insurance_policy">
                        <img id="editInsurancePolicy" src="" style="height:75px !important; width:auto !important;" />
                    </div>

                    <div class="form-group">
                        <label for="puc">PUC</label>
                        <input type="file" class="form-control" id="puc" name="puc">
                        <img id="editPUC" src="" style="height:75px !important; width:auto !important;" />
                    </div>

                    <div class="form-group">
                        <label for="fitness_certificate">Fitness Certificate</label>
                        <input type="file" class="form-control" id="fitness_certificate" name="fitness_certificate">
                        <img id="editFitnessCertificate" src="" style="height:75px !important; width:auto !important;" />
                    </div>

                    <div class="form-group">
                        <label for="authorization_letter">Authorization letter</label>
                        <input type="file" class="form-control" id="authorization_letter" name="authorization_letter">
                        <img id="editAuthorizationletter" src="" style="height:75px !important; width:auto !important;" />
                    </div>

                    <div class="form-group">
                        <label for="rto_tax_receipt">RTO tax receipt</label>
                        <input type="file" class="form-control" id="rto_tax_receipt" name="rto_tax_receipt">
                        <img id="editRTOtaxreceipt" src="" style="height:75px !important; width:auto !important;" />
                    </div>

                    <div class="form-group">
                        <label for="professional_tax_receipt">Professional Tax receipt</label>
                        <input type="file" class="form-control" id="professional_tax_receipt" name="professional_tax_receipt">
                        <img id="editProfessionalTaxreceipt" src="" style="height:75px !important; width:auto !important;" />
                    </div>

                    <div class="form-group">
                        <label for="sales_tax_receipt">Sales Tax receipt</label>
                        <input type="file" class="form-control" id="sales_tax_receipt" name="sales_tax_receipt">
                        <img id="editSalesTaxreceipt" src="" style="height:75px !important; width:auto !important;" />
                    </div>

                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

document.querySelectorAll('.document-status').forEach(function(select) {
    select.addEventListener('change', function() {
        var documentType = this.getAttribute('data-document');
        var vendorId = this.getAttribute('data-vendor-id');
        var selectedStatus = this.value;

        // Find the corresponding comment textarea for this document type
        var commentTextarea = document.querySelector(`textarea[data-comment="${documentType}_comment"][data-vendor-id="${vendorId}"]`);
        var comment = commentTextarea ? commentTextarea.value : '';

        // Submit the data via an AJAX request
        updateDriverDocumentStatus(vendorId, documentType, selectedStatus, comment);
    });
});

function updateDriverDocumentStatus(vendorId, documentType, status, comment) {
    var formData = new FormData();
    formData.append('vendor_id', vendorId);
    formData.append('document_type', documentType);
    formData.append('status', status);
    formData.append('comment', comment);
    formData.append('comment_type', documentType + '_comment');

    fetch('/update-document-status', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF protection for Laravel
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.success) {
            Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Document status and comment updated successfully.',
                    confirmButtonText: 'OK'
                });
        } else {
            Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Error updating document status.',
                    confirmButtonText: 'OK'
                });
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

	
 function viewImage(driver_documents) {
        //console.log(carclass);

        document.getElementById('viewImageData').src = `./vendor_documents/${driver_documents}`;
       

        // Show the modal
        $('#viewImage').modal('show');
    }

    function closeModal(modalId) {
        $('#' + modalId).modal('hide');
    }
	
	   function editUploadDocument(avilablecar) {
    // Populate the form fields in the modal with the provided car details
	   document.getElementById('editFrontview').src = `./car-details/${avilablecar.car_front_image}`;
	   document.getElementById('editBackview').src = `./car-details/${avilablecar.car_back_image}`;
	   document.getElementById('editInteriorview').src = `./car-details/${avilablecar.car_interior_image}`;
	   
    document.getElementById('editSalesTaxreceipt').src = `./car-details/${avilablecar.sales_tax_receipt}`;
    document.getElementById('editProfessionalTaxreceipt').src = `./car-details/${avilablecar.professional_tax_receipt}`;
    document.getElementById('editRTOtaxreceipt').src = `./car-details/${avilablecar.rto_tax_receipt}`;
    document.getElementById('editAuthorizationletter').src = `./car-details/${avilablecar.authorization_letter}`;
    document.getElementById('editFitnessCertificate').src = `./car-details/${avilablecar.fitness_certificate}`;
    document.getElementById('editPUC').src = `./car-details/${avilablecar.puc}`;
    document.getElementById('editInsurancePolicy').src = `./car-details/${avilablecar.insurance_policy}`;
    document.getElementById('editRCBookImage').src = `./car-details/${avilablecar.rc_book}`;
    document.getElementById('editUploadDocumentsForm').action = `./edit-upload-document/${avilablecar.id}`;

    // Show the modal
    $('#editUploadDocuments').modal('show');
}

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
<script>
    // JavaScript function to handle the delete action with SweetAlert
    function handleUpdateStatus(vendor_id) {
        // Show a confirmation popup using SweetAlert with an input field
        Swal.fire({
            title: 'Update Verification Status Of Vendor',
            html: `
                <div class="row">
                    <p class="text-danger" style="font-size:18px;">Are You Sure you want to update Status ?</p>
                </div>
                <div class="">
                    <p></p>
                    <form id="UpdateStatus" action="{{route('update-vendor-verification-status')}}" method="post">
                    @csrf
                        <input type="hidden" value="${vendor_id}"name="vendor_id">
                        <select name="status" class="form-select">
                            <option value="1">Verified</option>
                            <option value="0">Unverified</option>    
                        </select>
                    </form>
                </div> 
            `,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Update',
            preConfirm: () => {
                // Submit the form to perform the delete action
                document.getElementById('UpdateStatus').submit();
            },
        });
    }
</script>
@endsection
