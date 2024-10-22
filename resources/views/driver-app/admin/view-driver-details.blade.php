@extends('driver-app.admin.layouts.app')

@section('content')



<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Driver Details</h4>
                        <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Name:</strong> {{$driver->first_name}} {{$driver->last_name}}</p>
                                <p><strong>Email:</strong> {{$driver->driver_email}}</p>
                                <p><strong>Mobile No:</strong> {{$driver->mobile_no}}</p>
                                <p><strong>Alternate Mobile No:</strong> {{$driver->alternate_mobile_no}}</p>
                                <p><strong>Address1:</strong> {{$driver->address1}}</p>
                                <p><strong>Address2:</strong> {{$driver->address2}}</p>
                                <p><strong>State:</strong> {{$driver->state}}</p>
                                <p><strong>City:</strong> {{$driver->city}}</p>
                                <p><strong>Pincode:</strong> {{$driver->pincode}}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Driver Language:</strong> {{$driver->driver_language}}</p>
                                <p><strong>Transmission:</strong> {{$driver->gear_type}}</p>
                                <p><strong>Car Class:</strong> {{$driver->car_name}}</p>
                                <p><strong>Licence Type:</strong> {{$driver->number_plate}}</p>
                                <p><strong>Comment:</strong> {{$driver->comment}}</p>
                                <p><strong>Driving Licence Number and Expiry Date:</strong> {{$driver->driving_licence_number}} {{$driver->driving_licence_expiry_date}}</p>
                                <p><strong>PAN Card Number:</strong> {{$driver->pan_number}}</p>
                                <p><strong>Aadhar Card Number:</strong> {{$driver->aadhar_card_number}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <p><strong>Photo Document:</strong></p>
                                @if($driver->profile_image != null)
                                <a onclick="viewImage('{{ asset('assets/driver_images/'.$driver->profile_image) }}')">
                                    <img src="{{ asset('assets/driver_images/'.$driver->profile_image)}}"
                                        style="height:100px; width:100px; border-radius:0px" />
                                </a>
                                <br><br>
                                <a class="btn btn-primary"
                                    href="{{ asset('assets/driver_images/'.$driver->profile_image)}}"
                                    download="Photo Document">Download</a>
                                @else
                                <p class="text-danger"><i>Photo document not uploaded yet ..</i></p>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <p><strong>Licence Document:</strong></p>
                                @if($driver->driving_licence != null)
                                <a onclick="viewImage('{{ asset('assets/driver_documents/'.$driver->driving_licence) }}')">
                                    <img src="{{asset('assets/driver_documents/'.$driver->driving_licence)}}"
                                        style="height:100px; width:100px; border-radius:0px" />
                                </a>
                                <br><br>
                                <a class="btn btn-primary"
                                    href="{{asset('assets/driver_documents/'.$driver->driving_licence)}}"
                                    download="Licence">Download</a>
                                @else
                                <p class="text-danger"><i>Licence document not uploaded yet ..</i></p>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <p><strong>Pan Card Document:</strong></p>
                                @if($driver->pan_card != null)
                                <a onclick="viewImage('{{ asset('assets/driver_documents/'.$driver->pan_card) }}')">
                                    <img src="{{asset('assets/driver_documents/'.$driver->pan_card)}}"
                                        style="height:100px; width:100px; border-radius:0px" />
                                </a>
                                <br><br>
                                <a class="btn btn-primary"
                                    href="{{asset('assets/driver_documents/'.$driver->pan_card)}}"
                                    download="Pan card">Download</a>
                                @else
                                <p class="text-danger"><i>Pan card document not uploaded yet ..</i></p>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <p><strong>Aadhar Card Front:</strong></p>
                                @if($driver->aadhar_card != null)
                                <a onclick="viewImage('{{ asset('assets/driver_documents/'.$driver->aadhar_card) }}')">
                                    <img src="{{asset('assets/driver_documents/'.$driver->aadhar_card)}}"
                                        style="height:100px; width:100px; border-radius:0px" />
                                </a>
                                <br><br>
                                <a class="btn btn-primary"
                                    href="{{asset('assets/driver_documents/'.$driver->aadhar_card)}}"
                                    download="Aadhar Card">Download</a>
                                @else
                                <p class="text-danger"><i>Aadhar card document not uploaded yet ..</i></p>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <p><strong>Aadhar Card Back:</strong></p>
                                @if($driver->aadhar_card_back != null)
                                <a onclick="viewImage('{{ asset('assets/driver_documents/'.$driver->aadhar_card_back) }}')">
                                    <img src="{{asset('assets/driver_documents/'.$driver->aadhar_card_back)}}"
                                        style="height:100px; width:100px; border-radius:0px" />
                                </a>
                                <br><br>
                                <a class="btn btn-primary"
                                    href="{{asset('assets/driver_documents/'.$driver->aadhar_card_back)}}"
                                    download="Aadhar Card">Download</a>
                                @else
                                <p class="text-danger"><i>Aadhar card document not uploaded yet ..</i></p>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Police Verification Report:</strong></p>
                                @if($driver->police_verification != null)
                                <a
                                    onclick="viewImage('{{ asset('assets/driver_documents/'.$driver->police_verification) }}')">
                                    <img src="{{asset('assets/driver_documents/'.$driver->police_verification)}}"
                                        style="height:100px; width:100px; border-radius:0px" />
                                </a>
                                <br><br>
                                <a class="btn btn-primary"
                                    href="{{asset('assets/driver_documents/'.$driver->police_verification)}}"
                                    download="Police Verification Report">Download</a>
                                @else
                                <p class="text-danger"><i>Police verification report document not uploaded yet ..</i></p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <p><strong>Current Address Electricity Bill:</strong></p>
                                @if($driver->electricity_bill != null)
                                <a onclick="viewImage('{{ asset('assets/driver_documents/'.$driver->electricity_bill) }}')">
                                    <img src="{{asset('assets/driver_documents/'.$driver->electricity_bill)}}"
                                        style="height:100px; width:100px; border-radius:0px" />
                                </a>
                                <br><br>
                                <a class="btn btn-primary"
                                    href="{{asset('assets/driver_documents/'.$driver->electricity_bill)}}"
                                    download="Electricity Bill">Download</a>
                                @else
                                <p class="text-danger"><i>Electricity bill document not uploaded yet ..</i></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
           

<!-- Modal for viewing the image -->
<div class="modal fade" id="viewImageModal" tabindex="-1" role="dialog" aria-labelledby="viewImageModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewImageModalLabel">Driver Document</h5>
                <button type="button" class="close" onclick="closeModal('viewImageModal')" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" style="width:100%; height:auto;" />
            </div>
        </div>
    </div>
</div>

<script>
function viewImage(imageUrl) {
    document.getElementById('modalImage').src = imageUrl;
    $('#viewImageModal').modal('show');
}

function closeModal(modalId) {
    $('#' + modalId).modal('hide');
}
</script>


@endsection