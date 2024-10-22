@extends('vendor-layouts.master')

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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Driver Details</h4>
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
                                    <th>Address</th>
                                    <td>{{$driver->address}}</td>
                                </tr>
                                <tr>
                                    <th>Pincode</th>
                                    <td>{{$driver->pincode}}</td>
                                </tr>
                                <tr>
                                    <th>Photo Document</th>
                                    <td>
                                         @if($driver->photo != null) 
                                         <a onclick="viewImage({{ json_encode($driver->photo) }})"> <img src="{{asset('driver_documents'. '/'.$driver->photo)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->photo)}}" download="Photo Document">Download
                                        </a>
                                        @else
                                        <p class="text-danger"><i>Photo document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Licence Document</th>
                                    <td>
                                         @if($driver->licence_doc != null) 
                                         <a onclick="viewImage({{ json_encode($driver->licence_doc) }})"><img src="{{asset('driver_documents'. '/'.$driver->licence_doc)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->licence_doc)}}" download="Licence">Download
                                        </a>
                                        @else
                                        <p class="text-danger"><i>Licence document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Pan Card Document</th>
                                    <td>
                                        @if($driver->pancard_doc != null) 
                                        <a onclick="viewImage({{ json_encode($driver->pancard_doc) }})"><img src="{{asset('driver_documents'. '/'.$driver->pancard_doc)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->pancard_doc)}}" download="Pan card">Download
                                        </a>
                                        @else
                                        <p class="text-danger"><i>Pan card document not uploded yet ..</i></p>
                                        @endif
                                        </td>
                                </tr>
                                <tr>
                                  
                                    <th>Aadhar Card Document</th>
                                    <td>
                                        @if($driver->aadharcard_doc != null) 
                                        <a onclick="viewImage({{ json_encode($driver->aadharcard_doc) }})"><img src="{{asset('driver_documents'. '/'.$driver->aadharcard_doc)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a><br><br><a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->aadharcard_doc)}}" download="Aadhar Card">Download</a>
                                        @else
                                        <p class="text-danger"><i>Aadhar card document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Police Verification Report</th>
                                    <td>
                                         @if($driver->police_verification_report != null) 
                                         <a onclick="viewImage({{ json_encode($driver->police_verification_report) }})"><img src="{{asset('driver_documents'. '/'.$driver->police_verification_report)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->police_verification_report)}}" download="Police Verification Report">Download
                                        </a>
                                        @else
                                        <p class="text-danger"><i>Police verification report document not uploded yet ..</i></p>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Current addres electricity Bill</th>
                                    <td>
                                         @if($driver->current_addres_electricity_bill != null) 
                                         <a onclick="viewImage({{ json_encode($driver->current_addres_electricity_bill) }})"> <img src="{{asset('driver_documents'. '/'.$driver->current_addres_electricity_bill)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                        <br><br>
                                        <a class="btn btn-primary" href="{{asset('driver_documents'. '/'.$driver->current_addres_electricity_bill)}}" download="Current addres electricity Bill">Download
                                        </a>
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
 function viewImage(driver_documents) {
        //console.log(carclass);

        document.getElementById('viewImageData').src = `/driver_documents/${driver_documents}`;
       

        // Show the modal
        $('#viewImage').modal('show');
    }

    function closeModal(modalId) {
        $('#' + modalId).modal('hide');
    }

</script>

@endsection
