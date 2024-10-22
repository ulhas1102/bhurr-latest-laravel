@extends('layouts.master')
@section('title', 'Available Cars')


@section('backend-page-style')
<style>
  .card-header {
      background-color: #5650ce40;
      color: black;
      font-weight: bold;
  }
  th, td {
            white-space: nowrap;
        }
  </style>
@endsection

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="card">
            <div class="card-header d-flex  justify-content-between p-3">
              <h4>Available Cars list</h4>
                <a href="{{url('add-car')}}" class="btn btn-primary d-none">Add Car Type</a>
            </div>
            <div class="card-body" style="overflow-y: auto; max-height: 400px;">
                <table class="table display" style="width:100%" id="example2">
                    <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Car Name</th>
                        <th>Car Type</th>
                        <th>Car Class</th>
                        <th>Car Registration</th>
                        <th>Cars Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
                   @foreach($avilablecars as $avilablecar)
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{$avilablecar->car_name}}</td>
                    <td>{{$avilablecar->car_type}}</td>
                    <td>{{$avilablecar->car_class}}</td>
                    <td>{{$avilablecar->car_registration}}</td>
                    <td>{{$avilablecar->no_of_cars_quantity}}</td>
                    <td class="d-flex justify-content-between">
                        <a href="avilable-car-details?car_details_id={{$avilablecar->id}}" class="btn btn-primary">View More</a>
                      <button type="button" class="btn btn-primary" style="
                      padding-left: 18px;
                      padding-right: 18px;
                      padding-bottom: 3px;
                      height: 36.333334px;" 
                      onclick="editUploadDocument({{ json_encode($avilablecar) }})">
                      Upload Document
                  </button>
                        {{-- <form action="deleteCarTypes" method="POST">
                            @csrf
                            <input type="hidden" name="car_type_id" value="{{$avilablecar->id}}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
                    </td>      
                    </tr>
                    @endforeach
                </tbody>
                </table>
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
   function editUploadDocument(avilablecar) {
    // Populate the form fields in the modal with the provided car details
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

function closeModal(modalId) {
    // Hide the specified modal
    $('#' + modalId).modal('hide');
}

</script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if(session('success'))
  <script>
      Swal.fire({
          title: 'Thank you!',
          text: '{{ session('success') }}',
          icon: 'success',
          confirmButtonText: 'OK'
      });
  </script>
  @endif
@endsection