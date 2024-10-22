@extends('layouts.master')
@section('title', 'Available Cars')


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
        <div class="card">
            {{-- <div class="card-header">
                
            </div> --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4>{{$avilablecars->car_name}}</h4>
								@if($avilablecars->verified_status == 1)
								<h4><span class="badge badge-success">Verified</span></h4>
								@elseif($avilablecars->verified_status == 0)
								<h4><span class="badge badge-danger">Unverified</span></h4>
								@endif
								 <a href="javascript:void(0);" onclick="handleUpdateStatus({{ $avilablecars->id }});" class="btn btn-primary btn-icon-text"> Update Status
								  </a>
                                <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Car Name</th>
                                            <td>{{$avilablecars->car_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Car Type</th>
                                            <td>{{$avilablecars->car_type}}</td>
                                        </tr>
                                        <tr>
                                            <th>Car Class</th>
                                            <td>{{$avilablecars->car_class}}</td>
                                        </tr>
                                        <tr>
                                            <th>Car Registration</th>
                                            <td>{{$avilablecars->car_registration}}</td>
                                        </tr>
                                        <tr>
                                            <th>No of Cars</th>
                                            <td>{{$avilablecars->no_of_cars_quantity}}</td>
                                        </tr>
										<tr>
                                            <th>Car Front View Image</th>
                                            <td>
                                                 @if($avilablecars->car_front_image != null) 
												<div class="d-flex flex-column align-items-start">
                                                 <a onclick="viewImage({{ json_encode($avilablecars->car_front_image) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->car_front_image)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->car_front_image)}}" download="Rc Book">Download
                                                </a>
												<textarea class="document-comment mt-2" data-comment="car_front_image_comment" data-car-id="{{ $avilablecars->id }}" placeholder="Enter your comment here">{{$avilablecars->car_front_image_comment}}</textarea>
												<select class="document-status mt-2" style="padding:6px;" data-document="car_front_image" data-car-id="{{ $avilablecars->id }}">
										<option value="0" {{ $avilablecars->car_front_image_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $avilablecars->car_front_image_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $avilablecars->car_front_image_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
												</div>
                                                @else
                                                <p class="text-danger"><i>Front View document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
										<tr>
                                            <th>Car Back View Image</th>
                                            <td>
                                                 @if($avilablecars->car_back_image != null) 
												<div class="d-flex flex-column align-items-start">
                                                 <a onclick="viewImage({{ json_encode($avilablecars->car_back_image) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->car_back_image)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->car_back_image)}}" download="Rc Book">Download
                                                </a>
												<textarea class="document-comment mt-2" data-comment="car_back_image_comment" data-car-id="{{ $avilablecars->id }}" placeholder="Enter your comment here">{{$avilablecars->car_back_image_comment}}</textarea>
												<select class="document-status mt-2" style="padding:6px;" data-document="car_back_image" data-car-id="{{ $avilablecars->id }}">
										<option value="0" {{ $avilablecars->car_back_image_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $avilablecars->car_back_image_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $avilablecars->car_back_image_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
									</div>
                                                @else
                                                <p class="text-danger"><i>Back view document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
										<tr>
                                            <th>Car Interior View Image</th>
                                            <td>
                                                 @if($avilablecars->car_interior_image != null) 
												<div class="d-flex flex-column align-items-start">
                                                 <a onclick="viewImage({{ json_encode($avilablecars->car_interior_image) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->car_interior_image)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->car_interior_image)}}" download="Rc Book">Download
                                                </a>
												<textarea class="document-comment mt-2" data-comment="car_interior_image_comment" data-car-id="{{ $avilablecars->id }}" placeholder="Enter your comment here">{{$avilablecars->car_interior_image_comment}}</textarea>
												<select class="document-status mt-2" style="padding:6px;" data-document="car_interior_image" data-car-id="{{ $avilablecars->id }}">
										<option value="0" {{ $avilablecars->car_interior_image_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $avilablecars->car_interior_image_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $avilablecars->car_interior_image_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
												</div>
                                                @else
                                                <p class="text-danger"><i>Interior view document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Rc Book Document</th>
                                            <td>
                                                 @if($avilablecars->rc_book != null) 
												<div class="d-flex flex-column align-items-start">
                                                 <a onclick="viewImage({{ json_encode($avilablecars->rc_book) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->rc_book)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->rc_book)}}" download="Rc Book">Download
                                                </a>
												<textarea class="document-comment mt-2" data-comment="rc_book_comment" data-car-id="{{ $avilablecars->id }}" placeholder="Enter your comment here">{{$avilablecars->rc_book_comment}}</textarea>
												<select class="document-status mt-2" style="padding:6px;" data-document="rc_book" data-car-id="{{ $avilablecars->id }}">
										<option value="0" {{ $avilablecars->rc_book_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $avilablecars->rc_book_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $avilablecars->rc_book_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
												</div>
                                                @else
                                                <p class="text-danger"><i>Rc Book document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
										 <tr>
                                            <th>Insurance End Date</th>
                                            <td>{{$avilablecars->insurance_end_date}}</td>
                                        </tr>
                                        <tr>
											<th>Insurance Policy</th>
											<td>
												@if($avilablecars->insurance_policy != null) 
												<div class="d-flex flex-column align-items-start">
													<!-- Image Preview and View -->
													<a onclick="viewImage({{ json_encode($avilablecars->insurance_policy) }})">
														<img src="{{ asset('car-details'. '/' . $avilablecars->insurance_policy) }}" 
															 alt="Insurance Policy" 
															 style="height: 150px; width: 150px; border-radius: 0; object-fit: cover;" />
													</a>

													<!-- Download Button -->
													<br>
													<a class="btn btn-primary mt-2" href="{{ asset('car-details'. '/' . $avilablecars->insurance_policy) }}" 
													   download="Insurance Policy">
														Download
													</a>

													<!-- Comment Text Area -->
													<textarea class="document-comment mt-3" 
															  data-comment="insurance_policy_comment" 
															  data-car-id="{{ $avilablecars->id }}" 
															  placeholder="Enter your comment here">{{ $avilablecars->insurance_policy_comment }}</textarea>

													<!-- Status Dropdown -->
													<select class="document-status mt-2" 
															data-document="insurance_policy" 
															data-car-id="{{ $avilablecars->id }}" 
															style="padding: 6px;">
														<option value="0" {{ $avilablecars->insurance_policy_status == '0' ? 'selected' : '' }}>Pending</option>
														<option value="1" {{ $avilablecars->insurance_policy_status == '1' ? 'selected' : '' }}>Verified</option>
														<option value="2" {{ $avilablecars->insurance_policy_status == '2' ? 'selected' : '' }}>Reject</option>
													</select>
												</div>
												@else
												<!-- Display if document is not uploaded -->
												<p class="text-danger"><i>Insurance Policy document not uploaded yet ..</i></p>
												@endif
											</td>
										</tr>

                                        <tr>
                                            <th>PUC</th>
                                            <td>
                                                @if($avilablecars->puc != null) 
												<div class="d-flex flex-column align-items-start">
                                                <a onclick="viewImage({{ json_encode($avilablecars->puc) }})"><img src="{{asset('car-details'. '/'.$avilablecars->puc)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->puc)}}" download="PUC">Download
                                                </a>
												<textarea class="document-comment mt-2" data-comment="puc_comment" data-car-id="{{ $avilablecars->id }}" placeholder="Enter your comment here">{{$avilablecars->puc_comment}}</textarea>
												<select class="document-status mt-2" style="padding:6px;" data-document="puc" data-car-id="{{ $avilablecars->id }}">
										<option value="0" {{ $avilablecars->puc_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $avilablecars->puc_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $avilablecars->puc_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
												</div>
                                                @else
                                                <p class="text-danger"><i>PUC document not uploded yet ..</i></p>
                                                @endif
                                                </td>
                                        </tr>
                                        <tr>
                                          
                                            <th>Fitness Certificate Document</th>
                                            <td>
                                                @if($avilablecars->fitness_certificate != null) 
												<div class="d-flex flex-column align-items-start">
                                                <a onclick="viewImage({{ json_encode($avilablecars->fitness_certificate) }})"><img src="{{asset('car-details'. '/'.$avilablecars->fitness_certificate)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a><br><br><a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->fitness_certificate)}}" download="Fitness Certificate">Download</a>
												<textarea class="document-comment mt-2" data-comment="fitness_certificate_comment" data-car-id="{{ $avilablecars->id }}" placeholder="Enter your comment here">{{$avilablecars->fitness_certificate_comment}}</textarea>
												<select class="document-status mt-2" style="padding:6px;" data-document="fitness_certificate" data-car-id="{{ $avilablecars->id }}">
										<option value="0" {{ $avilablecars->fitness_certificate_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $avilablecars->fitness_certificate_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $avilablecars->fitness_certificate_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
													</div>
                                                @else
                                                <p class="text-danger"><i>Fitness Certificate document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
        
                                        <tr>
                                            <th>Authorization Letter</th>
                                            <td>
                                                 @if($avilablecars->authorization_letter != null) 
												<div class="d-flex flex-column align-items-start">
                                                 <a onclick="viewImage({{ json_encode($avilablecars->authorization_letter) }})"><img src="{{asset('car-details'. '/'.$avilablecars->authorization_letter)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->authorization_letter)}}" download="Authorization Letter">Download
                                                </a>
												<textarea class="document-comment mt-2" data-comment="authorization_letter_comment" data-car-id="{{ $avilablecars->id }}" placeholder="Enter your comment here">{{$avilablecars->authorization_letter_comment}}</textarea>
												<select class="document-status mt-2" style="padding:6px;" data-document="authorization_letter" data-car-id="{{ $avilablecars->id }}">
										<option value="0" {{ $avilablecars->authorization_letter_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $avilablecars->authorization_letter_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $avilablecars->authorization_letter_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
													</div>
                                                @else
                                                <p class="text-danger"><i>Authorization Letter document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
        
                                        <tr>
                                            <th>Rto Tax Receipt</th>
                                            <td>
                                                 @if($avilablecars->rto_tax_receipt != null) 
												<div class="d-flex flex-column align-items-start">
                                                 <a onclick="viewImage({{ json_encode($avilablecars->rto_tax_receipt) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->rto_tax_receipt)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->rto_tax_receipt)}}" download="Rto Tax Receipt">Download
                                                </a>
												<textarea class="document-comment mt-2" data-comment="rto_tax_receipt_comment" data-car-id="{{ $avilablecars->id }}" placeholder="Enter your comment here">{{$avilablecars->rto_tax_receipt_comment}}</textarea>
												<select class="document-status mt-2" style="padding:6px;" data-document="rto_tax_receipt" data-car-id="{{ $avilablecars->id }}">
										<option value="0" {{ $avilablecars->rto_tax_receipt_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $avilablecars->rto_tax_receipt_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $avilablecars->rto_tax_receipt_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
													</div>
                                                @else
                                                <p class="text-danger"><i>Rto Tax Receipt document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Professional Tax Receipt</th>
                                            <td>
                                                 @if($avilablecars->professional_tax_receipt != null) 
												<div class="d-flex flex-column align-items-start">
                                                 <a onclick="viewImage({{ json_encode($avilablecars->professional_tax_receipt	) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->professional_tax_receipt	)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->professional_tax_receipt	)}}" download="Professional Tax Receipt">Download
                                                </a>
												<textarea class="document-comment mt-2" data-comment="professional_tax_receipt_comment" data-car-id="{{ $avilablecars->id }}" placeholder="Enter your comment here">{{$avilablecars->professional_tax_receipt_comment}}</textarea>
												<select class="document-status mt-2" style="padding:6px;" data-document="professional_tax_receipt" data-car-id="{{ $avilablecars->id }}">
										<option value="0" {{ $avilablecars->professional_tax_receipt_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $avilablecars->professional_tax_receipt_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $avilablecars->professional_tax_receipt_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
													</div>
                                                @else
                                                <p class="text-danger"><i>Professional Tax Receipt document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Sales Tax Receipt</th>
                                            <td>
                                                 @if($avilablecars->sales_tax_receipt != null) 
												<div class="d-flex flex-column align-items-start">
                                                 <a onclick="viewImage({{ json_encode($avilablecars->sales_tax_receipt) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->sales_tax_receipt)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->sales_tax_receipt)}}" download="Sales Tax Receipt">Download
                                                </a>
												<textarea class="document-comment mt-2" data-comment="sales_tax_receipt_comment" data-car-id="{{ $avilablecars->id }}" placeholder="Enter your comment here">{{$avilablecars->sales_tax_receipt_comment}}</textarea>
												<select class="document-status mt-2" style="padding:6px;" data-document="sales_tax_receipt" data-car-id="{{ $avilablecars->id }}">
										<option value="0" {{ $avilablecars->sales_tax_receipt_status == '0' ? 'selected' : '' }}>Pending</option>
										<option value="1" {{ $avilablecars->sales_tax_receipt_status == '1' ? 'selected' : '' }}>Verified</option>
										<option value="2" {{ $avilablecars->sales_tax_receipt_status == '2' ? 'selected' : '' }}>Reject</option>
									</select>
													</div>
                                                @else
                                                <p class="text-danger"><i>Sales Tax Receipt document not uploded yet ..</i></p>
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
            <div class=" card-footer"> 
                 
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
<script>
document.querySelectorAll('.document-status').forEach(function(select) {
    select.addEventListener('change', function() {
        var documentType = this.getAttribute('data-document');
        var carId = this.getAttribute('data-car-id');
        var selectedStatus = this.value;

        // Find the corresponding comment textarea for this document type
        var commentTextarea = document.querySelector(`textarea[data-comment="${documentType}_comment"][data-car-id="${carId}"]`);
        var comment = commentTextarea ? commentTextarea.value : '';

        // Submit the data via an AJAX request
        updateDriverDocumentStatus(carId, documentType, selectedStatus, comment);
    });
});

function updateDriverDocumentStatus(carId, documentType, status, comment) {
    var formData = new FormData();
	console.log('car id', carId);
	console.log('document type', documentType);
	console.log('status', status);
	console.log('comment', comment);
    formData.append('car_id', carId);
    formData.append('document_type', documentType);
    formData.append('status', status);
    formData.append('comment', comment);
    formData.append('comment_type', documentType + '_comment');
	
    fetch('/update-car-document-status', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
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
     function viewImage(avilablecars) {
        //console.log(carclass);

        document.getElementById('viewImageData').src = `./car-details/${avilablecars}`;
       

        // Show the modal
        $('#viewImage').modal('show');
    }

    function closeModal(modalId) {
        $('#' + modalId).modal('hide');
    }

</script>
<script>
    function handleUpdateStatus(car_id) {
        Swal.fire({
            title: 'Update Verification Status Of Car',
            html: `
                <div class="row">
                    <p class="text-danger" style="font-size:18px;">Are You Sure you want to update Status ?</p>
                </div>
                <div class="">
                    <p></p>
                    <form id="UpdateStatus" action="{{route('update-car-verification-status')}}" method="post">
                    @csrf
                        <input type="hidden" value="${car_id}"name="car_id">
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