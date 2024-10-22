@extends('layouts.master')

@section('title', 'Driver Details')

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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Driver Details</h4>
						@if($driver->verified_status == 1)
						<h4><span class="badge badge-success">Verified</span></h4>
						@elseif($driver->verified_status == 0)
						<h4><span class="badge badge-danger">Unverified</span></h4>
						@endif
						 <a href="javascript:void(0);" onclick="handleUpdateStatus({{ $driver->driver_id }});" class="btn btn-primary btn-icon-text"> Update Status
                          </a>
                        <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$driver->name}}</td>
                                </tr>
                                <tr>
                                    <th>Contact No</th>
                                    <td>{{$driver->mobile_number}}</td>
                                </tr>
                                <tr>
                                    <th>Alternate Contact No</th>
                                    <td>{{$driver->alternate_contact_no}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$driver->email}}</td>
                                </tr>
                                <tr>
                                    <th>Address 1</th>
                                    <td>{{$driver->address_one}}</td>
                                </tr>
								 <tr>
                                    <th>Address 2</th>
                                    <td>{{$driver->address_two}}</td>
                                </tr>
                                <tr>
                                    <th>Pincode</th>
                                    <td>{{$driver->pincode}}</td>
                                </tr>
								
                                <tr>
                                    <th>Photo Document</th>
                                    <td>
                                         @if($driver->photo != null) 
										<div class="d-flex flex-column align-items-start">
                                         <a onclick="viewImage({{ json_encode($driver->photo) }})"> <img src="{{asset('driver_documents'. '/'.$driver->photo)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->photo)}}" download="Photo Document">Download
                                        </a>
										<!-- Comment for the photo document -->
										<textarea class="document-comment mt-2" data-comment="photo_comment" data-driver-id="{{ $driver->driver_id }}" placeholder="Enter your comment here">{{$driver->photo_comment}}</textarea>
										<!-- Status for the photo document -->
										<select class="document-status mt-2" data-document="photo" data-driver-id="{{ $driver->driver_id }}" style="padding:6px;">
											<option value="0" {{ $driver->photo_status == '0' ? 'selected' : '' }}>Pending</option>
											<option value="1" {{ $driver->photo_status == '1' ? 'selected' : '' }}>Verified</option>
											<option value="2" {{ $driver->photo_status == '2' ? 'selected' : '' }}>Reject</option>
										</select>
											</div>

                                        @else
                                        <p class="text-danger"><i>Photo document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
								<tr>
                                    <th>Driving Licence Number</th>
                                    <td>{{$driver->driver_licence_number}}</td>
                                </tr>
                                <tr>
                                    <th>Driving Licence Document</th>
                                    <td>
                                         @if($driver->licence_doc != null) 
										<div class="d-flex flex-column align-items-start">
                                         <a onclick="viewImage({{ json_encode($driver->licence_doc) }})"><img src="{{asset('driver_documents'. '/'.$driver->licence_doc)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->licence_doc)}}" download="Licence">Download
                                        </a>
										<textarea class="document-comment mt-2" data-comment="licence_doc_comment" data-driver-id="{{ $driver->driver_id }}" placeholder="Enter your comment here">{{$driver->licence_doc_comment}}</textarea>
									
										<select class="document-status mt-2" data-document="licence_doc" style="padding:6px;" data-driver-id="{{ $driver->driver_id }}">
										<option value="0" {{ $driver->licence_doc_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $driver->licence_doc_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $driver->licence_doc_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
											</div>
                                        @else
                                        <p class="text-danger"><i>Driving licence document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
								<tr>
                                    <th>Pan Number</th>
                                    <td>{{$driver->pan_number}}</td>
                                </tr>
                                <tr>
                                    <th>Pan Card Document</th>
                                    <td>
                                        @if($driver->pancard_doc != null) 
										<div class="d-flex flex-column align-items-start">
                                        <a onclick="viewImage({{ json_encode($driver->pancard_doc) }})"><img src="{{asset('driver_documents'. '/'.$driver->pancard_doc)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->pancard_doc)}}" download="Pan card">Download
                                        </a>
										<textarea class="document-comment mt-2" data-comment="pancard_doc_comment" data-driver-id="{{ $driver->driver_id }}" placeholder="Enter your comment here">{{$driver->pancard_doc_comment}}</textarea>
										<select class="document-status mt-2" style="padding:6px;" data-document="pancard_doc" data-driver-id="{{ $driver->driver_id }}">
										<option value="0" {{ $driver->pancard_doc_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $driver->pancard_doc_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $driver->pancard_doc_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
											</div>
                                        @else
                                        <p class="text-danger"><i>Pan card document not uploded yet ..</i></p>
                                        @endif
                                        </td>
                                </tr>
								<tr>
                                    <th>Aadhar Number</th>
                                    <td>{{$driver->aadhar_number}}</td>
                                </tr>
                                <tr>
                                    <th>Aadhar Card Front Document</th>
                                    <td>
                                        @if($driver->aadharcard_doc != null) 
										<div class="d-flex flex-column align-items-start">
                                        <a onclick="viewImage({{ json_encode($driver->aadharcard_doc) }})"><img src="{{asset('driver_documents'. '/'.$driver->aadharcard_doc)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a><br><br><a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->aadharcard_doc)}}" download="Aadhar Card">Download</a>
										 <textarea class="document-comment mt-2" data-comment="aadharcard_front_doc_comment" data-driver-id="{{ $driver->driver_id }}" placeholder="Enter your comment here">{{$driver->aadharcard_front_doc_comment}}</textarea>
										<select class="document-status mt-2" style="padding:6px;" data-document="aadharcard_front_doc" data-driver-id="{{ $driver->driver_id }}">
										<option value="0" {{ $driver->aadharcard_front_doc_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $driver->aadharcard_front_doc_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $driver->aadharcard_front_doc_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
											</div>
                                        @else
                                        <p class="text-danger"><i>Aadhar card document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
								<tr>
                                  
                                    <th>Aadhar Card Back Document</th>
                                    <td>
                                        @if($driver->aadharcard_doc_back != null) 
										<div class="d-flex flex-column align-items-start">
                                        <a onclick="viewImage({{ json_encode($driver->aadharcard_doc_back) }})"><img src="{{asset('driver_documents'. '/'.$driver->aadharcard_doc_back)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a><br><br><a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->aadharcard_doc_back)}}" download="Aadhar Card">Download</a>
										 <textarea class="document-comment mt-2" data-comment="aadharcard_doc_back_comment" data-driver-id="{{ $driver->driver_id }}" placeholder="Enter your comment here">{{$driver->aadharcard_doc_back_comment}}</textarea>
										<select class="document-status mt-2" style="padding:6px;" data-document="aadharcard_doc_back" data-driver-id="{{ $driver->driver_id }}">
										<option value="0" {{ $driver->aadharcard_doc_back_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $driver->aadharcard_doc_back_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $driver->aadharcard_doc_back_status == '2' ? 'selected' : '' }}>Reject</option>
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
                                         @if($driver->police_verification_report != null) 
										<div class="d-flex flex-column align-items-start">
                                         <a onclick="viewImage({{ json_encode($driver->police_verification_report) }})"><img src="{{asset('driver_documents'. '/'.$driver->police_verification_report)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->police_verification_report)}}" download="Police Verification Report">Download
                                        </a>
											 <textarea class="document-comment mt-2" data-comment="police_verification_report_comment" data-driver-id="{{ $driver->driver_id }}" placeholder="Enter your comment here">{{$driver->police_verification_report_comment}}</textarea>
										<select class="document-status mt-2" style="padding:6px;" data-document="police_verification_report" data-driver-id="{{ $driver->driver_id }}">
										<option value="0" {{ $driver->police_verification_report_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $driver->police_verification_report_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $driver->police_verification_report_status == '2' ? 'selected' : '' }}>Reject</option>
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
                                         @if($driver->current_addres_electricity_bill != null)
										<div class="d-flex flex-column align-items-start">
                                         <a onclick="viewImage({{ json_encode($driver->current_addres_electricity_bill) }})"> <img src="{{asset('driver_documents'. '/'.$driver->current_addres_electricity_bill)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->current_addres_electricity_bill)}}" download="Current addres electricity Bill">Download
                                        </a>
										 <textarea class="document-comment mt-2" data-comment="current_addres_electricity_bill_comment" data-driver-id="{{ $driver->driver_id }}" placeholder="Enter your comment here">{{$driver->current_addres_electricity_bill_comment}}</textarea>
										<select class="document-status mt-2" style="padding:6px;" data-document="current_addres_electricity_bill" data-driver-id="{{ $driver->driver_id }}">
										<option value="0" {{ $driver->current_addres_electricity_bill_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $driver->current_addres_electricity_bill_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $driver->current_addres_electricity_bill_status == '2' ? 'selected' : '' }}>Reject</option>
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
       
      
    </div>
</div>

<div class="modal fade" id="viewImage" tabindex="-1" role="dialog" aria-labelledby="editCarclassModalLabel" aria-hidden="true">
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
	document.querySelectorAll('.document-status').forEach(function(select) {
    select.addEventListener('change', function() {
        var documentType = this.getAttribute('data-document');
        var driverId = this.getAttribute('data-driver-id');
        var selectedStatus = this.value;

        // Find the corresponding comment textarea for this document type
        var commentTextarea = document.querySelector(`textarea[data-comment="${documentType}_comment"][data-driver-id="${driverId}"]`);
        var comment = commentTextarea ? commentTextarea.value : '';

        // Submit the data via an AJAX request
        updateDriverDocumentStatus(driverId, documentType, selectedStatus, comment);
    });
});

function updateDriverDocumentStatus(driverId, documentType, status, comment) {
    var formData = new FormData();
    formData.append('driver_id', driverId);
    formData.append('document_type', documentType);
    formData.append('status', status);
    formData.append('comment', comment);
    formData.append('comment_type', documentType + '_comment');

    fetch('/update-driver-document-status', {
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

        document.getElementById('viewImageData').src = `./driver_documents/${driver_documents}`;
       
        $('#viewImage').modal('show');
    }

    function closeModal(modalId) {
        $('#' + modalId).modal('hide');
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
<script>
    function handleUpdateStatus(driver_id) {
        Swal.fire({
            title: 'Update Verification Status Of Driver',
            html: `
                <div class="row">
                    <p class="text-danger" style="font-size:18px;">Are You Sure you want to update Status ?</p>
                </div>
                <div class="">
                    <p></p>
                    <form id="UpdateStatus" action="{{route('update-driver-verification-status')}}" method="post">
                    @csrf
                        <input type="hidden" value="${driver_id}"name="driver_id">
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
                document.getElementById('UpdateStatus').submit();
            },
        });
    }
</script>
@endsection
