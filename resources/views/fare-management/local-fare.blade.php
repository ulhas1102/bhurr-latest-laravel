@extends('layouts.master')
@section('title', 'Local Fare Management')


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
            <div class="card-header d-flex  justify-content-between p-3">
              <h4>Local Fare List</h4>
                {{-- <a href="{{url('add-car-class')}}" class="btn btn-primary">Add Car Class</a> --}}
            </div>
            <div class="card-body " style="overflow-y: auto; max-height: 400px;">
                <table class="table display" style="width:100%" id="example">
                  <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Car Class</th>
                        <th>KM Range</th>
                        <th>Per km price</th>
                        <th>Local P Cng Per km price</th>
                        <th>Local P Diesel Per km price</th>
                        <th>Extra Hour Range</th>
                        <th>Per Extra Hour Charges</th>
						<th>Local Base Fare</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                   @foreach($carclasses as $carclass)
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{$carclass->car_class}}</td>
                    <td>
                      @if($carclass->km_range != null)
                      {{$carclass->km_range}}
                      @else
                          - 
                      @endif
                    </td>
                    <td>
                      @if($carclass->per_km_charges != null)
                      {{$carclass->per_km_charges}}
                      @else
                      - 
                     @endif
                    </td>
                    <td>
                      @if($carclass->local_cng_per_km_charges != null)
                      {{$carclass->local_cng_per_km_charges}}
                      @else
                      - 
                     @endif
                    </td>
                    <td>
                      @if($carclass->local_disel_per_km_charges != null)
                      {{$carclass->local_disel_per_km_charges}}
                      @else
                      - 
                     @endif
                    </td>
                    
                    <td>
                      @if($carclass->hour_range != null)
                      {{$carclass->hour_range}}
                      @else
                      - 
                       @endif
                    </td>
                    <td>
                      @if($carclass->per_hour_charges != null)
                      {{$carclass->per_hour_charges}}
                      @else
                      - 
                    @endif
                    </td>
					            <td>
                      @if($carclass->local_base_fare != null)
                      {{$carclass->local_base_fare}}
                      @else
                      - 
                    @endif
                    </td>
                    
                    <td class="d-flex justify-content-between">
                        {{-- <a href="edit-fare-management?car_type_id={{$carclass->carclass_id}}" class="btn btn-primary">Edit</a> --}}
                        <button type="button" class="btn btn-primary" style="
                            padding-left: 18px;
                            padding-right: 18px;
                            padding-bottom: 3px;
                            height: 36.333334px;" 
                            onclick="editFareManagement({{ json_encode($carclass) }})">
                            Edit
                        </button>
                    </td>      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <!-- Edit payment history model -->
<div class="modal fade" id="editPaymentHistoryModal" tabindex="-1" role="dialog" aria-labelledby="editPaymentHistoryModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editPaymentHistoryModalLabel">Edit Fare</h5>
              <button type="button" class="close"onclick="closeModal('editPaymentHistoryModal')" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="editFaremanagementForm" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                      <label for="editKMRange">Km Range<small>(Ex:1km, 2km) only set number</small></label>
                      <input type="number" class="form-control" id="editKMRange" name="km_range" required>
                  </div>
                  <div class="form-group">
                      <label for="editPerKMCharges">Per Km Charges<small>(In Rupees)</small></label>
                      <input type="text" class="form-control" id="editPerKMCharges" name="per_km_charges" required>
                  </div>
                  <div class="form-group">
                    <label for="editDiselPerKMCharges">Local package Disel Per Km Charges<small>(In Rupees)</small></label>
                    <input type="text" class="form-control" id="editDiselPerKMCharges" name="local_disel_per_km_charges" required>
                </div>
                <div class="form-group">
                  <label for="editCngPerKMCharges">Local package CNG Per Km Charges<small>(In Rupees)</small></label>
                  <input type="text" class="form-control" id="editCngPerKMCharges" name="local_cng_per_km_charges" required>
              </div>
             
              <div class="form-group">
                      <label for="editPerHourRange">Extra Hours Range</label>
                      <select class="form-control" id="editPerHourRange" name="hour_range" required>
                        <option value="" disabled selected>-- Select Extra Hours --</option>
                        @for ($i = 1; $i <= 24; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="editPerHourCharges">Per Extra Hours Charges <small>(In Rupees)</small></label>
                    <input type="text" class="form-control" id="editPerHourCharges" name="per_hour_charges" required>
                </div>
			         
              <div class="form-group">
                <label for="editLocalBaseFare">Local Base Fare <small>(In Rupees)</small></label>
                <input type="text" class="form-control" id="editLocalBaseFare" name="local_base_fare" required>
            </div>
                  <button type="submit" class="btn btn-primary">Save changes</button>
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
  <script>
    function editFareManagement(carclass) {
      // Populate the form fields in the modal
      document.getElementById('editPerHourCharges').value = carclass.per_hour_charges;
      document.getElementById('editPerHourRange').value = carclass.hour_range;
      document.getElementById('editPerKMCharges').value = carclass.per_km_charges;
      document.getElementById('editKMRange').value = carclass.km_range;
      document.getElementById('editLocalBaseFare').value = carclass.local_base_fare;
      document.getElementById('editDiselPerKMCharges').value = carclass.local_disel_per_km_charges;
	  document.getElementById('editCngPerKMCharges').value = carclass.local_cng_per_km_charges;
      document.getElementById('editFaremanagementForm').action = `./edit-editFaremanagement/${carclass.carclass_id}`;
      
      // Show the modal
      $('#editPaymentHistoryModal').modal('show');
    }
  </script>
<script>
    function closeModal(modalId) {
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