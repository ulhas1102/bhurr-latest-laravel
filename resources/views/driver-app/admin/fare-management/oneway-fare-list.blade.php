@extends('admin.layouts.app')
@section('title', 'One Way Fare')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="card">
            <div class="card-header d-flex  justify-content-between p-3">
              <h4>One way Fare List</h4>
                {{-- <a href="{{url('add-car-class')}}" class="btn btn-primary">Add Car Class</a> --}}
            </div>
            <div class="card-body " style="overflow-y: auto; max-height: 400px;">
                <table class="table display" style="width:100%" id="example">
                  <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Car Class</th>
                        <th>Per km price</th>
                        <th>Per  Hour Charges</th>   
                        <th>One way Base Fare</th>
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
                    <td>{{$carclass->carclass_name}}</td>
                   
                    <td>
                      @if($carclass->per_km_charges != null)
                      {{$carclass->per_km_charges}}
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
                      @if($carclass->oneway_base_fare != null)
                      {{$carclass->oneway_base_fare}}
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
                
                  <div class="form-group">
                      <label for="editPerKMCharges">Per Km Charges<small>(In Rupees)</small></label>
                      <input type="text" class="form-control" id="editPerKMCharges" name="per_km_charges" required>
                  </div>
                  
                     
            
                  <div class="form-group">
                    <label for="editPerHourCharges">Per Hours Charges <small>(In Rupees)</small></label>
                    <input type="text" class="form-control" id="editPerHourCharges" name="per_hour_charges" required>
                </div>
			          <div class="form-group">
                    <label for="editOnewayBaseFare">One Way Base Fare <small>(In Rupees)</small></label>
                    <input type="text" class="form-control" id="editOnewayBaseFare" name="oneway_base_fare" required>
                </div>
               
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
          </div>
      </div>
  </div>
</div>
    <!-- content-wrapper ends -->
  
  </div>
  <!-- main-panel ends -->
  <script>
    function editFareManagement(carclass) {
      // Populate the form fields in the modal
      document.getElementById('editPerHourCharges').value = carclass.per_hour_charges;
      document.getElementById('editPerKMCharges').value = carclass.per_km_charges;
	  document.getElementById('editOnewayBaseFare').value = carclass.oneway_base_fare;
   
      document.getElementById('editFaremanagementForm').action = `./edit-fare-management/${carclass.carclass_id}`;
      
      // Show the modal
      $('#editPaymentHistoryModal').modal('show');
    }
  </script>
<script>
    function closeModal(modalId) {
        $('#' + modalId).modal('hide');
    }
</script>

 
@endsection