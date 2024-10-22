@extends('driver-app.driver.layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Driver Information</h4>
                        <div>
                            <a href="{{ route('edit.driver.info', ['driver' => $driver->driver_id]) }}"
                                class="btn btn-sm btn-primary me-2">
                                <i class="mdi mdi-grease-pencil"></i> Edit
                            </a>
                            <a class="btn btn-sm btn-success" href="{{url('driver/dashboard')}}">
                                <i class="mdi mdi-home"></i> Back
                            </a>
                        </div>
                    </div>

                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}

                    </div>
                    @endif
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$driver->first_name}} {{$driver->last_name}}</td>
                                </tr>

                                <tr>
                                    <th>Email</th>
                                    <td>{{$driver->driver_email}}</td>
                                </tr>
                                <tr>
                                    <th>Mobile No</th>
                                    <td>{{$driver->mobile_no}}</td>
                                </tr>
                                <tr>
                                    <th>Alternate Mobile No</th>
                                    <td>{{$driver->alternate_mobile_no}}</td>
                                </tr>
                                <tr>
                                    <th>Address1</th>
                                    <td>{{$driver->address1}}</td>
                                </tr>
                                <tr>
                                    <th>Address2</th>
                                    <td>{{$driver->address2}}</td>
                                </tr>
                                <tr>
                                    <th>Pincode</th>
                                    <td>{{$driver->pincode}}</td>
                                </tr>
								 <tr>
                                    <th>State</th>
                                    <td>{{$driver->state}}</td>
                                </tr>
								 <tr>
                                    <th>City</th>
                                    <td>{{$driver->city}}</td>
                                </tr>
                                <tr>
                                    <th>Transmission Type</th>
                                    <td>{{$driver->gear_type}}</td>
                                </tr>
                                <tr>
                                    <th>Car Class</th>
                                    <td>{{$driver->car_name}}</td>
                                </tr>
                                <tr>
                                    <th>Driver Language</th>
                                    <td>{{$driver->driver_language}}</td>
                                </tr>
                                <tr>
                                    <th>Licence Type</th>
                                    <td>{{$driver->number_plate}}</td>
                                </tr>
                                <tr>
                                    <th>Comment</th>
                                    <td>{{$driver->comment}}</td>
                                </tr>

                                <tr>
                                    <th>Profile Image</th>
                                    <td>
                                        @if($driver->profile_image != null)
                                        <a onclick="viewImage({{ json_encode($driver->profile_image) }})"> <img
                                                src="{{ asset('assets/driver_images'. '/'.$driver->profile_image)}}"
                                                style="height:100px !important; width:100px !important; border-radius:0px" /></a>
                                        <br><br>
                                        <a class="btn btn-primary"
                                            href="{{ asset('assets/driver_images'. '/'.$driver->profile_image)}}"
                                            download="Photo Document">Download
                                        </a>
                                        @else
                                        <p class="text-danger"><i>Photo document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Driving Licence Number and Expiry Date</th>
                                    <td>{{$driver->driving_licence_number}}  {{$driver->driving_licence_expiry_date}}</td>
                                </tr>
                                <tr>
                                    <th>Driving Licence Document</th>
                                    <td>
                                        @if($driver->driving_licence != null)
                                        <a onclick="viewImage({{ json_encode($driver->driving_licence) }})"><img
                                                src="{{asset('assets/driver_documents'. '/'.$driver->driving_licence)}}"
                                                style="height:100px !important; width:100px !important; border-radius:0px" /></a>
                                        <br><br>
                                        <a class="btn btn-primary"
                                            href="{{asset('assets/driver_documents'. '/'.$driver->driving_licence)}}"
                                            download="Licence">Download
                                        </a>
                                        @else
                                        <p class="text-danger"><i>Licence document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>PAN Card Number</th>
                                    <td>{{$driver->pan_number}}</td>
                                </tr>
                                <tr>
                                    <th>Pan Card Document</th>
                                    <td>
                                        @if($driver->pan_card != null)
                                        <a onclick="viewImage({{ json_encode($driver->pan_card) }})"><img
                                                src="{{asset('assets/driver_documents'. '/'.$driver->pan_card)}}"
                                                style="height:100px !important; width:100px !important; border-radius:0px" /></a>
                                        <br><br>
                                        <a class="btn btn-primary"
                                            href="{{asset('assets/driver_documents'. '/'.$driver->pan_card)}}"
                                            download="Pan card">Download
                                        </a>
                                        @else
                                        <p class="text-danger"><i>Pan card document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Aadhar Card Number</th>
                                    <td>{{$driver->aadhar_card_number}}</td>
                                </tr>
                                <tr>

                                    <th>Aadhar Card Front</th>
                                    <td>
                                        @if($driver->aadhar_card != null)
                                        <a onclick="viewImage({{ json_encode($driver->aadhar_card) }})"><img
                                                src="{{asset('assets/driver_documents'. '/'.$driver->aadhar_card)}}"
                                                style="height:100px !important; width:100px !important; border-radius:0px" /></a>
                                        <br><br><a class="btn btn-primary"
                                            href="{{asset('assets/driver_documents'. '/'.$driver->aadhar_card)}}"
                                            download="Aadhar Card">Download</a>
                                        @else
                                        <p class="text-danger"><i>Aadhar card document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Aadhar Card Back</th>
                                    <td>
                                        @if($driver->aadhar_card_back != null)
                                        <a
                                            onclick="viewImage('{{ asset('assets/driver_documents/'.$driver->aadhar_card_back) }}')">
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
                                    </td>
                                </tr>

                                <tr>
                                    <th>Police Verification Report</th>
                                    <td>
                                        @if($driver->police_verification != null)
                                        <a onclick="viewImage({{ json_encode($driver->police_verification) }})"><img
                                                src="{{asset('assets/driver_documents'. '/'.$driver->police_verification)}}"
                                                style="height:100px !important; width:100px !important; border-radius:0px" /></a>
                                        <br><br>
                                        <a class="btn btn-primary"
                                            href="{{asset('assets/driver_documents'. '/'.$driver->police_verification)}}"
                                            download="Police Verification Report">Download
                                        </a>
                                        @else
                                        <p class="text-danger"><i>Police verification report document not uploded yet
                                                ..</i></p>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Current address electricity Bill</th>
                                    <td>
                                        @if($driver->electricity_bill != null)
                                        <a onclick="viewImage({{ json_encode($driver->electricity_bill) }})"> <img
                                                src="{{asset('assets/driver_documents'. '/'.$driver->electricity_bill)}}"
                                                style="height:100px !important; width:100px !important; border-radius:0px" /></a>
                                        <br><br>
                                        <a class="btn btn-primary"
                                            href="{{asset('assets/driver_documents'. '/'.$driver->electricity_bill)}}"
                                            download="Current addres electricity Bill">Download
                                        </a>
                                        @else
                                        <p class="text-danger"><i>Current addres electricity bill document not uploded
                                                yet ..</i></p>
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

    document.getElementById('viewImageData').src = `./driver_documents/${driver_documents}`;


    // Show the modal
    $('#viewImage').modal('show');
}

function closeModal(modalId) {
    $('#' + modalId).modal('hide');
}
</script>

@endsection